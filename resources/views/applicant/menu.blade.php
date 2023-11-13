@extends('components.sidebar')

@php
    $applications = auth()->user()->application;
@endphp

@section('sidebar-item')
    <li>
        <a href="/applicant/{{ auth()->user()->id }}/edit"
            class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-[#325AB3] text-white hover:text-[#34A853] border-l-4 border-transparent hover:border-indigo-500 pl-6 py-8">
            <span class="inline-flex justify-center items-center ml-4">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                </svg>
            </span>
            <span class="ml-2 fonts-semibold text-lg tracking-wide truncate">Profile</span>
        </a>
    </li>
    <li>
        <a href="/applicant/application"
            class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-[#325AB3] text-white hover:text-[#34A853] border-l-4 border-transparent hover:border-indigo-500 pl-6 py-8">
            <span class="inline-flex justify-center items-center ml-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 44 44" fill="none">
                    <g clip-path="url(#clip0_144_840)">
                        <path
                            d="M41.2228 20.1214L22.0003 31.6567L2.77783 20.1214C2.36088 19.8712 1.86164 19.7969 1.38992 19.9149C0.918206 20.0328 0.512657 20.3333 0.262491 20.7502C0.0123259 21.1672 -0.0619637 21.6664 0.0559654 22.1381C0.173895 22.6098 0.474382 23.0154 0.891325 23.2655L21.058 35.3655C21.3431 35.5369 21.6695 35.6274 22.0022 35.6274C22.3348 35.6274 22.6612 35.5369 22.9463 35.3655L43.113 23.2655C43.5299 23.0154 43.8304 22.6098 43.9484 22.1381C44.0663 21.6664 43.992 21.1672 43.7418 20.7502C43.4917 20.3333 43.0861 20.0328 42.6144 19.9149C42.1427 19.7969 41.6434 19.8712 41.2265 20.1214H41.2228Z"
                            fill="white" />
                        <path
                            d="M41.2228 28.4952L22.0003 40.0287L2.77782 28.4952C2.57137 28.3713 2.34255 28.2893 2.10441 28.2539C1.86627 28.2184 1.62349 28.2302 1.38992 28.2886C1.15635 28.347 0.936565 28.4508 0.74312 28.5942C0.549675 28.7375 0.386355 28.9175 0.262486 29.124C0.138617 29.3304 0.0566232 29.5593 0.0211874 29.7974C-0.0142483 30.0355 -0.00243262 30.2783 0.05596 30.5119C0.173889 30.9836 0.474377 31.3892 0.891319 31.6393L21.058 43.7394C21.3431 43.9107 21.6695 44.0012 22.0022 44.0012C22.3348 44.0012 22.6612 43.9107 22.9463 43.7394L43.113 31.6393C43.5299 31.3892 43.8304 30.9836 43.9483 30.5119C44.0663 30.0402 43.992 29.5409 43.7418 29.124C43.4917 28.707 43.0861 28.4066 42.6144 28.2886C42.1427 28.1707 41.6434 28.245 41.2265 28.4952H41.2228Z"
                            fill="white" />
                        <path
                            d="M0.889075 15.322L19.1931 26.3055C20.0406 26.8153 21.0109 27.0847 21.9999 27.0847C22.9889 27.0847 23.9593 26.8153 24.8067 26.3055L43.1107 15.322C43.3818 15.159 43.6061 14.9286 43.7618 14.6533C43.9175 14.378 43.9993 14.0671 43.9993 13.7508C43.9993 13.4345 43.9175 13.1236 43.7618 12.8483C43.6061 12.573 43.3818 12.3426 43.1107 12.1796L24.8067 1.19613C23.9591 0.686881 22.9888 0.417847 21.9999 0.417847C21.011 0.417847 20.0408 0.686881 19.1931 1.19613L0.889075 12.1796C0.618012 12.3426 0.393728 12.573 0.238023 12.8483C0.0823178 13.1236 0.000488281 13.4345 0.000488281 13.7508C0.000488281 14.0671 0.0823178 14.378 0.238023 14.6533C0.393728 14.9286 0.618012 15.159 0.889075 15.322Z"
                            fill="white" />
                    </g>
                    <defs>
                        <clipPath id="clip0_144_840">
                            <rect width="44" height="44" fill="white" />
                        </clipPath>
                    </defs>
                </svg> </span>
            <span class="ml-2 fonts-semibold text-lg tracking-wide truncate">Application</span>
        </a>
    </li>
@endsection

@section('side')
    <div class="p-5">
        <div class="xl:max-h-[640px] 2xl:max-h-[780px] overflow-y-auto bg-gray-100 rounded-xl px-5 py-3">
            <div class="grid gap-x-4 gap-y-2 lg:grid-cols-4 md:grid-cols-2">
                <div class="text-center bg-[#2640A1] rounded-lg px-4 py-8">
                    <img class="mx-auto mb-2" width="25px" src="{{ asset('icons/list.png') }}" alt="profile">
                    <p class="font-semibold text-2xl text-white">{{ auth()->user()->application->count() }} Applications</p>
                </div>
                <div class="justify-center text-center bg-[#34A853] rounded-lg px-4 py-8">
                    <img class="mx-auto mb-2" width="25px" src="{{ asset('icons/approved.png') }}" alt="profile">
                    <p class="font-semibold text-2xl text-white">
                        {{ auth()->user()->application->where('status', 'approved')->count() }} Approved</p>
                </div>
                <div class="text-center bg-[#2640A1] rounded-lg px-4 py-8">
                    <img class="mx-auto mb-2" width="25px" src="{{ asset('icons/pending.png') }}" alt="profile">
                    <p class="font-semibold text-2xl text-white">
                        {{ auth()->user()->application->where('status', 'pending')->count() }} Pending</p>
                </div>
                <div class="text-center bg-[#C63740] rounded-lg px-4 py-8">
                    <img class="mx-auto mb-2" width="25px" src="{{ asset('icons/rejected.png') }}" alt="profile">
                    <p class="font-semibold text-2xl text-white">
                        {{ auth()->user()->application->where('status', 'rejected')->count() }} Rejected</p>
                </div>
            </div>


            @if (auth()->user()->application->count() > 0)
                <div class="bg-white rounded-xl px-5 mt-5 py-3">
                    <div class="flex justify-end mt-2">
                        <p class="text-sm text-[#2640A1] bg-gray-100 px-5 py-1 rounded-xl">
                            {{ auth()->user()->application->last()->created_at->format('Y-m-d') }}</p>
                    </div>
                    <p class="fonts-semibold text-2xl mt-2">Current Application Status</p>
                    <div class="w-5/6 relative pt-1 mx-auto mt-4">
                        <div class="overflow-hidden h-2 mb-4 text-xs flex rounded">
                            <div style="width: 25%"
                                class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center {{ auth()->user()->application->last()->review_status == 'pending'? 'bg-[#2640A1]': 'bg-[#34A853]' }} mr-2 rounded-xl">
                            </div>
                            <div style="width: 25%"
                                class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center {{ auth()->user()->application->last()->review_status == 'approve'? 'bg-[#34A853]': 'bg-[#2640A1]' }} mr-2 rounded-xl">
                            </div>
                            <div style="width: 25%"
                                class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center {{ auth()->user()->application->last()->status != 'pending'? 'bg-[#34A853]': 'bg-[#2640A1]' }} mr-2 rounded-xl">
                            </div>
                            <div style="width: 25%"
                                class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center {{ auth()->user()->application->last()->status != 'pending'? 'bg-[#34A853]': 'bg-[#2640A1]' }} mr-2 rounded-xl">
                            </div>
                        </div>
                        <div class="overflow-hidden mb-4 text-xs flex rounded">
                            <div style="width: 25%"
                                class="shadow-none flex flex-col text-center whitespace-nowrap justify-center text-base text-[#1E1E1E]">
                                Assigned to reviewer</div>
                            <div style="width: 25%"
                                class="shadow-none flex flex-col text-center whitespace-nowrap justify-center text-base text-[#1E1E1E]">
                                Approved by reviewer</div>
                            <div style="width: 25%"
                                class="shadow-none flex flex-col text-center whitespace-nowrap justify-center text-base text-[#1E1E1E]">
                                Approved by admin</div>
                            <div style="width: 25%"
                                class="shadow-none flex flex-col text-center whitespace-nowrap justify-center text-base text-[#1E1E1E]">
                                Completed</div>
                        </div>
                    </div>
                    <div class="text-right mb-2">
                        <a href="/applicant/application/{{ auth()->user()->application->last()->id }}"
                            class="{{ auth()->user()->application()->reviewer ?? 'pointer-events-none' }} text-white text-sm fonts-medium px-3 py-1.5 bg-[#2640A1] rounded">See
                            details</a>
                    </div>
                </div>
            @endif


            <div class="bg-white rounded-xl px-5 mt-5 py-3">
                <p class="ml-8">Recent Activity</p>
                <div class="overflow-y-auto h-62 mt-2">
                    @forelse (auth()->user()->application()->latest()->limit(3)->get() as $application)
                        <div class="w-full rounded-xl px-4 shadow-lg flex items-center mt-4 pb-2">
                            <div class="w-5/12 flex items-center">
                                <img class="mr-3" width="30px" src="{{ asset('images/profile.png') }}" alt="profile">
                                <h4 class="text-sm fonts-semibold">{!! $application->title !!}</h4>
                            </div>
                            <div class="w-3/12 text-center border-l px-2">
                                <p class="text-sm fonts-medium">{!! $application->created_at->format('Y-m-d') !!}</p>
                            </div>
                            <div class="w-2/12 text-center border-l pl-5">
                                <a
                                    class="pointer-events-none text-sm fonts-medium px-3 py-1.5 
                                {{ $application->status == 'pending'
                                    ? 'bg-[#F3F4FA] text-[#2640A1]'
                                    : ($application->status == 'approved'
                                        ? 'bg-[#F1F4F1] text-[#34A853]'
                                        : 'bg-[#FFEFEF] text-[#A83449]') }} rounded-lg">
                                    {{ $application->status == 'pending' ? 'Pending' : ($application->status == 'approved' ? 'Approved' : 'Rejected') }}
                                </a>
                            </div>
                            <div class="w-2/12 {{ $application->reviewer ?? 'hover-text' }} text-center border-l px-2">
                                <a href="/applicant/application/{{ $application->id }}"
                                    class="text-white text-sm fonts-medium px-2 py-1 bg-[#2640A1] rounded">See
                                    details</a>
                                <span class="tooltip-text" id="fade">Not asisigned yet or in review</span>
                            </div>
                        </div>
                    @empty
                        <p class="text-center">No application available</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection

@push('css')
    <style>
        .tooltip-text {
            position: absolute;
            top: -30px;
            left: 40%;
            z-index: 2;
            color: white;
            font-size: 12px;
            background-color: #192733;
            width: 120px;
            border-radius: 10px;
            padding: 5px;
        }

        #fade {
            opacity: 0;
            transition: opacity 0.5s;
        }

        .hover-text:hover #fade {
            opacity: 1;
        }

        .hover-text:hover #delay {
            opacity: 1;
        }

        .hover-text {
            position: relative;
        }
    </style>
@endpush
