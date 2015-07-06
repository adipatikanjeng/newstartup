@extends('layouts.app')
@section('content')
<div class="main-1">
    <div class="container">
        <div class="register">
            <form method="POST" action="{{ url('auth/register') }}">
               {!! csrf_field() !!}
               <div class="register-top-grid">
                <h3>PERSONAL INFORMATION</h3>
                <div class="wow fadeInLeft" data-wow-delay="0.4s">
                    <span>Name<label>*</label></span>
                    <input type="text" name="name" required="true" value="{{ old('name') }}">
                </div>
                <div class="wow fadeInRight" data-wow-delay="0.4s">
                    <span>Email Address<label>*</label></span>
                    <input type="email" name="email" required="true"  value="{{ old('email') }}">
                </div>
                <div class="clearfix"> </div>
                <a class="news-letter" href="#"><label class="checkbox">
                    <input type="checkbox" name="checkbox" checked=""><i> </i>Sign Up for Newsletter</label></a>
                </div>
                <div class="register-bottom-grid">
                    <h3>LOGIN INFORMATION</h3>
                    <div class="wow fadeInLeft" data-wow-delay="0.4s">
                        <span>Password<label>*</label></span>
                        <input type="password" name="password" required>
                    </div>
                    <div class="wow fadeInRight" data-wow-delay="0.4s">
                        <span>Confirm Password<label>*</label></span>
                        <input type="password" name="password_confirmation" required="true">
                    </div>
                </div>
                <div class="clearfix"> </div>
                <div class="register-but">
                   <input type="submit">
                   <div class="clearfix"> </div>
               </div>
           </form>
       </div>
   </div>
</div>
@endsection
@stop
