






<head>

    <meta charset="utf-8" />

    <title>后台管理</title>

    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <meta content="" name="description" />

    <meta content="" name="author" />

    <!-- BEGIN GLOBAL MANDATORY STYLES -->

    <link href="public/media/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

    <link href="public/media/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>

    <link href="public/media/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

    <link href="public/media/css/style-metro.css" rel="stylesheet" type="text/css"/>

    <link href="public/media/css/style.css" rel="stylesheet" type="text/css"/>

    <link href="public/media/css/style-responsive.css" rel="stylesheet" type="text/css"/>

    <link href="public/media/css/default.css" rel="stylesheet" type="text/css" id="style_color"/>

    <link href="public/media/css/uniform.default.css" rel="stylesheet" type="text/css"/>

    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL STYLES -->

    <link href="public/media/css/jquery.gritter.css" rel="stylesheet" type="text/css"/>

    <link href="public/media/css/daterangepicker.css" rel="stylesheet" type="text/css" />

    <link href="public/media/css/fullcalendar.css" rel="stylesheet" type="text/css"/>

    <link href="public/media/css/jqvmap.css" rel="stylesheet" type="text/css" media="screen"/>

    <link href="public/media/css/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>

    <!-- END PAGE LEVEL STYLES -->

    <link rel="shortcut icon" href="public/media/image/favicon.ico" />
    <style>
        .form-horizontal .control-label {
            float: left;
            width: 100%;
            padding-top: 5px;
            text-align: left;
        }
        .col-sm-10.col-sm-offset-2 {
            margin-top: 20px;
        }
        input.form-control {
            width: 50%;
        }
        .panel-body {
            margin: auto;
            width: 100%;
        }
        #range{
        .page-content .breadcrumb .dashboard-date-range {
            display: none;
            padding-top: -1px;
            margin-right: 0px;
            margin-top: -8px;
            padding: 8px;
            padding-bottom: 7px;
            cursor: pointer;
            color: #fff;
            background-color: #e02222;
        }
        }
    </style>

</head>

<div class="header navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a class="brand" href="index.php">
                <img src="public/media/image/logo.png" alt="logo"/>
            </a>
            <a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
                <img src="public/media/image/menu-toggler.png" alt="" />
            </a>

            <ul class="nav pull-right">
                <li class="dropdown" id="header_notification_bar">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-warning-sign"></i>
                        <span class="badge">6</span>
                    </a>
                </li>


                <li class="dropdown" id="header_inbox_bar">

                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                        <i class="icon-envelope"></i>

                        <span class="badge">5</span>

                    </a>

                </li>

                <li class="dropdown" id="header_task_bar">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-tasks"></i>
                        <span class="badge">5</span>
                    </a>

                </li>



                <li class="dropdown user">

                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                        <img alt="" src="public/media/image/avatar1_small.jpg" />
                        <?php
                        if(isset($_SESSION['username'])){

                        ?>
                        <span class="username">

                        <?php
                        echo $_SESSION['username'];
                        ?>
                            </span>
                        <i class="icon-angle-down"></i>

                    </a>

                    <ul class="dropdown-menu">
                        <?php
                        }else{
                            ?>
                            <li><a href="index.php?s=admin/login/logout"><i class="icon-key"></i> Log Out</a></li>
                        <?php
                        }
                        ?>
                        <li><a href="index.php?s=admin/login/logout"><i class="icon-key"></i> Log Out</a></li>

                    </ul>

                </li>

                <!-- END USER LOGIN DROPDOWN -->

            </ul>

            <!-- END TOP NAVIGATION MENU -->

        </div>

    </div>

    <!-- END TOP NAVIGATION BAR -->

</div>