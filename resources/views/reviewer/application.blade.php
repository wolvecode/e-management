@extends('components.sidebar')
@section('page', 'Applications')

@section('sidebar-item')
    <li>
        <a href="/reviewer/{{auth()->user()->id}}/edit" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-[#325AB3] text-white hover:text-[#34A853] border-l-4 border-transparent hover:border-indigo-500 pl-6 py-8">
            <span class="inline-flex justify-center items-center ml-4">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
            </span>
            <span class="ml-2 fonts-semibold text-lg tracking-wide truncate">Profile</span>
        </a>
    </li>
    <li>
        <a href="/reviewer/application" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-[#325AB3] text-white hover:text-[#34A853] border-l-4 border-transparent hover:border-indigo-500 pl-6 py-8">
            <span class="inline-flex justify-center items-center ml-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 44 44" fill="none">
                    <g clip-path="url(#clip0_144_840)">
                    <path d="M41.2228 20.1214L22.0003 31.6567L2.77783 20.1214C2.36088 19.8712 1.86164 19.7969 1.38992 19.9149C0.918206 20.0328 0.512657 20.3333 0.262491 20.7502C0.0123259 21.1672 -0.0619637 21.6664 0.0559654 22.1381C0.173895 22.6098 0.474382 23.0154 0.891325 23.2655L21.058 35.3655C21.3431 35.5369 21.6695 35.6274 22.0022 35.6274C22.3348 35.6274 22.6612 35.5369 22.9463 35.3655L43.113 23.2655C43.5299 23.0154 43.8304 22.6098 43.9484 22.1381C44.0663 21.6664 43.992 21.1672 43.7418 20.7502C43.4917 20.3333 43.0861 20.0328 42.6144 19.9149C42.1427 19.7969 41.6434 19.8712 41.2265 20.1214H41.2228Z" fill="white"/>
                    <path d="M41.2228 28.4952L22.0003 40.0287L2.77782 28.4952C2.57137 28.3713 2.34255 28.2893 2.10441 28.2539C1.86627 28.2184 1.62349 28.2302 1.38992 28.2886C1.15635 28.347 0.936565 28.4508 0.74312 28.5942C0.549675 28.7375 0.386355 28.9175 0.262486 29.124C0.138617 29.3304 0.0566232 29.5593 0.0211874 29.7974C-0.0142483 30.0355 -0.00243262 30.2783 0.05596 30.5119C0.173889 30.9836 0.474377 31.3892 0.891319 31.6393L21.058 43.7394C21.3431 43.9107 21.6695 44.0012 22.0022 44.0012C22.3348 44.0012 22.6612 43.9107 22.9463 43.7394L43.113 31.6393C43.5299 31.3892 43.8304 30.9836 43.9483 30.5119C44.0663 30.0402 43.992 29.5409 43.7418 29.124C43.4917 28.707 43.0861 28.4066 42.6144 28.2886C42.1427 28.1707 41.6434 28.245 41.2265 28.4952H41.2228Z" fill="white"/>
                    <path d="M0.889075 15.322L19.1931 26.3055C20.0406 26.8153 21.0109 27.0847 21.9999 27.0847C22.9889 27.0847 23.9593 26.8153 24.8067 26.3055L43.1107 15.322C43.3818 15.159 43.6061 14.9286 43.7618 14.6533C43.9175 14.378 43.9993 14.0671 43.9993 13.7508C43.9993 13.4345 43.9175 13.1236 43.7618 12.8483C43.6061 12.573 43.3818 12.3426 43.1107 12.1796L24.8067 1.19613C23.9591 0.686881 22.9888 0.417847 21.9999 0.417847C21.011 0.417847 20.0408 0.686881 19.1931 1.19613L0.889075 12.1796C0.618012 12.3426 0.393728 12.573 0.238023 12.8483C0.0823178 13.1236 0.000488281 13.4345 0.000488281 13.7508C0.000488281 14.0671 0.0823178 14.378 0.238023 14.6533C0.393728 14.9286 0.618012 15.159 0.889075 15.322Z" fill="white"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_144_840">
                    <rect width="44" height="44" fill="white"/>
                    </clipPath>
                    </defs>
                </svg>                        </span>
            <span class="ml-2 fonts-semibold text-lg tracking-wide truncate">Application</span>
        </a>
    </li>
@endsection

@section('side')
<div class="p-5">
    <dialog>
        <button autofocus>Close</button>
        <div class="">
            <div class="modal" id="modalQuill">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="ql-wrapper ql-wrapper-demo bg-gray-100">
                            <textarea id="editor" name="content" cols="50" rows="10"></textarea>
                        </div>
                        @error('content')
                        <div class="alert alert-danger  mg-b-0" role="alert">
                            <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
    </dialog>
    <div class="xl:max-h-[640px] 2xl:max-h-[780px] overflow-y-auto bg-gray-100 rounded-xl px-5 py-3 mt-5">
        <div class="overflow-y-auto mt-2">
            <div class="w-full px-4 flex items-center mt-4 py-4">
                <div class="w-4/12 flex items-center">
                    <img class="mr-3" width="20px" src="{{ asset('icons/list-black.png') }}" alt="list">
                    <h4 class="text-sm fonts-semibold">Application</h4>
                </div>
                <div class="w-2/12 flex items-center justify-center">
                    <img class="mr-3" width="15px" src="{{ asset('icons/calendar.png') }}" alt="Calendar">
                    <h4 class="text-sm fonts-semibold">Application</h4>
                </div>
                <div class="w-2/12 flex items-center justify-center">
                    <img class="mr-3" width="15px" src="{{ asset('icons/calendar.png') }}" alt="Calendar">
                    <h4 class="text-sm fonts-semibold">Reviewer</h4>                    
                </div>
                <div class="w-2/12 flex items-center justify-center">
                    <img class="mr-3" width="15px" src="{{ asset('icons/status-black.png') }}" alt="Calendar">
                    <h4 class="text-sm fonts-semibold">Status</h4>                      
                </div>
                <div class="w-2/12 text-center px-2">
                </div>
            </div>
            @forelse (auth()->user()->reviewer_application as $application)
                <x-single-application-card :application="$application" />
            @empty
                <p class="text-center">No application available</p>
            @endforelse
        </div>
    </div>
</div>
@endsection