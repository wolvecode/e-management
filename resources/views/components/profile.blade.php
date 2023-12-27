@props(['user'])


<div class="p-5">
    <div class="2xl:max-h-[780px] h-[600px] overflow-y-auto bg-gray-100 rounded-xl p-10 mt-5">
        <form action="/{{ explode('/', $_SERVER['REQUEST_URI'])[1] }}/{{ $user->id }}" method="post"
            enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="flex bg-white rounded-lg p-8">
                <div class="mr-4">
                    <div class="w-20 h-20 rounded-full">
                        <img class="w-full h-full rounded-full"
                            src="{{ $user->profileLink ? asset('storage/' . $user->profileLink) : asset('icons/default-profile.png') }}"
                            alt="profile">
                    </div>
                    <label
                        class="flex text-center relative cursor-pointer rounded-md bg-white font-semibold text-black hover:opacity-50 mt-2">
                        <span class="text-xs text-center mx-auto">Edit Picture</span>

                        <input id="profileLink" onchange="myFunction()" name="profileLink" type="file"
                            class="sr-only">
                    </label>
                    <p id="showName" class="w-10 text-xs text-light"></p>
                    @error('profileLink')
                        <p class="text-red-500 text-xs mt-1">Upload Image</p>
                    @enderror
                </div>
                <div class="w-full">
                    <div class="flex">
                        <label class="w-1/2 mr-5">
                            <span
                                class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                                Name
                            </span>
                            <input type="text" name="firstName"
                                class="h-12 mt-1 px-3 py-2 bg-white 
                            border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none
                            focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm 
                            focus:ring-1"
                                placeholder="Enter FirstName" value="{{ explode(' ', $user->name)[0] }}" />
                            @error('name')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </label>
                        <label class="w-1/2">
                            <span
                                class="after:content-['*'] after:ml-0.5 after:text-red-500  text-sm font-medium text-slate-700">
                                Other Names
                            </span>
                            <input type="text" name="otherName"
                                class="h-12 mt-1 px-3 py-2 bg-white 
                            border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none
                            focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm 
                            focus:ring-1"
                                placeholder="Enter Other Names" value="{{ explode(' ', $user->name)[1] }}" />
                            @error('name')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </label>
                    </div>
                    <div class="flex mt-5">
                        <label class="w-1/2 mr-5">
                            <span
                                class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                                Email
                            </span>
                            <input type="email" name="email"
                                class="h-12 mt-1 px-3 py-2 bg-white 
                            border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none
                            focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm 
                            focus:ring-1"
                                placeholder="Enter Email" value="{{ $user->email }}" />
                            @error('email')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </label>
                        <label class="w-1/2">
                            <span
                                class="after:content-['*'] after:ml-0.5 after:text-red-500  text-sm font-medium text-slate-700">
                                Phone Number
                            </span>
                            <input type="contact" name="contact"
                                class="h-12 mt-1 px-3 py-2 bg-white 
                            border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none
                            focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm 
                            focus:ring-1"
                                placeholder="Enter Phone" value="{{ $user->contact }}" />
                            @error('contact')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </label>
                    </div>
                </div>
            </div>
            <div class="flex bg-white rounded-lg p-8 mt-6">
                <div class="w-full">
                    <div class="flex">
                        <label class="w-1/2 mr-5">
                            <span
                                class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                                Institution
                            </span>
                            <input type="text" name="institution"
                                class="h-12 mt-1 px-3 py-2 bg-white 
                            border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none
                            focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm 
                            focus:ring-1"
                                placeholder="Enter Institution" value="{{ $user->institution }}" />
                            @error('institution')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </label>
                        <label class="w-1/2">
                            <span
                                class="after:content-['*'] after:ml-0.5 after:text-red-500  text-sm font-medium text-slate-700">
                                Faculty
                            </span>
                            <input type="text" name="faculty"
                                class="h-12 mt-1 px-3 py-2 bg-white 
                            border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none
                            focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm 
                            focus:ring-1"
                                placeholder="Enter Faculty" value="{{ $user->faculty }}" />
                            @error('faculty')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </label>
                    </div>
                    <div class="flex mt-5">
                        <label class="w-1/2 mr-5">
                            <span
                                class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                                Specialization
                            </span>
                            <input type="text" name="specialization"
                                class="h-12 mt-1 px-3 py-2 bg-white 
                            border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none
                            focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm 
                            focus:ring-1"
                                placeholder="Enter Specialization" value="{{ $user->specialization }}" />
                            @error('specialization')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </label>
                    </div>
                </div>
            </div>
            <div class="flex justify-end mt-5">
                <button class="text-white text-lg bg-[#2640A1] px-8 py-3 rounded-md" type="submit">Update</button>
            </div>
        </form>
        <form action="/{{ explode('/', $_SERVER['REQUEST_URI'])[1] }}/changepassword/{{ $user->id }}"
            method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="flex bg-white rounded-lg p-8 mt-6">
                <h1 class="">Password Reset</h1>
                <div class="w-full">
                    <div class="flex">
                        <label class="w-1/2 mr-5">
                            <span
                                class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                                Current Password
                            </span>
                            <input type="password" name="current_password"
                                class="h-12 mt-1 px-3 py-2 bg-white 
                            border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none
                            focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm 
                            focus:ring-1"
                                value="{{ old('current_password') }}" placeholder="Enter current password" />
                            @error('current_password')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </label>
                        <label class="w-1/2">
                            <span
                                class="after:content-['*'] after:ml-0.5 after:text-red-500  text-sm font-medium text-slate-700">
                                New Password
                            </span>
                            <input type="password" name="new_password"
                                class="h-12 mt-1 px-3 py-2 bg-white 
                            border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none
                            focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm 
                            focus:ring-1"
                                value="{{ old('new_password') }}" placeholder="Enter new password" />
                            @error('new_password')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </label>
                    </div>
                    <div class="flex mt-5">
                        <label class="w-1/2 mr-5">
                            <span
                                class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                                Confirm Password
                            </span>
                            <input type="password" name="new_password_confirmation"
                                class="h-12 mt-1 px-3 py-2 bg-white 
                            border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none
                            focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm 
                            focus:ring-1"
                                value="{{ old('new_password_confirmation') }}" placeholder="Confirm password" />
                            @error('new_password_confirmation')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </label>
                    </div>
                    <div class="flex justify-center mt-5">
                        <button class="text-white text-lg bg-[#34A853] px-4 py-2 rounded-md" type="submit">Change
                            Password</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>


@push('scripts')
    <script>
        function myFunction() {
            var getValue = document.getElementById("profileLink").value
            var passing = getValue.substring(getValue.lastIndexOf("\\") + 1, getValue.length)
            document.getElementById("showName").innerHTML = passing;
        }
    </script>
@endpush
