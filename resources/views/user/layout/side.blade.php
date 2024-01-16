 <!-- Sidebar menu-->
 <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
 <?php
$user= Auth::User();
?>
 <aside class="app-sidebar toggle-sidebar">
     <div class="app-sidebar__user">
         <div class="user-body">
             <img src="{{asset('storage/user/'.$user->photo)}}" alt="profile-user" style="border: 2px solid #d18509;" class="rounded-circle w-25">
         </div>
         <div class="user-info">
             <a href="#" class=""><span class="app-sidebar__user-name font-weight-semibold"> {{$user->name}}</span><br>
                 {{-- <span class="text-muted app-sidebar__user-designation text-sm"> Rakesh M</span> --}}
             </a>
         </div>
     </div>

     <ul class="side-menu toggle-menu">
         <li>
             <a class="side-menu__item" href="{{ route('index') }}"><i class="side-menu__icon fe fe-home"></i>
                 <span class="side-menu__label"> Home </span></a>
         </li>
         <li>
            <a class="side-menu__item" href="{{ route('home') }}"><i class="side-menu__icon fe fe-home"></i>
                <span class="side-menu__label">website Home </span></a>
        </li>
         <!-- <li>
            <a class="side-menu__item" href="{{ route('pin-generation') }}"><i class="side-menu__icon fe fe-home"></i>
                <span class="side-menu__label">Pin Generation </span></a>
        </li> -->

         <li>
             <a class="side-menu__item" href="{{ route('user-profile') }}"><i class="side-menu__icon ti ti-user"></i>
                 <span class="side-menu__label"> Profile </span></a>
         </li>

         <li class="slide">
             <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon ti-package"></i>
                 <span class="side-menu__label"> Bank </span><i class="angle fa fa-angle-right"></i></a>
                        <ul class="slide-menu">
                            <li><a href="{{route('add-bank')}}" class="slide-item"> Add or Update Bank </a></li>
                            <li><a href="{{route('bank-details')}}" class="slide-item"> Bank Details </a></li>
                        </ul>
         </li>

         {{-- <li>
             <a class="side-menu__item" href="{{ route('KYC') }}"><i class="side-menu__icon fe fe-image"></i>
                 <span class="side-menu__label"> KYC </span></a>
         </li> --}}

         <li>
            <a class="side-menu__item" href="{{ route('user-package') }}"><i class="side-menu__icon fe fe-image"></i>
                <span class="side-menu__label"> Package </span></a>
        </li>

         <li>
             <a class="side-menu__item" href="{{ route('genealogy') }}"><i class="side-menu__icon fe fe-image"></i>
                 <span class="side-menu__label"> Genealogy Tree </span></a>
         </li>
         <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon ti-package"></i>
                <span class="side-menu__label"> Kyc</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a href="{{ route('add.kyc') }}" class="slide-item"> Add or Update Kyc </a></li>
                <li><a href="{{ route('user-kyc') }}" class="slide-item"> Kyc details </a></li>
                <
            </ul>
        </li>

         <li>
             <a class="side-menu__item" href="{{ route('repurchage-products') }}"><i
                     class="side-menu__icon fe fe-shopping-cart"></i>
                 <span class="side-menu__label">Repurchage Products </span></a>
         </li>

         {{-- <li>
             <a class="side-menu__item" href="{{ route('orders') }}"><i class="side-menu__icon fe fe-truck"></i>
                 <span class="side-menu__label"> Orders </span></a>
         </li> --}}

         {{-- <li>
             <a class="side-menu__item" href="{{ route('myWishlist') }}"><i
                     class="side-menu__icon fe fe-message-square"></i>
                 <span class="side-menu__label"> My Wishlist </span></a>
         </li> --}}

         <li class="slide">
             <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon ti-package"></i>
                 <span class="side-menu__label"> Business Management </span><i class="angle fa fa-angle-right"></i></a>
             <ul class="slide-menu">
                 {{-- <li><a href="{{ route('viewBusiness') }}" class="slide-item"> View Business </a></li> --}}
                 <li><a href="{{ route('directTeam') }}" class="slide-item"> Direct Team </a></li>
                 <li><a href="{{ route('totalTeam') }}" class="slide-item"> Total Team </a></li>
                 {{-- <li><a href="{{ route('viewCeiling') }}" class="slide-item"> View Ceiling </a></li> --}}
                 <li><a href="{{ route('payouts') }}" class="slide-item"> Payouts </a></li>
             </ul>
         </li>

         <li>
             <a class="side-menu__item" href="{{ route('wallet') }}"><i class="side-menu__icon ti ti-wallet"></i>
                 <span class="side-menu__label"> Wallet </span></a>
         </li>

         <li class="slide">
             <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon ti-package"></i>
                 <span class="side-menu__label"> Accounts Department </span><i class="angle fa fa-angle-right"></i></a>
             <ul class="slide-menu">
                 <li><a href="{{ route('fundTransaction') }}" class="slide-item"> Fund Transaction </a></li>
                 {{-- <li><a href="{{ route('fundRequest') }}" class="slide-item"> Fund Request </a></li> --}}
             </ul>
         </li>

         <li>
             <a class="side-menu__item" href="{{ route('idCard') }}"><i class="side-menu__icon ti ti-id-badge"></i>
                 <span class="side-menu__label"> My ID Card </span></a>
         </li>

         {{-- <li class="slide">
             <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon ti-help"></i>
                 <span class="side-menu__label"> Report </span><i class="angle fa fa-angle-right"></i></a>
             <ul class="slide-menu">
                 <li><a href="{{ route('form16') }}" class="slide-item"> Form 16A </a></li>
             </ul>
         </li> --}}


         <li class="slide">
             <a class="side-menu__item" data-toggle="slide" href="#"><i
                     class="side-menu__icon fe fe-mail"></i>
                 <span class="side-menu__label"> Complaint Report </span><i class="angle fa fa-angle-right"></i></a>
             <ul class="slide-menu">
                 <li><a href="{{ route('addComplaint') }}" class="slide-item"> Add / Raise Complaint </a></li>
                 <li><a href="{{ route('viewComplaint') }}" class="slide-item"> View Complaint </a></li>
             </ul>
         </li>

         <li>
            <a class="side-menu__item" href="{{ route('awards&rewards') }}">
                <i class="side-menu__icon ti ti-id-badge"></i>
                <span class="side-menu__label"> Awards & Rewards </span>
            </a>
         </li>

         <li>
             <a class="side-menu__item" href="{{route('user.logout')}}"><i class="side-menu__icon ti ti-id-badge"></i>
                 <span class="side-menu__label"> LOGOUT </span></a>
         </li>


     </ul>
 </aside>
      <!--sidemenu end-->
