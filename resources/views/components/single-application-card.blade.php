@props(['application', 'users'])


<div class="w-full bg-white rounded-xl px-4 flex items-center mt-4 py-4">
    <div class="w-4/12 ">
        <p class="truncate pl-5 text-sm fonts-medium">{!! $application->title !!}</p>
    </div>
    <div class="w-2/12 text-center border-l px-2">
        <p class="text-sm fonts-medium">{{ $application->created_at->format('Y-m-d') }}</p>
    </div>
    <div class="w-2/12 text-center border-l pl-5">
        <button id="dialog"
            class="{{ $application->reviewer ? 'pointer-events-none' : 'pointer-events-auto' }} text-sm fonts-medium px-3 py-1.5 
            {{ $application->review_status == 'approved'
                ? 'bg-[#F1F4F1] text-[#34A853]'
                : ($application->reviewer
                    ? 'bg-[#F1F4F1] text-[#34A853]'
                    : 'bg-[#FFEFEF] text-[#A83449]') }} rounded-lg">
            {{ $application->review_status == 'approved' || $application->review_status == 'rejected' ? 'Completed' : ($application->reviewer ? 'Assigned' : 'Not assigned') }}
        </button>
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
        <a href="/{{ auth()->user()->role }}/application/{{ $application->id }}"
            class="text-white text-sm fonts-medium px-2 py-1 bg-[#2640A1] rounded">See
            details</a>
        <span class="tooltip-text" id="fade">Not asisigned yet</span>
    </div>
</div>
@push('css')
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
@endpush

@push('scripts')
    <script>
        const id = <?php echo $application->id; ?>
        alert(id)
        const dialog = document.querySelector('dialog');
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
