  <!-- nav-->

<div class="post-preview">
    <a href="/news/{{ $row->slug }}">
        <h2 class="post-title"> {{$row -> title}} </h2>
        <h3 class="post-subtitle">{{$row -> excerpt}}</h3>
    </a>
    <p class="post-meta">
       <img src = "{{asset('/storage/'.$row -> image)}}" width =400>
    </p>
    <p>{{$row -> created_at}}</p>
</div>

