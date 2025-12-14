<x-master  title="Profile Info">
    <div class="info-profile">
        <img src="{{asset('storage/'.$profile->image)}}" alt="">
        <h2>{{$profile->first_name." ".$profile->last_name}}</h2>
        <h4>Created At:{{$profile->created_at->format('Y-m-d')}}</h4>
        <p>{{$profile->bio}}</p>
        <span>Email:{{$profile->email}}</span>
    </div>
    <hr>
    <div class="publications-profile">
        <h3>{{$profile->first_name." ".$profile->last_name}} Publications</h3>
        @foreach ($profile->publications as $publication )
            <x-publication :publication="$publication"  />
        @endforeach
    </div>
</x-master>