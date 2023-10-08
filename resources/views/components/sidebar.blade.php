@extends('layouts.master')

@section('title', 'Dashboard')

@section('content')
<div class="min-h-screen flex">
    <div class="w-1/6 relative bg-[#2640A1]">
        <div class="border-b border-[#E5E5E5] border-opacity-60 py-1">
            <div class="justify-center">
                <h1 class="text-lg text-[#FAFAFA] text-center fonts-bold px-10 mt-2">Research</h1>
                <h1 class="text-lg text-[#FAFAFA] text-center fonts-bold px-10">Ethics Office</h1>
            </div>
        </div>
        
        <div class="overflow-y-auto overflow-x-hidden flex-grow">
            <ul class=" flex flex-col w-full py-4 space-y-1">
                <li>
                    <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-[#325AB3] text-white hover:text-[#34A853] border-l-4 border-transparent hover:border-indigo-500 pl-6 py-8">
                        <span class="inline-flex justify-center items-center ml-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                        </span>
                        <span class="ml-2 fonts-semibold text-lg tracking-wide truncate">Dashboard</span>
                    </a>
                </li>
                @yield('sidebar-item')
                <li class="absolute w-full bottom-0">
                    <a href="#" class="flex flex-row items-center h-11 focus:outline-none hover:bg-[#325AB3] text-white hover:text-[#34A853] border-l-4 border-transparent hover:border-indigo-500 pl-6 py-8">
                        <span class="inline-flex justify-center items-center ml-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                        </span>
                        <span class="ml-2 fonts-normal text-lg tracking-wide truncate">Logout</span>
                    </a>
                </li>
            </ul>
        </div>   
    </div>
  
    <div class="w-5/6 relative">
        <div class="">       
            <div class="w-full flex justify-end h-18 border-b-2 border-black border-opacity-[.12] py-3 px-6">
                <div class="flex items-center">
                    <img class="mr-5" width="44px" src="{{ asset('images/profile.png') }}" alt="profile">
                    <div class="pl-4 border-l border-[#000]">
                        <p class="">Ayomide Akintola</p>
                        <h4 class="text-[#2640A1] text-xl fonts-semibold">Dashboard</h4>
                    </div>
                    </div>
                </div>
            </div>
            @yield('side')
        </div>
    </div>
</div>
@endsection