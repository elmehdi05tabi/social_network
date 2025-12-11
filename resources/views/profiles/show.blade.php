<x-master  title="Profile Info">
    <div class="info-profile">
        <img src="{{asset('storage/'.$profile->image)}}" alt="">
        <h2>{{$profile->first_name." ".$profile->last_name}}</h2>
        <h4>Created At:{{$profile->created_at->format('Y-m-d')}}</h4>
        <p>{{$profile->bio}}</p>
        <span>Email:{{$profile->email}}</span>
    </div>
</x-master>