@extends('layouts.app')


@section('content')
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

@endsection
@push('scripts')
    {{-- <script type="text/javascript" src="{{ URL::asset ('js/custom-scripts.js') }}"></script> --}}
@endpush