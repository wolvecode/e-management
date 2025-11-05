@props(['application'])

<tr class="text-sm text-gray-700 hover:bg-gray-50 transition-all duration-200">
    {{-- Application Title --}}
    <td class="py-3 px-4">
        <div class="flex flex-col sm:flex-row sm:items-center">
            <span class="font-medium text-gray-800 text-base sm:text-sm">{{ $application->title }}</span>
            <span class="sm:hidden mt-1 text-xs text-gray-500">
                {{ $application->created_at->format('M d, Y') }}
            </span>
        </div>
    </td>

    {{-- App Number (Visible only for Admin) --}}
    @if (auth()->user()->role == 'admin' || auth()->user()->role == 'super_admin')
        <td class="py-3 px-4 text-center text-gray-600 text-sm whitespace-nowrap">
            {{ $application->app_no ?? 'N/A' }}
        </td>
    @endif

    {{-- Date Submitted --}}
    <td class="py-3 px-4 text-center text-gray-600 text-sm whitespace-nowrap hidden sm:table-cell">
        {{ $application->created_at->format('M d, Y') }}
    </td>

    {{-- Reviewer Status --}}
    <td class="py-3 px-4 text-center">
        <span
            class="inline-block text-xs sm:text-sm font-semibold px-3 py-1 rounded-full
            @if ($application->reviewer_status == 'pending') bg-yellow-100 text-yellow-700
            @elseif ($application->reviewer_status == 'approved') bg-green-100 text-green-700
            @elseif ($application->reviewer_status == 'rejected') bg-red-100 text-red-700
            @else bg-gray-100 text-gray-600 @endif">
            {{ ucfirst($application->reviewer_status ?? 'Pending') }}
        </span>
    </td>

    {{-- Application Status --}}
    <td class="py-3 px-4 text-center">
        <span
            class="inline-block text-xs sm:text-sm font-semibold px-3 py-1 rounded-full
            @if ($application->status == 'pending') bg-yellow-100 text-yellow-700
            @elseif ($application->status == 'approved') bg-green-100 text-green-700
            @elseif ($application->status == 'rejected') bg-red-100 text-red-700
            @else bg-gray-100 text-gray-600 @endif">
            {{ ucfirst($application->status ?? 'Pending') }}
        </span>
    </td>

    {{-- Action Buttons --}}
    <td class="py-3 px-4 text-center">
        <div class="flex justify-center gap-2 flex-wrap">
            <a href="/{{ auth()->user()->role }}/application/{{ $application->id }}"
                class="text-white bg-[#325AB3] hover:bg-[#274894] text-xs sm:text-sm px-3 py-1.5 rounded-md transition">
                View
            </a>
            <a href="{{ asset('storage/' . $application->attachment) }}" target="_blank"
                class="text-[#325AB3] border border-[#325AB3] hover:bg-[#325AB3] hover:text-white text-xs sm:text-sm px-3 py-1.5 rounded-md transition">
                File
            </a>
        </div>
    </td>
</tr>

{{-- Mobile responsive block (card view) --}}
<tr class="sm:hidden border-t border-gray-200">
    <td colspan="6" class="py-3 px-4">
        <div class="flex flex-col gap-2 text-sm text-gray-600">
            <div class="flex justify-between">
                <span class="font-semibold text-gray-800">Reviewer:</span>
                <span>{{ ucfirst($application->reviewer_status ?? 'Pending') }}</span>
            </div>
            <div class="flex justify-between">
                <span class="font-semibold text-gray-800">Status:</span>
                <span>{{ ucfirst($application->status ?? 'Pending') }}</span>
            </div>
            <div class="flex justify-between">
                <span class="font-semibold text-gray-800">Submitted:</span>
                <span>{{ $application->created_at->format('M d, Y') }}</span>
            </div>
        </div>
    </td>
</tr>


@push('css')
    <style>
        .tooltip-text {
            position: absolute;
            top: -40px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 10;
            color: white;
            font-size: 12px;
            background-color: #192733;
            width: 120px;
            border-radius: 10px;
            padding: 5px;
            opacity: 0;
            transition: opacity 0.3s ease;
            pointer-events: none;
        }

        .hover-text:hover .tooltip-text {
            opacity: 1;
        }
    </style>
@endpush
