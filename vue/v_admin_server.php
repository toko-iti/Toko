<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>TOKO Admin Version Alpha</title>

    <!-- Core CSS - Include with every page -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Page-Level Plugin CSS - Blank -->

    <!-- SB Admin CSS - Include with every page -->
    <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="v_admin_index.php">Toko ADMIN</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li class="divider"></li>
                        <li><a href="v_deconnection.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="side-menu">
                            
                        <li>
                            <a href="v_admin_index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> user<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="v_admin_server.php">Server</a>
                                </li>
                                <li>
                                    <a href="v_user_modify_user.php">manage user</a>
                                </li>
                                 <li>
                                    <a href="../../phpmyadmin">manage database</a>
                                </li>
                            </ul>
                            
                        </li>
                    </ul>
                    <!-- /#side-menu -->
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Server Admin</h1>
                </div>
                <div class="panel-body">
                            <h4>Service</h4>
                            <p>
                                <a href="./v_admin_server.php?apache=true" type="button" class="btn btn-warning">restart apache</a>
                                <?php 
				   if ($_GET['apache'])
                                   include "c_restart_apache.php";
                                ?>
                                <a href="./v_admin_server.php?mail=true"  type="button" class="btn btn-warning">restart mail</a>
                                <?php 
				   if ($_GET['mail'])
                                   include "c_restart_mail.php";
                                ?>
                                <a href="./v_admin_server.php?dns=true"  type="button" class="btn btn-warning">restart dns</a>
                                <?php 
				   if ($_GET['dns'])
                                   include "c_restart_dns.php";
                                ?>
                                <a href="./v_admin_server.php?all=true"  type="button" class="btn btn-warning">restart all service</a>
                                <?php 
				   if ($_GET['all'])
				   {
                                   include "c_restart_dns.php";
				   include "c_restart_mail.php";
                                   include "c_restart_apache.php";
				   }
				   ?>
                                <hr>
                                <h4>Server</h4>
                                <a href="./v_admin_server.php?reboot=truehref="./v_admin_server.php?""  type="button" class="btn btn-danger">reboot</a>
                                <?php 
                                include "c_reboot.php";
                                ?>
                                <a  type="button" class="btn btn-danger">shutdown</a>
                            </p>
                
            </div>
            
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Page-Level Plugin Scripts - Blank -->

    <!-- SB Admin Scripts - Include with every page -->
    <script src="js/sb-admin.js"></script>

    <!-- Page-Level Demo Scripts - Blank - Use for reference -->

</body>

</html>

