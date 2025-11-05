@props(['user'])

<div class="md:w-64 lg:w-72 bg-white rounded-xl md:p-4 lg:p-6 mt-5">
    <div class="flex items-center">
        <div class="flex items-center bg-[#F3F4FA] px-4 py-1 rounded-lg">
            <img class="mx-auto mr-2" width="10px" src="{{ asset('icons/profile.png') }}" alt="profile">
            <p class="text-sm text-[#2640A1]">Reviewer</p>
        </div>
        <img class="ml-auto" width="20px" src="{{ asset('icons/message.png') }}" alt="message">
    </div>
    <div class="h-32 w-32 mx-auto mt-5">
        <img class="h-full w-full rounded-full"
            src="{{ $user->profileLink ? asset('storage/' . $user->profileLink) : asset('icons/default-profile.png') }}"
            alt="profile">
    </div>
    <p class="mt-3 text-center text-[#2640A1]">{{ $user->name }}</p>
    <div class="flex justify-center mt-2">
        <a href="tel:{{ $user->contact }}" class="inline-flex items-center bg-[#34A853] px-3 py-1 rounded-lg">
            <img class="mx-auto mr-2" width="10px" src="{{ asset('icons/call.png') }}" alt="profile">
            <p class="text-white">{{ $user->contact }}</p>
        </a>
    </div>
    <p class="text-center text-sm text-[#2640A1] mt-2">{{ $user->email }}</p>
    <div class="flex justify-end mt-5">
        <p class="text-sm text-[#2640A1] bg-gray-100 px-5 py-1 rounded-xl capitalize">{{ $user->specialization }}</p>
    </div>
</div>
