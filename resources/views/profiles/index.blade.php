<x-master title="Profiles">
    <div class="profiles-grid">
        @foreach ($profiles as $profile )
        <x-profile :profile="$profile" ></x-profile>
        @endforeach
    </div>
    {{$profiles->links()}}
</x-master>