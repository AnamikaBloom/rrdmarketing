<?php
$user=Auth::User();
?>
 <!--nav open-->
 <nav class="navbar navbar-expand-lg main-navbar">
    <a class="header-brand" href="{{route('home')}}">
        <img src="{{asset('header_front_end/assets/images/logo/logo.png')}}" class="header-brand-img main-logo" alt="Treal-Admin  logo">
    </a>

    <form class="form-inline mr-auto">
        <ul class="navbar-nav mr-2">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link toggle"><i class="fe fe-align-justify"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link d-md-none navsearch"><i class="fe fe-search"></i></a></li>
        </ul>

        <div class="search-element mr-3">
            <input class="form-control" placeholder="Search" aria-label="Search">
            <span class="Search-icon"><i class="fa fa-search"></i></span>
        </div>

    </form>

    <ul class="navbar-nav navbar-right">

        <li class="dropdown dropdown-list-toggle header-notify">
            <!-- <a href="#" data-toggle="dropdown" class="nav-link  nav-link-lg ">
                <i class="fe fe-bell"></i><span class="pulse bg-warning"></span>
            </a> -->

            <div class="dropdown-menu dropdown-list dropdown-menu-right">
                <div class="dropdown-list-content">
                    <a href="#" class="dropdown-item">
                        <i class="fe fe-users text-primary"></i>
                        <div class="dropdown-item-desc">
                            <b>New Users Registered..</b>
                        </div>
                    </a>

                    <a href="#" class="dropdown-item">
                        <i class="fe fe-alert-circle text-danger"></i>
                        <div class="dropdown-item-desc">
                            <b>Error message occurred....</b>
                        </div>
                    </a>

                    <a href="#" class="dropdown-item">
                        <i class="fe fe-rotate-cw text-warning"></i>
                        <div class="dropdown-item-desc">
                            <b> Application Upadated</b>
                        </div>
                    </a>

                    <a href="#" class="dropdown-item">
                        <i class="fe fe-shopping-cart text-success"></i>
                        <div class="dropdown-item-desc">
                            <b>Your items Arrived</b>
                        </div>
                    </a>

                    <a href="#" class="dropdown-item">
                        <i class="fe fe-message-square text-orange"></i>
                        <div class="dropdown-item-desc">
                            <b>New Message received</b>
                        </div>
                    </a>

                </div>

                <div class=" text-center p-2">
                    <a href="#" class="text-dark">View All Notifications</a>
                </div>

            </div>
        </li>

        <li>
            <a href="#" class="navresponsive-toggler d-sm-none nav-link  nav-link-lg d-flex"  data-toggle="collapse" data-target="#navbarSupportedContent-4"
            aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                <i class="navbar-toggler-icon fe fe-more-vertical text-white"></i>
            </a>
        </li><!-- navbar mobile-->

        <li class="dropdown header-user">
            <a href="#" data-toggle="dropdown" class="nav-link  nav-link-lg d-flex">
                <span><img src="{{ asset('/storage/admins/'.@$admin->photo) }}" alt="profile-user" class="rounded-circle w-32 mr-2"></span>
                <span class=" mt-2 d-none d-lg-block ">
                    <span class="text-white-old" style="color: #000;"><span class="ml-1">Admin </span></span>
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class=" dropdown-header noti-title text-center border-bottom pb-3">
                    <h5 class="text-capitalize text-dark mb-1">Welcome</h5>
                </div>
                <a class="dropdown-item" href="{{route('admin-profile')}}"><i class="mdi mdi-account-outline mr-2"></i> <span>My profile</span></a>
                <a class="dropdown-item" href="#"><i class="mdi mdi-settings mr-2"></i> <span>Settings</span></a>
                <a class="dropdown-item" href="#"><i class="mdi mdi-compass-outline mr-2"></i> <span>Support</span></a>
                <a class="dropdown-item" href="{{route('admin-logout')}}"><i class="mdi  mdi-logout-variant mr-2"></i> <span>Logout</span></a>
            </div>
        </li>

    </ul>

</nav>
<!--nav closed-->

<!--navbar mobile--->
<div class="mb-1 responsive-navbar navbar-dark d-sm-none bg-white">
    <div class="collapse navbar-collapse" id="navbarSupportedContent-4">

        <ul class="navbar-nav navbar-right">

            <li class="dropdown  header-notify1">
                <a href="#" data-toggle="dropdown" class="nav-link  nav-link-lg ">
                    <i class="fe fe-bell"></i><span class="pulse bg-warning"></span>
                </a>

                <div class="dropdown-menu dropdown-list dropdown-menu-right">
                    <div class="dropdown-list-content">
                        <a href="#" class="dropdown-item">
                            <i class="fe fe-users text-primary"></i>
                            <div class="dropdown-item-desc">
                                <b>New Users Registered..</b>
                            </div>
                        </a>

                        <a href="#" class="dropdown-item">
                            <i class="fe fe-alert-circle text-danger"></i>
                            <div class="dropdown-item-desc">
                                <b>Error message occurred....</b>
                            </div>
                        </a>

                        <a href="#" class="dropdown-item">
                            <i class="fe fe-rotate-cw text-warning"></i>
                            <div class="dropdown-item-desc">
                                <b> Application Upadated</b>
                            </div>
                        </a>

                        <a href="#" class="dropdown-item">
                            <i class="fe fe-shopping-cart text-success"></i>
                            <div class="dropdown-item-desc">
                                <b>Your items Arrived</b>
                            </div>
                        </a>

                        <a href="#" class="dropdown-item">
                            <i class="fe fe-message-square text-orange"></i>
                            <div class="dropdown-item-desc">
                                <b>New Message received</b>
                            </div>
                        </a>

                    </div>

                    <div class=" text-center p-2">
                        <a href="#" class="text-dark">View All Notifications</a>
                    </div>

                </div>

            </li>

        </ul>

    </div>
</div>
<!--End navbar mobile- -->
