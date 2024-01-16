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
    <link rel="icon" href="{{asset('header_front_end/assets/images/logo/logo.png')}}" type="image/x-icon" />

    <!--Bootstrap.min css-->
    <link rel="stylesheet" href="{{ asset('backend/assets/plugins/bootstrap/css/bootstrap.min.css') }}">

    <!--Style css-->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/style.css') }}">

    <!--Icons css-->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/icons.css') }}">

    <!-- P-Scrollbar css-->
    <link rel="stylesheet" href="{{ asset('backend/assets/plugins/p-scroll/p-scroll.css') }}">

    <!--Sidemenu css-->
    <link rel="stylesheet" href="{{ asset('backend/assets/plugins/sidemenu/sidemenu-1/sidemenu-1.css') }}">


    <!-- Sidemenu-responsive-tabs  css -->
    <link href="{{ asset('backend/assets/plugins/sidemenu-responsive-tabs/css/sidemenu-responsive-tabs.css') }}"
        rel="stylesheet">

    <!-- Siderbar css-->
    <link href="{{ asset('backend/assets/plugins/sidebar/sidebar.css') }}" rel="stylesheet">
    <link href="{{asset('backend/assets/plugins/select2/select2.css')}}" rel="stylesheet">


    <!-- Color-skins css -->
    <link id="theme" rel="stylesheet" type="text/css" media="all"
        href="{{ asset('backend/assets/colors/color-skins/color.css') }}" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>

<body class="app sidebar-mini">

    <!--app open-->
    <div id="app" class="page">
        <div class="main-wrapper">

<?php
        $admin = Auth::guard('admin')->user();

