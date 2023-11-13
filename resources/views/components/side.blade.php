<div class="">       
    <div class="w-full flex justify-end h-18 border-b-2 border-black border-opacity-[.12] py-3 px-6">
        <div class="flex items-center">
            <img class="mr-5" width="44px" src="{{ asset('images/profile.png') }}" alt="profile">
            <div class="pl-4 border-l border-[#000]">
                <p class="">Biodun Azeez</p>
                <h4 class="text-[#2640A1] text-xl fonts-semibold">Dashboard</h4>
            </div>
            </div>
        </div>
    </div>
    {{ $slot }}
    {{-- @yield('side') --}}
</div>