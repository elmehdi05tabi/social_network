<x-master  title="Update  Publication">
    <form action="{{route('publications.update',$publication->id)}}" method="POST" enctype="multipart/form-data" class="create-form">
        @method("PUT")
        @csrf
        <input type="text" placeholder="Title" name="title" value="{{old('title',$publication->title)}}">
        @error('first_name')
            <div class="error">
                {{$message}}
            </div>
        @enderror
        <textarea type="text" placeholder="Body" name="body">{{old('body',$publication->body)}}</textarea >
          @error('body')
            <div class="error">
                {{$message}}
            </div>
        @enderror
        <input type="file" placeholder="Image" name="image" value="{{old('image',$publication->image)}}">
          @error('image')
            <div class="error">
                {{$message}}
            </div>
        @enderror
        <button type="submit">Create Publication</button>
    </form>
</x-master>