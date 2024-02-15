@extends('frontend.components.app')
@section('content')
<div class="page-section mb-60">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="login-form">
                        <h4 class="login-title">Register</h4>
                        <div class="row">
                            <div class="col-md-12 col-12 mb-20">
                                <label>First Name</label>
                                <input class="mb-0" type="text" name="name" placeholder="First Name">
                            </div>
                            <div class="col-md-12 mb-20">
                                <label>Email Address*</label>
                                <input name="email" class="mb-0" type="email" placeholder="Email Address">
                            </div>
                            <div class="col-md-6 col-12 mb-20">
                                <label>Phone</label>
                                <input class="mb-0" name="phone" type="text" placeholder="Last Name">
                            </div>
                            <div class="col-md-6 col-12 mb-20">
                                <label>Address</label>
                                <input class="mb-0" name="address" type="text" placeholder="Last Name">
                            </div>
                            <div class="col-md-6 mb-20">
                                <label>Password</label>
                                <input class="mb-0" name="password" type="password" placeholder="Password">
                            </div>
                            <div class="col-md-6 mb-20">
                                <label>Confirm Password</label>
                                <input class="mb-0" name="password_confirmation" autocomplete="new-password" type="password" placeholder="Confirm Password">
                            </div>
                            <div class="flex items-center justify-end mt-4">
                                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                                    {{ __('Already registered?') }}
                                </a>
                            </div>
                            <div class="col-12">
                                <button class="register-button mt-0">Register</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection