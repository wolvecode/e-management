@extends('layouts.master')

@section('title', 'Reviewer Login')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
@endpush

@section('content')
    <div class="bg-[#FFFFFF] lg:py-10 md:py:6 px-14">
        <div class="w-full flex">
            <div class="w-1/2 border-[#000000] border-r">
                <h3 class="text-center font-bold text-4xl">Log In</h3>
                <div class="mt-10 mr-10">
                    <label class="block mt-3">
                        <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-semibold text-slate-700">
                          Email
                        </span>
                        <input type="email" name="email" class="h-12 mt-1 px-3 py-2 bg-white 
                        border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none
                        focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm 
                        focus:ring-1" placeholder="Enter Email" />
                    </label>   
                    <label class="block mt-3">
                        <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-semibold text-slate-700">
                          Password
                        </span>
                        <input type="password" name="email" class="h-12 mt-1 px-3 py-2 bg-white
                        border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none 
                        focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm 
                        focus:ring-1" placeholder="Enter Password" />
                    </label>
                    
                    <div class="flex relative mt-5">
                        <div class="mt-5 round mr-5">
                            <input type="checkbox" checked id="checkbox" />
                            <label for="checkbox"></label>
                        </div> 
                        <p class="-mt-px">Remember me</p>
                    </div> 
                    
                    <div class="flex justify-center mt-5">
                        <button class="bg-[#304CB0] text-[#FFF] text-2xl px-8 py-3 rounded">Sign In</button>
                    </div>
                    <div class="flex justify-center mt-6">
                        <button class="mr-12"><img width="10" src="{{ asset('icons/fb-blue.png') }}" alt=""></button>
                        <button class="mr-12"><img  width="20" src="{{ asset('icons/apple.png') }}" alt=""></button>
                        <button><img  width="22" src="{{ asset('icons/google.png') }}" alt=""></button>
                    </div>
                </div>
            </div>
            <div class="w-1/2">
                <h3 class="text-center font-bold text-4xl">Create Account</h3>
                <div class="ml-10 mt-10">
                    <label class="block mt-3">
                        <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-semibold text-slate-700">
                            Full Name
                        </span>
                        <input type="email" name="email" class="h-12 mt-1 px-3 py-2 bg-white 
                        border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none
                        focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm 
                        focus:ring-1" placeholder="Enter Email" />
                    </label>   
                    <label class="block mt-3">
                        <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-semibold text-slate-700">
                            Email
                        </span>
                        <input type="email" name="email" class="h-12 mt-1 px-3 py-2 bg-white 
                        border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none
                        focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm 
                        focus:ring-1" placeholder="Enter Email" />
                    </label>

                    @yield('form')
        
                    <label class="block mt-3">
                        <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-semibold text-slate-700">
                            Password
                        </span>
                        <input type="password" name="email" class="h-12 mt-1 px-3 py-2 bg-white
                        border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none 
                        focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm 
                        focus:ring-1" placeholder="Enter Password" />
                    </label>
                    <label class="block mt-3">
                        <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-semibold text-slate-700">
                            Confirm Password
                        </span>
                        <input type="password" name="email" class="h-12 mt-1 px-3 py-2 bg-white
                        border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none 
                        focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm 
                        focus:ring-1" placeholder="Enter Password" />
                    </label>    
                    <div class="flex relative mt-5">
                        <div class="mt-5 round mr-5">
                            <input type="checkbox" checked id="checkbox" />
                            <label for="checkbox"></label>
                        </div> 
                        <p class="-mt-px">I agree to the Terms of Service and acknowledge the Privacy Policy.</p>
                    </div> 
                    
                    <div class="flex justify-center mt-5">
                        <button class="bg-[#304CB0] text-[#FFF] text-2xl px-8 py-3 rounded">Sign Up</button>
                    </div>

                    <div class="flex justify-center mt-5">
                        <button class="mr-12"><img width="10" src="{{ asset('icons/fb-blue.png') }}" alt=""></button>
                        <button class="mr-12"><img  width="20" src="{{ asset('icons/apple.png') }}" alt=""></button>
                        <button><img  width="22" src="{{ asset('icons/google.png') }}" alt=""></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection