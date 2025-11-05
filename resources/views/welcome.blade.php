@extends('layouts.master')

@section('title', 'Landing Page')

@section('content')
    <div class="px-4 sm:px-6 md:px-10 pt-5">
        {{-- ✅ Header --}}
        <div x-data="{ open: false }" class="px-4 md:px-10 pt-5 bg-white">
            <div class="flex justify-between items-center">
                {{-- Logo --}}
                <div class="flex items-center">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-10 h-10 mr-2">
                    <h1 class="text-[#2640A1] text-xl font-semibold">Research Ethics</h1>
                </div>

                {{-- Desktop Menu --}}
                <div class="hidden md:flex space-x-6">
                    <button class="text-[#2640A1] font-semibold hover:underline">Home</button>
                    <button class="text-[#2F509F] hover:underline">News/Event</button>
                    <button class="text-[#2F509F] hover:underline">About Us</button>
                    <button class="text-[#2F509F] hover:underline">Contact Us</button>
                </div>

                {{-- Desktop Buttons --}}
                <div class="hidden md:flex space-x-3">
                    <a href="/reviewer"
                        class="text-[#2640A1] border border-[#2640A1] rounded-md px-4 py-1 hover:bg-[#2640A1] hover:text-white transition">
                        Reviewer
                    </a>
                    <a href="/applicant"
                        class="text-[#2640A1] border border-[#2640A1] rounded-md px-4 py-1 hover:bg-[#2640A1] hover:text-white transition">
                        Applicant
                    </a>
                </div>

                {{-- Mobile Menu Button --}}
                <button @click="open = !open" class="md:hidden focus:outline-none">
                    <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#2640A1]" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#2640A1]" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            {{-- Mobile Dropdown --}}
            <div x-show="open" class="md:hidden mt-4 space-y-3 bg-[#F8FAFC] p-4 rounded-lg shadow">
                <button class="block w-full text-left text-[#2640A1] font-semibold hover:underline">Home</button>
                <button class="block w-full text-left text-[#2F509F] hover:underline">News/Event</button>
                <button class="block w-full text-left text-[#2F509F] hover:underline">About Us</button>
                <button class="block w-full text-left text-[#2F509F] hover:underline">Contact Us</button>
                <div class="flex flex-col mt-3 space-y-2">
                    <a href="/reviewer"
                        class="text-[#2640A1] border border-[#2640A1] rounded-md px-4 py-1 text-center hover:bg-[#2640A1] hover:text-white transition">
                        Reviewer
                    </a>
                    <a href="/applicant"
                        class="text-[#2640A1] border border-[#2640A1] rounded-md px-4 py-1 text-center hover:bg-[#2640A1] hover:text-white transition">
                        Applicant
                    </a>
                </div>
            </div>
        </div>


        {{-- ✅ Banner Section --}}
        <div class="relative mt-5">
            <img class="h-48 sm:h-56 md:h-80 w-full object-cover rounded" src="{{ asset('images/banner.jpg') }}"
                alt="banner">
            <div class="absolute inset-0 flex items-center justify-center bg-black/30 rounded">
                <p
                    class="w-11/12 text-center text-lg sm:text-2xl md:text-4xl text-white font-base leading-snug md:leading-tight">
                    This is the electronic management system for ethical approval applications submitted to the
                    institutional health research ethics committee (HREC) and animal care and use research ethics
                    committee (ACUREC).
                </p>
            </div>
            <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 md:translate-x-0 md:left-20">
                <button class="text-base text-white bg-[#B80C4A] px-5 py-2 rounded-lg">Get Started</button>
            </div>
        </div>
    </div>

    {{-- ✅ Quick Access Section --}}
    <div class="flex flex-wrap justify-center gap-6 mt-10 md:mt-14">
        <div class="hover-container">
            <img width="70" class="hover-image" src="{{ asset('images/consortium.png') }}" alt="consortium">
            <span class="hover-text text-center fonts-semibold text-lg md:text-xl mt-2">Consortium</span>
            <div class="links-container">
                <a href="https://oauife.edu.ng" target="_blank">oauife</a>
                <a href="https://unilag.edu.ng" target="_blank">unilag</a>
            </div>
        </div>

        <div class="grid justify-items-center">
            <img width="70" src="{{ asset('images/lab.png') }}" alt="lab">
            <p class="text-center fonts-semibold text-lg md:text-xl mt-2">Approved Laboratory</p>
        </div>

        <div class="grid justify-items-center">
            <img width="70" src="{{ asset('images/protocol.png') }}" alt="protocol">
            <p class="text-center fonts-semibold text-lg md:text-xl mt-2">Protocol</p>
        </div>
    </div>

    {{-- ✅ About Section --}}
    <div class="flex flex-col lg:flex-row bg-[#F0F2F8] px-4 sm:px-6 md:px-10 py-10 md:py-16 mt-14">
        <div class="w-full lg:w-2/5 mb-6 lg:mb-0 lg:mr-6">
            <img class="w-full h-auto rounded" src="{{ asset('images/about.png') }}" alt="about">
        </div>
        <div class="w-full lg:w-3/5">
            <h3 class="fonts-semibold text-2xl md:text-3xl text-[#304CB0]">Who We Are</h3>
            <p class="font-light mt-4 text-lg md:text-2xl">
                This is the electronic management system for ethical approval applications submitted to the institutional
                health research ethics committee (HREC) and animal care and use research ethics committee (ACUREC).
            </p>
            <div class="flex flex-wrap mt-8 md:mt-12 gap-4">
                <button
                    class="text-[#2640A1] hover:bg-[#2640A1] hover:text-[#F9FBFF] px-4 py-2 border border-[#2640A1CC] rounded-lg">About
                    Us</button>
                <button
                    class="text-[#2640A1] hover:bg-[#2640A1] hover:text-[#F9FBFF] px-4 py-2 border border-[#2640A1CC] rounded-lg">Contact
                    Us</button>
            </div>
        </div>
    </div>

    {{-- ✅ News Section --}}
    <div class="mt-10 px-4 sm:px-6 md:px-10">
        <h2 class="text-center text-2xl md:text-3xl font-poppins fonts-semibold">News</h2>
        <div class="flex flex-wrap justify-center gap-8 mt-8">
            @foreach ([1, 2, 3] as $i)
                <div class="w-full sm:w-[300px] md:w-[400px] lg:w-[450px]">
                    <img src="{{ asset('images/research' . $i . '.png') }}" alt="research{{ $i }}"
                        class="w-full rounded-t">
                    <div class="border border-[#00000040] border-t-0 p-5 rounded-b bg-white">
                        <h5 class="text-base md:text-lg">Research Ethics Office</h5>
                        <p class="text-xs md:text-sm font-normal mt-2">
                            Research Ethics Office – This is the electronic management system for ethical approval
                            applications submitted.
                        </p>
                        <p class="text-right text-xs mt-2">11:34am 08/09/2023</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    {{-- ✅ Footer --}}
    <div class="flex flex-col lg:flex-row text-[#F9FBFF] text-base bg-[#2640A1] mt-20 w-full p-6 md:p-10 gap-10">
        <div class="w-full lg:w-1/4 border-[#F9FBFF] lg:border-r lg:pr-6">
            <h3 class="text-sm font-normal">Research Ethics Office</h3>
            <p class="font-light text-sm mt-4">University of Lagos & Obafemi Awolowo University</p>
            <div class="flex font-light text-sm items-center mt-3">
                <img class="mr-2" width="10px" src="{{ asset('icons/call.png') }}" alt="call">
                <p>+234-800-222-3333</p>
            </div>
            <div class="flex font-light text-sm items-center mt-3">
                <img class="mr-2" width="12px" src="{{ asset('icons/info.png') }}" alt="info">
                <p>info@researchethicsng.com</p>
            </div>
        </div>

        <div class="w-full lg:w-3/4 flex flex-col md:flex-row lg:ml-10">
            <div class="flex font-light text-sm w-full md:w-3/5 mb-6 md:mb-0">
                <div class="w-1/2">
                    <h6 class="text-sm font-normal mt-2">Our Services</h6>
                    <p class="mt-2 font-light">Help center</p>
                    <p class="mt-2 font-light">FAQ</p>
                    <p class="mt-2 font-light">Transaction</p>
                </div>
                <div class="w-1/2">
                    <h6 class="text-sm font-normal mt-2">Product</h6>
                </div>
            </div>

            <div class="w-full md:w-2/5 font-light text-sm">
                <h6 class="">Subscribe to our newsletter</h6>
                <div class="mt-2 relative">
                    <input type="text" name="Subscribe"
                        class="text-black h-12 md:h-14 w-full pl-4 pr-20 rounded-lg z-0 focus:shadow focus:outline-none"
                        placeholder="Enter your email">
                    <div class="absolute top-0 right-0">
                        <button type="submit"
                            class="h-12 md:h-14 px-4 text-white rounded-r-lg bg-[#34A853] hover:bg-opacity-90">Subscribe</button>
                    </div>
                </div>
                <p class="mt-4 text-xs md:text-sm">
                    Don’t want to miss anything? Subscribe right now and get special promotions and attractive offers.
                </p>

                <div class="flex mt-4 space-x-3">
                    @foreach (['twitter', 'linkedin', 'instagram', 'facebook'] as $icon)
                        <button><img width="18" src="{{ asset('icons/' . $icon . '.png') }}"
                                alt="{{ $icon }}"></button>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    {{-- ✅ Bottom Bar --}}
    <div class="py-5 px-4 md:px-24 text-center md:text-right">
        <p class="text-[#2E2F31] text-sm md:text-base">
            © 2023 Research Ethics Office Nigeria. All rights reserved.
        </p>
    </div>
@endsection

@push('css')
    <style>
        .hover-container {
            position: relative;
            display: inline-block;
            text-align: center;
        }

        .hover-image {
            display: block;
            margin: 0 auto;
        }

        .hover-text {
            cursor: pointer;
            display: block;
        }

        .links-container {
            position: absolute;
            top: 20px;
            right: 0;
            display: none;
            background-color: #f9f9f9;
            padding: 10px;
            border: 1px solid #ddd;
            z-index: 10;
        }

        .links-container a {
            display: block;
            color: #2640A1;
            padding: 5px;
            text-decoration: none;
        }

        .hover-container:hover .links-container {
            display: block;
        }
    </style>
@endpush
