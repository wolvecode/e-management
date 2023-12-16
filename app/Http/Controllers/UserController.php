<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    //Show register create form
    // public function create()
    // {
    //     return view('applicant.login');
    // }

    /**
     * Display a listing of the resource(Applicants).
     */
    public function applicant()
    {
        return view('admin.applicant-list', [
            'applicants' => User::where('role', 'applicant')->paginate(8)
        ]);
    }

    /**
     * Display a listing of the resource(Reviewers).
     */
    public function reviewer()
    {
        return view('admin.reviewer-list', [
            'reviewers' => User::where('role', 'reviewer')->paginate(8)
        ]);
    }

    /**
     * Display a listing of the resource(Reviewers).
     */
    public function addAdmin()
    {
        return view('admin.add-admin');
    }

    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => ['required    ', 'min:3'],
            'email' => ['email', 'required', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:8',
            'contact' => ['required'],
            'specialization' => 'min:4',
        ]);

        //Hash Password
        $formFields['password'] = bcrypt($formFields['password']);
        $path = explode('/', $_SERVER['PATH_INFO']);
        if ($path[1] == 'reviewer') {
            $formFields['role'] = 'reviewer';
        } else {
            $formFields['role'] = 'applicant';
        }

        $user = User::create($formFields);
        Auth::login($user);
        $role = auth()->user()->role;

        return redirect("/$role/dashboard")->with('message', 'User created and logged in');
    }


    public function addNewAdmin(Request $request)
    {
        $formFields = $request->validate([
            'name' => ['required    ', 'min:10'],
            'email' => ['email', 'required', Rule::unique('users', 'email')],
            'contact' => ['required'],
            'specialization' => ['required'],
        ]);

        //Hash Password
        $formFields['password'] = bcrypt('12345678');
        $formFields['role'] = 'admin';

        User::create($formFields);
        return back()->with('message', 'Admin Added Successfully');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $role = $user->role == 'super_admin' ? 'admin' : $user->role;
        return view("{$role}.profile", [
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function patch(Request $request, User $user)
    {
        $formFields = $request->validate([
            'firstName' => ['required    ', 'min:3'],
            'otherName' => ['required    ', 'min:3'],
            'email' => ['email', 'required'],
            'contact' => ['required'],
            'institution' => ['min:3'],
            'faculty' => ['min:3'],
            'specialization' => ['min:3'],
            'profileLink' => 'mimes:png,jpg,jpeg|max:10000', //'required|mimes:png,jpg,jpeg,csv,txt,xlx,xls,pdf|max:10000
        ]);

        $formFields['name'] = "$request->firstName $request->otherName";
        if (empty($formFields['password'])) unset($formFields['password']);

        if ($request->hasFile('profileLink')) {
            $formFields['profileLink'] = $request->file('profileLink')->store('profile', 'public');
        }

        $user->update($formFields);
        return back()->with('message', 'User updated successfully');
    }

    public function login(Request $request)
    {
        $formFields = $request->validate([
            'email' => ['email', 'required'],
            'password' => 'required'
        ]);
        if (auth()->attempt($formFields)) {
            $role = auth()->user()->role;
            $request->session()->regenerate();
            if ($role == 'super_admin') {
                return redirect("/admin/dashboard")->with('message', 'User logged in');
            }
            return redirect("/$role/dashboard")->with('message', 'User logged in');
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }

    public function changePasswordSave(Request $request)
    {
        $this->validate($request, [
            'current_password' => 'required|string',
            'new_password' => 'required|confirmed|min:8|string'
        ]);
        $auth = Auth::user();
        // dd(!Hash::check($request->get('current_password'), $auth->password));

        // The passwords matches
        if (!Hash::check($request->get('current_password'), $auth->password)) {
            return back()->with('message', "Current Password is Invalid");
        }

        // Current password and new password same
        if (strcmp($request->get('current_password'), $request->new_password) == 0) {
            return redirect()->back()->with("message", "New Password cannot be same as your current password.");
        }

        $user =  User::find($auth->id);
        $user->password = bcrypt($request->new_password);
        $user->save();
        return back()->with('message', "Password Changed Successfully");
    }

    public function showForgetPasswordForm()

    {

        return view('auth.forgetPassword');
    }

    public function submitForgetPasswordForm(Request $request)

    {

        $request->validate([
            'email' => 'required|email|exists:users',
        ]);

        $token = Str::random(64);

        DB::table('password_reset_tokens')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        Mail::send('emails.forgetPassword', ['token' => $token], function ($message) use ($request) {

            $message->to($request->email);
            $message->subject('Reset Password');
        });

        return back()->with('message', 'We have e-mailed your password reset link!');
    }

    public function showResetPasswordForm($token)
    {
        return view('auth.forgetPasswordLink', ['token' => $token]);
    }


    public function submitResetPasswordForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required'
        ]);

        $updatePassword = DB::table('password_reset_tokens')
            ->where([
                'email' => $request->email,
                'token' => $request->token
            ])
            ->first();

        if (!$updatePassword) {
            return back()->withInput()->with('message', 'Invalid token!');
        }

        $user = User::where('email', $request->email)
            ->update(['password' => bcrypt($request->password)]);

        DB::table('password_reset_tokens')->where(['email' => $request->email])->delete();

        return redirect('/')->with('message', 'Your password has been changed!');
    }



    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
