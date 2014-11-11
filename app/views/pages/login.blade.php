@section( 'head_wrapper' )
	<html>
@stop

<div class="login-container animated fadeInDown">
    {{ Form::open(array('url' => 'auth/login','class' => 'form login-form')) }}
        <div class="loginbox bg-white">
            <div class="loginbox-title">SIGN IN</div>
            <div class="loginbox-social">
                <div class="social-title ">to BJS Accounting System</div>
            </div>
            <div class="loginbox-textbox">
                <input type="text" class="form-control" placeholder="Email" name="email">
            </div>
            <div class="loginbox-textbox">
                <input type="password" class="form-control" placeholder="Password" name="password">
            </div>
            <div class="loginbox-remember">
                <input type="checkbox"> <span>Remember Me</span>
            </div>
            <div class="loginbox-submit">
                <button type="submit" class="btn btn-primary btn-block">Login</button>
            </div>
        </div>
    {{ Form::close() }}
</div>
