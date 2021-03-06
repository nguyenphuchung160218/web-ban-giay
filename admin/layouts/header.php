
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Trang Admin</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>public/admin/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>public/admin/css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>public/admin/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>public/admin/table-js/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"> -->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url(); ?>admin/">Trang Admin</a>       
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <!-- <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading">
                                            <strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>                     
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li> -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo isset($_SESSION['admin_name']) ? $_SESSION['admin_name'] : 'Admin'?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="<?php echo modules('admin') ?>"><i class="fa fa-fw fa-user"></i> T??i kho???n</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="<?php echo base_url()?>login/checkout-admin.php"><i class="fa fa-fw fa-power-off"></i> ????ng xu???t</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav" style="font-size: 16px;">
                    <li>
                        <a href="<?php echo base_url()?>admin"><i class="fas fa-tachometer-alt"></i> B???ng ??i???u Khi???n</a>
                    </li>
                    <li class="<?php echo isset($open) && $open =='category' ? 'active' :''; ?>">
                        <a href="<?php echo modules('category') ?>"><i class="fa fa-list"></i> Danh M???c</a>
                    </li>
                    <li class="<?php echo isset($open) && $open =='product' ? 'active' :''; ?>">
                        <a href="<?php echo modules('product') ?>"><i class="fa fa-shopping-cart"></i> S???n Ph???m</a>
                    </li>
                    <li class="<?php echo isset($open) && $open =='rating' ? 'active' :''; ?>">
                        <a href="<?php echo modules('rating') ?>"><i class="fa fa-comment"></i> ????nh Gi??</a>
                    </li>
                    <li class="<?php echo isset($open) && $open =='transaction' ? 'active' :''; ?>">
                        <a href="<?php echo modules('transaction') ?>"><i class="fa fa-shopping-cart"></i> ????n H??ng</a>
                    </li>
                    <li class="<?php echo isset($open) && $open =='user' ? 'active' :''; ?>">
                        <a href="<?php echo modules('user') ?>"><i class="fa fa-user"></i> Th??nh vi??n</a>
                    </li>
                    <li class="<?php echo isset($open) && $open =='admin' ? 'active' :''; ?>">
                        <a href="<?php echo modules('admin') ?>"><i class="fa fa-user"></i> Qu???n L??</a>
                    </li>
                    <li style="margin-top: 20px">
                        <a target="_blank" href="<?php echo base_url(); ?>">Website ShoesShop</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">