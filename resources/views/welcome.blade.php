@extends('layouts.master')

@section('title', 'Landing Page')

@section('content')
    <div class="px-10 pt-5">
        <div class="flex justify-between">
            <div class=""></div>
            <div class="flex">
                <button class="mr-4 text-[#2640A1] focus:font-[segoe-bold] hover:underline">Home</button>
                <button class="mr-4 text-[#2F509F] focus:font-[segoe-bold] hover:underline">News/Event</button>
                <button class="mr-4 text-[#2F509F] focus:font-[segoe-bold] hover:underline">About Us</button>
                <button class="mr-4 text-[#2F509F] focus:font-[segoe-bold] hover:underline">Contact Us</button>
            </div>
            <div class="flex">
                <a href="/reviewer" class="text-[#2640A1] border border-[#2640A1] rounded-md px-4 py-1 mr-2">Reviewer</a>
                <a href="/applicant" class="text-[#2640A1] border border-[#2640A1] rounded-md px-4 py-1 mr-2">Applicant</a>
            </div>
        </div>
        <div class="relative mt-5">
            <img class="h-56 md:h-80 w-full object-cover rounded" src="{{ asset('images/banner.jpg') }}" alt="banner">
            <div class="absolute inset-0 flex items-center justify-center">
                <p class="w-11/12 text-2xl md:text-4xl text-white font-base leading-tight">
                    This is the electronic management system for ethical approval applications submitted to the
                    institutional
                    health research ethics committee (HREC) and animal care and use research ethics committeee (ACUREC).
                </p>
            </div>
            <div class="absolute bottom-6 left-4 md:left-20">
                <button class="text-base text-white bg-[#B80C4A] px-4 py-2 rounded-lg">Get Started</button>
            </div>
        </div>
    </div>
    <div class="flex justify-center justify-around mt-14">
        {{-- <div class="grid justify-items-center">
            <img width="70" src="{{ asset('images/consortium.png') }}" alt="consortium">
            <p class="text-center fonts-semibold text-xl mt-2">Consortium</p>
        </div> --}}

        <div class="hover-container">
            <img width="70" class="hover-image" src="{{ asset('images/consortium.png') }}" alt="consortium">
            <span class="hover-text text-center fonts-semibold text-xl mt-2">Consortium</span>
            <div class="links-container">
                <a href="https://oauife.edu.ng" target="_blank">oauife</a>
                <a href="https://unilag.edu.ng" target="_blank">Ununilag</a>
            </div>
        </div>
        <div class="grid justify-items-center">
            <img width="70" src="{{ asset('images/lab.png') }}" alt="consortium">
            <p class="text-center fonts-semibold text-xl mt-2">Approved Laboratory</p>
        </div>
        <div class="grid justify-items-center">
            <img width="70" src="{{ asset('images/protocol.png') }}" alt="consortium">
            <p class="text-center fonts-semibold text-xl mt-2">Protocol</p>
        </div>

    </div>
    <div class="flex flex-nowrap bg-[#F0F2F8] px-10 py-16 mt-14">
        <div class="w-2/5 mr-6">
            <img class="h-full" src="{{ asset('images/about.png') }}" alt="about">
        </div>
        <div class="w-3/5">
            <h3 class="fonts-semibold text-3xl text-[#304CB0]">
                Who We Are
            </h3>
            <p class="font-light mt-2 text-2xl mt-5">
                This is the electronic management system for ethical approval applications
                submitted to the institutional health research ethics committee (HREC)
                and animal care and use research ethics committeee (ACUREC).
            </p>
            <div class="flex mt-12">
                <button
                    class="text-[#2640A1] hover:bg-[#2640A1] text-xl hover:text-[#F9FBFF] px-4 py-2 border border-[#2640A1CC]  rounded-lg mr-5">About
                    Us</button>
                <button
                    class="text-[#2640A1] hover:bg-[#2640A1] text-xl hover:text-[#F9FBFF] px-4 py-2 border border-[#2640A1CC]  rounded-lg">Contact
                    Us</button>
            </div>
        </div>
    </div>
    <div class="mt-10">
        <h2 class="text-center text-3xl font-poppins fonts-semibold">News</h2>
        <div class="flex justify-center justify-around p-10">
            <div class="w-[450px] mx-8">
                <img src="{{ asset('images/research1.png') }}" alt="research1">
                <div class="border border-[#00000040] border-t-0 p-5 rounded-b">
                    <h5 class="">Research Ethics Office</h5>
                    <p class="text-xs font-normal mt-2">
                        Research Ethics Office
                        This is the electronic management is system for ethical approval for the applications submitted.
                    </p>
                    <p class="text-right text-xs">11:34am 08/09/2023</p>
                </div>
            </div>
            <div class="w-[450px] mx-8">
                <img src="{{ asset('images/research2.png') }}" alt="research1">
                <div class="border border-[#00000040] border-t-0 p-5 rounded-b">
                    <h5>Research Ethics Office</h5>
                    <p class="text-xs font-normal mt-2">
                        Research Ethics Office
                        This is the electronic management is system for ethical approval for the applications submitted.
                    </p>
                    <p class="text-right text-xs">11:34am 08/09/2023</p>
                </div>
            </div>
            <div class="w-[450px] mx-8">
                <img src="{{ asset('images/research3.png') }}" alt="research1">
                <div class="border border-[#00000040] border-t-0 p-5 rounded-b">
                    <h5>Research Ethics Office</h5>
                    <p class="text-xs font-normal mt-2">
                        Research Ethics Office
                        This is the electronic management is system for ethical approval for the applications submitted.
                    </p>
                    <p class="text-right text-xs">11:34am 08/09/2023</p>
                </div>
            </div>
        </div>


    </div>
    <div class="flex text-[#F9FBFF] text-base bg-[#2640A1] mt-20 w-full p-10">
        <div class="w-1/4 border-[#F9FBFF] border-r-[.5px]">
            <h3 class="text-sm font-normal">Research Ethics Office</h6>
                <p class="w-3/4 font-light text-sm mt-4">University of Lagos & Obafemi Awolowo University</p>
                <div class="flex font-light text-sm items-center mt-3">
                    <img class="mr-2" width="10px" src="{{ asset('icons/call.png') }}" alt="call">
                    <p class="font-light">+234-800-222-3333</p>
                </div>
                <div class="flex font-light text-sm items-center mt-3">
                    <img class="mr-2" width="12px" src="{{ asset('icons/info.png') }}" alt="info">
                    <p class="font-light">info@researchethicsng.com</p>
                </div>
        </div>
        <div class="flex ml-16 text-base w-3/4">
            <div class="flex font-light text-sm w-3/5">
                <div class="w-1/2">
                    <h6 class="text-sm font-normal mt-2">Our Services</h6>
                    <p class="mt-2 font-light">Help center</p>
                    <p class="mt-2 font-light">FAQ</p>
                    <p class="mt-2 font-light">Transaction</p>
                </div>
                <div class="w-1/2">
                    <h6 class="text-sm font-normal">Product</h6>
                </div>
            </div>
            <div class="w-2/5 font-light text-sm text-base">
                <h6 class="">Subscribe to our newsletter</h6>

                <div class="mt-2 relative">
                    <input type="text" name="Subscribe" id=""
                        class="text-black h-14 w-full pl-5 pr-20 rounded-lg z-0 focus:shadow focus:outline-none"
                        placeholder="Subscribe">
                    <div class="absolute top-0 right-0">
                        <button type="submit"
                            class="h-14 px-4 text-white rounded-r-lg bg-[#34A853] text-[#F9FBFF] text-xl hover:bg-opacity-90">Subscribe</button>
                    </div>
                </div>
                <p class="mt-4 text-sm font-light">
                    Don’t want to miss anything? Subscribe right now and get
                    special promotion and super attractive price offers from us.
                </p>


                <div class="flex mt-4">
                    <button class="mr-3"><img width="18" src="{{ asset('icons/twitter.png') }}"
                            alt=""></button>
                    <button class="mr-3"><img width="18" src="{{ asset('icons/linkedin.png') }}"
                            alt=""></button>
                    <button class="mr-3"><img width="18" src="{{ asset('icons/instagram.png') }}"
                            alt=""></button>
                    <button class="mr-3"><img width="8" src="{{ asset('icons/facebook.png') }}"
                            alt=""></button>
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
            /* color: blue; */
            display: block;
            /* margin-top: 10px; */
            /* Adjust the distance between the image and text */
        }

        .links-container {
            position: absolute;
            top: 20px;
            /* Adjust the distance from the text */
            right: 0;
            /* Align completely to the right */
            display: none;
            background-color: #f9f9f9;
            padding: 10px;
            border: 1px solid #ddd;
            z-index: 1;
        }

        .links-container a {
            display: block;
            color: blue;
            padding: 8px;
            text-decoration: none;
        }

        .hover-container:hover .links-container {
            display: block;
        }
    </style>
@endpush
