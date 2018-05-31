

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

                        <li><a href="#">学生列表/修改学生资料</a></li>

                        <li class="pull-right no-text-shadow">

                            <div class="range">
                                <span><a href="index.php?s=admin/grade/create">添加学生</a></span>
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
                        <form action="" method="post" class="form-horizontal" role="form">


                            <div class="form-group">
                                <label for="inputID" class="col-sm-2 control-label">姓名:</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" id="inputID" class="form-control" value="<?php echo $stu['name']; ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputID" class="col-sm-2 control-label">性别:</label>
                                <div class="col-sm-10">
                                    <label class="radio-inline">
                                        <input type="radio" name="sex" value="男" <?php if ($stu['sex'] == '男'){ ?> checked="checked" <?php } ?>> 男
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="sex" value="女" <?php if ($stu['sex'] == '女'){ ?> checked="checked" <?php } ?>> 女
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="sex" value="保密" <?php if ($stu['sex'] == '保密'){ ?> checked="checked" <?php } ?>> 保密
                                    </label>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="inputID" class="col-sm-2 control-label">年龄:</label>
                                <div class="col-sm-10">
                                    <input type="number" name="age" class="form-control" value="<?php echo $stu['age']; ?>">
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="inputID" class="col-sm-2 control-label">手机:</label>
                                <div class="col-sm-10">
                                    <input type="number" name="cellphone" class="form-control" value="<?php echo $stu['cellphone']; ?>">
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="inputID" class="col-sm-2 control-label">班级:</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="gid">
                                        <option value="">请选择所在班级</option>
                                        <?php foreach ($grade as $k => $v) { ?>
                                            <?php if($v['id'] == $stu['gid']){ ?>
                                                <option value="<?php echo $v['id']; ?>" selected="selected"><?php echo $v['gname'] ?>
                                                </option>
                                            <?php }else{ ?>
                                                <option value="<?php echo $v['id']; ?>"><?php echo $v['gname'] ?></option>
                                            <?php  }?>

                                        <?php } ?>
                                    </select>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <button type="submit" class="btn btn-primary">递交修改</button>
                                </div>
                            </div>
                        </form>
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


    <!-- END JAVASCRIPTS -->

</body>

<!-- END BODY -->

</html>

