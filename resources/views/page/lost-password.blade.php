@extends('layouts.lay_account')

<!-- START @SIGN WRAPPER -->
@section('content')
<div id="sign-wrapper">

    <!-- Brand -->
    <div class="brand">
        <img src="{{$assetUrl}}global/img/logo/laravel/logo-vertical.png" alt="brand logo"/>
    </div>
    <!--/ Brand -->

    <!-- Lost password form -->
    <form class="form-horizontal rounded shadow" action="#">
        <div class="sign-header">
            <div class="form-group">
                <div class="sign-text">
                    <span>Reset your password</span>
                </div>
            </div>
        </div>
        <div class="sign-body">
            <div class="form-group">
                <div class="input-group input-group-lg rounded">
                    <input type="text" class="form-control" placeholder="Username or email ">
                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                </div>
            </div>
        </div>
        <div class="sign-footer">
            <div class="form-group">
                <button type="submit" class="btn btn-theme btn-lg btn-block no-margin rounded">Send reset email</button>
            </div>
        </div>
    </form>
    <!--/ Lost password form -->

    <!-- Content text -->
    <p class="text-muted text-center sign-link">Back to <a href="{{url('page/signin')}}"> Sign in</a></p>
    <!--/ Content text -->

</div><!-- /#sign-wrapper -->
@stop
<!--/ END SIGN WRAPPER -->
