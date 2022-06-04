<div class="container">
  <div class="row">
    <div class="col-12">
        <!-- Slider main container -->
      <div class="swiper-container">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide"><img src="{{asset('/storage/swiper/1.png')}}" width="100%" alt="" ></div>
        <div class="swiper-slide"><img src="{{asset('/storage/swiper/2.png')}}" width="100%" alt="" ></div>
    </div>
</div>
    </div>
  </div>
</div>
<link rel="stylesheet"href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    var mySwiper = new Swiper ('.swiper-container', {
    // Optional parameters
    direction: 'vertical',
    loop: true,
    effect: 'cube',
    autoplay: {
     delay: 5000,
    },
    cubeEffect: {
      slideShadows: false,
      shadow: false,
    },
  })
</script>

