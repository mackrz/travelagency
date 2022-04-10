<link href="{{ asset('/css/art.css') }}" rel="stylesheet" />

<div class="art-view">   
        <h2 class="art-title"> {{$post -> title}} </h2>
        <h3 class="art-subtitle">{{$post -> excerpt}}</h3>
    <p class="art-meta">
       <img src = "{{asset('/storage/'.$post -> image)}}" >
    </p>
    <div class="art-description">
        {!! $post -> body !!}
    </div>
    <p>{{$post -> created_at}}</p>
    <a href ="{{ url()->previous() }}">Wróć</a>
</div>

