<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>peekTAsk | Log in</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.7 -->
        <link href="{{ asset('public/bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet" />
        <!--<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">-->
        <!-- Font Awesome -->
        <!--<link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">-->
        <link href="{{ asset('public/bower_components/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
        <!-- Ionicons -->
        <!--<link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">-->
        <link href="{{ asset('public/bower_components/Ionicons/css/ionicons.min.css') }}" rel="stylesheet" />
        <!-- jvectormap -->
        <!--<link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">-->
        <link href="{{ asset('public/bower_components/jvectormap/jquery-jvectormap.css') }}" rel="stylesheet" />
        <!-- Theme style -->
        <!--<link rel="stylesheet" href="dist/css/AdminLTE.min.css">-->
        <link href="{{ asset('public/dist/css/AdminLTE.min.css') }}" rel="stylesheet" />
        <!-- iCheck -->
        <link href="{{ asset('public/plugins/iCheck/square/blue.css') }}" rel="stylesheet" />
        <!-- iCustom css -->

        <link href="{{ asset('public/css/custom.css') }}" rel="stylesheet" />


        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Google Font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <h1>
                    <a href="/"><b>Peek</b>Task</a>
                </h1>
            </div>
            <!-- /.login-logo -->
            <div class="login-box-body">
                <div class="title1">Sign in to. Access all services.</div> 
                <div class="bdre2"></div>
                <form action="#" method="post">
                    <div class="form-group has-feedback">
                        <input type="email" class="form-control" placeholder="Email">
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" placeholder="Password">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="col-xs-6">
                                <div class="checkbox icheck">
                                    <label>
                                        <input type="checkbox"> Remember Me
                                    </label>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-xs-6">
                                <div class="checkbox icheck">
                                    <label>
                                        <a href="#">I forgot my password</a><br>
                                    </label>
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <button type="submit" class="redBtn btn btn-block btn-flat">Sign In</button>
                        </div></div>
                </form>

                <div id="fslogin_field_container" style="margin-left:20px;display:none;">
                    <div class="label">

                        <div id="fs-google-icon" class="fs-google-icon" onclick="createandSubmitOpenIDForm('google');"></div>

                        <div id="fs-azure-icon" class="fs-azure-icon" onclick="createandSubmitOpenIDForm('azure');"></div>

                        <div id="fs-linkedin-icon" class="fs-linkedin-icon" onclick="createandSubmitOpenIDForm('linkedin');"></div>

                        <div id="fs-facebook-icon" class="fs-facebook-icon" onclick="createandSubmitOpenIDForm('facebook');"></div>

                        <div id="fs-twitter-icon" class="fs-twitter-icon" onclick="createandSubmitOpenIDForm('twitter');" style="display:none;"></div>

                        <div id="fs-yahoo-icon" class="fs-yahoo-icon" onclick="createandSubmitOpenIDForm('yahoo');" style="display:none;"></div>


                        <div class="fs_signin_more_options" onclick="showModeFSOptions(this)">More options</div>
                        <div class="ortextfromfs">Or</div>
                        <div class="fs_signin_options_txt" onclick="switchSignInOptions()">Sign in with Zoho</div>
                    </div>
                </div>
                <div class="openidcontainer" id="openidcontainer"/>
                <div class="fs_signin_options_txt"  class="text-center" onclick="switchSignInOptions()" >Sign in with Google or other's</div>
                <div class="social-auth-links text-center">
                    <p>- OR -</p>
<!--                    <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
                        Facebook</a>
                    <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
                        Google+</a>-->
                </div>
                <!-- /.social-auth-links -->

                <div id="signuplink" class="text-center">Don't have a PeekTask account? <a href="javascript:register()">Sign Up Now</a></div>

            </div>
            <!-- /.login-box-body -->
        </div>
        <!-- /.login-box -->

        <!-- jQuery 3 -->
        <script type="text/javascript" src="{{ asset('public/bower_components/jquery/dist/jquery.min.js') }}"></script>
        <!-- Bootstrap 3.3.7 -->
        <script type="text/javascript" src="{{ asset('public/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <!-- iCheck -->
        <script type="text/javascript" src="{{ asset('public/plugins/iCheck/icheck.min.js') }}"></script>
        <script>
                    $(function () {
                        $('input').iCheck({
                            checkboxClass: 'icheckbox_square-blue',
                            radioClass: 'iradio_square-blue',
                            increaseArea: '20%' /* optional */
                        });
                    });

                    function switchSignInOptions() {
                        if (de('openidcontainer').style.display !== 'none') {
                            if (de('zlogin_container_title')) {
                                de('zlogin_container_title').style.display = 'none';
                            }
                            if (de('fslogin_container_title')) {
                                de('fslogin_container_title').style.display = '';
                            }

                            if (de('openidcontainer')) {
                                de('openidcontainer').style.display = 'none';
                            }

                            $('#zlogin_field_container').slideUp(300);
                            $('#fslogin_field_container').slideDown(300);

                            if (de('signuplink')) {
                                de('signuplink').style.display = 'none';
                            }
                            clearmsg();
                        } else {
                            if (de('zlogin_container_title')) {
                                de('zlogin_container_title').style.display = '';
                            }
                            if (de('fslogin_container_title')) {
                                de('fslogin_container_title').style.display = 'none';
                            }

                            if (de('openidcontainer')) {
                                de('openidcontainer').style.display = '';
                            }

                            $('#zlogin_field_container').slideDown(300);
                            $('#fslogin_field_container').slideUp(300);

                            if (de('signuplink')) {
                                de('signuplink').style.display = '';
                            }
                        }
                    }
        </script>
    </body>
</html>
