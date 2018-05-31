

<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->

<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->

<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

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

                        <li><a href="#">编辑文章</a></li>

                        <li class="pull-right no-text-shadow">


                        </li>

                    </ul>

                    <!-- END PAGE TITLE & BREADCRUMB-->

                </div>

            </div>

            <!-- END PAGE HEADER-->

            <div id="dashboard">



                <div class="row-fluid">

                    <div class="panel-body">
                        <form action="" method="post" role="form">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    *文章标题
                                    <input type="text" name="title" class="form-control" placeholder="<?php echo $data['title'];?>">

                                </div>

                                <div class="col-sm-12" style="margin-top: 30px;">
                                    *文章内容
                                    <textarea name="content" class="form-control" placeholder="文章内容" rows="20" style="width: 980px;">
                                    <?php echo $data['content'];?>
                                </textarea>
                                </div>
                            </div>

                            <div class="col-sm-12" style="margin-top: 30px;">
                                <button type="submit" class="btn btn-danger" style="width: 100%;">递交修改</button>
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


