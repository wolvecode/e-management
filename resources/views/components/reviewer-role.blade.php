<div class="">
    <div class="md:p-4 lg:p-6">
        <div class="flex justify-between">
            <div class="flex items-center">
                <img class="mr-2" width="30px" src="{{ asset('icons/list-blue.png') }}" alt="application">
                <p class="text-[#2640A1]">Application</p>
            </div>
            <div class="px-3 py-1 text-sm text-[#2640A1] bg-[#F3F4FA] rounded-xl">
                {{ $application->created_at->format('Y-m-d') }}
            </div>
        </div>
        <div class="px-4 mt-2 h-64 overflow-y-auto">
            <p class="text-lg font-light">
                {!! $application->description !!}
            </p>
        </div>
        <form action="/reviewer/letter/{{ $application->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="flex justify-center">
                <label class="block">
                    <div
                        class="after:content-['*'] after:ml-0.5  {{ $application->edited_attachment ? 'after:text-green-500' : 'after:text-red-500' }}  text-base font-medium text-slate-700">
                        Attach edited document
                    </div>
                    <input type="file" name="edited_attachment" id="">
                    @error('edited_attachment')
                        <p class="text-red-500 text-xs">{{ $message }}</p>
                    @enderror
                </label>
            </div>
            <div class="flex justify-center mt-5">
                <button class="bg-[#F1F4F1] flex items-center px-6 py-1 text-[#1E1E1E] rounded-lg mr-4" type="submit">
                    <img class="mr-2" width="16" src="{{ asset('icons/filled-upload.png') }}" alt="download">
                    <p class="">Upload edited document</p>
                </button>
                <a href="{{ asset('storage/' . $application->attachment ?? '') }}"
                    class="bg-[#F1F4F1] flex items-center px-6 py-1 text-[#1E1E1E] rounded-lg mr-4" target="_blank">
                    <img class="mr-2" width="16" src="{{ asset('icons/cloud.png') }}" alt="download">
                    <p class="">Preview Application Document</p>
                </a>
            </div>
        </form>
    </div>
    <div class="flex justify-center border-t-2">
        <form class="mr-2 mt-2" action="/reviewer/application/{{ $application->id }}" method="post">
            @csrf
            @method('patch')
            <button class="text-white text-base bg-[#2640A1] px-8 py-2 rounded-md" type="submit">Done</button>
        </form>
    </div>
</div>
