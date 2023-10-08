@extends('layouts.master')

@section('content')
    <div class="px-10 pt-5">
        <div class="flex justify-between">
            <div class=""></div>
            <div class="flex">
                <button class="mr-2 text-[#2640A1] focus:font-[segoe-bold] hover:underline">Home</button>
                <button class="mr-2 text-[#2F509F] focus:font-[segoe-bold] hover:underline">News/Event</button>
                <button class="mr-2 text-[#2F509F] focus:font-[segoe-bold] hover:underline">About Us</button>
                <button class="mr-2 text-[#2F509F] focus:font-[segoe-bold] hover:underline">Contact Us</button>
            </div>
            <div class="flex">
                <a href="/login" class="text-[#2640A1] border border-[#2640A1] rounded-md px-4 py-1 mr-2">Reviewer</a>
                <a href="/login" class="text-[#2640A1] border border-[#2640A1] rounded-md px-4 py-1 mr-2">Applicant</a>
            </div>
        </div>
        <div style="height: 560px;" class="relative mt-5 h-20">
            <img class="h-full w-full rounded" src="{{ asset('images/image1.jpg') }}" alt="banner">
            <div class="flex absolute justify-center top-0 h-full w-full mt-20">
                <p class="w-11/12 text-[42px] text-white font-semibold ">
                    This is the electronic management system for ethical approval applications submitted to the institutional
                    health research ethics committee (HREC) and animal care and use research ethics committeee (ACUREC).
                </p>
            </div>
            <div class="absolute bottom-28 left-20">
                <button class="text-xl bg-[#B80C4A] px-4 py-2 rounded-lg">Get Started</button>
            </div>
        </div>
    </div>
    <div class="flex justify-center justify-around mt-10">
        <div class="grid justify-items-center">
            <img width="96" src="{{ asset('images/consortium.png') }}" alt="consortium">
            <p class="text-center fonts-semibold text-2xl mt-2">Consortium</p>
        </div>
        <div class="grid justify-items-center">
            <img width="96" src="{{ asset('images/lab.png') }}" alt="consortium">
            <p class="text-center fonts-semibold text-2xl mt-2">Approved Laboratory</p>
        </div>
        <div class="grid justify-items-center">
            <img width="96" src="{{ asset('images/protocol.png') }}" alt="consortium">
            <p class="text-center fonts-semibold text-2xl mt-2">Protocol</p>
        </div>

    </div>
    <div class="flex flex-nowrap bg-[#F0F2F8] px-10 py-16 mt-10">
        <div class="w-2/5 mr-6">
            <img class="h-full" src="{{ asset('images/about.png') }}" alt="about">
        </div>
        <div class="w-3/5">
            <h3 class="fonts-semibold text-[40px] text-[#304CB0]">
                Who We Are
            </h3>
            <p class="mt-2 text-[33px] mt-5">
                This is the electronic management system for ethical approval applications
                submitted to the institutional health research ethics committee (HREC)
                and animal care and use research ethics committeee (ACUREC).
            </p>
            <div class="flex mt-5">
                <button class="text-[#2640A1] hover:bg-[#2640A1] text-2xl hover:text-[#F9FBFF] px-5 py-2 border border-[#2640A1CC]  rounded-lg mr-5">About Us</button>
                <button class="text-[#2640A1] hover:bg-[#2640A1] text-2xl hover:text-[#F9FBFF] px-5 py-2 border border-[#2640A1CC]  rounded-lg">Contact Us</button>
            </div>
        </div>
    </div>
    <div class="mt-10">
        <h2 class="text-center text-[50px] font-poppins fonts-semibold">News</h2>
        <div class="flex justify-center justify-around p-10">
            <div class="w-[450px] mx-8">
                <img src="{{ asset('images/research1.png') }}" alt="research1">
                <div class="border border-[#00000040] border-t-0 p-5 rounded-b">
                    <h5>Research Ethics Office</h5>
                    <p class="">
                        Research Ethics Office
                        This is the electronic management is system for ethical approval for the applications submitted.
                    </p>
                    <p class="text-right">11:34am 08/09/2023</p>
                </div>
            </div>
            <div class="w-[450px] mx-8">
                <img src="{{ asset('images/research2.png') }}" alt="research1">
                <div class="border border-[#00000040] border-t-0 p-5 rounded-b">
                    <h5>Research Ethics Office</h5>
                    <p class="">
                        Research Ethics Office
                        This is the electronic management is system for ethical approval for the applications submitted.
                    </p>
                    <p class="text-right">11:34am 08/09/2023</p>
                </div>
            </div>
            <div class="w-[450px] mx-8">
                <img src="{{ asset('images/research3.png') }}" alt="research1">
                <div class="border border-[#00000040] border-t-0 p-5 rounded-b">
                    <h5>Research Ethics Office</h5>
                    <p class="">
                        Research Ethics Office
                        This is the electronic management is system for ethical approval for the applications submitted.
                    </p>
                    <p class="text-right">11:34am 08/09/2023</p>
                </div>
            </div>
        </div>


    </div>
    <div class="flex text-[#F9FBFF] text-sm bg-[#2640A1] mt-20 w-full p-10">
        <div class="w-1/4 border-[#000000] border-r">
            <h6 class="">Research Ethics Office</h6>
            <p class="w-3/4 text-sm">University of Lagos & Obafemi Awolowo University</p>
            <div class="flex items-center mt-3">
                <img class="mr-2" width="15px" src="{{ asset('icons/call.png') }}" alt="call">
                <p class="">+234-800-222-3333</p>
            </div>
            <div class="flex items-center mt-3">
                <img class="mr-2" width="22px" src="{{ asset('icons/info.png') }}" alt="info">
                <p class="">info@researchethicsng.com</p>
            </div>
        </div>
        <div class="flex ml-16 w-3/4">
            <div class="flex w-3/5">
                <div class="w-1/2">
                    <p class="mt-2">Our Services</p>
                    <p class="mt-2">Help center</p>
                    <p class="mt-2">FAQ</p>
                    <p class="mt-2">Transaction</p>
                </div>
                <div class="w-1/2">
                    <p class="">Product</p>
                </div>
            </div>
            <div class="w-2/5">
                <p class="">Subscribe to our newsletter</p>
                <div class="relative mt-2">
                    <input class="text-black px-5 rounded-l shadow-sm focus:outline-none focus:border-sky-500 focus:none focus:ring-1 sm:text-sm h-12" type="text" placeholder="Email address">
                    <button class="bg-[#34A853] text-[#F9FBFF] text-2xl px-5 py-2 rounded-r">Subscribe</button>
                </div>
                <p class="mt-2">
                    Don’t want to miss anything? Subscribe right now and get
                    special promotion and super attractive price offers from us.
                </p>
                <div class="flex mt-4">
                    <button class="mr-3"><img src="{{ asset('icons/twitter.png') }}" alt=""></button>
                    <button class="mr-3"><img src="{{ asset('icons/linkedin.png') }}" alt=""></button>
                    <button class="mr-3"><img src="{{ asset('icons/instagram.png') }}" alt=""></button>
                    <button class="mr-3"><img src="{{ asset('icons/facebook.png') }}" alt=""></button>
                </div>
            </div>

        </div>

    </div>
    <div class="py-5 px-24">
        <p class="text-right text-[#2E2F31]">
            2023 Research Ethics Office Nigeria. All rights reserved.
        </p>
    </div>

@endsection