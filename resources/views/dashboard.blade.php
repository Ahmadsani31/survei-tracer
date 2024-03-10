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


        <nav class="navbar navbar-expand-lg navbar-light sticky-top py-3 d-block"
            data-navbar-on-scroll="data-navbar-on-scroll">
            <div class="container"><a class="navbar-brand text-secondary" href="{{ url('/') }}"><img
                        src="https://layanan.itp.ac.id/assets/fe/assets/images/itp.png" height="45" alt="logo" />
                    ITP</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon">
                    </span></button>
                <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base">
                        <li class="nav-item px-2"><a class="nav-link active" aria-current="page"
                                href="index.html">Home</a></li>
                        <li class="nav-item px-2"><a class="nav-link" aria-current="page"
                                href="pricing.html">Pricing</a></li>
                        <li class="nav-item px-2"><a class="nav-link" aria-current="page"
                                href="web-development.html">Web Development</a></li>
                        <li class="nav-item px-2"><a class="nav-link" aria-current="page" href="user-research.html">User
                                Research</a></li>

                </div>
            </div>
        </nav>
        <section class="pt-6 bg-600" id="home">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-5 col-lg-6 order-0 order-md-1 text-end"><img class="pt-7 pt-md-0 w-100"
                            src="{{ asset('') }}assets/img/gallery/hero-header.png" width="470" alt="hero-header" />
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


        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="py-0" style="margin-top:-5.8rem">

            <div class="container">
                <div class="row">
                    <div class="card card-span bg-secondary">
                        <div class="card-body">
                            <div class="row flex-center gx-0">
                                <div class="col-lg-4 col-xl-2 text-center text-xl-start"><img
                                        src="{{ asset('') }}assets/img/gallery/business-partners-are-signing-business-deal.png"
                                        width="170" alt="..." />
                                </div>
                                <div class="col-lg-8 col-xl-4">
                                    <h1 class="text-light fs-lg-4 fs-xl-5">Jadwal Pengisian <span
                                            class="text-primary">Tracer Studi</span></h1>
                                </div>
                                <div class="col-lg-12 col-xl-6">
                                    <h1 class="display-1 text-light text-center text-xl-end"><span
                                            id="timeCooldown"></span> </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->




        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section>

            <div class="container">
                <div class="row">
                    <h1 class="text-center mb-5"> Autentikasi Survei</h1>
                    <div class="col-md-3 mb-4">
                        <div class="card mb-5 mb-md-0">
                            <div class="text-center"><span
                                    class="badge bg-black fw-normal text-uppercase bg-secondary">Alumni</span>
                            </div>
                            <div class="card-body px-4 py-6 py-md-5 py-lg-6">
                                <div class="d-flex justify-content-center">
                                    <img class="card-img-top w-50" src="{{ asset('') }}assets/img/gallery/alumni.png"
                                        alt="courses" />
                                </div>
                                <p class="text-center mb-2 my-md-3">Login Khusus untuk Alumni</p>
                                <hr class="border border-1" />
                                <div class="d-grid"> <a class="btn btn-lg btn-secondary" href="#!">Login</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="card mb-5 mb-md-0">
                            <div class="text-center"><span
                                    class="badge bg-black fw-normal text-uppercase bg-info">Mahasiswa</span></div>
                            <div class="card-body px-4 py-6 py-md-5 py-lg-6">
                                <div class="d-flex justify-content-center">
                                    <img class="card-img-top w-50" src="{{ asset('') }}assets/img/gallery/mahasiswa.png"
                                        alt="courses" />
                                </div>
                                <p class="text-center mb-2 my-md-3">A private limited is the most popular</p>
                                <hr class="border border-1" />
                                <div class="d-grid"><a class="btn btn-lg btn-info" href="#!">Login</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="card mb-5 mb-md-0 h-100">
                            <div class="text-center"><span
                                    class="badge bg-black fw-normal text-uppercase bg-success">Dosen</span></div>
                            <div class="card-body px-4 py-6 py-md-5 py-lg-6">
                                <div class="d-flex justify-content-center">
                                    <img class="card-img-top w-50" src="{{ asset('') }}assets/img/gallery/dosen.png"
                                        alt="courses" />
                                </div>
                                <p class="text-center mb-2 my-md-3">A private limited is the most popular</p>
                                <hr class="border border-1" />
                                <div class="d-grid"> <a class="btn btn-lg btn-success" href="#!">Purchase now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="card mb-5 mb-md-0 h-100">
                            <div class="text-center"><span
                                    class="badge bg-black fw-normal text-uppercase bg-danger">Pengguana Lulusan</span>
                            </div>
                            <div class="card-body px-4 py-6 py-md-5 py-lg-6">
                                <div class="d-flex justify-content-center">
                                    <img class="card-img-top w-50" src="{{ asset('') }}assets/img/gallery/pengguna.png"
                                        alt="courses" />
                                </div>
                                <p class="text-center mb-2 my-md-3">A private limited is the most popular</p>
                                <hr class="border border-1" />
                                <div class="d-grid"> <a class="btn btn-lg btn-danger" href="#!">Purchase now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="card mb-5 mb-md-0 h-100">
                            <div class="text-center"><span
                                    class="badge bg-black fw-normal text-uppercase bg-danger">Tendik (Tenaga
                                    Kependidikan )</span></div>
                            <div class="card-body px-4 py-6 py-md-5 py-lg-6">
                                <div class="d-flex justify-content-center">
                                    <img class="card-img-top w-50" src="{{ asset('') }}assets/img/gallery/tendik.png"
                                        alt="courses" />
                                </div>
                                <p class="text-center mb-2 my-md-3">A private limited is the most popular</p>
                                <hr class="border border-1" />
                                <div class="d-grid"> <a class="btn btn-lg btn-danger" href="#!">Purchase now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="card mb-5 mb-md-0 h-100">
                            <div class="text-center"><span
                                    class="badge bg-black fw-normal text-uppercase bg-primary">Mitra Kerja Sama</span>
                            </div>
                            <div class="card-body px-4 py-6 py-md-5 py-lg-6">
                                <div class="d-flex justify-content-center">
                                    <img class="card-img-top w-50" src="{{ asset('') }}assets/img/gallery/mitra.png "
                                        alt="courses" />
                                </div>
                                <p class="text-center mb-2 my-md-3">A private limited is the most popular</p>
                                <hr class="border border-1" />
                                <div class="d-grid"> <a class="btn btn-lg btn-primary" href="#!">Purchase now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->




        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="pt-0">

            <div class="container">
                <div class="row h-100 align-items-center">
                    <div class="col-md-12 col-lg-6 h-100">
                        <div class="card card-span text-white h-100"><img class="w-100"
                                src="{{ asset('') }}assets/img/gallery/student-feedback.png" alt="..." />
                            <div class="card-body px-xl-5 px-md-3 pt-0">
                                <div class="d-flex flex-column align-items-center bg-200" style="margin-top:-2.4rem;">
                                    <h5 class="mt-3 mb-0">Kimmie Vo</h5>
                                    <p class="text-muted">Junior Designer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6 h-100">
                        <h1 class="my-4">Successful Student<br /><span class="text-primary">Feedback</span></h1>
                        <p>Take courses from the world’s best instructors and universities. Courses include recorded
                            auto-graded and peer-reviewed assignments, video lectures, and community discussion forums.
                            When you complete a course, you’ll be eligible to receive a shareable electronic Course
                            Certificate for a small fee.</p>
                        <div class="mt-6">
                            <h5 class="font-sans-serif fw-bold mb-3">The courses that Kimmie has taken</h5>
                            <div class="card card-span bg-600">
                                <div class="card-body">
                                    <div class="row flex-center gx-0">
                                        <div class="col-lg-4 col-xl-3 text-center text-xl-start"><img
                                                src="{{ asset('') }}assets/img/gallery/art-design.png" width="120"
                                                alt="courses" />
                                        </div>
                                        <div class="col-lg-8 col-xl-9">
                                            <h5 class="font-sans-serif fw-bold">Modern and Contemporary Art and Design
                                            </h5>
                                            <p class="text-muted fs--1">The Museum of Modern Art</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->


        <section>
            <div class="bg-holder"
                style="background-image:url(assets/img/gallery/funfacts-2-bg.png);background-position:center;background-size:cover;">
            </div>
            <!--/.bg-holder-->

            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-3 text-center mb-5"><img
                            src="{{ asset('') }}assets/img/gallery/published.png" height="100" alt="..." />
                        <h1 class="my-2">768</h1>
                        <p class="text-info fw-bold">Total Alumni</p>
                    </div>
                    <div class="col-sm-6 col-lg-3 text-center mb-5"><img
                            src="{{ asset('') }}assets/img/gallery/instructors.png" height="100" alt="..." />
                        <h1 class="my-2">79</h1>
                        <p class="text-info fw-bold">Angkatan Wisuda</p>
                    </div>
                    <div class="col-sm-6 col-lg-3 text-center mb-5"><img
                            src="{{ asset('') }}assets/img/gallery/learners.png" height="100" alt="..." />
                        <h1 class="my-2">8300</h1>
                        <p class="text-info fw-bold">Jumlah Mahasiswa</p>
                    </div>
                    <div class="col-sm-6 col-lg-3 text-center mb-5"><img
                            src="{{ asset('') }}assets/img/gallery/awards.png" height="100" alt="..." />
                        <h1 class="my-2">32</h1>
                        <p class="text-info fw-bold">Jumlah Prodi</p>
                    </div>
                </div>
            </div>
        </section>


        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section>

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 col-lg-4 mb-5"><img src="{{ asset('') }}assets/img/gallery/cta.png" width="280"
                            alt="cta" />
                    </div>
                    <div class="col-md-6 col-lg-5">
                        <h5 class="text-primary font-sans-serif fw-bold">Subscrible now</h5>
                        <h1 class="mb-5">Get every single<br />update you will get</h1>
                        <form class="row g-0 align-items-center">
                            <div class="col">
                                <div class="input-group-icon">
                                    <input class="form-control form-little-squirrel-control" type="email"
                                        placeholder="Enter email " aria-label="email" /><i
                                        class="fas fa-envelope input-box-icon"></i>
                                </div>
                            </div>
                            <div class="col-auto">
                                <button class="btn btn-primary rounded-0" type="submit">Subscribe now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->




        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="bg-secondary">

            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-lg-6 mb-4 order-0 order-sm-0"><a class="text-decoration-none"
                            href="#"><img src="https://layanan.itp.ac.id/assets/fe/assets/images/itp.png" height="51"
                                alt="" /> Institut Teknologi Padang</a>
                        <p class="text-light my-4"> <i class="fas fa-map-marker-alt me-3"></i><span
                                class="text-light">1500 Treat Ave, Suite 200 &nbsp;</span><a class="text-light"
                                href="tel:+604-680-9785">+604-680-9785</a><br />San Francisco, CA 94110</p>
                        <p class="text-light"> <i class="fas fa-envelope me-3"> </i><a class="text-light"
                                href="mailto:vctung@outlook.com">vctung@outlook.com </a></p>
                        <p class="text-light"> <i class="fas fa-phone-alt me-3"></i><a class="text-light"
                                href="tel:1-800-800-2299">1-800-800-2299 (Support)</a></p>
                    </div>
                    <div class="col-6 col-sm-4 col-lg-2 mb-3 order-2 order-sm-1">
                        <h5 class="lh-lg fw-bold mb-4 text-light font-sans-serif">Community </h5>
                        <ul class="list-unstyled mb-md-4 mb-lg-0">
                            <li class="lh-lg"><a class="text-200" href="#!">Learners</a></li>
                            <li class="lh-lg"><a class="text-200" href="#!">Partners</a></li>
                            <li class="lh-lg"><a class="text-200" href="#!">Developers</a></li>
                            <li class="lh-lg"><a class="text-200" href="#!">Beta Testers</a></li>
                            <li class="lh-lg"><a class="text-200" href="#!">Translators</a></li>
                            <li class="lh-lg"><a class="text-200" href="#!">Blog</a></li>
                            <li class="lh-lg"><a class="text-200" href="#!">Tech Blog</a></li>
                            <li class="lh-lg"><a class="text-200" href="#!">Teaching Center</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-sm-4 col-lg-2 mb-3 order-3 order-sm-2">
                        <h5 class="lh-lg fw-bold text-light mb-4 font-sans-serif">Informations</h5>
                        <ul class="list-unstyled mb-md-4 mb-lg-0">
                            <li class="lh-lg"><a class="text-200" href="#!">About</a></li>
                            <li class="lh-lg"><a class="text-200" href="#!">Pricing</a></li>
                            <li class="lh-lg"><a class="text-200" href="#!">Blog</a></li>
                            <li class="lh-lg"><a class="text-200" href="#!">Careers</a></li>
                            <li class="lh-lg"><a class="text-200" href="#!">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-sm-4 col-lg-2 mb-3 order-3 order-sm-2">
                        <h5 class="lh-lg fw-bold text-light mb-4 font-sans-serif"> More</h5>
                        <ul class="list-unstyled mb-md-4 mb-lg-0">
                            <li class="lh-lg"><a class="text-200" href="#!">Press</a></li>
                            <li class="lh-lg"><a class="text-200" href="#!">Investors</a></li>
                            <li class="lh-lg"><a class="text-200" href="#!">Terms</a></li>
                            <li class="lh-lg"><a class="text-200" href="#!">Privacy</a></li>
                            <li class="lh-lg"><a class="text-200" href="#!">Help</a></li>
                            <li class="lh-lg"><a class="text-200" href="#!">Accessibility</a></li>
                            <li class="lh-lg"><a class="text-200" href="#!">Contact</a></li>
                            <li class="lh-lg"><a class="text-200" href="#!">Articles</a></li>
                            <li class="lh-lg"><a class="text-200" href="#!">Directory</a></li>
                            <li class="lh-lg"><a class="text-200" href="#!">Affiliates</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->


        <section class="py-0" style="margin-top: -5.8rem;">
            <div class="container bg-primary">
                <div class="row justify-content-md-between justify-content-evenly py-4">
                    <div class="col-12 col-sm-8 col-md-6 col-lg-auto text-center text-md-start">
                        <p class="fs--1 my-2 fw-bold">All rights Reserved &copy; Your Company, 2021</p>
                    </div>
                    <div class="col-12 col-sm-8 col-md-6">
                        <p class="fs--1 my-2 text-center text-md-end"> Made with&nbsp;
                            <svg class="bi bi-suit-heart-fill" xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                fill="#EB6453" viewBox="0 0 16 16">
                                <path
                                    d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z">
                                </path>
                            </svg>&nbsp;by&nbsp;<a class="fw-bold text-900" href="https://themewagon.com/"
                                target="_blank">ThemeWagon </a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




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


</body>

</html>