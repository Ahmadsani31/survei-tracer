<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('admin') }}/assets/images/favicon/favicon.ico">

    <!-- Libs CSS -->


    <link href="{{ URL::asset('admin') }}/assets/libs/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ URL::asset('admin') }}/assets/libs/dropzone/dist/dropzone.css" rel="stylesheet">
    <link href="{{ URL::asset('admin') }}/assets/libs/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet" />
    <link href="{{ URL::asset('admin') }}/assets/libs/prismjs/themes/prism-okaidia.css" rel="stylesheet">








    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ URL::asset('admin') }}/assets/css/theme.min.css">
    <title>Forget Password | Dash Ui - Bootstrap 5 Admin Dashboard Template</title>
</head>

<body class="bg-light">
    <div class="container d-flex flex-column">
        <div class="row align-items-center justify-content-center g-0
        min-vh-100">
            <div class="col-12 col-md-8 col-lg-6 col-xxl-6 py-8 py-xl-0">
                <!-- Card -->
                <div class="card smooth-shadow-md">
                    <!-- Card body -->
                    <div class="card-body p-6">
                        <div class="mb-4">
                            <a href="{{ URL::asset('admin') }}/index.html"><img
                                    src="{{ URL::asset('admin') }}/assets/images/brand/logo/logo-primary.svg"
                                    class="mb-2" alt=""></a>
                            <p class="mb-6">{{ __('Reset Password') }}
                            </p>
                        </div>
                        <!-- Form -->
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form>
                            <!-- Email -->
                            <div class="mb-3">
                                <label for="email" class="form-label">{{ __('Email Address') }}</label>
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- Button -->
                            <div class="mb-3 d-grid">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                            <span>Don't have an account? <a href="{{ route('login') }}">sign in</a></span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <!-- Libs JS -->
    <script src="{{ URL::asset('admin') }}/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="{{ URL::asset('admin') }}/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ URL::asset('admin') }}/assets/libs/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="{{ URL::asset('admin') }}/assets/libs/feather-icons/dist/feather.min.js"></script>
    <script src="{{ URL::asset('admin') }}/assets/libs/prismjs/prism.js"></script>
    <script src="{{ URL::asset('admin') }}/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="{{ URL::asset('admin') }}/assets/libs/dropzone/dist/min/dropzone.min.js"></script>
    <script src="{{ URL::asset('admin') }}/assets/libs/prismjs/plugins/toolbar/prism-toolbar.min.js"></script>
    <script src="{{ URL::asset('admin') }}/assets/libs/prismjs/plugins/copy-to-clipboard/prism-copy-to-clipboard.min.js">
    </script>




    <!-- Theme JS -->
    <script src="{{ URL::asset('admin') }}/assets/js/theme.min.js"></script>
</body>

</html>
