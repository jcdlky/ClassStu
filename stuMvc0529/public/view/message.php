<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>消息提示</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
    <style>
        body{
            background: #fff;
        }
        html {
            font-size: 10px;
            -webkit-tap-highlight-color: rgba(243, 243, 243, 0);
            background: #fff;
        }
        .alert.alert-danger {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin: auto;
            margin-top: 10%;
            text-align: center;
            line-height: 120px;
        }
    </style>
</head>
<body style="background: #fff;">


<div class="alert alert-danger" role="alert">
    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
    <span class="sr-only">友情提示:</span>
    <?php echo $msg; ?>
</div>



<script>
    setTimeout(function () {
        <?php echo $this->url; ?>
    },1300)
</script>
</body>
</html>