?>
            @include('admin.layouts.header')
            @include('admin.layouts.sidebar')
            @yield('content')


            <!--Footer-->
            <footer class="main-footer">
                <div class="text-center">
                Copyright © 2023 RRD 369 Marketing
                </div>
            </footer>
            <!--/Footer-->

        </div>
    </div>
    <!--app closed-->

    <!-- Back to top -->
    <a href="#top" id="back-to-top"><i class="fa fa-long-arrow-up"></i></a>

    <!--Jquery.min js-->
    <script src="{{ asset('backend/assets/js/jquery.min.js') }}"></script>

    <!--DataTables js-->
    <script src="{{ asset('backend/assets/plugins/Datatable/js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/Datatable/js/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/Datatable/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/Datatable/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/Datatable/js/jszip.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/Datatable/js/pdfmake.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/Datatable/js/vfs_fonts.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/Datatable/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/Datatable/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/Datatable/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/select2/select2.full.js') }}"></script>
    <!--OtherCharts js-->
    <script src="{{ asset('backend/assets/js/othercharts.js') }}"></script>

    <!--Datatable js-->
    <script src="{{ asset('backend/assets/js/datatable.js') }}"></script>

    <!--Showmore js-->
    <script src="{{ asset('backend/assets/js/jquery.showmore.js') }}"></script>

    <!--Scripts js-->
    <script src="{{ asset('backend/assets/js/scripts1.js') }}"></script>
    <!--popper js-->
    <script src="{{ asset('backend/assets/js/popper.js') }}"></script>

    <!--Bootstrap.min js-->
    <script src="{{ asset('backend/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Jquery star rating-->
    <script src="{{ asset('backend/assets/plugins/rating/jquery.rating-stars.js') }}"></script>

    <!--Sidemenu js-->
    <script src="{{ asset('backend/assets/plugins/sidemenu/sidemenu-1/sidemenu-1.js') }}"></script>

    <!-- Sidemenu-responsive-tabs  js -->
    <script src="{{ asset('backend/assets/plugins/sidemenu-responsive-tabs/js/sidemenu-responsive-tabs.js') }}"></script>

    <!-- Sidebar js-->
    <script src="{{ asset('backend/assets/plugins/sidebar/sidebar.js') }}"></script>


    <!--P-Scrollbar js-->
    <script src="{{ asset('backend/assets/plugins/p-scroll/p-scroll.js') }}"></script>
    <script src="{{ asset('backend/assets/js/p-scroll.js') }}"></script>


    <script src="{{ asset('backend/assets/plugins/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/formeditor.js') }}"></script>

    <!--Summernote js-->
    <script src="{{ asset('backend/assets/plugins/summernote/summernote-bs4.js') }}"></script>
    <script src="{{ asset('backend/assets/js/summernote.js') }}"></script>


    <!--Othercharts js-->
    <script src="{{ asset('backend/assets/plugins/othercharts/jquery.knob.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/othercharts/jquery.sparkline.min.js') }}"></script>

    <!--OtherCharts js-->
    <script src="{{ asset('backend/assets/js/othercharts.js') }}"></script>

    <!--Chart js-->
    <script src="{{ asset('backend/assets/plugins/Chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/Chart.js/dist/Chart.extension.js') }}"></script>

    <!--Morris js-->
    <script src="{{ asset('backend/assets/plugins/morris/morris.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/morris/raphael.min.js') }}"></script>

    <!--Dashboard js-->
    <script src="{{ asset('backend/assets/js/index5.js') }}"></script>

    <!--Showmore js-->
    <script src="{{ asset('backend/assets/js/jquery.showmore.js') }}"></script>

    <!--Scripts js-->
    <script src="{{ asset('backend/assets/js/scripts1.js') }}"></script>
    @yield('script')
    @include('admin.layouts.ajax')
    <!-- Update Report Modal Start -->
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Report</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <form class="form-horizontal">
                            <div class="form-group row mb-0">
                                <label class="col-md-3 col-form-label"> Select</label>
                                <div class="col-md-9">
                                    <select class="form-control">
                                        <option>Pending</option>
                                        <option>Approved</option>
                                        <option>Rejected</option>

                                    </select>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
    <!-- Modal closed -->

    <!-- Update Report Modal Start -->
    <!-- Modal -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Report</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <form class="form-horizontal">
                            <div class="form-group row mb-0">
                                <label class="col-md-3 col-form-label"> Select</label>
                                <div class="col-md-9">
                                    <select class="form-control">
                                        <option> Order Recieved </option>
                                        <option> Packed </option>
                                        <option> In Processing </option>
                                        <option> Dispatched </option>
                                        <option> Delivered </option>
                                        <option> Recieved By Customer </option>

                                    </select>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
    <!-- Modal closed -->

    <!-- Update Report Modal Start -->
    <!-- Modal -->
    <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Report</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <form class="form-horizontal">
                            <div class="form-group row mb-0">
                                <label class="col-md-3 col-form-label"> Select</label>
                                <div class="col-md-9">
                                    <select class="form-control">
                                        <option> Accepted </option>
                                        <option> Rejected </option>
                                        <option> Holded </option>

                                    </select>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
    <!-- Modal closed -->

    <!-- Update Report Modal Start -->
    <!-- Modal -->
    <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Report</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <form class="form-horizontal">
                            <div class="form-group row mb-0">
                                <label class="col-md-3 col-form-label"> Select</label>
                                <div class="col-md-9">
                                    <select class="form-control">
                                        <option>Pending</option>
                                        <option>Completed</option>

                                    </select>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
    <!-- Modal closed -->
    <!-- Update Report Modal Start -->
    <!-- Modal -->
    <div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Report</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <form class="form-horizontal">
                            <div class="form-group row mb-0">
                                <label class="col-md-3 col-form-label"> Select</label>
                                <div class="col-md-9">
                                    <select class="form-control">
                                        <option>Pending</option>
                                        <option>Approved</option>
                                        <option>Rejected</option>
                                    </select>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
    <!-- Modal closed -->



    <!-- Update Report Modal Start -->
    <!-- Modal -->
    <div class="modal fade" id="exampleModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Report</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <form class="form-horizontal">
                            <div class="form-group row mb-0">
                                <label class="col-md-3 col-form-label"> Select</label>
                                <div class="col-md-9">
                                    <select class="form-control">
                                        <option>Pending</option>
                                        <option>Closed</option>

                                    </select>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
    <!-- Modal closed -->


</body>

</html>
