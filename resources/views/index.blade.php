<!DOCTYPE html>
<html lang="en">
@include('partials.header')
    <body>
        <!-- nav-->
        @include('partials.nav')
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('/storage/pages/page1.jpg')">
            <div class="page-text-slider container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>TravelAgency</h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <div class="ui-widget test">
            <label for="tags">Miasto:</label>
            <input id="tags">
            <button type="button" onclick="searchByCity()" class="btn_search">Szukaj</button>
        </div>
        <div class="container container_news px-4 px-lg-5 flex">
            
            <div class="margin-bottom row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7 d-flex news margin-bottom">
                    <!-- Post preview-->
                    @foreach($news as $row)
                      @include('partials.news_rows', ['row' => $row])
                    @endforeach
                </div>
                <div class="d-flex btn-read-more justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="/news/readmore">Zobacz więcej →</a></div>
            </div>
              <!-- swiper-->
              @include('partials.swiper')
             <!-- info-->
            @include('info')
            <!-- Gallery-->
            <h2 class="gallery-title">Galeria zdjęć</h2>
            <div  class="post-preview" id="gallery" style="display:none;">
            @foreach($gallery as $image)
                 <img alt ="{{$image -> tittle}}" src = "{{asset('/storage/'.$image -> image)}}" data-image= "{{asset('/storage/'.$image -> image)}}" style="display:none; ">
            @endforeach
            </div>
        </div>
         <!-- Footer-->
       @include('partials.footer')
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>

        <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">

  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
  
        <script type="text/javascript">


jQuery(document).ready(function(){
    jQuery("#gallery").unitegallery(
    );  
});
function searchByCity() {
    window.location.replace("http://127.0.0.1:8000/city/"+$('#tags').val());
}

$( function() {
    var availableTags = [
      "Paryż",
      "Barcelona",
    ];
    $( "#tags" ).autocomplete({
      source: availableTags
    });
  } );
</script>
</body>
</html>