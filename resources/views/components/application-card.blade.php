@props(['application'])
@php
    $commentTag = false;
@endphp


<div class="justify-center bg-white rounded-xl px-5 py-3 mb-5">
    <div class="">
        <div class="flex items-center justify-between mt-10">
            <div class="w-5/6 flex items-center">
                <span style="border-radius: 100%; height: 16px; width: 16px;"
                    class="border border-[#2640A1] bg-white" /></span>
                <h4 class="ml-4 text-[#2640A1] font-medium text-xl">{{ $application->title }}</h4>
            </div>
            <div class="w-1/6 flex justify-end">
                <div class=" px-3 py-1 inline text-sm text-[#2640A1] bg-[#F3F4FA] rounded-xl capitalize">
                    {{ $application->category }} Subject</div>
            </div>
        </div>
        <div class="w-full mt-5">
            <div class="">
                <ul class="w-full flex justify-center ml-20">
                    <li style="width: 40%" class="flex items-center">
                        <img class=""
                            src="{{ $application->reviewer ? asset('images/progress-green.png') : asset('icons/gray-circle.png') }}"
                            alt="progress">
                        <div style="width: 100%"
                            class="h-1 shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-[#1E1E1E66] opacity-[.40]">
                        </div>
                    </li>
                    <li style="width: 40%" class="flex items-center">
                        <img class=""
                            src="{{ $application->review_status == 'approved' ? asset('images/progress-green.png') : ($application->review_status == 'rejected' ? asset('icons/red-circle.png') : asset('icons/gray-circle.png')) }}"
                            alt="progress">
                        <div style="width: 100%"
                            class="h-1 shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-[#1E1E1E66] opacity-[.40] ">
                        </div>
                    </li>
                    <li style="width: 20%" class="flex items-center">
                        <img class=""
                            src="{{ $application->status == 'approved' ? asset('images/progress-green.png') : ($application->status == 'rejected' ? asset('icons/red-circle.png') : asset('icons/gray-circle.png')) }}"
                            alt="progress">
                    </li>
                </ul>
                <ul class="w-full flex justify-between mt-2">
                    <li style="width: 38%" class="flex items-center">
                        Assigned to reviewer
                    </li>
                    <li style="width:36%" class="flex items-center">
                        Review Status
                    </li>
                    <li style="width: 15%" class="flex items-center">
                        Admin Status
                    </li>
                </ul>

            </div>
        </div>
    </div>
</div>

