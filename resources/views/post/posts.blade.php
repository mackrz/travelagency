@include('partials.header')
@include('partials.nav')
<div class="posts-rows">
    @foreach($posts as $row)
    <div class="post-preview post-row">
        <a href="/news/{{ $row->slug }}">
            <h2 class="post-title"> {{$row -> title}} </h2>
        </a>
        <p class="post-subtitle">{{$row -> excerpt}}</p>      
        <p class="post-meta">
         <img src = "{{asset('/storage/'.$row -> image)}}" width = "100%">
        </p>
        <p>{{$row -> created_at}}</p>
    </div>
    @endforeach

 <div> {{ $posts->links() }}</div>
  
</div>
@include('partials.footer')