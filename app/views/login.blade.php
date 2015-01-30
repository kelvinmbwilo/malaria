<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">

    <title>Malaria App</title>
    <link href="<?php echo asset('css/bootstrap.css') ?>" rel="stylesheet" />
    <link href="<?php echo asset('css/bootstrap-theme.css') ?>" rel="stylesheet" />
    <link href="<?php echo asset('font-awesome/css/font-awesome.css') ?>" rel="stylesheet" />
    <style>
        @import url(http://fonts.googleapis.com/css?family=Exo:100,200,400);
        @import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);

        body{
            margin: 0;
            padding: 0;
            background: #fff;

            color: #fff;
            font-family: Arial;
            font-size: 12px;
        }

        .body{
            position: absolute;
            top: -20px;
            left: -20px;
            right: -40px;
            bottom: -40px;
            width: auto;
            height: auto;
            background-image: url(<?php echo asset('back1.jpg') ?>);
            background-size: cover;
            -webkit-filter: blur(5px);
            z-index: 0;
        }

        .grad{
            position: absolute;
            top: -20px;
            left: -20px;
            right: -40px;
            bottom: -40px;
            width: auto;
            height: auto;
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
            z-index: 1;
            opacity: 0.7;
        }

        .header{
            position: absolute;
            top: calc(50% - 35px);
            left: calc(50% - 255px);
            z-index: 2;
        }

        .header div{
            float: left;
            color: #fff;
            font-family: 'Exo', sans-serif;
            font-size: 35px;
            font-weight: 200;
        }

        .header div span{
            color: #5379fa !important;
        }

        .login{
            /*position: absolute;*/
            /*top: calc(70% - 75px);*/
            /*left: calc(50% - 50px);*/
            height: 150px;
            width: 350px;
            padding: 10px;
            z-index: 2;
        }

        .login input[type=text]{
            width: 250px;
            height: 30px;
            background: transparent;
            border: 1px solid rgba(255,255,255,0.6);
            border-radius: 2px;
            color: cadetblue;
            font-family: 'Exo', sans-serif;
            font-size: 16px;
            font-weight: 400;
            padding: 4px;
        }

        .login input[type=password]{
            width: 250px;
            height: 30px;
            background: transparent;
            border: 1px solid rgba(255,255,255,0.6);
            border-radius: 2px;
            color: cadetblue;
            font-family: 'Exo', sans-serif;
            font-size: 16px;
            font-weight: 400;
            padding: 4px;
            margin-top: 10px;
        }

        .login input[type=button]{
            width: 250px;
            height: 35px;
            background: #fff;
            border: 1px solid #fff;
            cursor: pointer;
            border-radius: 2px;
            color: #a18d6c;
            font-family: 'Exo', sans-serif;
            font-size: 16px;
            font-weight: 400;
            padding: 6px;
            margin-top: 10px;
        }

        .login input[type=button]:hover{
            opacity: 0.8;
        }

        .login input[type=button]:active{
            opacity: 0.6;
        }

        .login input[type=text]:focus{
            outline: none;
            border: 1px solid rgba(255,255,255,0.9);
        }

        .login input[type=password]:focus{
            outline: none;
            border: 1px solid rgba(255,255,255,0.9);
        }

        .login input[type=button]:focus{
            outline: none;
        }

        ::-webkit-input-placeholder{
            color: rgba(255,255,255,0.6);
        }

        ::-moz-input-placeholder{
            color: rgba(255,255,255,0.6);
        }
    </style>

    <script src="<?php echo asset('js/prefixfree.min.js') ?>"></script>

</head>

<body>

<div class="body"></div>
<div class="col-sm-12" style="margin-top:170px">

    <div class="col-xs-5 col-xs-offset-4" >

        <div class="col-sm-6" style="padding: 0px;margin-top:40px">
            <img alt="Brand" src="<?php echo asset('mh.png')?>" style="height: 150px;width: 200px" class="img-rounded pull-left">
        </div>
        <div class="col-sm-6" style="margin-top: 10px">
            <div class="login">
                <h3>LLIN DATABASE Login</h3>
                <form action="<?php echo url('/') ?>" method="post">
                <input type="text" placeholder="username" name="user"><br>
                <input type="password" placeholder="password" name="password"><br>
                <input type="button" value="Login">
                </form>
            </div>
        </div>
<!--        <div class="col-sm-12" style="margin-top: 20px">-->
<!--            <div class="col-xs-6"><img alt="Global Fund" src="--><?php //echo asset('globalfund.png')?><!--" style="height: 70px;width: 160px;opacity: 0.8" class="img-rounded pull-left"></div>-->
<!--            <div class="col-xs-6"><img alt="USAID" src="--><?php //echo asset('usaid.png')?><!--" style="height: 70px;width: 140px;opacity: 0.8" class="img-rounded pull-right"></div>-->
<!--        </div>-->
    </div>
</div>
<div class="header">

</div>
<br>


<script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>

</body>

</html>