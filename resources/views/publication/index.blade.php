<x-master title="Publications">
    @foreach ($publications as $publication)
        <x-publication :publication="$publication" :isAdmin="auth()->user()->id==$publication->profile_id" />
    @endforeach
</x-master>