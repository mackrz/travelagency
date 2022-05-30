<link href="{{ asset('/css/art.css') }}" rel="stylesheet" />
<link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
<link rel="stylesheet" href=" {{ asset('/js/jquery/jquery-ui.css') }}">
<script src=" {{ asset('/js/jquery/external/jquery/jquery.js') }}"></script>
<script src=" {{ asset('/js/jquery/jquery-ui.js') }}"></script>
<script src=" {{ asset('/js/art.js') }}"></script>
<meta name="csrf-token" content="{{ csrf_token() }}" />

@include('partials.nav')
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
    <div class="art-reservation">   
    <form data-action="{{ route('ajaxRequest.post') }}" method="POST" enctype="multipart/form-data" id="add-reservation">
        <input type="hidden" id="travel_id" name="travel_id" value = "{{$post->id}}">
        <label for="reservation_start">Zarezerwuj od:</label>    
        <input type="text" name="reservation_start" id="reservation_start" autocomplete='off'/>
        <label for="travel_time">Czas pobytu:</label>
            <select name="travel_time" id="travel_time">
                <option value="Tydzień">Tydzień</option>
                <option value="Dwa tygodnie">Dwa tygodnie</option>
                <option value="Weekend">Weekend</option>
            </select>
        <button type="submit" value="Zarezerwuj">Zarezerwuj</button> 
    </form>
    </div>

    <a href ="{{ url()->previous() }}">Wróć</a>
</div>
