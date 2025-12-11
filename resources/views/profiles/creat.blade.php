<x-master  title="Create Profile">
    <form action="{{route('profiles.store')}}" method="POST" enctype="multipart/form-data" class="create-form">
        @csrf
        <input type="text" placeholder="First Name" name="first_name" value="{{old('first_name')}}">
        @error('first_name')
            <div class="error">
                {{$message}}
            </div>
        @enderror
        <input type="text" placeholder="Last Name" name="last_name" value="{{old('last_name')}}">
          @error('last_name')
            <div class="error">
                {{$message}}
            </div>
        @enderror
        <input type="text" placeholder="Email" name="email" value="{{old('email')}}">
          @error('email')
            <div class="error">
                {{$message}}
            </div>
        @enderror
        <textarea type="text" placeholder="Bio" name="bio"></textarea value="{{old('bio')}}">
          @error('bio')
            <div class="error">
                {{$message}}
            </div>
        @enderror
        <input type="file" placeholder="Image" name="image" value="{{old('image')}}">
          @error('image')
            <div class="error">
                {{$message}}
            </div>
        @enderror
        <input type="password" placeholder="Password" name="password">
          @error('password')
            <div class="error">
                {{$message}}
            </div>
        @enderror
        <input type="password" placeholder="Password" name="password_confirmation">
        <button type="submit">Create Profile</button>
    </form>
</x-master>