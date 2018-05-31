<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <script src="public/js/jquery.min.js"></script>
    <style>
        *{
            font-family: 微软雅黑;
        }
        form {
            width: 34%;
            margin: auto;
            margin-top: 25px;
        }
        .tisi {
            width: 100%;
            text-align: center;
            line-height: 50px;
            font-size: 30px;
            color: #959494;
        }
        .logs {
            width: 100%;
            height: 50px;
            line-height: 50px;
        }
        span.ssss {
            margin-left: 30px;
            vertical-align: -13px;
        }
        .nav>li>a:focus, .nav>li>a:hover {
            text-decoration: none;
            background-color: #337ab7;
            color: #fff;
        }
    </style>
</head>
<body>
<?php include 'public/view/header.php'?>
<div class="container">
<!--    <ol class="breadcrumb">-->
<!--        <li><a href="">首页</a></li>-->
<!--        <li class="active">登录</li>-->
<!--    </ol>-->
    <div class="tisi">
        <span class="denglu">登录后台</span>
    </div>
    <form method="post" action="">
        <div class="form-group">

            <div class="logs">
                <span style="float: left;">账号:</span>
                <span style=" float: right; width: 80%;margin-top: 6px;"><input type="text" class="form-control" id="" placeholder="请输入账号" name="username"></span>
            </div>

        </div>
        <div class="form-group">
            <div class="logs">
            <span style="float: left;">密码:</span>
            <span style="float: right; width: 80%;margin-top: 6px;"> <input type="password" class="form-control" id="" placeholder="请输入密码" name="password">
                </span>
        </div>
        </div>

        <div class="form-group">
            <div class="logs">
            <span style="float: left;">验证码:</span>
                <span style="float: right; width: 80%;margin-top: 6px;">
            <input type="text" class="form-control" id="" placeholder="请输入验证码" name="code">
                    </span>
        </div>
        </div>


        <div class="form-group">
            <img src="index.php?s=admin/login/code" onclick="this.src = 'index.php?s=admin/login/code&a=' + Math.random()">

            <span class = 'ssss'>
                <input type="checkbox" name="autologin"> 是否保存密码？
            </span>
        </div>
<!--        <div class="checkbox">-->
<!--            <label>-->
<!--                <input type="checkbox" name="autologin"> 是否保存密码？-->
<!--            </label>-->
<!--        </div>-->
        <button type="submit" class="btn progress-bar-danger btn-block" style = "height: 45px;color: #fff;font-size: 18px;">登录</button>
    </form>
</div>


<?php include 'public/view/footer.php'?>


</body>
</html>