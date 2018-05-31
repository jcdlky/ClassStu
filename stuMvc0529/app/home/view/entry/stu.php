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

    <div class="panel-body">
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th>id</th>
                <th>姓名</th>
                <th>性别</th>
                <th>年龄</th>
                <th>手机</th>
                <th>班级</th>
                <th width="150">操作</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($class as $k => $v) {
                ?>
                <tr>
                    <td><?php echo $v['id']; ?></td>
                    <td><?php echo $v['name']; ?></td>
                    <td><?php echo $v['sex']; ?></td>
                    <td><?php echo $v['age']; ?></td>
                    <td><?php echo $v['cellphone']; ?></td>
                    <td>
                        <?php echo $v['gname']; ?>
                    </td>
                    <td>
                        <div class="btn-group">
                            <a href="index.php?s=home/entry/look&id=<?php echo $v['id']; ?>" class="btn btn-primary">查看</a>
                        </div>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>

</div>
</body>
</html>