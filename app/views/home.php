<!DOCTYPE html>
<html ng-app="malariaApp">
<head>
    <title>Malaria App</title>
    <script src="<?php echo asset('js/angular.js') ?>"></script>
    <script src="<?php echo asset('js/angular-route.js') ?>"></script>
    <script src="<?php echo asset('js/angular-resource.js') ?>"></script>
    <script src="<?php echo asset('js/angular-animate.js') ?>"></script>
    <script src="<?php echo asset('js/jquery.js') ?>"></script>
    <script src="<?php echo asset('js/bootstrap.js') ?>"></script>
    <link href="<?php echo asset('css/bootstrap.css') ?>" rel="stylesheet" />
    <link href="<?php echo asset('css/bootstrap-theme.css') ?>" rel="stylesheet" />
    <link href="<?php echo asset('font-awesome/css/font-awesome.css') ?>" rel="stylesheet" />
    <script>
        angular.module("malariaApp",['ngRoute','ngResource','ngAnimate']);
    </script>
    <script src="<?php echo asset('js/routes.js') ?>"></script>
    <script src="<?php echo asset('js/controllers/malariaAppCtrl.js') ?>"></script>
    <script src="<?php echo asset('js/controllers/kayaCtrl.js') ?>"></script>
</head>
<body ng-controller="malariaAppCtrl">
<div class="container">
    <header>
        <div class="row">
            <div class="col-md-2 hidden-sm">
                <img alt="Brand" src="<?php echo asset('Nembo.png') ?>" style="height: 70px;width: 70px" class="img-rounded pull-left">
            </div>
            <div class="col-sm-12 col-md-8">
                <h4 class="text-center" style="letter-spacing: 1px"> WIZARA YA AFYA NA USTAWI WA JAMII</h4>
                <h4 class="text-center" style="letter-spacing: 1px"> MPANGO WA TAIFA WA KUDHIBITI MALARIA</h4>
            </div>
            <div class="col-md-2 hidden-sm" >
                <img alt="Brand" src="<?php echo asset('malaria.png') ?>" style="height: 70px;width: 70px" class="img-rounded pull-right">
            </div>
        </div>


    </header>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#" style="padding-top: 0px;padding-left: 0px">
                    <img alt="Brand" src="<?php echo asset('malaria_haikubaliki.jpg') ?>" style="height: 50px;width: 50px" class="img-rounded">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li ng-class="{ active: isActive('/home') }">
                        <a href="#home"><i class="fa fa-home"></i> Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li ng-class="{ active: isActive('/registration') }">
                        <a  href="#registration">Registration</a>
                    </li>
                    <li ng-class="{ active: isActive('/distribution') }">
                        <a  href="#distribution">Distribution</a>
                    </li>
                    <li ng-class="{ active: isActive('/stations') }">
                        <a ng-class="{ active: isActive('/stations') }" href="#stations">Stations</a>
                    </li>

                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> User <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#/profile"><i class="fa fa-user"></i> profile</a></li>
                            <li><a href="#/change_password"><i class="fa fa-lock"></i> change password</a></li>
                            <li class="divider"></li>
                            <li><a href="#/logout"><i class="fa fa-power-off"></i> logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
<section>
    <div ng-view></div>
</section>
</div>

</body>
</html>