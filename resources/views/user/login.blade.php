@extends('layouts.app')

@section('content')


<h1 class="text-center"><br/>Login Page</h1>

<!-- Login page section start-->

 <!-- Start login section  -->
 <div class="login__section section--padding ">
    <div class="container">
            <form action="{{route('login-post')}}" method="POST" style="max-width:400px;margin: 0 auto;">
                @csrf
                <div class="login__section--inner">
                    <!--<div class="row row-cols-md-2 row-cols-1">-->
                        <div class="col">
                            <div class="account__login">
                                <div class="account__login--header mb-25">
                                    <h2 class="account__login--header__title h3 mb-10">Login</h2>
                                    <p class="account__login--header__desc">Login if you area a returning customer.</p>
                                    @include('pages.notification')

                                </div>
                                <div class="account__login--inner">
                                    <input class="account__login--input" placeholder="Email Addres" type="text" name="email">
                                    <input class="account__login--input" placeholder="Password" type="password" name="password">
                                    <div class="account__login--remember__forgot mb-15 d-flex justify-content-between align-items-center">
                                        <div class="account__login--remember position__relative">
                                            <input class="checkout__checkbox--input" id="check1" type="checkbox">
                                            <span class="checkout__checkbox--checkmark"></span>
                                            <label class="checkout__checkbox--label login__remember--label" for="check1">
                                                Remember me</label>
                                        </div>
                                        <button class="account__login--forgot" type="submit">Forgot Your Password?</button>
                                    </div>
                                    <button class="account__login--btn primary__btn" type="submit">Login</button>
                                    <div class="account__login--divide">
                                        <span class="account__login--divide__text">OR</span>
                                    </div>
                                    <p class="account__login--signup__text">Don,t Have an Account? <a href="{{route('register')}}">Sign up now</a></p>
                                </div>
                            </div>


                    </div>
                </div>
            </form>

    </div>
</div>
<!-- End login section  -->
<!-- Login page section end-->
@endsection

