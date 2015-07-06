@extends('layouts.app')
@section('content')
<div class="login-page">
    <div class="container">
        <div class="account_grid">
            <div class="col-md-6 login-left wow fadeInLeft" data-wow-delay="0.4s">
                <h3>NEW ACCOUNT</h3>
                <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
                <a class="acount-btn" href="{{ url('auth/register')}}">Create an Account</a>
            </div>
            <div class="col-md-6 login-right wow fadeInRight" data-wow-delay="0.4s">
                <h3>LOGIN</h3>
                <p>If you have an account with us, please log in.</p>
                <form method="POST" action="{{ url('auth/login') }}">
                   {!! csrf_field() !!}
                   <div>
                    <span>Email Address<label>*</label></span>
                    <input type="email" name="email" type="email">
                </div>
                <div>
                    <span>Password<label>*</label></span>
                    <input type="password" name="password">
                </div>
                <a class="news-letter" href="#"><label class="checkbox">
                    <input type="checkbox" name="remember"><i> </i>Remember me</label>
                </a>
                <div class="clearfix"></div>
                <div>
                    <input type="submit" value="Login">
                </div>
                <a class="forgot" href="#">Forgot Your Password?</a>
            </form>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
</div>
@endsection
@stop
