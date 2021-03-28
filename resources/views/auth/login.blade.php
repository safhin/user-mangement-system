@extends('templates.main')

@section('content')
    <!-- component -->
    <div class="bg-grey-lighter min-h-screen flex flex-col">
        <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">
            <div class="bg-white px-6 py-8 rounded shadow-md text-black w-full">
                <h1 class="mb-8 text-3xl text-center">Sign up</h1>
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <input type="text" class="block border border-grey-light w-full p-3 rounded mb-4" name="email" placeholder="Email"/>
                    @error('email')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
    
                    <input type="password" class="block border border-grey-light w-full p-3 rounded mb-4" name="password" id="password" placeholder="Password" />
                    @error('password')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                    <button
                        type="submit"
                        class="w-full text-center py-3 rounded bg-green-500 text-white hover:bg-green-dark focus:outline-none my-1"
                    >Login</button>
                </form>
            </div>

            <div class="text-grey-dark mt-6">
                Don't have an account? 
                <a class="no-underline border-b border-blue text-blue" href="{{ route('register') }}">
                    Sign Up
                </a>.
            </div>
        </div>
    </div>
@endsection