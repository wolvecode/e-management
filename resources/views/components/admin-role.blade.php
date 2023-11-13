<div class="">
    <div class=" md:p-4 lg:p-6 ">
        <div class="flex justify-between">
            <div class="flex items-center">
                <img class="mr-2" width="30px" src="{{ asset('icons/list-blue.png') }}" alt="application">
                <p class="text-[#2640A1]">Application</p>
            </div>
            <div class="px-3 py-1 text-sm text-[#2640A1] bg-[#F3F4FA] rounded-xl">20/10/2023</div>
        </div>
        <div class="px-4 mt-2 {{ $application->review_status == 'approved' || $application->review_status == 'rejected' ? 'h-24' : 'h-32' }}  max-h-">
            <p class="truncate text-lg font-light">
                {!! $application->description !!}
            </p>
        </div>
        <div class="flex">

        </div>
        <button
            class="mt-5 px-4 py-1 text-sm text-[#2640A1] bg-[#F3F4FA] rounded-xl capitalize">{{ $application->category }}
            Subject</button>
        <form action="/admin/letter/{{ $application->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            @if ($application->review_status == 'approved' ||$application->review_status == 'rejected')
                <div class="flex justify-center mt-5">
                    <label class="block">
                        <div
                            class="after:content-['*'] after:ml-0.5 after:text-red-500  text-base font-medium text-slate-700">
                            Upload approval letter
                        </div>
                        <input type="file" name="approval_letter" id="">
                        @error('approval_letter')
                            <p class="text-red-500 text-xs">{{ $message }}</p>
                        @enderror
                    </label>
                </div>
            @endif
            <div class="flex justify-center mt-5">
                <button type="submit" class="bg-[#F1F4F1] flex items-center px-6 py-1 text-[#1E1E1E] rounded-lg mr-4">
                    <img class="mr-2" src="{{ asset('icons/cloud.png') }}" alt="download">
                    <p class="">
                        {{ $application->review_status == 'pending' ? 'Pending by reviewer' : ($application->review_status == 'approved' ? 'Upload approval letter' : 'Upload rejected letter') }}
                    </p>
                </button>
                <button
                    class="pointer-events-none {{ $application->review_status == 'pending'
                        ? 'bg-[#F3F4FA] text-[#2640A1]'
                        : ($application->review_status == 'approved'
                            ? 'bg-[#F1F4F1] text-[#34A853]'
                            : 'bg-[#FFEFEF] text-[#A83449]') }} flex items-center px-14 py-2 rounded-lg">
                    <p class="mr-2">
                        {{ $application->review_status == 'pending' ? 'Pending' : ($application->review_status == 'approved' ? 'Approved' : 'Rejected') }}
                        by reviewer
                    </p>
                    @if ($application->review_status == 'approved')
                        <img src="{{ asset('icons/approved-white.png') }}" alt="">
                    @endif
                </button>
                {{-- <button class="text-center mt-2 bg-[#F3F4FA] border border-[#2640A1] px-24 py-1 text-[#2640A1] rounded-xl opacity-80">Pending</button> --}}
            </div>
        </form>

    </div>
    <div class="flex justify-center border-t-2">
        <form class="mr-2 mt-2" action="/admin/application/{{ $application->id }}" method="post">
            @csrf
            @method('patch')
            <button class="text-white text-base bg-[#2640A1] px-8 py-2 rounded-md" type="submit">Approve</button>
        </form>
        <form class="mt-2" action="/admin/application/reject/{{ $application->id }}" method="post">
            @csrf
            @method('patch')
            <button class="text-white text-base bg-red-600 px-8 py-2 rounded-md" type="submit">Reject</button>
        </form>
    </div>

</div>
