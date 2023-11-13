<div class="">
    <div class="md:p-4 lg:p-6">
        <div class="flex justify-between">
            <div class="flex items-center">
                <img class="mr-2" width="30px" src="{{ asset('icons/list-blue.png') }}" alt="application">
                <p class="text-[#2640A1]">Application</p>
            </div>
            <div class="px-3 py-1 text-sm text-[#2640A1] bg-[#F3F4FA] rounded-xl">20/10/2023</div>
        </div>
        <div class="px-4 mt-2 h-64 overflow-y-auto">
            <p class="text-lg font-light">
                {!! $application->description !!}
            </p>
        </div>
        <div class="flex justify-center">
            <div class="flex justify-center">
                <a href="{{ route('viewLetter', $application->attachment ?? '') }}"
                    class="mt-2 bg-[#F1F4F1] flex items-center px-6 py-1 text-[#1E1E1E] rounded-lg {{ $application->status == 'pending' ? 'pointer-events-none' : 'pointer-events-auto' }} mr-4"
                    target="_blank">
                    <img class="mr-2" src="{{ asset('icons/cloud.png') }}" alt="download">
                    Preview Application Document

                </a>
                
            </div>
        </div>
        
    </div>
    <div class="flex justify-center border-t-2">
        <form class="mr-2 mt-2" action="/reviewer/application/{{ $application->id }}" method="post">
            @csrf
            @method('patch')
            <button class="text-white text-base bg-[#2640A1] px-8 py-2 rounded-md" type="submit">Approve</button>
        </form>
        <form class="mt-2" action="/reviewer/application/reject/{{ $application->id }}" method="post">
            @csrf
            @method('patch')
            <button class="text-white text-base bg-red-600 px-8 py-2 rounded-md" type="submit">Reject</button>
        </form>
    </div>
</div>
