@extends('layouts.app')

@section('content')
    <!--Hero Section-->
<link rel="stylesheet" href="{{asset('user/assets/plugins/bootstrap/css/bootstrap.min.css')}}">
<style>
    table td,
    table th{
        font-size: 20px !important;
    }
</style>
      <!-- End header area -->
 <main class="">

     <h1 class="text-center"><br/>Packages</h1>
      <!-- Start about section -->
        <section class="">
            <div class="container">
            @include('user.package-list')
            </div>
        </section>
        <!-- End about section -->

@endsection