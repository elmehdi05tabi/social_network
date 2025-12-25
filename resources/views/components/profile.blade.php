<div class="profile-card">
    <div class="info" style="z-index:1">
        <div class="image-profile">
            <img src="{{asset('storage/'.$profile->image)}}" alt="profile_image">
        </div>
        <div class="card-text">
            <h3>{{$profile->first_name." ".$profile->last_name}}</h3>
            <p>{{Str::limit($profile->bio,20)}}</p>
            <a href="{{route('profiles.show',$profile->id)}}">Show Profile</a>
        </div>
    </div>
    @auth
    <div class="actions" style="z-index: 10;position: relative;">
        @can('update',$profile)
        <a href="{{route('profiles.edit',$profile->id)}}">Update</a>
        @endcan
        @can('delete',$profile)
            
        <form action="{{route('profiles.destroy',$profile->id)}}" method="POST" 
            class="action-form">
            @method("DELETE")
            @csrf
            <button type="submit" onclick="return confirm('You want Delete ' $profile->first_name)">Delete</button>
        </form>
        @endcan
    </div>
    @endauth
</div>