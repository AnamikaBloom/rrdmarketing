 <!-- Sidebar menu-->
 <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
 <aside class="app-sidebar toggle-sidebar">
     <div class="app-sidebar__user">
         <div class="user-body">
             <img src="{{ asset('/storage/admins/'.@$admin->photo) }}" alt="profile-user" class="rounded-circle w-25">
         </div>
         <?php
         $menus = explode("|",$admin->control_access);
         ?>
         <div class="user-info">
             <a href="{{ route('admin-dashboard') }}" class=""><span class="app-sidebar__user-name font-weight-semibold">
                     Admin</span><br>
                 {{-- <span class="text-muted app-sidebar__user-designation text-sm"> Nishant Kumar</span> --}}
             </a>
         </div>
     </div>

     <ul class="side-menu toggle-menu">
        @if(in_array(1, $menus))
         <li>
             <a class="side-menu__item" href="{{ route('admin-dashboard') }}"><i class="side-menu__icon fe fe-home"></i>
                 <span class="side-menu__label"> Home </span></a>
         </li>
    @endif
    @if(in_array(2, $menus))
         <li>
             <a class="side-menu__item" href="{{ route('kyc') }}"><i class="side-menu__icon fe fe-image"></i>
                 <span class="side-menu__label"> KYC </span></a>
         </li>
         @endif
         @if(in_array(3, $menus))
         <li>
            <a class="side-menu__item" href="{{ route('wallet.index') }}"><i class="side-menu__icon ti ti-wallet"></i>
                <span class="side-menu__label"> Wallet </span></a>
        </li>
         @endif
         @if(in_array(4, $menus))

         <li>
            <a class="side-menu__item" href="{{route('admin-user-list')}}">
                <i class="side-menu__icon fe fe-image"></i>
            <span class="side-menu__label"> Total Members </span></a>
        </li>
         <li>
            <a class="side-menu__item" href="{{route('pin-list')}}">
                <i class="side-menu__icon fe fe-image"></i>
            <span class="side-menu__label"> Pin List </span></a>
        </li>
         @endif
    @if(in_array(5, $menus))
 {{-- <li>
             <a class="side-menu__item" href="{{ route('income.index') }}"><i class="side-menu__icon fe fe-image"></i>
                 <span class="side-menu__label"> Income </span></a>
         </li> --}}
         <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon ti-package"></i>
                <span class="side-menu__label"> Accounts Department </span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a href="{{ route('fund-transaction') }}" class="slide-item"> Fund Transaction </a></li>
                <li><a href="{{ route('fund-request') }}" class="slide-item"> Fund Request </a></li>
            </ul>
        </li>
         @endif
    @if(in_array(6, $menus))
    <li class="slide">
        <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon ti-package"></i>
            <span class="side-menu__label"> E-Commerce</span><i class="angle fa fa-angle-right"></i></a>
        <ul class="slide-menu">
            <li><a href="{{ route('category') }}" class="slide-item"> View Category</a></li>
            <li><a href="{{route('subcategory')}}" class="slide-item"> View SubCategory</a></li>
            <li><a href="{{route('child-category')}}" class="slide-item">View child-category </a></li>
            <li><a href="{{route('products')}}" class="slide-item"> Products </a></li>
            <li><a href="{{ route('colors') }}" class="slide-item"> View Colors</a></li>
            <li><a href="{{route('sizes')}}" class="slide-item"> View Sizes</a></li>
            <li><a href="{{route('repurchage.index')}}" class="slide-item"> View Repurchage</a></li>
        </ul>
    </li>
         @endif
         @if(in_array(7, $menus))
         <li>
            <a class="side-menu__item" href="{{ route('package') }}"><i
                    class="side-menu__icon ti ti-package"></i>
                <span class="side-menu__label"> Packages </span></a>
        </li>

        @endif
        @if(in_array(8, $menus))
        <li>
            <a class="side-menu__item" href="{{ route('admin-rank') }}"><i
                    class="side-menu__icon ti ti-package"></i>
                <span class="side-menu__label"> Rank </span></a>
        </li>
         @endif
    @if(in_array(9, $menus))
    <li>
        <a class="side-menu__item" href="{{route('idcard')}}"><i
                class="side-menu__icon ti ti-id-badge"></i>
            <span class="side-menu__label"> My ID Card </span></a>
    </li>
        @endif
    @if(in_array(10, $menus))
    <li>
        <a class="side-menu__item" href="{{route('blogs-index')}}"><i
                class="side-menu__icon ti ti-package"></i>
            <span class="side-menu__label"> Blogs </span></a>
    </li>
         @endif
         @if(in_array(11, $menus))
         <li>
            <a class="side-menu__item" href="{{route('faq-index')}}"><i
                    class="side-menu__icon ti ti-package"></i>
                <span class="side-menu__label"> Faq </span></a>
        </li>
         @endif
    @if(in_array(12, $menus))
    <li>
        <a class="side-menu__item" href="{{route('banner')}}"><i
                class="side-menu__icon ti ti-package"></i>
            <span class="side-menu__label"> Banner </span></a>
    </li>
        @endif
    @if(in_array(13, $menus))
    <li>
        <a class="side-menu__item" href="{{ route('testimonials-index') }}"><i
                class="side-menu__icon fe fe-image"></i>
            <span class="side-menu__label"> Testimonial </span></a>
    </li>
        @endif
        @if(in_array(14, $menus))
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon ti-help"></i>
                <span class="side-menu__label"> Report </span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a href="{{ route('sales-report') }}" class="slide-item"> Sales Report </a></li>
                {{-- <li><a href="{{ route('form-16') }}" class="slide-item"> Form 16A </a></li> --}}
            </ul>
        </li>
         @endif
         @if(in_array(15, $menus))
         <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon ti-help"></i>
                <span class="side-menu__label"> Bank Account Details </span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a href="{{ route('admin-userbanklist') }}" class="slide-item"> User Bank List </a></li>
            </ul>
        </li>
         @endif
         @if(in_array(16, $menus))
         <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i
                    class="side-menu__icon ti ti-receipt"></i>
                <span class="side-menu__label"> Invoices </span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                {{-- <li><a href="{{ route('add-invoice') }}" class="slide-item"> Add Invoice </a></li> --}}
                <li><a href="{{ route('invoice-listing') }}" class="slide-item"> Invoice Listing </a></li>
                {{-- <li><a href="{{ route('generate-invoice') }}" class="slide-item"> Generate Invoice </a></li> --}}
            </ul>
        </li>
         @endif
         @if(in_array(17, $menus))


         <li class="slide">
             <a class="side-menu__item" data-toggle="slide" href="#"><i
                     class="side-menu__icon fe fe-mail"></i>
                 <span class="side-menu__label"> Complaint Report </span><i class="angle fa fa-angle-right"></i></a>
             <ul class="slide-menu">
                 <li><a href="{{ route('view-complaint') }}" class="slide-item"> View Complaint </a></li>
                 <li><a href="{{ route('update-complaint') }}" class="slide-item"> Update Complaint </a></li>
             </ul>
         </li>
         @endif




         {{-- @if(in_array(18, $menus))
         <li class="slide">
             <a class="side-menu__item" data-toggle="slide" href="#"><i
                     class="side-menu__icon fe fe-lock"></i>
                 <span class="side-menu__label"> Control Access </span><i class="angle fa fa-angle-right"></i></a>
             <ul class="slide-menu">
                 <li><a href="{{ route('admin-add-control-access') }}" class="slide-item"> Add Control Access </a></li>
                 <li><a href="{{ route('admin-view-control-access') }}" class="slide-item"> View Control Access </a>
                 </li>
                 <li><a href="{{ route('admin-view-control-users') }}" class="slide-item"> View Sub Admin </a>
                 </li>
                 <li><a href="{{ route('admin-add-control-users') }}" class="slide-item"> Add Sub Admin </a>
                 </li>
             </ul>
         </li>
         @endif --}}
         @if(in_array(19, $menus))
         <li class="slide">
             <a class="side-menu__item" data-toggle="slide" href="#"><i
                     class="side-menu__icon fe fe-user"></i>
                 <span class="side-menu__label"> Admin </span><i class="angle fa fa-angle-right"></i></a>
             <ul class="slide-menu">
                 <li> <a href="{{ route('admin-profile') }}" class="slide-item"> Admin Profile </a> </li>
                 <li> <a href="{{ route('aboutus-index') }}" class="slide-item"> About Us </a> </li>
                 <li><a href="{{ route('terms-index') }}" class="slide-item"> Terms and Condition </a></li>
                 <li><a href="{{ route('privacy-index') }}" class="slide-item"> Privacy Policy </a></li>
                 <li><a href="{{ route('refund-index') }}" class="slide-item"> Refund/Cancelled Policy </a></li>
                 <li><a href="{{ route('grievance-redressals-index') }}" class="slide-item">Grievance Redressals </a></li>
                 <li><a href="{{route('contactus-index')}}" class="slide-item"> Enquiry </a></li>
             </ul>
         </li>
         @endif
         @if(in_array(20, $menus))
         <li>
            <a class="side-menu__item" href="{{route('genealogy')}}"><i class="side-menu__icon fe fe-image"></i>
                <span class="side-menu__label"> Genealogy Tree </span></a>
        </li>
        @endif
     </ul>
 </aside>
 <!--sidemenu end-->
