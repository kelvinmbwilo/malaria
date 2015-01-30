<!DOCTYPE html>
<html ng-app="malariaApp" style="background-image: url(body-bg.png);background-repeat: repeat">
<head>
    <title>Malaria App</title>
    <script src="<?php echo asset('js/jquery.js') ?>"></script>
    <script src="<?php echo asset('js/angular.js') ?>"></script>
    <script src="<?php echo asset('js/angular-route.js') ?>"></script>
    <script src="<?php echo asset('js/angular-resource.js') ?>"></script>
    <script src="<?php echo asset('js/angular-animate.js') ?>"></script>
    <script src="<?php echo asset('bower_components/angular-aria/angular-aria.min.js') ?>"></script>
    <script src="<?php echo asset('bower_components/hammerjs/hammer.min.js') ?>"></script>
    <script src="<?php echo asset('bower_components/angular-material/angular-material.min.js') ?>"></script>



    <script src="<?php echo asset('js/bootstrap.js') ?>"></script>
    <link href="<?php echo asset('css/bootstrap.css') ?>" rel="stylesheet" />
    <script src="<?php echo asset('js/abn_tree_directive.js') ?>"></script>
    <link href="<?php echo asset('css/abn_tree.css') ?>" rel="stylesheet" />
    <link href="<?php echo asset('css/bootstrap-theme.css') ?>" rel="stylesheet" />
    <link href="<?php echo asset('font-awesome/css/font-awesome.css') ?>" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo asset('bower_components/angular-material/angular-material.css') ?>">
    <script>
        angular.module("malariaApp",['ngRoute','ngResource','ngAnimate','ngMaterial','angularBootstrapNavTree']);
    </script>
    <script src="<?php echo asset('js/routes.js') ?>"></script>
    <script src="<?php echo asset('js/controllers/malariaAppCtrl.js') ?>"></script>
    <script src="<?php echo asset('js/controllers/kayaCtrl.js') ?>"></script>
    <script src="<?php echo asset('js/controllers/distributionCtrl.js') ?>"></script>
    <script src="<?php echo asset('js/controllers/distributeCtrl.js') ?>"></script>
    <script src="<?php echo asset('js/controllers/stationsCtrl.js') ?>"></script>
    <script src="<?php echo asset('js/controllers/listCtrl.js') ?>"></script>
<style>
    @font-face {
        font-family: myBoldFont;
        src: url(<?php echo asset('Oswald/OpenSans-Bold.ttf') ?>);
    }@font-face {
        font-family: myLightFont;
        src: url(<?php echo asset('Oswald/OpenSans-Regular.ttf') ?>);
    }@font-face {
        font-family: myRegularFont;
        src: url(<?php echo asset('Oswald/Oswald-Regular.ttf') ?>);
    }
    body{
        font-family: myLightFont ;
    }
    .dropdown:hover .dropdown-menu {
        display: block;
    }
</style>
</head>

<body ng-controller="malariaAppCtrl" style="background-image: url(body-bg.png);background-repeat: repeat">
<div class="container-fluid" style="margin-right: 20px;margin-left:20px ">
    <header>
        <div class="row">
            <div class="col-md-2 hidden-sm">
                <img alt="Brand" src="<?php echo asset('Nembo.png') ?>" style="height: 70px;width: 70px" class="img-rounded pull-left">
            </div>
            <div class="col-sm-12 col-md-8">
                <h4 class="text-center" style="letter-spacing: 1px;font-family: myBoldFont "> WIZARA YA AFYA NA USTAWI WA JAMII</h4>
                <h4 class="text-center" style="letter-spacing: 1px;font-family: myBoldFont"> MPANGO WA TAIFA WA KUDHIBITI MALARIA</h4>
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
                        <md-button href="#home">Home</md-button>
<!--                        <a href="#home"><i class="fa fa-home"></i> Home <span class="sr-only">(current)</span></a>-->
                    </li>
                    <li class="dropdown" ng-class="{ active: isActive('/registration') || isActive('/import') || isActive('/distribute') || isActive('/verify') }">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> Registration <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#/registration"><i class="fa fa-plus"></i> Add Coupons</a></li>
                            <li><a href="#/import"><i class="fa fa-upload"></i> Import Coupons</a></li>
                            <li><a href="#/distribute"><i class="fa fa-check"></i> Redeem Coupons</a></li>
                            <li><a href="#/verify"><i class="fa fa-search"></i> Verify Coupons</a></li>
                        </ul>
                    </li>
                    <li class="dropdown" ng-class="{ active: isActive('/distribution_list') || isActive('/distribution_list1') || isActive('/distribution') }">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> Reports <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#/distribution"><i class="fa fa-book"></i> Summary </a></li>
                            <li><a href="#/distribution_list1"><i class="fa fa-list"></i> Distribution List </a></li>
                            <li><a href="#/distribution_list"><i class="fa fa-th"></i> Issuing List </a></li>
                        </ul>
                    </li>
                    <li ng-class="{ active: isActive('/supervisor') }">
                        <md-button href="#supervisor">Supervisor</md-button>
                    </li>
                    <li ng-class="{ active: isActive('/stations') }">
                        <md-button href="#stations">Administrative Units</md-button>
                    </li>

                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> User <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#/profile"><i class="fa fa-user"></i> profile</a></li>
                            <li><a href="#/change_password"><i class="fa fa-lock"></i> change password</a></li>
                            <li class="divider"></li>
                            <li><a href="index.php/login"><i class="fa fa-power-off"></i> logout</a></li>
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