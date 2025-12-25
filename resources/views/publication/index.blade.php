<x-master title="Publications">
    @auth
    <div class="create-pub">
        <a href="{{route('profiles.show',auth()->user()->id)}}">
            <img src="{{asset('storage/'.auth()->user()->image)}}" alt="">
        </a>
        <a href="{{route('publications.create')}}">Create Publication</a></li>
    </div>
    @endauth
    @foreach ($publications as $publication)
        <x-publication :publication="$publication" />
    @endforeach
</x-master>