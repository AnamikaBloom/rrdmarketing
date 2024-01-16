<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta content=" " name="description">
    <meta content=" " name="author">
    <meta name="keywords" content=" " />

    <!-- Title -->
    <title> RRD 369 Marketing </title>

    <!--Favicon -->
    <link rel="icon" href="{{ asset('header_front_end/assets/images/logo/logo.png') }}" type="image/x-icon" />

    <!--Bootstrap.min css-->
    <link rel="stylesheet" href="{{ asset('user/assets/plugins/bootstrap/css/bootstrap.min.css') }}">

    <!--Style css-->
    <link rel="stylesheet" href="{{ asset('user/assets/css/style.css') }}">

    <!--Icons css-->
    <link rel="stylesheet" href="{{ asset('user/assets/css/icons.css') }}">

    <!-- P-Scrollbar css-->
    <link rel="stylesheet" href="{{ asset('user/assets/plugins/p-scroll/p-scroll.css') }}">

    <!--Sidemenu css-->
    <link rel="stylesheet" href="{{ asset('user/assets/plugins/sidemenu/sidemenu-1/sidemenu-1.css') }}">

    <!-- Sidemenu-responsive-tabs  css -->
    <link href="{{ asset('user/assets/plugins/sidemenu-responsive-tabs/css/sidemenu-responsive-tabs.css') }}"
        rel="stylesheet">

    <!-- Siderbar css-->
    <link href="{{ asset('user/assets/plugins/sidebar/sidebar.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/plugins/select2/select2.css') }}" rel="stylesheet">

    <!-- Color-skins css -->
    <link id="theme" rel="stylesheet" type="text/css" media="all"
        href="{{ asset('user/assets/colors/color-skins/color.css') }}" />
        <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">

</head>

<body class="app sidebar-mini">

    <!--app open-->
    <div id="app" class="page">
        @include('user.layout.header')
        @yield('content')
        @include('user.layout.side')
        @include('user.layout.footer')
    </div>

    <!-- Back to top -->
    <a href="#top" id="back-to-top"><i class="fa fa-long-arrow-up"></i></a>

    <!--Jquery.min js-->
    <script src="{{ asset('user/assets/js/jquery.min.js') }}"></script>

    <!--popper js-->
    <script src="{{ asset('user/assets/js/popper.js') }}"></script>

    <!--Bootstrap.min js-->
    <script src="{{ asset('user/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Jquery star rating-->
    <script src="{{ asset('user/assets/plugins/rating/jquery.rating-stars.js') }}"></script>

    <!--Sidemenu js-->
    <script src="{{ asset('user/assets/plugins/sidemenu/sidemenu-1/sidemenu-1.js') }}"></script>

    <!-- Sidemenu-responsive-tabs  js -->
    <script src="{{ asset('user/assets/plugins/sidemenu-responsive-tabs/js/sidemenu-responsive-tabs.js') }}"></script>

    <!-- Sidebar js-->
    <script src="{{ asset('user/assets/plugins/sidebar/sidebar.js') }}"></script>

    <!--P-Scrollbar js-->
    <script src="{{ asset('user/assets/plugins/p-scroll/p-scroll.js') }}"></script>
    <script src="{{ asset('user/assets/js/p-scroll.js') }}"></script>

    <!--Othercharts js-->
    <script src="{{ asset('user/assets/plugins/othercharts/jquery.knob.js') }}"></script>
    <script src="{{ asset('user/assets/plugins/othercharts/jquery.sparkline.min.js') }}"></script>

    <!--OtherCharts js-->
    <script src="{{ asset('user/assets/js/othercharts.js') }}"></script>

    <!--Chart js-->
    <script src="{{ asset('user/assets/plugins/Chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('user/assets/plugins/Chart.js/dist/Chart.extension.js') }}"></script>

    <!--Morris js-->
    <script src="{{ asset('user/assets/plugins/morris/morris.min.js') }}"></script>
    <script src="{{ asset('user/assets/plugins/morris/raphael.min.js') }}"></script>

    <!--Dashboard js-->
    <script src="{{ asset('user/assets/js/index5.js') }}"></script>

    <!--Showmore js-->
    <script src="{{ asset('user/assets/js/jquery.showmore.js') }}"></script>

    <!--Scripts js-->
    <script src="{{ asset('user/assets/js/scripts1.js') }}"></script>

    <!-- Back to top -->
    <a href="#top" id="back-to-top"><i class="fa fa-long-arrow-up"></i></a>

    <!--Jquery.min js-->

    <!--DataTables js-->
    <script src="{{ asset('user/assets/plugins/Datatable/js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('user/assets/plugins/Datatable/js/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ asset('user/assets/plugins/Datatable/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('user/assets/plugins/Datatable/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('user/assets/plugins/Datatable/js/jszip.min.js') }}"></script>
    <script src="{{ asset('user/assets/plugins/Datatable/js/pdfmake.min.js') }}"></script>
    <script src="{{ asset('user/assets/plugins/Datatable/js/vfs_fonts.js') }}"></script>
    <script src="{{ asset('user/assets/plugins/Datatable/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('user/assets/plugins/Datatable/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('user/assets/plugins/Datatable/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/select2/select2.full.js') }}"></script>

    @yield('script')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    <script type="text/javascript">


        function addToCart(product_id, pno = 1) {
            var qty=$('#quantity').val();
            var color=$("input[name='color']:checked").val();
            var size=$("input[name='size']:checked").val();
            var type='RP';
            // alert([color,size])
            if(qty>1){
                pno=qty;
            }
            $.ajax({
                url: "{{ route('add-to-cart') }}",
                method: "POST",
                data: {
                    _token: '{{ csrf_token() }}',
                    "product_id": product_id,
                    "pno": pno,
                    "color":color,
                    "size":size,
                    "type":type,
                },
                // dataType: "json",
                success: function(response) {
                    $(".mini_cart_wrapper").html(response.data);
                    var resp = 'success';
                    if(response.status==false){
                        var resp = 'error';
                    }else{
                        setTimeout(function() {
                            location.reload();
                        }, 1000);
                    }
                    Swal.fire({
                        position: 'top-end',
                        icon: resp,
                        title: response.message,
                        showConfirmButton: false,
                        timer: 3000
                    })
                }
            });
        }


        function productDecreaseCounter(cart_id) {
            base_url = "{{ url('/dec/') }}";
            session_id = "{{ Session::getId() }}";
            location.href = base_url + '/' + cart_id + '/session_id/' + session_id;

        }

        function productIncreaseCounter(cart_id) {
            base_url = "{{ url('/inc/') }}";
            session_id = "{{ Session::getId() }}";
            location.href = base_url + '/' + cart_id + '/session_id/' + session_id;

        }

        function productDecreaseCounterAuth(cart_id,User_id) {
            base_url = "{{ url('/dec/') }}";
            // session_id = "{{ Session::getId() }}";
            location.href = base_url + '/' + cart_id + '/session_id/' + User_id;

        }

        function productIncreaseCounterAuth(cart_id,User_id) {
            base_url = "{{ url('/inc/') }}";
            // session_id = "{{ Session::getId() }}";
            location.href = base_url + '/' + cart_id + '/session_id/' + User_id;

        }
        function clearCartAuth(User_id) {
            base_url = "{{ url('/cart-clear/') }}";
            location.href = base_url + '/session_id/' + User_id;

        }
        function clearCart() {
            base_url = "{{ url('/cart-clear/') }}";
            session_id = "{{ Session::getId() }}";
            location.href = base_url + '/session_id/' + session_id;

        }
    </script>
</body>
</html>
