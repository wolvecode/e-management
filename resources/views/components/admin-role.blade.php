<div class="">
    <dialog id="{{ $application->id }}" class="p-5 w-1/3 rounded">
        <button onclick="closed('<?php echo $application->id; ?>')">Close </button>
        <div class="mt-4 max-h-[400px] overflow-y-auto">
            <div class="flex justify-between text-gray-500">
                <p class="w-1/2">Name</p>
                <div class="w-1/2 flex">
                    <p class="w-1/2">Applications</p>
                    <p class="w-1/2"></p>
                </div>
            </div>

            @forelse (App\Models\User::where('role', 'reviewer')->where('specialization', $application->category)->get() as $user)
                <form class="mt-2"
                    action="/{{ explode('/', $_SERVER['REQUEST_URI'])[1] }}/{{ $application->id }}/{{ $user->id }}"
                    method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="flex justify-between">
                        <p class="w-1/2">{{ $user->name }}</p>
                        <div class="w-1/2 flex">
                            <p class="w-1/2 text-center">{{ $user->reviewer_application->count() }}</p>
                            <button
                                class="w-1/2 pointer-events-auto text-sm fonts-medium px-3 py-1.5 bg-[#F1F4F1] text-[#34A853]">
                                Assign
                            </button>
                        </div>

                    </div>
                </form>
            @empty
                <p class="text-center">No reviewer available</p>
            @endforelse
        </div>
    </dialog>
    <div class=" md:p-4 lg:p-6 ">
        <div class="flex justify-between">
            <div class="flex items-center">
                <img class="mr-2" width="30px" src="{{ asset('icons/list-blue.png') }}" alt="application">
                <p class="text-[#2640A1]">Application</p>
            </div>
            <div class="px-3 py-1 text-sm text-[#2640A1] bg-[#F3F4FA] rounded-xl">
                {{ $application->created_at->format('Y-m-d') }}
            </div>
        </div>
        <div
            class="overflow-y px-4 mt-2 {{ $application->review_status == 'approved' || $application->review_status == 'rejected' ? 'h-24' : 'h-32' }}  max-h-32">
            <p class="truncate text-lg font-light">
                {!! $application->description !!}
            </p>
        </div>

        <button
            class="mt-2 px-4 py-1 text-sm text-[#2640A1] bg-[#F3F4FA] rounded-xl capitalize">{{ $application->category }}
            Subject
        </button>
        <form action="/admin/letter/{{ $application->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            @if ($application->review_status == 'approved' || $application->review_status == 'rejected')
                <div class="flex justify-center mt-2">
                    <label class="block">
                        <div
                            class="after:content-['*'] after:ml-0.5 {{ $application->approval_letter ? 'after:text-green-500' : 'after:text-red-500' }} text-base font-medium text-slate-700">
                            Upload approval letter
                        </div>
                        <input type="file" name="approval_letter" id="">
                        @error('approval_letter')
                            <p class="text-red-500 text-xs">{{ $message }}</p>
                        @enderror
                    </label>
                </div>
                <div class="flex justify-center mt-5">
                    <button type="submit"
                        class="bg-[#F1F4F1] flex items-center px-6 py-1 text-[#1E1E1E] rounded-lg mr-4">
                        <img class="mr-2" width="16" src="{{ asset('icons/filled-upload.png') }}" alt="download">
                        <p class="">
                            Upload completed letter
                        </p>
                    </button>
                    <a href="{{ asset('storage/' . $application->edited_attachment ?? '') }}"
                        class="bg-[#F1F4F1]  flex items-center px-6 py-1 text-[#1E1E1E] rounded-lg" target="_blank">
                        <img class="mr-2" src="{{ asset('icons/cloud.png') }}" alt="download">
                        <p class="">Preview reviewed letter</p>
                    </a>
                </div>
            @endif

        </form>
    </div>
    @if ($application->review_status == 'approved')
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
    @endif

    @if (!$application->reviewer)
        <div class="flex justify-center border-t-2">
            <button onClick="myFunction('<?php echo $application->id; ?>')"
                class="text-base px-5 py-2 mt-5 mr-4 rounded-md bg-[#FFEFEF] text-[#A83449]" type="submit">
                Assign to reviewer
            </button>
            <a href="{{ asset('storage/' . $application->supporting_document ?? '') }}"
                class="bg-[#F1F4F1] flex items-center px-5 py-2 text-[#1E1E1E] rounded-lg mr-4 mt-5" target="_blank">
                <img class="mr-2" src="{{ asset('icons/cloud.png') }}" alt="download">
                <p class="">Supporting document</p>
            </a>
            <a href="{{ asset('storage/' . $application->attachment ?? '') }}"
                class="bg-[#F1F4F1] flex items-center px-5 py-2 text-[#1E1E1E] rounded-lg mr-4 mt-5" target="_blank">
                <img class="mr-2" src="{{ asset('icons/cloud.png') }}" alt="download">
                <p class="">Application document</p>
            </a>
        </div>
    @endif
    @if ($application->reviewer && !$application->edited_attachment)
        <div class="flex justify-center border-t-2">
            <button onClick="myFunction('<?php echo $application->id; ?>')"
                class="text-base px-6 py-2 mt-5 mr-4 rounded-md bg-[#FFEFEF] text-[#A83449]" type="submit">
                Assign to reviewer
            </button>
            <a href="{{ asset('storage/' . $application->attachment ?? '') }}"
                class="bg-[#F1F4F1] flex items-center px-6 py-2 text-[#1E1E1E] rounded-lg mr-4 mt-5" target="_blank">
                <img class="mr-2" src="{{ asset('icons/cloud.png') }}" alt="download">
                <p class="">Application document</p>
            </a>
        </div>
    @endif
</div>

@push('scripts')
    <script>
        // "Show the dialog" button opens the dialog modal
        function myFunction(id) {
            const dialog = document.getElementById(id);
            dialog.showModal();
        }
        //close modal
        function closed(id) {
            const dialog = document.getElementById(id);
            dialog.close();
        }
    </script>
    <script>
        const dropdown = document.getElementById("myDropdown");
        dropdown.addEventListener("change", function() {
            document.getElementById("myForm").submit();
        });
    </script>
@endpush
