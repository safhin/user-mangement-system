@extends('templates.main')

@section('content')
    <!-- component -->
    <div class="bg-grey-lighter min-h-screen flex flex-col">
        <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">
            <div class="bg-white px-6 py-8 rounded shadow-md text-black w-full">
                <h1 class="mb-8 text-3xl text-center">Create user</h1>
                <form action="{{ route('users.update',$user->id) }}" method="post">
                    @csrf
                    @method('PATCH')
                    @include('admin.users.partials.form')
                    <button
                        type="submit"
                        class="w-full text-center py-3 rounded bg-green-500 text-white hover:bg-green-dark focus:outline-none my-1"
                    >Update User</button>
                </form>
            </div>
        </div>
    </div>
@endsection