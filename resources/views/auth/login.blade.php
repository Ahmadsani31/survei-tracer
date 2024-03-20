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
    <title>Sign In | Dash Ui - Bootstrap 5 Admin Dashboard Template</title>
</head>

<body class="bg-light">
    <!-- container -->
    <div class="container d-flex flex-column">
        <div class="row align-items-center justify-content-center g-0
        min-vh-100">
            <div class="col-12 col-md-8 col-lg-6 col-xxl-4 py-8 py-xl-0">
                <!-- Card -->
                <div class="card smooth-shadow-md">
                    <!-- Card body -->
                    <div class="card-body p-6">
                        <div class="mb-4">
                            <a href="{{ URL::asset('admin') }}/index.html"><img
                                    src="{{ URL::asset('admin') }}/assets/images/brand/logo/logo-primary.svg"
                                    class="mb-2" alt=""></a>
                            <p class="mb-6">Please enter your user information.</p>
                        </div>
                        <!-- Form -->
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <!-- Username -->
                            <div class="mb-3">
                                <label for="email" class="form-label">{{ __('Email Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <!-- Password -->
                            <div class="mb-3">
                                <label for="password" class="form-label">{{ __('Password') }}</label>
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <!-- Checkbox -->
                            <div class="d-lg-flex justify-content-between align-items-center                  mb-4">
                                <div class="form-check custom-checkbox">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{
                                        old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>

                            </div>
                            <div>
                                <!-- Button -->
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                                <div class="d-md-flex justify-content-between mt-4">
                                    <div class="mb-2 mb-md-0">
                                        <a href="{{ route('register') }}" class="fs-5">Create An
                                            Account </a>
                                    </div>
                                    <div>
                                        @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}"
                                            class="text-inherit  fs-5">{{__('Forgot Your Password?') }}</a>
                                        @endif
                                    </div>

                                </div>
                            </div>


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
    <script
        src="{{ URL::asset('admin') }}/assets/libs/prismjs/plugins/copy-to-clipboard/prism-copy-to-clipboard.min.js">
    </script>




    <!-- Theme JS -->
    <script src="{{ URL::asset('admin') }}/assets/js/theme.min.js"></script>
</body>

</html>