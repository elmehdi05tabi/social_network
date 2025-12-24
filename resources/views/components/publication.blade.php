<div class="publication-container">
    <div class="profile" style="z-index:10;position: relative;">
        <img src="{{ asset('storage/' . $publication->profile->image) }}" alt="">
        <h3>{{ $publication->profile->first_name }} {{ $publication->profile->last_name }}</h3>
        <div class="created-at">
            <span>{{ $publication->created_at->format('m-d H:i') }}</span>
        </div>
        <a href="{{ route('profiles.show', $publication->profile_id) }}" class="stretched-link"></a>
    </div>
    @auth
        <div class="actions">
            @can('update', $publication)
            @csrf
                <form action="{{route('publications.edit',$publication)}}" method="GET">
            
            <button>Edit</button>
        </form>
            @endcan
            @can('delete', $publication)
                <form action="{{ route('publications.destroy', $publication) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button onclick="return confirm('You Want Deleted This Publication')">Delete</button>
                </form>
            @endcan
        </div>
    @endauth
    <h2>{{ $publication->title }}</h2>
    <p>{{ $publication->body }}</p>
    @empty(!$publication->image)
        <img src="{{ asset('storage/' . $publication->image) }}" alt="publication">
    @endempty
</div>
