@extends('layouts.admin.master')

@section('content')
<form class="login100-form validate-form">
                    <center>
                        <img src="admin/images/logo.png"method="POST" action="{{ route('login') }}">
                    </center>
                    <span class="login100-form-title p-b-34 p-t-15">
                        Register
                    </span>

                    <div class="wrap-input100 validate-input" data-validate = "Enter username">
                        <input class="input100" type="username" name="username" placeholder="Username">
                        <span class="focus-input100" data-placeholder="&#xf207;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Enter name">
                        <input class="input100" type="name" name="name" placeholder="name">
                        <span class="focus-input100" data-placeholder="&#xf207;"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate = "Enter phone">
                        <input class="input100" type= phone" name="name" placeholder="phone">
                        <span class="focus-input100" data-placeholder="&#xf2d7;"></span>
                    </div>
<div class="wrap-input100 validate-input" data-validate = "Enter address">
                        <input class="input100" type= address" name="name" placeholder="address">
                        <span class="focus-input100" data-placeholder="&#xf2c6; "></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Enter email">
                        <input class="input100" type= email" name="name" placeholder="email">
                        <span class="focus-input100" data-placeholder="&#xf2da;"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100" data-placeholder="&#xf191;"></span>



                    </div>
                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Login
                        </button>
                    </div>

                    <div class="text-center p-t-90">
                        <a class="txt1" href="{{ route('password.request') }}">
                            Forgot Password?
                        </a>
                    </div>
                </form>
@endsection