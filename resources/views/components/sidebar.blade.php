@extends('layouts.master')

@section('title', 'Dashboard')

@section('content')

    @props(['user'])

    <div x-data="{ open: false }" class="flex min-h-screen bg-gray-50 overflow-hidden">

        {{-- SIDEBAR --}}
        <aside :class="open ? 'translate-x-0' : '-translate-x-full'"
            class="w-64 bg-[#2640A1] transform transition-transform duration-200 flex flex-col md:translate-x-0 md:relative fixed inset-y-0 z-40 overflow-y-auto">

            <div class="border-b border-[#E5E5E5] border-opacity-60 py-3 flex items-center justify-center">
                <img class="text-center" width="100" src="{{ asset('icons/logo.png') }}" alt="main-logo">
            </div>

            <nav class="flex-1 flex flex-col px-0 py-4">
                <ul class="flex flex-col flex-1 w-full space-y-1">
                    <li>
                        <a href="/{{ auth()->user()->role == 'super_admin' ? 'admin' : auth()->user()->role }}/dashboard"
                            class="relative flex items-center h-12 hover:bg-[#325AB3] text-white pl-6 rounded-r-lg">
                            <span class="inline-flex justify-center items-center ml-1">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                    </path>
                                </svg>
                            </span>
                            <span class="ml-3 font-semibold text-lg tracking-wide truncate">Dashboard</span>
                        </a>
                    </li>

                    @yield('sidebar-item')

                    <li class="mt-auto">
                        <form method="POST" action="/logout">
                            @csrf
                            <button type="submit"
                                class="w-full flex items-center h-12 hover:bg-[#325AB3] text-white pl-6 rounded-r-lg">
                                <span class="inline-flex justify-center items-center ml-1">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                                        </path>
                                    </svg>
                                </span>
                                <span class="ml-3 font-normal text-lg tracking-wide truncate">Logout</span>
                            </button>
                        </form>
                    </li>
                </ul>
            </nav>
        </aside>

        {{-- MAIN CONTENT --}}
        <div class="flex-1 flex flex-col bg-white">

            {{-- HEADER --}}
            <header
                class="sticky top-0 z-20 w-full flex items-center justify-between h-16 border-b border-black border-opacity-10 px-4 md:px-6 bg-white">
                <div class="flex items-center gap-3">
                    {{-- mobile hamburger --}}
                    <button @click="open = true" class="md:hidden p-2 rounded bg-gray-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>

                    @if (auth()->user()->role == 'super_admin' || auth()->user()->role == 'admin')
                        <div class="hidden md:block w-full">
                            <form action="" method="get">
                                <div class="relative border border-gray-100 rounded-lg">
                                    <input type="text" name="search" id=""
                                        class="h-12 w-full pl-5 pr-20 rounded-lg focus:outline-none" placeholder="Search">
                                    <div class="absolute top-1 right-1">
                                        <button type="submit"
                                            class="h-10 w-20 text-white rounded-lg bg-[#2640A1] hover:bg-opacity-90">Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    @endif
                </div>

                <div class="flex items-center gap-4">
                    <div class="h-12 w-12 bg-red-100 rounded-full mr-2 overflow-hidden">
                        <img class="w-full h-full object-cover"
                            src="{{ strlen(auth()->user()->profileLink) == 0 ? asset('icons/default-profile.png') : asset('storage/' . auth()->user()->profileLink) }}"
                            alt="profile">
                    </div>
                    <div class="pl-4 border-l border-[#000]">
                        <p class="">{{ explode(' ', auth()->user()->name)[0] }}</p>
                        <h4 class="text-[#2640A1] text-xl font-semibold">@yield('page')</h4>
                    </div>
                </div>
            </header>

            {{-- MAIN BODY --}}
            <main class="flex-1 p-4 md:p-6 overflow-y-auto">
                @yield('side')
            </main>
        </div>

        {{-- Overlay for mobile --}}
        <div x-show="open" @click="open = false" class="fixed inset-0 bg-black bg-opacity-40 z-30 md:hidden"></div>
    </div>

@endsection
