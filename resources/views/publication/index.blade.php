<x-master title="Publications">
    @foreach ($publications as $publication)
        <x-publication :publication="$publication" />
    @endforeach
</x-master>