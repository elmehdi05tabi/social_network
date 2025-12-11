<div class="publication-container">
    <h2>{{$publication->title}}</h2>
    <p>{{$publication->body}}</p>
    <img src="{{asset('storage/'.$publication->image)}}" alt="publication">
</div>