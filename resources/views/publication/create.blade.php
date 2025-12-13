<x-master  title="Create Publication">
    <form action="{{route('publications.store')}}" method="POST" enctype="multipart/form-data" class="create-form">
        @csrf
        <input type="text" placeholder="Title" name="title" value="{{old('title')}}">
        @error('first_name')
            <div class="error">
                {{$message}}
            </div>
        @enderror
        <textarea type="text" placeholder="Body" name="body"></textarea value="{{old('body')}}">
          @error('body')
            <div class="error">
                {{$message}}
            </div>
        @enderror
        <input type="file" placeholder="Image" name="image" value="{{old('image')}}">
          @error('image')
            <div class="error">
                {{$message}}
            </div>
        @enderror
        <button type="submit">Create Publication</button>
    </form>
</x-master>