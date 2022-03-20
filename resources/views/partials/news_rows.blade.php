<div class="post-preview">
    <a href="post.html">
        <h2 class="post-title"> {{$row -> title}} </h2>
        <h3 class="post-subtitle">{{$row -> excerpt}}</h3>
    </a>
    <p class="post-meta">
       <img src = "{{asset('/storage/'.$row -> image)}}" width =200>
        <a href="#!">Start Bootstrap</a>
        on September 24, 2021
    </p>
</div>