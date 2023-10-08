@extends('layouts.login')

@section('title', 'Reviewer Login')

@section('form')
    <div class="flex mt-5">
        <label class="w-1/2 mr-5">
            <span class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-semibold text-slate-700">
                Phone Number
            </span>
            <input type="email" name="email" class="h-12 mt-1 px-3 py-2 bg-white 
            border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none
            focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm 
            focus:ring-1" placeholder="Enter Email" />
        </label>
        <label class="w-1/2">
            <span class="after:content-['*'] after:ml-0.5 after:text-red-500  text-sm font-semibold text-slate-700">
                Research Type
            </span>
            <select name="research" id="" class="h-12 px-3 py-2 bg-white
            border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none
            focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm 
            focus:ring-1">
                <option value="">Human</option>
                <option value="">Animl</option>
            </select>
        </label>
    </div>
@endsection