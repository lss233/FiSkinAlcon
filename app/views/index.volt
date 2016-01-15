<?php
global $AlreadyLogin; //声明一下Bootstrap那边的那个变量。{谁让我不会用分发器呢_(:з」∠)_}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        {{ get_title() }}
        {{ stylesheet_link('css/bootstrap.min.css') }}
        {{ stylesheet_link('css/metisMenu.min.css') }}
        {{ stylesheet_link('css/timeline.css') }}
        {{ stylesheet_link('css/sb-admin-2.css') }}
        {{ stylesheet_link('css/morris.css') }}
        {{ stylesheet_link('css/font-awesome.min.css') }}
        {{ stylesheet_link('css/nprogress.min.css') }}
        {{ javascript_include('js/nprogress.min.js') }}
        <script>NProgress.start();</script>
    </head>
        <div id="wrapper">
            <!--Navigtion -->
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-traget=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" herf="index.php">FiSkinAlcon</a>
                </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" herf="#">
                        <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages PM">

                        <li class="divider">这是一个华丽的分割线</li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>查看所有消息</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> 这里是通知
                                    <span class="pull-right text-muted small">时间</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                    <?php
                        if($AlreadyLogin){ //这里判断有没有登录
                            //如果已经登录了AlreadyLogin值为True，就显示这个用户菜单
                            echo '<li>'.Phalcon\Tag::linkTo("user",'<i class="fa fa-user fa-fw"></i> 个人资料').'</li>';
                            echo '<li>'.Phalcon\Tag::linkTo("user/setting",'<i class="fa fa-gear fa-fw"></i> 设置').'</li>';
                            echo '<li class="divider"></li>';
                            echo '<li>'.Phalcon\Tag::linkTo("sign/logout",'<i class="fa fa-sign-out fa-fw"></i> 退出登录').'</li>';

                    } else{
                        //如果没有登录，AlreadyLogin值为False，就显示这个菜单
                            echo '<li>'.Phalcon\Tag::linkTo("sign",'<i class="fa fa-user fa-fw"></i> 登录').'</li>';
                            echo '<li>'.Phalcon\Tag::linkTo("sign",'<i class="fa fa-gear fa-fw"></i> 注册').'</li>';
                    }
                    ?>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="搜索...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <?php echo Phalcon\Tag::linkTo("index",'<i class="fa fa-dashboard fa-fw"></i> 仪表盘</a>');?>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> 皮肤管理<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <?php echo Phalcon\Tag::linkTo("skin","皮肤"); ?>
                                </li>
                                <li>
                                    <?php echo Phalcon\Tag::linkTo("cloak","披风"); ?>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <?php echo Phalcon\Tag::linkTo("charts",'<i class="fa fa-bar-chart-o fa-fw"></i> API调用统计</a>');?>
                        </li>
                        <li>
                            <?php echo Phalcon\Tag::linkTo("help",'<i class="fa fa-bar-chart-o fa-fw"></i> 帮助</a>');?>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <div id="page-wrapper">
        {{ content() }}
        </div>
        <script>NProgress.done();</script>
        {{ javascript_include('js/jquery.min.js') }}
        {{ javascript_include('js/bootstrap.min.js') }}
        {{ javascript_include('js/metisMenu.min.js') }}
        {{ javascript_include('js/raphael-min.js') }}
        {{ javascript_include('js/sb-admin-2.js') }}
        {{ javascript_include('js/msgs.js') }}
        </body>
</html>
