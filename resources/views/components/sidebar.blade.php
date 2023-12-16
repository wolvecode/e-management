@extends('layouts.master')

@section('title', 'Dashboard')

@section('content')

    @props(['user'])
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
                        <a href="/{{ auth()->user()->role == 'super_admin' ? 'admin' : auth()->user()->role }}/dashboard"
                            class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-[#325AB3] text-white hover:text-[#34A853] border-l-4 border-transparent hover:border-indigo-500 pl-6 py-8">
                            <span class="inline-flex justify-center items-center ml-4">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                    </path>
                                </svg>
                            </span>
                            <span class="ml-2 fonts-semibold text-lg tracking-wide truncate">Dashboard</span>
                        </a>
                    </li>
                    @yield('sidebar-item')
                    <li class="absolute w-full bottom-0">
                        <form method="POST" action="/logout">
                            @csrf
                            <button type="submit"
                                class="w-full flex flex-row items-center h-11 focus:outline-none hover:bg-[#325AB3] text-white hover:text-[#34A853] border-l-4 border-transparent hover:border-indigo-500 pl-6 py-8">
                                <span class="inline-flex justify-center items-center ml-4">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                                        </path>
                                    </svg>
                                </span>
                                <span class="ml-2 fonts-normal text-lg tracking-wide truncate">Logout</span>
                            </button>
                        </form>

                    </li>
                </ul>
            </div>
        </div>

        <div class="w-5/6 relative">
            <div class="">
                <div class="w-full flex justify-between h-18 border-b-2 border-black border-opacity-[.12] py-3 px-6">
                    @if (auth()->user()->role == 'super_admin' || auth()->user()->role == 'admin')
                        <div class="w-2/3">
                            <form action="" method="get">
                                <div class="relative border-2 border-2 border-gray-100 m-4 rounded-lg">
                                    <input type="text" name="search" id=""
                                        class="h-14 w-full pl-5 pr-20 rounded-lg z-0 focys:shadow focus:outline-none"
                                        placeholder="Search">
                                    <div class="absolute top-2 right-2">
                                        <button type="submit"
                                            class="h-10 w-20 text-white rounded-lg bg-[#2640A1] hover:bg-opacity-90">Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    @endif
                    <div class="w-1/3 flex justify-end items-center ml-auto">
                        <div class="h-12 w-12 bg-red-100 rounded-full mr-2">
                            <img class="w-full h-full rounded-full"
                                src="{{ strlen(auth()->user()->profileLink) == 0 ? asset('icons/default-profile.png') : asset('storage/' . auth()->user()->profileLink) }}"
                                alt="profile">
                        </div>
                        <div class="pl-4 border-l border-[#000]">
                            <p class="">{{ explode(' ', auth()->user()->name)[0] }}</p>
                            <h4 class="text-[#2640A1] text-xl fonts-semibold">@yield('page')</h4>
                        </div>
                    </div>
                </div>
            </div>
            @yield('side')
        </div>
    </div>
    </div>
@endsection