<div class="xl:max-h-[420px] 2xl:max-h-[450px] overflow overflow-y-auto">
    @if (auth()->user()->role != 'admin' || auth()->user()->role != 'super_admin')
        <div class="justify-center bg-white rounded-xl px-5 py-3">
            <div class="">
                <div class="flex items-center justify-between">
                    <div class="w-5/6 flex items-center">
                        <p class="ml-4 text-[#2640A1] font-medium text-base">
                            {{ $application->comment ? $application->comment->comment : 'No comment' }}</p>
                    </div>
                    <div class="w-1/6 flex justify-end">
                        <div class=" px-3 py-1 inline text-sm text-[#2640A1] bg-[#F3F4FA] rounded-xl capitalize">
                            Admin Comment</div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="md:w-64 lg:w-70 bg-white rounded-xl md:p-4 lg:p-6 mt-5">
            <form method="POST" action="/reviewer/comment/{{ $application->id }}">
                @csrf
                <span class="px-2 py-1 text-xs text-[#2640A1] bg-[#F3F4FA] rounded-xl">Leave Comment</span>
                <p class="text-xs mt-2">{{ $application->comment ? $application->comment->comment : '' }}</p>
                @if (!$application->comment || strlen($application->comment->comment) === 0)
                    <input type="text" name="comment"
                        class="h-8 mt-2 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-lg sm:text-sm focus:ring-1"
                        placeholder="Leave a comment" />
                    @error('comment')
                        <p class="text-red-500 text-xs">{{ $message }}</p>
                    @enderror
                    <div class="flex justify-end mt-2">
                        <button class="text-white text-xs bg-[#2640A1] px-4 py-1 rounded-md"
                            type="submit">Submit</button>
                    </div>
                @endif
            </form>
        </div>
    @endif
    <div class="w-full flex mt-5">
        @if (auth()->user()->role == 'admin' || auth()->user()->role == 'super_admin')
            <div class="w-1/4 mr-5 max-h-[400px] overflow-y">
                <div class="md:w-64 lg:w-70 bg-white rounded-xl">
                    <div class="md:p-4 lg:p-6">
                        <div class="flex items-center">
                            <div class="flex items-center bg-[#F3F4FA] px-4 py-1 rounded-lg">
                                <img class="mx-auto mr-2" width="10px" src="{{ asset('icons/profile.png') }}"
                                    alt="profile">
                                <p class="capitalize text-sm text-[#2640A1]">
                                    {{ auth()->user()->role == 'applicant' ? 'Reviewer' : 'Applicant' }}
                                </p>
                            </div>
                            <img class="ml-auto" width="20px" src="{{ asset('icons/message.png') }}" alt="message">
                        </div>
                        <div class="h-32 w-32 mx-auto rounded-full">
                            <img class="mt-5 h-full w-full rounded-full"
                                src="{{ auth()->user()->role != 'applicant'
                                    ? (strlen($application->user->profileLink) != 0
                                        ? asset('storage/' . $application->user->profileLink)
                                        : asset('icons/na-profile.png'))
                                    : ($application->reviewer && strlen($application->reviewer->profileLink) != 0
                                        ? asset('storage/' . $application->reviewer->profileLink)
                                        : asset('icons/default-profile.png')) }}"
                                alt="image">
                        </div>
                        <p class="mt-3 text-center text-[#2640A1]">
                            {{ auth()->user()->role == 'applicant' ? ($application->reviewer ? $application->reviewer->name : 'NA') : $application->user->name ?? 'NA' }}
                        </p>
                        <div class="flex justify-center mt-2">
                            <a href="tel:08169030947"
                                class="inline-flex items-center bg-[#2640A1] px-3 py-1 rounded-lg">
                                <img class="mx-auto mr-2" width="10px" src="{{ asset('icons/call.png') }}"
                                    alt="profile">
                                <p class="text-white">
                                    {{ auth()->user()->role == 'applicant' ? ($application->reviewer ? $application->reviewer->contact : 'NA') : $application->user->contact ?? 'NA' }}
                                </p>
                            </a>
                        </div>
                    </div>
                    <p class="text-center text-sm text-[#2640A1] border-t-2 py-2">
                        {{ auth()->user()->role == 'applicant' ? ($application->reviewer ? $application->reviewer->email : 'NA') : $application->user->email ?? 'NA' }}
                    </p>
                </div>
                <div class="md:w-64 lg:w-70 bg-white rounded-xl md:p-4 lg:p-6 mt-5">
                    @if (!$application->comment || strlen($application->comment->comment) === 0)
                        <form method="POST" action="/reviewer/comment/{{ $application->id }}">
                            @csrf
                            <span class="px-2 py-1 text-xs text-[#2640A1] bg-[#F3F4FA] rounded-xl">Leave Comment</span>
                            <p class="text-xs mt-2">{{ $application->comment ? $application->comment->comment : '' }}
                            </p>

                            <input type="text" name="comment"
                                class="h-8 mt-2 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-lg sm:text-sm focus:ring-1"
                                placeholder="Leave a comment" />
                            @error('comment')
                                <p class="text-red-500 text-xs">{{ $message }}</p>
                            @enderror
                            <div class="flex justify-end mt-2">
                                <button class="text-white text-xs bg-[#2640A1] px-4 py-1 rounded-md"
                                    type="submit">Submit</button>
                            </div>
                        </form>
                    @endif
                    @if ($application->comment && strlen($application->comment->comment) > 2)
                        <form method="POST" action="/reviewer/comment/{{ $application->comment->id }}">
                            @method('PATCH')
                            @csrf
                            <span class="px-2 py-1 text-xs text-[#2640A1] bg-[#F3F4FA] rounded-xl">Leave Comment</span>
                            <p class="text-xs mt-2">{{ $application->comment ? $application->comment->comment : '' }}
                            </p>

                            <input type="text" name="comment"
                                class="h-8 mt-2 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-lg sm:text-sm focus:ring-1"
                                placeholder="Leave a comment" />
                            @error('comment')
                                <p class="text-red-500 text-xs">{{ $message }}</p>
                            @enderror
                            <div class="flex justify-end mt-2">
                                <button class="text-white text-xs bg-[#2640A1] px-4 py-1 rounded-md"
                                    type="submit">Update</button>
                            </div>
                        </form>
                    @endif
                </div>
            </div>
        @endif
        <div
            class="{{ auth()->user()->role == 'admin' || auth()->user()->role == 'super_admin' ? ' w-3/4' : 'w-full' }} bg-white rounded-xl">
            @if (auth()->user()->role == 'applicant')
                <x-applicant-role-card :application="$application" />
            @elseif(auth()->user()->role == 'reviewer')
                <x-reviewer-role :application="$application" />
            @else
                <x-admin-role :application="$application" />
            @endif
        </div>
    </div>
</div>
