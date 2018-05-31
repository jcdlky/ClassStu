
<!DOCTYPE html>
<html lang="en" class="ie8 no-js">
<html lang="en" class="ie9 no-js">
<html lang="en" class="no-js">
<?php include 'public/view/header.php'?>
<body class="page-header-fixed">


<div class="page-container">



    <?php  include 'public/view/lefts.php'?>


    <div class="page-content">

        <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->

        <div id="portlet-config" class="modal hide">

            <div class="modal-header">

                <button data-dismiss="modal" class="close" type="button"></button>

                <h3>Widget Settings</h3>

            </div>

            <div class="modal-body">

                Widget settings form goes here

            </div>

        </div>

        <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->

        <!-- BEGIN PAGE CONTAINER-->

        <div class="container-fluid">

            <!-- BEGIN PAGE HEADER-->

            <div class="row-fluid">

                <div class="span12">

                    <!-- BEGIN STYLE CUSTOMIZER -->

                    <div class="color-panel hidden-phone">

                        <div class="color-mode-icons icon-color"></div>

                        <div class="color-mode-icons icon-color-close"></div>

                        <div class="color-mode">

                            <p>THEME COLOR</p>

                            <ul class="inline">

                                <li class="color-black current color-default" data-style="default"></li>

                                <li class="color-blue" data-style="blue"></li>

                                <li class="color-brown" data-style="brown"></li>

                                <li class="color-purple" data-style="purple"></li>

                                <li class="color-grey" data-style="grey"></li>

                                <li class="color-white color-light" data-style="light"></li>

                            </ul>

                            <label>

                                <span>Layout</span>

                                <select class="layout-option m-wrap small">

                                    <option value="fluid" selected>Fluid</option>

                                    <option value="boxed">Boxed</option>

                                </select>

                            </label>

                            <label>

                                <span>Header</span>

                                <select class="header-option m-wrap small">

                                    <option value="fixed" selected>Fixed</option>

                                    <option value="default">Default</option>

                                </select>

                            </label>

                            <label>

                                <span>Sidebar</span>

                                <select class="sidebar-option m-wrap small">

                                    <option value="fixed">Fixed</option>

                                    <option value="default" selected>Default</option>

                                </select>

                            </label>

                            <label>

                                <span>Footer</span>

                                <select class="footer-option m-wrap small">

                                    <option value="fixed">Fixed</option>

                                    <option value="default" selected>Default</option>

                                </select>

                            </label>

                        </div>

                    </div>

                    <!-- END BEGIN STYLE CUSTOMIZER -->

                    <!-- BEGIN PAGE TITLE & BREADCRUMB-->

                    <h3 class="page-title">

                        后盾网管理系统 <small>houdunwang.com</small>

                    </h3>

                    <ul class="breadcrumb">

                        <li>

                            <i class="icon-home"></i>

                            <a href="index.html">首页</a>

                            <i class="icon-angle-right"></i>

                        </li>

                        <li><a href="#">班级列表</a></li>

                        <li class="pull-right no-text-shadow">

                            <div class="range">
                                <span><a href="index.php?s=admin/grade/create">添加班级</a></span>
                            </div>

                        </li>

                    </ul>

                    <!-- END PAGE TITLE & BREADCRUMB-->

                </div>

            </div>

            <!-- END PAGE HEADER-->

            <div id="dashboard">



                <div class="row-fluid">

                    <div class="panel-body">

                        <div class="panel panel-danger">

                            <div class="panel-body">
                                <div class="alert alert-danger" role="alert">

                                    <h4> 》》查看详细资料</h4>

                                </div>
                                <table class="table table-striped table-hover">
                                    <tbody>
                                    <!-- On cells (`td` or `th`) -->

                                    <tr>
                                        <td class="active"><h4>姓名</h4></td>
                                        <td class="active"><h4><?php echo $stuinfo['name'] ?></h4></td>
                                    </tr>

                                    <tr>
                                        <td class="active"><h4>性别</h4></td>
                                        <td class="active"><h4><?php echo $stuinfo['sex'] ?></h4></td>
                                    </tr>


                                    <tr>
                                        <td class="active"><h4>年龄</h4></td>
                                        <td class="active"><h4><?php echo $stuinfo['age'] ?></h4></td>
                                    </tr>


                                    <tr>
                                        <td class="active"><h4>手机</h4></td>
                                        <td class="active"><h4><?php echo $stuinfo['cellphone'] ?></h4></td>
                                    </tr>

                                    <tr>
                                        <td class="active"><h4>班级</h4></td>
                                        <td class="active"><h4><?php echo $stuinfo['gname'] ?></h4></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>

                    </div>

                    <div class="clearfix"></div>



                    <div class="clearfix"></div>



                    <div class="clearfix"></div>



                </div>

            </div>

            <!-- END PAGE CONTAINER-->

        </div>



    </div>
    <?php include 'public/view/footer.php'?>

</body>

<!-- END BODY -->

</html>

