@extends('layouts.master')

@section('title', 'Reviewer Login')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
@endpush

@section('content')
    <div class="bg-[#FFFFFF] py-10 md:py-14 px-4 sm:px-8 md:px-16">
        <div class="flex flex-col md:flex-row w-full md:divide-x md:divide-gray-300">

            {{-- LOGIN SECTION --}}
            <div class="md:w-1/2 w-full md:pr-10 mb-10 md:mb-0">
                <h3 class="text-center font-medium text-2xl md:text-3xl">Log In</h3>
                <form method="POST" action="/{{ basename($_SERVER['REQUEST_URI']) }}/login">
                    @csrf
                    <div class="mt-8 md:mt-10">
                        {{-- Email --}}
                        <label class="block mt-3">
                            <span
                                class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">Email</span>
                            <input type="email" name="email"
                                class="h-12 mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 
                            focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1"
                                placeholder="Enter Email" value="{{ old('email') }}" />
                            @error('email')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </label>

                        {{-- Password --}}
                        <label class="block mt-3">
                            <span
                                class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">Password</span>
                            <input type="password" name="password"
                                class="h-12 mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 
                            focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1"
                                placeholder="Enter Password" value="{{ old('password') }}" />
                        </label>

                        {{-- Remember Me --}}
                        <div class="flex items-center mt-5">
                            <input type="checkbox" checked id="checkbox" class="mr-2">
                            <label for="checkbox" class="text-sm">Remember me</label>
                        </div>

                        {{-- Submit --}}
                        <div class="flex justify-center mt-6">
                            <button type="submit"
                                class="bg-[#304CB0] text-white fonts-medium text-lg md:text-2xl px-6 py-2 rounded w-full md:w-auto">
                                Sign In
                            </button>
                        </div>

                        {{-- Forgot Password --}}
                        <div class="flex justify-center text-sm mt-3">
                            <span>Forget password:&nbsp;</span>
                            <a class="text-red-400 underline" href="/forget-password">reset</a>
                        </div>
                    </div>
                </form>
            </div>

            {{-- REGISTER SECTION --}}
            <div class="md:w-1/2 w-full md:pl-10">
                <h3 class="text-center font-medium text-2xl md:text-3xl">Create Account</h3>
                <form method="POST" action="/{{ basename($_SERVER['REQUEST_URI']) }}/register">
                    @csrf
                    <div class="mt-8 md:mt-10">
                        {{-- Full Name --}}
                        <label class="block mt-3">
                            <span
                                class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">Full
                                Name</span>
                            <input type="text" name="name"
                                class="h-12 mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 
                            focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1"
                                placeholder="Enter Full Name" value="{{ old('name') }}" />
                            @error('name')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </label>

                        {{-- Email --}}
                        <label class="block mt-3">
                            <span
                                class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">Email</span>
                            <input type="text" name="email"
                                class="h-12 mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 
                            focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1"
                                placeholder="Enter Email" value="{{ old('email') }}" />
                            @error('email')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </label>

                        {{-- Institution + Category --}}
                        <div class="flex flex-col sm:flex-row mt-3 gap-3">
                            <label class="w-full sm:w-1/2">
                                <span
                                    class="after:content-['*'] after:ml-0.5 after:text-red-500 text-sm font-medium text-slate-700">Institution</span>
                                <select name="institution"
                                    class="h-12 mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 
                                focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1">
                                    <option value="unilag">UNILAG</option>
                                    <option value="oau">OAU</option>
                                    <option value="others">OTHERS</option>
                                </select>
                                @error('institution')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </label>
                            <label class="w-full sm:w-1/2">
                                <span
                                    class="after:content-['*'] after:ml-0.5 after:text-red-500 text-sm font-medium text-slate-700">Research
                                    Type</span>
                                <select name="category"
                                    class="h-12 mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 
                                focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1">
                                    <option value="human">Human</option>
                                    <option value="animal">Animal</option>
                                </select>
                                @error('category')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </label>
                        </div>

                        @yield('form')

                        {{-- Password --}}
                        <label class="block mt-3">
                            <span
                                class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">Password</span>
                            <input type="password" name="password"
                                class="h-12 mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 
                            focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1"
                                placeholder="Enter Password" />
                            @error('password')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </label>

                        {{-- Confirm Password --}}
                        <label class="block mt-3">
                            <span
                                class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">Confirm
                                Password</span>
                            <input type="password" name="password_confirmation"
                                class="h-12 mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 
                            focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1"
                                placeholder="Confirm Password" />
                            @error('password_confirmation')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </label>

                        {{-- Terms --}}
                        <div class="flex items-start mt-5 space-x-2">
                            <input type="checkbox" checked id="check" class="mt-1">
                            <label for="check" class="text-sm leading-tight">
                                I agree to the Terms of Service and acknowledge the Privacy Policy.
                            </label>
                        </div>

                        {{-- Submit --}}
                        <div class="flex justify-center mt-6">
                            <button type="submit"
                                class="bg-[#304CB0] text-white fonts-medium text-lg md:text-2xl px-6 py-2 rounded w-full md:w-auto">
                                Sign Up
                            </button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
