@extends('layouts.app')

@section('content')


<h1 class="text-center"><br/>Register/Create Your Account</h1>

    <!-- Start login section  -->
    <div class="login__section section--padding">
        <div class="container">
            <form action="{{route('register')}}" method="POST" style="max-width:400px;margin: 0 auto;">
                @csrf
                <div class="login__section--inner">
                    <!-- <div class="row row-cols-md-2 row-cols-1 ">-->

                    <div class="col">
                        <div class="account__login register">
                            <div class="account__login--header mb-25">
                                <h2 class="account__login--header__title h3 mb-10">Create an Account</h2>
                                <p class="account__login--header__desc">Register here if you are a new customer</p>
                                @include('pages.notification')
                                @if($errors->any())
                                @foreach($errors->all() as $error)
                                <div class="alert alert-danger">
                                    {{$error}}
                                </div>
                                @endforeach
                                @endif

                            </div>
                            <div class="account__login--inner">

                                <div><input class="account__login--input" placeholder="User Name" type="text" name="name">

                                @error('name')
                                    <div class="alert alert-danger" >{{ $message }}</div>
                                @enderror
                                </div>

                               <div> <input class="account__login--input" placeholder="Email Addres" type="email" name="email">
                                @error('email')
                                    <div class="alert alert-danger" >{{ $message }}</div>
                                @enderror
                            </div>
                                <div>
                                    <input class="account__login--input" placeholder="Mobile No" type="text" maxlength="10" name="mobile">
                                    @error('mobile')
                                        <div class="alert alert-danger" >{{ $message }}</div>
                                    @enderror
                                </div>
                                <div>
                                    <input class="account__login--input" placeholder="PIN Number" type="text" name="pin_number" hidden value="{{Request()->pin}}">
                                </div>
                                <input class="account__login--input" placeholder="Sponser Id" type="text" name="sponser_id">
                                    @error('sponser_id')
                                        <div class="alert alert-danger" >{{ $message }}</div>
                                    @enderror
                                <div>
                                    <input class="account__login--input" placeholder="Password" type="password" name="password">
                                    @error('password')
                                        <div class="alert alert-danger" >{{ $message }}</div>
                                    @enderror
                                </div>
                                <div><input class="account__login--input" placeholder="Confirm Password" type="password" name="password_confirmation">
                                    @error('password_confirmation')
                                    <div class="alert alert-danger" >{{ $message }}</div>
                                @enderror
                            </div>
                                <div class="account__login--remember position__relative">
                                    <input class="checkout__checkbox--input" id="check2" name="agree" type="checkbox">
                                    <span class="checkout__checkbox--checkmark"></span>
                                    <label class="checkout__checkbox--label login__remember--label" for="check2">
                                        I have read and agree to the terms & conditions</label>
                                        @error('agree')
                                        <div class="alert alert-danger" >{{ $message }}</div>
                                    @enderror
                                </div>
                                <button class="account__login--btn primary__btn mb-10" type="submit">Submit &
                                    Register</button>

                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- End login section  -->
    <!-- Login page section end-->

    <script>
          $(document).ready(function() {
                 //to Upper Case//
                $("input[type=text]").keyup(function () {
                    $(this).val($(this).val().toUpperCase());
                    });
            });
    </script>
@endsection
