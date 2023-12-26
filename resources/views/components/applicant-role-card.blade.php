@props(['application'])

<div class="">
    <div class="md:p-4 h-full lg:p-6 relative">
        <div class="flex justify-between">
            <div class="flex items-center">
                <img class="mr-2" width="30px" src="{{ asset('icons/list-blue.png') }}" alt="application">
                <p class="text-[#2640A1]">Application</p>
            </div>
            <div class="px-3 py-1 text-sm text-[#2640A1] bg-[#F3F4FA] rounded-xl">
                {{ $application->created_at->format('Y-m-d') }}
            </div>
        </div>
        <div class="px-4 mt-2 h-32">
            <p class="text-sm font-light">
                {!! $application->description !!}
            </p>
        </div>
        <button class="mt-5 px-4 py-1 text-sm text-[#2640A1] bg-[#F3F4FA] rounded-xl capitalize">
            {{ $application->category }} Subject
        </button>
        <div class="flex justify-center mt-5">
            <a href="{{ asset('storage/' . $application->approval_letter ?? '') }}"
                class="bg-[#F1F4F1] flex items-center px-6 py-1 text-[#1E1E1E] rounded-lg {{ $application->status == 'pending' ? 'pointer-events-none' : 'pointer-events-auto' }} mr-4"
                target="_blank">
                <img class="mr-2" src="{{ asset('icons/cloud.png') }}" alt="download">
                <p class="">
                    {{ $application->status == 'pending' ? 'Application pending' : ($application->status == 'approved' ? 'Download approval letter' : 'Download rejected letter') }}
                </p>
            </a>
            <button
                class="pointer-events-none {{ $application->status == 'pending'
                    ? 'bg-[#F3F4FA] text-[#2640A1]'
                    : ($application->status == 'approved'
                        ? 'bg-[#F1F4F1] text-[#34A853]'
                        : 'bg-[#FFEFEF] text-[#A83449]') }} flex items-center px-14 py-2 rounded-lg">
                <p class="mr-2">
                    {{ $application->status == 'pending' ? 'Pending' : ($application->status == 'approved' ? 'Approved' : 'Rejected') }}
                </p>
                @if ($application->status == 'approved')
                    <img src="{{ asset('icons/approved-white.png') }}" alt="">
                @endif
            </button>
        </div>
    </div>
</div>
