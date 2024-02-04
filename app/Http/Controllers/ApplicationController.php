<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Reviewer;
use App\Models\Application;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\File;
use App\Http\Requests\StoreApplicationRequest;
use App\Http\Requests\UpdateApplicationRequest;
use Illuminate\Http\Response as HttpResponse;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $userCheck = auth()->user()->role == 'super_admin';
        $userRole = auth()->user()->role == 'super_admin' ? 'admin' : auth()->user()->role;
        $reviewer = User::where('role', 'reviewer')->get();

        // $applications = Application::latest()->filter(request(['status', 'search']))->user->where('instituition', auth()->user()->instituition)->simplePaginate(6);
        $applications = $userCheck  ? Application::latest()->filter(request(['status', 'search']))->simplePaginate(6) : Application::join('users', 'applications.applicant_id', '=', 'users.id')
            ->where('users.institution', '=', auth()->user()->institution)
            ->where('users.category', '=', auth()->user()->category)
            ->latest('applications.created_at')
            ->filter(request(['status', 'search']))
            ->simplePaginate(6);
        return view("{$userRole}.application", [
            'applications' =>  $applications,
            'users' => $reviewer
        ]);
    }
    // latest()->filter(request(['status', 'search']))->simplePaginate(6);

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'title' => ['required', 'min:3', Rule::unique('applications', 'title')],
            'description' => ['required', 'min:10'],
            'category' => ['required'],
            'attachment' =>  "required|mimes:docx,doc|max:10000",
            'supporting_document' =>   "required|mimes:docx,doc|max:10000",
        ]);


        if ($request->hasFile('attachment') || $request->hasFile('attachment')) {
            $formFields['attachment'] = $request->file('attachment')->store('application', 'public');
            $formFields['supporting_document'] = $request->file('supporting_document')->store('supporting-document', 'public');
        }


        $formFields['applicant_id'] = auth()->user()->id;
        $application = Application::create($formFields);

        if ($application) {
            function generateUniqueID($schoolAbbreviation, $category, $applicationID)
            {
                // Ensure that the input parameters are valid
                if (empty($schoolAbbreviation) || empty($category) || empty($applicationID)) {
                    return null; // or handle the error as needed
                }

                // Trim and sanitize input parameters if necessary
                $schoolAbbreviation = strtoupper(trim($schoolAbbreviation));
                $category = strtoupper(trim($category));
                $applicationID = intval($applicationID);

                // Generate the unique ID
                $uniqueID = "{$schoolAbbreviation}-{$category[0]}-{$applicationID}";

                return $uniqueID;
            }
            $generatedID = generateUniqueID($application->user->institution,  $application->category,  $application->id);
            $b = Application::where('id', $application->id)
                ->update(['app_id' => $generatedID]);
        }



        return back()->with('message', 'Application created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Application $application)
    {
        $user = auth()->user()->role == 'super_admin' ? 'admin' : auth()->user()->role;
        return view("{$user}.single-application", [
            'application' => $application
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Application $application)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function uploadApproval(Request $request, Application $application)
    {
        $formFields = $request->validate([
            'approval_letter' => "required|mimes:docx,doc|max:10000",
        ]);

        if ($request->hasFile('approval_letter')) {
            $formFields['approval_letter'] = $request->file('approval_letter')->store('approval', 'public');
        }
        $application->update($formFields);
        return back()->with('message', 'Letter uploaded');
    }

    /**
     * Upload reviewer edited document.
     */
    public function reviewerUpload(Request $request, Application $application)
    {
        $formFields = $request->validate([
            'edited_attachment' =>  "required|mimes:docx,doc|max:10000",
        ]);

        if ($request->hasFile('edited_attachment')) {
            $formFields['edited_attachment'] = $request->file('edited_attachment')->store('edited', 'public');
        }
        $application->update($formFields);
        return back()->with('message', 'Edited document uploaded');
    }

    public function getLetter($filename)
    {
        dd($filename);
        $path = storage_path($filename);

        if (!File::exist($path)) {
            abort(404);
        }

        $file = File::get($path);
        $type = File::mimeType($path);

        $response = HttpResponse::make($file, 200);

        $response->header("content-type", $type);

        dd($response);

        return $response;
    }

    /**
     * Update the specified resource in storage.
     */
    public function approve(Application $application)
    {
        $application->update([
            'status' => 'approved'
        ]);
        return back()->with('message', 'Application approved');
    }


    public function reviewerApprove(Application $application)
    {
        $application->update([
            'review_status' => 'approved'
        ]);
        return back()->with('message', 'Application approved');
    }


    /**
     * Update the specified resource in storage.
     */
    public function reject(Application $application)
    {
        $application->update([
            'status' => 'rejected'
        ]);
        return back()->with('message', 'Application rejected');
    }


    public function reviewerReject(Application $application)
    {
        $application->update([
            'review_status' => 'rejected'
        ]);
        return back()->with('message', 'Application rejected');
    }


    /**
     * Assign application to a reviewer
     */
    public function assign(Application $application, $user_id)
    {
        $application->update([
            'assigned_reviewer_id' => $user_id
        ]);
        return back()->with('message', 'Application assigned to reviewer');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Application $application)
    {
        //
    }
}
