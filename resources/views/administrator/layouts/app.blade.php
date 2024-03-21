<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="base-url" content="{{ url('/') }}">
    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin') }}/assets/images/favicon/favicon.ico">

    <!-- Libs CSS -->

    <link href="{{ asset('admin') }}/assets/libs/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('admin') }}/assets/libs/dropzone/dist/dropzone.css" rel="stylesheet">
    <link href="{{ asset('admin') }}/assets/libs/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet" />
    <link href="{{ asset('admin') }}/assets/libs/prismjs/themes/prism-okaidia.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('admin') }}/assets/css/theme.min.css">
    <title>Homepage | Dash Ui - Bootstrap 5 Admin Dashboard Template</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.6/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/2.0.2/css/dataTables.dataTables.min.css">
    @stack('admin-css')
</head>

<body class="bg-light">
    <div id="db-wrapper">
        <!-- navbar vertical -->
        <!-- Sidebar -->
        <nav class="navbar-vertical navbar">
            <div class="nav-scroller">
                <!-- Brand logo -->
                <a class="navbar-brand" href="{{ url('admin/dashboard') }}">
                    <img src="{{ asset('admin') }}/assets/images/brand/logo/logo.svg" alt="" />
                </a>
                <!-- Navbar nav -->
                @include('administrator.layouts.sidebar')
            </div>
        </nav>
        <!-- Page content -->
        <div id="page-content">
            @include('administrator.layouts.navbar')
            <!-- Container fluid -->
            <div class="bg-primary pt-10 pb-21"></div>
            @yield('content')

        </div>
    </div>
    @include('administrator.layouts.modal')


    <!-- Scripts -->
    <!-- Libs JS -->
    <script src="{{ asset('admin') }}/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="{{ asset('admin') }}/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('admin') }}/assets/libs/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="{{ asset('admin') }}/assets/libs/feather-icons/dist/feather.min.js"></script>
    <script src="{{ asset('admin') }}/assets/libs/prismjs/prism.js"></script>
    <script src="{{ asset('admin') }}/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="{{ asset('admin') }}/assets/libs/dropzone/dist/min/dropzone.min.js"></script>
    <script src="{{ asset('admin') }}/assets/libs/prismjs/plugins/toolbar/prism-toolbar.min.js"></script>
    <script src="{{ asset('admin') }}/assets/libs/prismjs/plugins/copy-to-clipboard/prism-copy-to-clipboard.min.js">
    </script>

    <!-- Theme JS -->
    <script src="{{ asset('admin') }}/assets/js/theme.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.6/dist/sweetalert2.all.min.js"></script>
    <script src="//cdn.datatables.net/2.0.2/js/dataTables.min.js"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).on("click", ".modal-cre", function (e) {
      
            $("#content").html('<div style="text-align:center; color:red; font-weight:bold;padding:10px">Loading ...</div> ');
            //   $("#loading-ajax-modal").show();
            var serial = "";
            $.each(this.attributes, function () {
                if (this.specified) {
                    serial += "&" + this.name + "=" + this.value;
                }
            });

            var id = $(this).attr("id");
            var judul = $(this).attr("judul");

            if (id == "add-kerma") {
                $("#class").addClass("modal-lg");
            } else {
                $("#class").removeClass("modal-lg");
            }
            $('#myModals').modal('toggle');

            if (judul != null) {
                $(".modal-title").html(judul);
            } else {
                $(".modal-title").html("Kelola Data");
            }

            base_url = $('meta[name="base-url"]').attr('content');

            page = base_url + "/modal/modal-" + id;
            $.post(page, serial, function (data) {
                //   $("#loading-ajax-modal").hide();
                $("#content").html(data);
            });
        });

        $("ul a").click(function(e) {
            var link = $(this);
            var item = link.parent("li");
            if(item.hasClass("active")) {
                item.removeClass("active").children("a").removeClass("active");
            } else {
                item.addClass("active").children("a").addClass("active");
            }
            if(item.children("ul").length > 0) {
                var href = link.attr("href");
                link.attr("href", "#");
                setTimeout(function() {
                    link.attr("href", href);
                }, 300);
                e.preventDefault();
            }
        }).each(function() {
            var link = $(this);
            if(link.get(0).href === location.href) {
                link.addClass("active").parents("li").addClass("active");
                link.addClass("active").parents(".collapse").addClass("show");
                return false;
            }
        });

    </script>

    @stack('admin-js')


</body>

</html>