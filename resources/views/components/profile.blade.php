@props(['user'])

<div class="p-3 md:p-5">
    <div class="w-full max-w-4xl mx-auto bg-gray-100 rounded-xl p-4 md:p-6 mt-5">
        {{-- Profile Update Form --}}
        <form action="/{{ explode('/', $_SERVER['REQUEST_URI'])[1] }}/{{ $user->id }}" method="post"
            enctype="multipart/form-data" class="space-y-6">
            @csrf
            @method('PATCH')

            {{-- Profile Picture and Basic Info --}}
            <div class="flex flex-col md:flex-row bg-white rounded-lg p-4 md:p-8 gap-5">
                <div class="flex flex-col items-center md:items-start">
                    <div class="w-24 h-24 rounded-full overflow-hidden">
                        <img class="w-full h-full object-cover rounded-full"
                            src="{{ $user->profileLink ? asset('storage/' . $user->profileLink) : asset('icons/default-profile.png') }}"
                            alt="profile">
                    </div>
                    <label
                        class="flex text-center relative cursor-pointer rounded-md bg-white font-semibold text-black hover:opacity-60 mt-3">
                        <span class="text-xs text-center mx-auto">Edit Picture</span>
                        <input id="profileLink" onchange="myFunction()" name="profileLink" type="file"
                            class="sr-only">
                    </label>
                    <p id="showName" class="text-xs text-gray-500 mt-1"></p>
                    @error('profileLink')
                        <p class="text-red-500 text-xs mt-1">Upload Image</p>
                    @enderror
                </div>

                {{-- User Info --}}
                <div class="flex-1 space-y-5">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <label>
                            <span class="block text-sm font-medium text-slate-700">Name <span
                                    class="text-red-500">*</span></span>
                            <input type="text" name="firstName"
                                class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 
                                focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1"
                                placeholder="Enter First Name" value="{{ explode(' ', $user->name)[0] }}" />
                            @error('name')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </label>

                        <label>
                            <span class="block text-sm font-medium text-slate-700">Other Names <span
                                    class="text-red-500">*</span></span>
                            <input type="text" name="otherName"
                                class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 
                                focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1"
                                placeholder="Enter Other Names" value="{{ explode(' ', $user->name)[1] ?? '' }}" />
                            @error('name')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </label>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <label>
                            <span class="block text-sm font-medium text-slate-700">Email <span
                                    class="text-red-500">*</span></span>
                            <input type="email" name="email"
                                class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 
                                focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1"
                                placeholder="Enter Email" value="{{ $user->email }}" />
                            @error('email')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </label>

                        <label>
                            <span class="block text-sm font-medium text-slate-700">Phone Number <span
                                    class="text-red-500">*</span></span>
                            <input type="contact" name="contact"
                                class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 
                                focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1"
                                placeholder="Enter Phone" value="{{ $user->contact }}" />
                            @error('contact')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </label>
                    </div>
                </div>
            </div>

            {{-- Additional Details --}}
            <div class="bg-white rounded-lg p-4 md:p-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <label>
                        <span class="block text-sm font-medium text-slate-700">Institution <span
                                class="text-red-500">*</span></span>
                        <input type="text" name="institution"
                            class="mt-1 px-3 py-2 bg-gray-50 capitalize border shadow-sm border-slate-300 
                            focus:outline-none block w-full rounded-md sm:text-sm focus:ring-0"
                            disabled value="{{ $user->institution }}" />
                    </label>

                    <label>
                        <span class="block text-sm font-medium text-slate-700">Faculty <span
                                class="text-red-500">*</span></span>
                        <input type="text" name="faculty"
                            class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 
                            focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1"
                            placeholder="Enter Faculty" value="{{ $user->faculty }}" />
                    </label>

                    <label>
                        <span class="block text-sm font-medium text-slate-700">Specialization <span
                                class="text-red-500">*</span></span>
                        <input type="text" name="specialization"
                            class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 
                            focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1"
                            placeholder="Enter Specialization" value="{{ $user->specialization }}" />
                    </label>

                    <label>
                        <span class="block text-sm font-medium text-slate-700">Category <span
                                class="text-red-500">*</span></span>
                        <input type="text" name="category"
                            class="mt-1 px-3 py-2 bg-gray-50 capitalize border shadow-sm border-slate-300 
                            focus:outline-none block w-full rounded-md sm:text-sm focus:ring-0"
                            disabled value="{{ $user->category }}" />
                    </label>
                </div>
            </div>

            {{-- Update Button --}}
            <div class="flex justify-end">
                <button
                    class="text-white text-base md:text-lg bg-[#2640A1] px-6 md:px-8 py-2 md:py-3 rounded-md hover:opacity-90"
                    type="submit">
                    Update
                </button>
            </div>
        </form>

        {{-- Change Password Form --}}
        <form action="/{{ explode('/', $_SERVER['REQUEST_URI'])[1] }}/changepassword/{{ $user->id }}"
            method="post" enctype="multipart/form-data" class="mt-8 space-y-6">
            @csrf
            @method('PATCH')

            <div class="bg-white rounded-lg p-4 md:p-8">
                <h1 class="text-base md:text-lg font-semibold mb-4">Password Reset</h1>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <label>
                        <span class="block text-sm font-medium text-slate-700">Current Password <span
                                class="text-red-500">*</span></span>
                        <input type="password" name="current_password"
                            class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 
                            focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1"
                            placeholder="Enter current password" />
                        @error('current_password')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </label>

                    <label>
                        <span class="block text-sm font-medium text-slate-700">New Password <span
                                class="text-red-500">*</span></span>
                        <input type="password" name="new_password"
                            class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 
                            focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1"
                            placeholder="Enter new password" />
                        @error('new_password')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </label>
                </div>

                <div class="mt-5">
                    <label class="block md:w-1/2">
                        <span class="block text-sm font-medium text-slate-700">Confirm Password <span
                                class="text-red-500">*</span></span>
                        <input type="password" name="new_password_confirmation"
                            class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 
                            focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1"
                            placeholder="Confirm password" />
                        @error('new_password_confirmation')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </label>
                </div>

                <div class="flex justify-center mt-5">
                    <button
                        class="text-white text-base md:text-lg bg-[#34A853] px-5 md:px-6 py-2 md:py-3 rounded-md hover:opacity-90"
                        type="submit">
                        Change Password
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

@push('scripts')
    <script>
        function myFunction() {
            const fileInput = document.getElementById("profileLink");
            const fileName = fileInput.value.split("\\").pop();
            document.getElementById("showName").innerText = fileName;
        }
    </script>
@endpush
