@extends('components.sidebar')
@section('page', 'Applications')

@section('sidebar-item')
    <li>
        <a href="/applicant/{{ auth()->user()->id }}/edit"
            class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-[#325AB3] text-white hover:text-[#34A853] border-l-4 border-transparent hover:border-indigo-500 pl-6 py-8">
            <span class="inline-flex justify-center items-center ml-4">
                <img width="18" src="{{ asset('icons/instruct.png') }}" alt="">
            </span>
            <span class="ml-2 fonts-semibold text-lg tracking-wide truncate">Profile</span>
        </a>
    </li>
    <li>
        <a onclick="openModal()" href="#"
            class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-[#325AB3] text-white hover:text-[#34A853] border-l-4 border-transparent hover:border-indigo-500 pl-6 py-8">
            <span class="inline-flex justify-center items-center ml-4">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                </svg>
            </span>
            <span class="ml-2 fonts-semibold text-lg tracking-wide truncate">Instruction</span>
        </a>
    </li>
    <li>
        <span
            class="relative hover-link flex flex-row items-center h-11 focus:outline-none hover:bg-[#325AB3] text-white hover:text-[#34A853] border-l-4 border-transparent hover:border-indigo-500 pl-6 py-8">
            <svg class="ml-4 w-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <path
                        d="M4 19V6.2C4 5.0799 4 4.51984 4.21799 4.09202C4.40973 3.71569 4.71569 3.40973 5.09202 3.21799C5.51984 3 6.0799 3 7.2 3H16.8C17.9201 3 18.4802 3 18.908 3.21799C19.2843 3.40973 19.5903 3.71569 19.782 4.09202C20 4.51984 20 5.0799 20 6.2V17H6C4.89543 17 4 17.8954 4 19ZM4 19C4 20.1046 4.89543 21 6 21H20M9 7H15M9 11H15M19 17V21"
                        stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </g>
            </svg>
            <span class="ml-2 fonts-semibold text-lg tracking-wide truncate">Course</span>
            @if (auth()->user()->institution == 'unilag')
                <ul class="tooltip-link text-center py-4 space-y-3" id="fade">
                    <li>
                        <span onclick="handleClick('https://about.citiprogram.org/')"
                            class="cursor-pointer text-[#2640A1]">Visit
                            CITI</span>
                    </li>
                    <li>
                        <span onclick="handleClick('https://elearning.trree.org/')"
                            class="cursor-pointer text-[#2640A1]">Visit
                            TRREE</span>
                    </li>
                </ul>
            @else
                <ul class="tooltip-link py-4 space-y-0.5 list-decimal marker:text-[#2640A1]" id="fade">
                    <li>
                        <span onclick="handleClick('{{ asset('storage/' . 'sample/animal_housing.pdf') }}')"
                            class="cursor-pointer text-[#2640A1]">Animal Housing
                        </span>
                    </li>
                    <li>
                        <span onclick="handleClick('{{ asset('storage/' . 'sample/sample_collection.pdf') }}')"
                            class="cursor-pointer text-[#2640A1]">Sample Collection
                        </span>
                    </li>
                    <li>
                        <span onclick="handleClick('{{ asset('storage/' . 'sample/training_manual.pdf') }}')"
                            class="cursor-pointer text-[#2640A1]">Training Manual
                        </span>
                    </li>
                    <li>
                        <span onclick="handleClick('#')" class="cursor-pointer text-[#2640A1]">Quick Test
                        </span>
                    </li>
                </ul>
            @endif

        </span>
    </li>
    @if (auth()->user()->institution == 'unilag')
        <li>
            <a href="#"
                class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-[#325AB3] text-white hover:text-[#34A853] border-l-4 border-transparent hover:border-indigo-500 pl-6 py-8"
                target="_blank">
                <svg class="ml-4 w-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path
                            d="M4 19V6.2C4 5.0799 4 4.51984 4.21799 4.09202C4.40973 3.71569 4.71569 3.40973 5.09202 3.21799C5.51984 3 6.0799 3 7.2 3H16.8C17.9201 3 18.4802 3 18.908 3.21799C19.2843 3.40973 19.5903 3.71569 19.782 4.09202C20 4.51984 20 5.0799 20 6.2V17H6C4.89543 17 4 17.8954 4 19ZM4 19C4 20.1046 4.89543 21 6 21H20M9 7H15M9 11H15M19 17V21"
                            stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </g>
                </svg>
                <span class="ml-2 fonts-semibold text-lg tracking-wide truncate">E-Learning</span>
            </a>
        </li>
    @endif
    @if (auth()->user()->institution == 'oau')
        <li>
            <span
                class="relative hover-link flex flex-row items-center h-11 focus:outline-none hover:bg-[#325AB3] text-white hover:text-[#34A853] border-l-4 border-transparent hover:border-indigo-500 pl-6 py-8">
                <svg class="ml-4 w-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path
                            d="M4 19V6.2C4 5.0799 4 4.51984 4.21799 4.09202C4.40973 3.71569 4.71569 3.40973 5.09202 3.21799C5.51984 3 6.0799 3 7.2 3H16.8C17.9201 3 18.4802 3 18.908 3.21799C19.2843 3.40973 19.5903 3.71569 19.782 4.09202C20 4.51984 20 5.0799 20 6.2V17H6C4.89543 17 4 17.8954 4 19ZM4 19C4 20.1046 4.89543 21 6 21H20M9 7H15M9 11H15M19 17V21"
                            stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </g>
                </svg>
                <span class="ml-2 fonts-semibold text-lg tracking-wide truncate">E-Learning</span>

                <ul class="tooltip-link py-4 space-y-1 list-decimal marker:text-[#2640A1]" id="fade">
                    <li>
                        <span onclick="handleClick('https://about.citiprogram.org/')"
                            class="cursor-pointer text-[#2640A1]">Visit CITI</span>
                    </li>
                    <li>
                        <span onclick="handleClick('https://anzccart.adelaide.edu.au/compass')"
                            class="cursor-pointer text-[#2640A1]">Visit Compass</span>
                    </li>
                </ul>
            </span>
        </li>
    @endif
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
    <x-instruction-modal />
    <div class="p-5">
        <div class="flex justify-end">
            <div class="flex">
                @if (auth()->user()->institution == 'unilag')
                    @if (auth()->user()->category == 'animal')
                        <a href="{{ asset('storage/' . 'sample/unilag_animal.docx') }}"
                            class="text-base mr-5 bg-[#FFEFEF] text-[#A83449] font-medium px-4 py-2 rounded-lg"
                            target="_blank">Download form
                        </a>
                    @else
                        <a href="{{ asset('storage/' . 'sample/unilag_human.doc') }}"
                            class="text-base mr-5 bg-[#FFEFEF] text-[#A83449] font-medium px-4 py-2 rounded-lg"
                            target="_blank">Download form
                        </a>
                    @endif
                @else
                    @if (auth()->user()->category == 'animal')
                        <a href="{{ asset('storage/' . 'sample/oau_animal.doc') }}"
                            class="text-base mr-5 bg-[#FFEFEF] text-[#A83449] font-medium px-4 py-2 rounded-lg"
                            target="_blank">Download form
                        </a>
                    @else
                        <a href="#"
                            class="text-base mr-5 bg-[#FFEFEF] text-[#A83449] font-medium px-4 py-2 rounded-lg"
                            target="_blank">Download form
                        </a>
                    @endif
                @endif
                <button id="dialog" class="text-base text-white bg-[#A83449] font-medium px-4 py-2 rounded-lg">Apply
                    Now</button>
            </div>

        </div>
        <dialog id="show" class="p-5 w-3/5 rounded">
            <button class="mt-2" autofocus>Close</button>
            <div class="mt-4">
                <form action="/applicant/application" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="flex mt-8">
                        <div class="w-1/2 mr-5">
                            <span
                                class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                                Enter resarch title
                            </span>
                            <input type="text" name="title"
                                class="h-10 mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1"
                                placeholder="Enter resarch title" value="{{ old('title') }}" />
                            @error('title')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="w-1/2">
                            <span
                                class="after:content-['*'] after:ml-0.5 after:text-red-500  text-sm font-medium text-slate-700">
                                Research Type
                            </span>
                            <select name="category" id=""
                                class="h-10 px-3 py-2 bg-white
                                border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none
                                focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm 
                                focus:ring-1">
                                <option value="human">Human</option>
                                <option value="animal">Animal</option>
                            </select>
                        </div>
                    </div>
                    <div class="mt-8">
                        <textarea
                            class="mt-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1"
                            name="description" id="" cols="30" rows="8">
                        {{ old('description') ? old('description') : 'Edit for research description' }}
                    </textarea> @error('description')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mt-5">
                        <span
                            class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                            Upload application document
                        </span>
                        <input id="attachment" name="attachment" type="file" class=""
                            value="{{ old('attachment') }}" />
                        @error('attachment')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mt-5">
                        <span
                            class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                            Upload supporting document
                        </span>
                        <input id="supporting_document" name="supporting_document" type="file" class=""
                            value="{{ old('supporting_document') }}" />
                        @error('supporting_document')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex justify-end mt-5 mb-2">
                        <button id="another" onclick="myFunction()" type="submit"
                            class="text-white text-sm fonts-medium px-3 py-2 bg-[#2640A1] rounded">Submit</button>
                    </div>
                </form>
            </div>
        </dialog>
        <div class="2xl:max-h-[780px] h-[580px] overflow-y-auto bg-gray-100 rounded-xl px-5 py-3 mt-5">
            {{-- xl:max-h-[640px] 2xl:max-h-[780px]  --}}
            <div class="overflow-y-auto mt-2">
                <div class="w-full px-4 flex items-center mt-4 py-4">
                    <div
                        class="{{ auth()->user()->role == 'admin' || auth()->user()->role == 'super_admin' ? 'w-2/12' : 'w-4/12' }} flex items-center">
                        <img class="mr-3" width="20px" src="{{ asset('icons/list-black.png') }}" alt="list">
                        <h4 class="text-sm fonts-semibold">Application</h4>
                    </div>
                    @if (auth()->user()->role == 'admin' || auth()->user()->role == 'super_admin')
                        <div class="{{ auth()->user()->role == 'admin' ? 'w-2/12' : 'w-4/12' }} flex items-center">
                            <h4 class="text-sm fonts-semibold">App NO:</h4>
                        </div>
                    @endif
                    <div class="w-2/12 flex items-center justify-center">
                        <img class="mr-3" width="15px" src="{{ asset('icons/calendar.png') }}" alt="Calendar">
                        <h4 class="text-sm fonts-semibold">Date Submitted</h4>
                    </div>
                    <div class="w-2/12 flex items-center justify-center">
                        <img class="mr-3" width="15px" src="{{ asset('icons/profile-black.png') }}" alt="Calendar">
                        <h4 class="text-sm fonts-semibold">Reviewer Status</h4>
                    </div>
                    <div class="w-2/12 flex items-center justify-center">
                        <img class="mr-3" width="15px" src="{{ asset('icons/status-black.png') }}" alt="Calendar">
                        <h4 class="text-sm fonts-semibold">Application Status</h4>
                    </div>
                    <div class="w-2/12 text-center  px-2">
                    </div>
                </div>
                @forelse (auth()->user()->application()->latest()->paginate(6) as $application)
                    <x-single-application-card :application="$application" />
                @empty
                    <p class="text-center">No application available</p>
                @endforelse
            </div>
            <div class="mt-2">{{ auth()->user()->application()->paginate(6)->links() }}</div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/4.1.2/js/froala_editor.min.js"
        integrity="sha512-D/ao3wgqBr8k2I7a7BqREphswgwxKCRI57+f/2r1Xr28HWGEH2PEf9HAgkSIKkv5wO3SKOEVlLUctLARnDObuw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        new FroalaEditor('textarea#froala-editor');
    </script>
    <script>
        const dialog = document.querySelector("dialog");
        const showButton = document.getElementById('dialog');
        const closeButton = document.querySelector("dialog button");
        // "Show the dialog" button opens the dialog modally
        showButton.addEventListener("click", () => {
            dialog.showModal();
        });
        // "Close" button closes the dialog
        closeButton.addEventListener("click", () => {
            dialog.close();
        });
    </script>
@endpush

@push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/4.1.2/css/froala_style.min.css"
        integrity="sha512-s4JO+WvtW/4xnDVf3rL24iZtDejfQlbir740PP9ApITpDclbrtaTZrNVoKc4Nk5qTcA2SPkDTwSQAtA8tKyGcA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/4.1.2/css/froala_editor.min.css"
        integrity="sha512-GPswX6CjYdfXWGIyVKsQiRTGP4QFjEvQM4wiRMouG4uRkWjta2JfIAhrZVUEiY4Zgozma32H6G1mGN/n5XdQgw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        dialog::backdrop {
            background: #000;
            opacity: 0.4;
        }
    </style>
    <style>
        .tooltip-text {
            position: absolute;
            top: -40px;
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
    <style>
        .tooltip-link {
            position: absolute;
            top: -15px;
            left: 45%;
            z-index: 2;
            color: #192733;
            font-size: 12px;
            background-color: white;
            width: 140px;
            border-radius: 8px;
            padding: 3px;
            padding-left: 16px;
        }

        #fade {
            opacity: 0;
            transition: opacity 0.5s;
        }

        .hover-link:hover #fade {
            opacity: 1;
        }

        .hover-link:hover #delay {
            opacity: 1;
        }

        .hover-link {
            position: relative;
        }
    </style>
@endpush

@push('scripts')
    <script>
        function handleClick(link) {
            window.open(link, '_blank');
        }
    </script>
@endpush
