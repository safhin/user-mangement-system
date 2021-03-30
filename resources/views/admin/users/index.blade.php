@extends('templates.main')

@section('content')
    <h3>Users</h3>
    <table class="rounded-t-lg m-5 w-5/6 mx-auto bg-gray-200 text-gray-800">
        <tr class="text-left border-b-2 border-gray-300">
            <th class="px-4 py-3">#Id</th>
            <th class="px-4 py-3">Name</th>
            <th class="px-4 py-3">Email</th>
            <th class="px-4 py-3">Action</th>
        </tr>
        
        @foreach ($users as $user)
            <tr class="bg-gray-100 border-b border-gray-200">
                <td class="px-4 py-3">{{ $user->id }}</td>
                <td class="px-4 py-3">{{ $user->name }}</td>
                <td class="px-4 py-3">{{ $user->email }}</td>
                <td class="px-4 py-3">
                    <a href="{{ route('users.edit',$user->id) }}" class="bg-blue-500 px-4 py-2 rounded-sm text-white" role="button">Edit</a>
                    <button type="button" class="bg-red-500 px-4 py-2 rounded-sm text-white" onclick="event.preventDefault(); document.getElementById('delete-user-form-{{ $user->id }}').submit()">Delete</button>
                    <form id="delete-user-form-{{ $user->id }}" action="{{ route('users.destroy',$user->id) }}" method="post" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                </td>
            </tr> 
        @endforeach
    </table>
    {{ $users->links() }}
@endsection