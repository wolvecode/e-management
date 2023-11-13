@extends('layouts.master')

@section('title', 'Reviewer Login')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
@endpush

@section('content')
    <div class="bg-[#FFFFFF] lg:py-14 md:py:14 px-16">
        <div class="w-full flex">
            <div class="w-1/2 border-[#000000] border-r">
                <h3 class="text-center font-medium text-3xl">Log In</h3>
                <form method="POST" action="/{{basename($_SERVER['REQUEST_URI'])}}/login">
                    @csrf
                    <div class="mt-10 mr-10">
                        <label class="block mt-3">
                            <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                              Email
                            </span>
                            <input type="email" name="email" class="h-12 mt-1 px-3 py-2 bg-white 
                            border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none
                            focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm 
                            focus:ring-1" placeholder="Enter Email" value="{{old('email')}}" />
                            @error('email')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </label>
                        <label class="block mt-3">
                            <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                              Password
                            </span>
                            <input type="password" name="password" class="h-12 mt-1 px-3 py-2 bg-white
                            border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none 
                            focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm 
                            focus:ring-1" placeholder="Enter Password" value="{{old('password')}}" />
                        </label>
                        
                        <div class="flex relative mt-5">
                            <div class="mt-5 round mr-5">
                                <input type="checkbox" checked id="checkbox" />
                                <label for="checkbox"></label>
                            </div> 
                            <p class="-mt-px text-sm">Remember me</p>
                        </div> 
                        
                        <div class="flex justify-center mt-5">
                            <button type="submit" class="bg-[#304CB0] text-[#FFF] fonts-medium text-2xl px-6 py-2 rounded">Sign In</button>
                        </div>
                        <div class="flex justify-center mt-6">
                            <button class="mr-12"><img width="10" src="{{ asset('icons/fb-blue.png') }}" alt=""></button>
                            <button class="mr-12"><img  width="20" src="{{ asset('icons/apple.png') }}" alt=""></button>
                            <button><img  width="22" src="{{ asset('icons/google.png') }}" alt=""></button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="w-1/2">
                <h3 class="text-center font-medium text-3xl">Create Account</h3>
                <form method="POST" action="/{{basename($_SERVER['REQUEST_URI'])}}/register">
                    @csrf
                    <div class="ml-10 mt-10">
                        <label class="block mt-3">
                            <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                                Full Name
                            </span>
                            <input type="text" name="name" class="h-12 mt-1 px-3 py-2 bg-white 
                            border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none
                            focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm 
                            focus:ring-1" placeholder="Enter FullName" value="{{old('name')}}" />
                            @error('name')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </label>   
                        <label class="block mt-3">
                            <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                                Email
                            </span>
                            <input type="email" name="email" class="h-12 mt-1 px-3 py-2 bg-white 
                            border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none
                            focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm 
                            focus:ring-1" placeholder="Enter Email" value="{{old('email')}}" />
                            @error('email')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </label>

                        @yield('form')
            
                        <label class="block mt-3">
                            <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                                Password
                            </span>
                            <input type="password" name="password" class="h-12 mt-1 px-3 py-2 bg-white
                            border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none 
                            focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm 
                            focus:ring-1" placeholder="Enter Password" value="{{old('password')}}" />
                            @error('password')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </label>
                        <label class="block mt-3">
                            <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                                Confirm Password
                            </span>
                            <input type="password" name="password_confirmation" class="h-12 mt-1 px-3 py-2 bg-white
                            border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none 
                            focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm 
                            focus:ring-1" placeholder="Enter Password" value="{{old('password_confirmation')}}" />
                            @error('password_confirmation')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </label>    
                        <div class="flex relative mt-5">
                            <div class="mt-5 round mr-5">
                                <input type="checkbox" checked id="check" />
                                <label for="check"></label>
                            </div> 
                            <p class="-mt-px text-sm">I agree to the Terms of Service and acknowledge the Privacy Policy.</p>
                        </div> 
                        
                        <div class="flex justify-center mt-5">
                            <button type="submit" class="bg-[#304CB0] text-[#FFF] fonts-medium text-2xl px-6 py-2 rounded">Sign Up</button>
                        </div>

                        <div class="flex justify-center mt-5">
                            <button class="mr-12"><img width="10" src="{{ asset('icons/fb-blue.png') }}" alt=""></button>
                            <button class="mr-12"><img  width="20" src="{{ asset('icons/apple.png') }}" alt=""></button>
                            <button><img  width="22" src="{{ asset('icons/google.png') }}" alt=""></button>
                        </div>
                    </div>
                </form> 
            </div>
        </div>
    </div>
@endsection