<!DOCTYPE html>
<html class="loading" lang="pt_BR" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>DescomplicaZap | Login</title>
    <link rel="apple-touch-icon" href="<?=url('resources/img/whats.gif')?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?=url('resources/img/whats.gif')?>">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?=url('resources/app/vendors/css/vendors.min.css')?>">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?=url('resources/app/css/bootstrap.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=url('resources/app/css/bootstrap-extended.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=url('resources/app/css/colors.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=url('resources/app/css/components.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=url('resources/app/css/themes/dark-layout.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=url('resources/app/css/themes/bordered-layout.css')?>">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?=url('resources/app/css/core/menu/menu-types/vertical-menu.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=url('resources/app/css/plugins/forms/form-validation.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=url('resources/app/css/pages/page-auth.css')?>">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?=url('resources/css/style.css')?>">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="blank-page">
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="auth-wrapper auth-v2">
                    <div class="auth-inner row m-0">
                        <!-- Left Text-->
                        <div class="d-none d-lg-flex col-lg-8 align-items-center p-5">
                            <div class="w-80 d-lg-flex align-items-center justify-content-center px-5">
                                <img class="img-fluid" src="<?=url('resources/app/images/pages/undraw_statistic_chart_38b6.svg')?>" alt="Login V2" style="width: 80%"/>
                            </div>
                        </div>
                        <!-- /Left Text-->
                        <!-- Login-->
                        <div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5">
                            <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
                                <div class="d-flex align-items-center justify-content-center mb-1">
                                    <img src="<?=url('resources/img/whats.gif');?>" alt="" width="50" height="50">
                                    <h4 class="card-title mb-0">DescomplicaZap</h4>
                                </div>
                                <p class="card-text mb-2 text-center">??rea exclusiva para Lojas</p>
                                <form class="auth-login-form mt-2" action="<?=url('login/entrar')?>" method="POST">
                                    <div class="form-group">
                                        <label class="form-label" for="login-email">E-mail</label>
                                        <input class="form-control" id="login-email" name="user_email" type="text" name="login-email" placeholder="john@example.com" aria-describedby="login-email" autofocus="" tabindex="1" />
                                    </div>
                                    <div class="form-group">
                                        <div class="d-flex justify-content-between">
                                            <label for="login-password">Senha</label><a href="page-auth-forgot-password-v2.html"><small>Esqueceu a senha ?</small></a>
                                        </div>
                                        <div class="input-group input-group-merge form-password-toggle">
                                            <input class="form-control form-control-merge" name="user_pass" id="login-password" type="password" name="login-password" placeholder="????????????????????????" aria-describedby="login-password" tabindex="2" />
                                            <div class="input-group-append"><span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span></div>
                                        </div>
                                    </div>
                                    
                                    <button class="btn btn-success btn-block" tabindex="4">Entrar</button>
                                </form>
                                <p class="text-center mt-2"><span>Novo por aqui ?</span><a href="<?=url('cadastro');?>"><span>&nbsp;Cadastre-se aqui</span></a></p>
                            </div>
                        </div>
                        <!-- /Login-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="<?=url('resources/app/vendors/js/vendors.min.js')?>"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="<?=url('resources/app/vendors/js/forms/validation/jquery.validate.min.js')?>"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="<?=url('resources/app/js/core/app-menu.js')?>"></script>
    <script src="<?=url('resources/app/js/core/app.js')?>"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="<?=url('resources/app/js/scripts/pages/page-auth-login.js')?>"></script>
    <!-- END: Page JS-->

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
</body>
<!-- END: Body-->

</html>