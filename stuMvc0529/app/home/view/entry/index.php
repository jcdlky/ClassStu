<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>首页</title>
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <script src="public/js/jquery.min.js"></script>
    <style>
        body{
            font-family: 微软雅黑;
        }
    </style>
</head>
<body>
<div class="container">


    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">KSCMC</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">首页 <span class="sr-only">(current)</span></a></li>
                    <li><a href="#">使用文档<span class="badge" style="margin-left: 5px;">42</span></a></li>
                    <li><a href="#">开发者</a></li>
                    <li><a href="#">功能模块</a></li>
                    <li><a href="index.php?s=home/entry/stu">开发者名单</a></li>

                </ul>
                <form class="navbar-form navbar-left">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">搜索模块</button>
                </form>
                <?php
                if (isset($_SESSION['username'])) {
                    ?>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="javascript:;"><?php echo $_SESSION['username'] ?></a></li>
                        <li><a href="index.php?s=admin/entry/index">个人中心</a></li>
                        <li><a href="index.php?s=admin/login/logout">退出</a></li>
                    </ul>
                    <?php
                }else {
                    ?>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php?s=admin/login/regs">注册</a></li>
                        <li><a href="index.php?s=admin/login/logout">登录</a></li>
                    </ul>
                    <?php
                }
                ?>
            </div>
        </div>
    </nav>
    <div class="jumbotron" >
        <h1>欢迎使用KSCMS开源框架</h1>
        <p>轻量级的PHP开源框架，使用PHP框架快速搭建网站。框架架构清晰，代码简洁，是你开发的最好选择 </p>
        <p><?php echo $version ?></p>
        <p><a class="btn btn-primary btn-lg" role="button">点击下载</a></p>
    </div>

    <div class="panel panel-default">
        <div class="panel-body">

            <div class="page-header">
                <h1>开发动态 <small>Subtext for header</small></h1>
            </div>

            <div class="progress">
                <div class="progress-bar progress-bar-success" style="width: 35%">
                    <span class="sr-only">35% Complete (success)</span>
                </div>
                <div class="progress-bar progress-bar-warning progress-bar-striped" style="width: 20%">
                    <span class="sr-only">20% Complete (warning)</span>
                </div>
                <div class="progress-bar progress-bar-danger" style="width: 10%">
                    <span class="sr-only">10% Complete (danger)</span>
                </div>
            </div>



            <table class="table table-hover">

                <tbody>


                <?php
                $datas = $this->news;
//                                echo '<pre>';
//                                print_r($datas);
                foreach ($datas as $k => $v){
                    ?>
                    <tr>
                        <td><?php echo $k +1 ?></td>
                        <td><?php echo $v['title'] ?></td>
                        <td><?php echo $v['username'] ?></td>
                        <td><?php echo $v['time'] ?></td>
                    </tr>


                    <?php
                }
                ?>

                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>