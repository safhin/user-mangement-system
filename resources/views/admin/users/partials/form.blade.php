<input type="text" 
    class="block border border-grey-light w-full p-3 rounded mb-4" 
    name="name" id="name" 
    placeholder="Name" 
    value="{{ old('name') }} @isset($user){{ $user->name }} @endisset"
/>
@error('name')
    <span class="text-red-500">{{ $message }}</span>
@enderror

<input type="text" 
    class="block border border-grey-light w-full p-3 rounded mb-4" 
    name="email" placeholder="Email" 
    value="{{ old('email') }} @isset($user){{ $user->email }} @endisset"
/>
@error('email')
    <span class="text-red-500">{{ $message }}</span>
@enderror
@isset($create)
    <input type="password" class="block border border-grey-light w-full p-3 rounded mb-4" name="password" id="password" placeholder="Password" />
@endisset
@error('password')
    <span class="text-red-500">{{ $message }}</span>
@enderror
<div class="md-3">
    @foreach ($roles as $role)
        <input type="checkbox" 
            name="roles[]" 
            value="{{ $role->id }}" 
            id="{{ $role->role }} @isset($user)"
            @if(in_array($role->id, $user->roles->pluck('id')->toArray())) checked @endif @endisset
        >
        <label for="{{ $role->role }}">
            {{ $role->role }}
        </label>
    @endforeach
</div>