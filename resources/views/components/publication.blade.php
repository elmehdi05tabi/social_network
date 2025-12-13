<div class="publication-container">
    <div class="profile" style="z-index:10;position: relative;">
        <img src="{{asset('storage/'.$publication->profile->image)}}" alt="" >
        <h3>{{$publication->profile->first_name}} {{$publication->profile->last_name}}</h3>
        <div class="created-at">
            <span>{{$publication->created_at->format('m-d H:i')}}</span>
        </div>
        <a href="{{route('profiles.show',$publication->profile_id)}}" class="stretched-link"></a>
    </div>
    @auth
    @if ($isAdmin)   
    <div class="actions">
        <a href="{{route('publications.edit',$publication->id)}}">Update</a>
        <form action="{{route('publications.destroy',$publication->id)}}" method="POST">
            @csrf
            @method("DELETE")
            <button onclick="return confirm('You Want Deleted This Publication')" >Delete</button>
        </form>
    </div>
    @endif
    @endauth
    <h2>{{$publication->title}}</h2>
    <p>{{$publication->body}}</p>
    @empty(!$publication->image)
    <img src="{{asset('storage/'.$publication->image)}}" alt="publication">
    @endempty
</div>