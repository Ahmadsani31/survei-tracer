<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Survei | Institut Teknologi Padang</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/favicons/apple-touch-icon.png') }} ">
    {{--
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicons/favicon-32x32.png') }}"> --}}
    {{--
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('') }}assets/img/favicons/favicon-16x16.png"> --}}
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('') }}assets/img/favicons/favicon.ico">
    <link rel="manifest" href="{{ asset('') }}assets/img/favicons/manifest.json">
    {{--
    <meta name="msapplication-TileImage" content="{{ asset('') }}assets/img/favicons/mstile-150x150.png"> --}}
    <meta name="theme-color" content="#ffffff">

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&amp;family=Rubik:wght@300;400;500;600;700;800&amp;display=swap"
        rel="stylesheet">
    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="{{ asset('') }}assets/css/theme.css" rel="stylesheet" />
    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
    @stack('css')
</head>


<body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">


        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="bg-secondary py-2 d-none d-sm-block">

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-auto d-none d-lg-block  text-light">
                        <p class="my-2 fs--1"><i class="fas fa-map-marker-alt me-3"></i><span>Jln. Gajah Mada,Kec.
                                Nanggalo, Kota Padang, West Sumatra 25143</span></p>
                    </div>
                    <div class="col-auto ms-md-auto order-md-2 d-none d-sm-block">
                        <ul class="list-unstyled list-inline my-2">
                            <li class="list-inline-item"><a class="text-decoration-none" href="#!"><i
                                        class="fab fa-facebook-f  text-light"></i></a></li>
                            <li class="list-inline-item"><a class="text-decoration-none" href="#!"><i
                                        class="fab fa-youtube  text-light"></i></a></li>
                            <li class="list-inline-item"><a class="text-decoration-none" href="#!"><i
                                        class="fab fa-twitter  text-light"></i></a></li>
                            <li class="list-inline-item"><a class="text-decoration-none" href="#!"><i
                                        class="fab fa-instagram  text-light"> </i></a></li>
                        </ul>
                    </div>
                    <div class="col-auto  text-light">
                        <p class="my-2 fs--1"><i class="fas fa-envelope me-3"></i><a class="text-light"
                                href="mailto:vctung@outlook.com">rektorat@itp.ac.id </a></p>
                    </div>
                </div>
            </div>
            <!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->

        @include('layouts.navbar')



        <section class="pt-6 bg-600" id="home">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-5 col-lg-6 order-0 order-md-1 text-end"><img class="pt-7 pt-md-0 w-100"
                            src="{{ asset('') }}assets/img/gallery/hero-header.png" width="470"
                            alt="hero-header" />
                    </div>
                    <div class="col-md-7 col-lg-6 text-md-start text-center py-6">
                        <h4 class="fw-bold font-sans-serif">Institut Teknologi Padang</h4>
                        <h1 class="fs-6 fs-xl-7 mb-5">Survei Tracer Studi</h1>
                        <a class="btn btn-primary me-2" href="#!" role="button">Get A Quote</a><a
                            class="btn btn-outline-secondary" href="#!" role="button">Read more</a>
                    </div>
                </div>
            </div>
        </section>


        @yield('content')


        @include('layouts.footer')





        <!-- ===============================================-->
        <!--    JavaScripts-->
        <!-- ===============================================-->
        <script src="{{ asset('') }}vendors/@popperjs/popper.min.js"></script>
        <script src="{{ asset('') }}vendors/bootstrap/bootstrap.min.js"></script>
        <script src="{{ asset('') }}vendors/is/is.min.js"></script>
        <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
        <script src="{{ asset('') }}vendors/fontawesome/all.min.js"></script>
        <script src="{{ asset('') }}assets/js/theme.js"></script>
        <script>
            //add a day to the date
            var myDate = new Date();


            var countDownDate = myDate.setDate(myDate.getDate() + 7);

            // Update the count down every 1 second
            var x = setInterval(function() {

                // Get today's date and time
                var now = new Date().getTime();

                // Find the distance between now and the count down date
                var distance = countDownDate - now;

                // Time calculations for days, hours, minutes and seconds
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                // Output the result in an element with id="demo"
                document.getElementById("timeCooldown").innerHTML = days + " : " + hours + " : " +
                    minutes + " : " + seconds + "s ";

                // If the count down is over, write some text 
                if (distance < 0) {
                    clearInterval(x);
                    document.getElementById("timeCooldown").innerHTML = "EXPIRED";
                }
            }, 1000);
        </script>
@stack('scripts')

</body>

</html>
