@props(['application'])
@php
    $commentTag = false;
@endphp

{{-- Application Progress Section --}}
<div class="bg-white rounded-xl px-4 md:px-5 py-4 mb-5">
    {{-- Title and Category --}}
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-3 mt-5 md:mt-10">
        <div class="flex items-center">
            <span class="border border-[#2640A1] bg-white rounded-full h-4 w-4"></span>
            <h4 class="ml-3 text-[#2640A1] font-medium text-lg md:text-xl truncate">{{ $application->title }}</h4>
        </div>
        <div class="flex justify-start md:justify-end">
            <div class="px-3 py-1 text-xs md:text-sm text-[#2640A1] bg-[#F3F4FA] rounded-xl capitalize">
                {{ $application->category }} Subject
            </div>
        </div>
    </div>

    {{-- Progress Bar --}}
    <div class="mt-6 w-full">
        <ul class="flex justify-between md:justify-center md:ml-20 gap-2 md:gap-4 overflow-x-auto scrollbar-hide">
            <li class="flex items-center flex-1">
                <img src="{{ count($application->assignedReviewers) > 0 ? asset('images/progress-green.png') : asset('icons/gray-circle.png') }}"
                    alt="progress">
                <div class="flex-1 h-1 bg-[#1E1E1E66] opacity-40"></div>
            </li>
            <li class="flex items-center flex-1">
                <img src="{{ $application->review_status == 'approved' ? asset('images/progress-green.png') : ($application->review_status == 'rejected' ? asset('icons/red-circle.png') : asset('icons/gray-circle.png')) }}"
                    alt="progress">
                <div class="flex-1 h-1 bg-[#1E1E1E66] opacity-40"></div>
            </li>
            <li class="flex items-center">
                <img src="{{ $application->status == 'approved' ? asset('images/progress-green.png') : ($application->status == 'rejected' ? asset('icons/red-circle.png') : asset('icons/gray-circle.png')) }}"
                    alt="progress">
            </li>
        </ul>

        <ul class="flex justify-between mt-3 text-xs md:text-sm text-gray-600">
            <li class="flex-1 text-left">Assigned to reviewer</li>
            <li class="flex-1 text-center">Review Status</li>
            <li class="flex-1 text-right">Admin Status</li>
        </ul>
    </div>
</div>

{{-- Comment Section --}}
<div class="xl:max-h-[420px] 2xl:max-h-[450px] overflow-y-auto">
    @if (auth()->user()->role != 'admin' && auth()->user()->role != 'super_admin')
        <div class="bg-white rounded-xl px-4 py-3 mb-5">
            <div class="flex flex-col md:flex-row justify-between gap-3">
                <p class="text-[#2640A1] font-medium text-sm md:text-base">
                    {{ $application->comment ? $application->comment->comment : 'No comment' }}
                </p>
                <div
                    class="px-3 py-1 text-xs text-[#2640A1] bg-[#F3F4FA] rounded-xl capitalize self-start md:self-center">
                    Admin Comment
                </div>
            </div>
        </div>
    @else
        {{-- Reviewer/Admin Comment Form --}}
        <div class="bg-white rounded-xl px-4 py-4 mb-5">
            <form method="POST" action="/reviewer/comment/{{ $application->id }}">
                @csrf
                <span class="px-2 py-1 text-xs text-[#2640A1] bg-[#F3F4FA] rounded-xl">Leave Comment</span>
                <p class="text-xs mt-2">{{ $application->comment->comment ?? '' }}</p>

                @if (!$application->comment || strlen($application->comment->comment) === 0)
                    <input type="text" name="comment"
                        class="w-full mt-2 px-3 py-2 border border-slate-300 rounded-lg text-sm focus:outline-none focus:ring-1 focus:ring-sky-500"
                        placeholder="Leave a comment" />
                    @error('comment')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                    <div class="flex justify-end mt-2">
                        <button class="bg-[#2640A1] text-white text-xs px-4 py-1 rounded-md hover:bg-[#1E327A]"
                            type="submit">Submit</button>
                    </div>
                @endif
            </form>
        </div>
    @endif

    {{-- Main Content & Sidebar --}}
    <div class="flex flex-col-reverse lg:flex-row gap-5 mt-5">
        {{-- Sidebar --}}
        @if (auth()->user()->role == 'admin' || auth()->user()->role == 'super_admin')
            <div class="w-full lg:w-1/4 space-y-5">
                {{-- Reviewer / Applicant Info --}}
                <div class="bg-white rounded-xl p-4">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center bg-[#F3F4FA] px-3 py-1 rounded-lg">
                            <img class="mr-2" width="10px" src="{{ asset('icons/profile.png') }}" alt="profile">
                            <p class="capitalize text-sm text-[#2640A1]">
                                {{ auth()->user()->role == 'applicant' ? 'Reviewer' : 'Applicant' }}
                            </p>
                        </div>
                        <img width="20px" src="{{ asset('icons/message.png') }}" alt="message">
                    </div>

                    {{-- Profile Image --}}
                    <div class="flex justify-center mt-4">
                        <img class="h-24 w-24 rounded-full object-cover"
                            src="{{ auth()->user()->role != 'applicant'
                                ? (strlen($application->user->profileLink ?? '') != 0
                                    ? asset('storage/' . $application->user->profileLink)
                                    : asset('icons/na-profile.png'))
                                : ($application->assignedReviewers && strlen($application->assignedReviewers->profileLink ?? '') != 0
                                    ? asset('storage/' . $application->assignedReviewers->profileLink)
                                    : asset('icons/default-profile.png')) }}"
                            alt="profile">
                    </div>

                    <p class="mt-3 text-center text-[#2640A1] text-sm md:text-base">
                        {{ auth()->user()->role == 'applicant' ? $application->assignedReviewers->name ?? 'NA' : $application->user->name ?? 'NA' }}
                    </p>

                    {{-- Contact Info --}}
                    <div class="flex justify-center mt-2">
                        <a href="tel:{{ auth()->user()->role == 'applicant' ? $application->assignedReviewers->contact ?? '' : $application->user->contact ?? '' }}"
                            class="inline-flex items-center bg-[#2640A1] px-3 py-1 rounded-lg text-white text-xs md:text-sm">
                            <img class="mr-2" width="10px" src="{{ asset('icons/call.png') }}" alt="call">
                            <p>{{ auth()->user()->role == 'applicant' ? $application->assignedReviewers->contact ?? 'NA' : $application->user->contact ?? 'NA' }}
                            </p>
                        </a>
                    </div>

                    <p class="text-center text-sm text-[#2640A1] border-t-2 py-2 mt-3">
                        {{ auth()->user()->role == 'applicant' ? $application->assignedReviewers->email ?? 'NA' : $application->user->email ?? 'NA' }}
                    </p>
                </div>

                {{-- Admin Comment Box --}}
                <div class="bg-white rounded-xl p-4">
                    @if (!$application->comment || strlen($application->comment->comment) === 0)
                        <form method="POST" action="/reviewer/comment/{{ $application->id }}">
                            @csrf
                            <span class="px-2 py-1 text-xs text-[#2640A1] bg-[#F3F4FA] rounded-xl">Leave Comment</span>
                            <input type="text" name="comment"
                                class="mt-2 px-3 py-2 w-full border border-slate-300 rounded-lg text-sm focus:ring-1 focus:ring-sky-500"
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
                </div>
            </div>
        @endif

        {{-- Main Application Details --}}
        <div class="w-full bg-white rounded-xl p-4">
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
