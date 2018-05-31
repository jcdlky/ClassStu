




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

                        <li><a href="#">学生列表</a></li>

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
                                            <a href="index.php?s=admin/grade/stuInfo&id=<?php echo $v['id']; ?>" class="btn btn-primary">查看</a>
                                            <a href="index.php?s=admin/stu/edit&id=<?php echo $v['id']; ?>" class="btn btn-primary">编辑</a>

                                            <a href="javascript:;" onclick="del(<?php echo $v['id']; ?>)"
                                               class="btn btn-danger">删除</a>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
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
    <script>
        // function del(id) {
        //     if(confirm('确定删除该学生数据吗?')){
        //         location.href = 'index.php?s=admin/stu/delete&id=' + id;
        //     }
        // }

        function del(id) {
            if (confirm('确定删除该学生吗?')) {
                //如果确定要删除,发送ajax
                $.ajax({
                    url:'index.php?s=admin/stu/ajaxDelete&id=' + id,
                    type:'get', //如果请求方式是post,就需要data属性,如果是get可以不要
                    dataType:'json', //定义返回数据类型
                    success:function (phpData) {
                        alert(phpData.message);
                        if (phpData.valid){
                            //刷新当前页面
                            window.location.reload();
                        }
                    }

                })
            }
        }
    </script>

    <!-- END JAVASCRIPTS -->

</body>

<!-- END BODY -->

</html>

