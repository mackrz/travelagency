<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>{{ Voyager::setting('title') }}</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
       
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
    </head>
    <body>
        <!-- nav-->
        @include('partials.nav')
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('/storage/pages/page1.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>Podróże na kraniec świata</h1>
                            <span class="subheading">A Blog Theme by Start Bootstrap</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <div class="container px-4 px-lg-5 flex">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7 d-flex news">
                    <!-- Post preview-->
                    @foreach($news as $row)
                      @include('partials.news_rows', ['row' => $row])
                    @endforeach
                </div>
                <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="/news/">Zobacz więcej →</a></div>
            </div>
            <!-- Gallery-->
            @foreach($gallery as $image)
                @include('partials.imageGallery', ['image' => $image])
            @endforeach
        </div>
         <!-- Footer-->
       @include('partials.footer')
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>