<x-master title="Login">
    <form action="{{route('login')}}" method="POST" enctype="multipart/form-data" class="create-form">
        @csrf
        <input type="text"  placeholder="email" name="email">
        <input type="password" placeholder="Password" name="password">
        @error('email')
            <div class="error">{{$message}}</div>
        @enderror
        <button type="submit">Login</button>
        <a href="{{route('profiles.create')}}">Create Account</a>
    </form>
</x-master>