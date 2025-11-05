@extends('layouts.master')
@section('page', 'Admin Login')
@section('title', 'Admin Login')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
@endpush

@section('content')
    <div class="bg-white min-h-screen flex flex-col md:flex-row">
        <!-- Left Banner Section (Hidden on small screens) -->
        <div class="hidden lg:block md:w-1/2 xl:w-2/3">
            <img src="{{ asset('images/banner.jpg') }}" alt="Admin Login Banner" class="w-full h-screen object-cover">
        </div>

        <!-- Right Login Form -->
        <div class="w-full md:w-1/2 xl:w-1/3 flex items-center justify-center px-6 py-10 md:py-0">
            <div class="w-full max-w-md">
                <h1 class="text-2xl md:text-3xl font-semibold text-gray-800 mb-6 text-center md:text-left">
                    Log in to your account
                </h1>

                <form method="POST" action="/admin/login" class="space-y-5">
                    @csrf

                    <!-- Email -->
                    <div>
                        <label class="block text-gray-700 text-sm font-medium">Email Address</label>
                        <input type="email" name="email" placeholder="Enter Email Address"
                            class="w-full px-4 py-3 rounded-lg bg-gray-100 border border-gray-300 mt-2 focus:ring-2 
                            focus:ring-indigo-500 focus:bg-white focus:outline-none"
                            value="{{ old('email') }}" required autofocus />
                        @error('email')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div>
                        <label class="block text-gray-700 text-sm font-medium">Password</label>
                        <input type="password" name="password" placeholder="Enter Password" minlength="6"
                            class="w-full px-4 py-3 rounded-lg bg-gray-100 border border-gray-300 mt-2 focus:ring-2 
                            focus:ring-indigo-500 focus:bg-white focus:outline-none"
                            required />
                        @error('password')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <button type="submit"
                        class="w-full bg-indigo-600 hover:bg-indigo-500 focus:bg-indigo-500 text-white font-semibold 
                        rounded-lg px-4 py-3 transition-colors duration-200">
                        Log In
                    </button>
                </form>

                <!-- Optional: Forgot password link -->
                <div class="text-center mt-4">
                    <a href="/forgot-password" class="text-sm text-indigo-600 hover:underline">
                        Forgot your password?
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
