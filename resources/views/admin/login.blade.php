@extends('layouts.master')
@section('page', 'Admin Login')
@section('title', 'Admin Login')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
@endpush

@section('content')
    <div class="bg-[#FFFFFF]">
        <div class="w-full flex">
            <!-- component -->
            <section class="flex flex-col md:flex-row h-screen items-center">

                <div class="bg-indigo-600 hidden lg:block w-full md:w-1/2 xl:w-2/3 h-screen">
                    <img src="{{ asset('images/banner.jpg') }}" alt="" class="w-full h-full object-cover">
                </div>

                <div
                    class="bg-white w-full md:max-w-md lg:max-w-full md:mx-auto md:mx-0 md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12
                    flex items-center justify-center">

                    <div class="w-full h-100">
                        <h1 class="text-xl md:text-2xl font-bold leading-tight mt-12">Log in to your account</h1>
                        <form method="POST" action="/admin/login" class="mt-6">
                            @csrf
                            <div>
                                <label class="block text-gray-700">Email Address</label>
                                <input type="email" name="email" id="" placeholder="Enter Email Address"
                                    class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none"
                                    autofocus autocomplete required value="{{ old('email') }}"" />
                                @error('email')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mt-4">
                                <label class="block text-gray-700">Password</label>
                                <input type="password" name="password" id="" placeholder="Enter Password"
                                    minlength="6"
                                    class="w-full px-4 py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500
                                focus:bg-white focus:outline-none"
                                    required value="{{ old('password') }}"" />
                            </div>
                            <button type="submit"
                                class="w-full block bg-indigo-500 hover:bg-indigo-400 focus:bg-indigo-400 text-white font-semibold rounded-lg px-4 py-3 mt-6">Log
                                In</button>
                        </form>
                        {{-- <hr class="my-6 border-gray-300 w-full"> --}}
                    </div>
                </div>

            </section>
        </div>
    </div>
@endsection
