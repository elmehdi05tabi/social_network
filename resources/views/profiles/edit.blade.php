<x-master  title="Create Profile">
    <form action="{{route('profiles.update',$profile->id)}}" method="POST" enctype="multipart/form-data" class="create-form">
        @method("PUT")
        @csrf
        <input type="text" placeholder="First Name" name="first_name" value="{{old('first_name',$profile->first_name)}}">
        @error('first_name')
            <div class="error">
                {{$message}}
            </div>
        @enderror
        <input type="text" placeholder="Last Name" name="last_name" value="{{old('last_name',$profile->first_name)}}">
          @error('last_name')
            <div class="error">
                {{$message}}
            </div>
        @enderror
        <input type="text" placeholder="Email" name="email" value="{{old('email',$profile->email)}}">
          @error('email')
            <div class="error">
                {{$message}}
            </div>
        @enderror
        <textarea type="text" placeholder="Bio" name="bio"></textarea value="{{old('bio',$profile->bio)}}">
          @error('bio')
            <div class="error">
                {{$message}}
            </div>
        @enderror
        <input type="file" placeholder="Image" name="image" value="{{old('image',$profile->image)}}">
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
        <button type="submit">Update Profile</button>
    </form>
</x-master>