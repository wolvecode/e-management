@extends('layouts.login')
@section('title', 'Reviewer Login')

@section('form')
    <div class="flex mt-5">
        <label class="w-1/2 mr-5">
            <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">
                Phone Number
            </span>
            <input type="contact" name="contact"
                class="h-12 mt-1 px-3 py-2 bg-white 
            border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none
            focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm 
            focus:ring-1"
                placeholder="Enter Contact" value="{{ old('contact') }}" />
            @error('contact')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </label>
        <label class="w-1/2">
            <span class="after:content-['*'] after:ml-0.5 after:text-red-500  text-sm font-medium text-slate-700">
                Research Type
            </span>

            <select name="specialization" id=""
                class="h-12 px-3 py-2 bg-white
            border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none
            focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm 
            focus:ring-1">
                <option value="human">Human</option>
                <option value="animal">Animal</option>
            </select>
            @error('specialization')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </label>
    </div>
@endsection
