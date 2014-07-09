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
                <a class="navbar-brand" href="v_user_index.php">Toko ADMIN</a>
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
                        <li><a href="v_user_modify_user.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
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
                            <a href="v_user_index.php"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Manage<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="v_user_domain.php"><i class="fa fa-cog"></i>  manage domain</a>
                                </li>
                                <li>
                                    <a href="http://sql.toko.itinet.fr"><i class="fa fa-cloud"></i>  manage database</a>
                                </li>
                                <li>
                                    <a href="http://webmail.toko.itinet.fr"><i class="fa fa-envelope-o"></i>  Email</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Home</h1>
                </div>
                <div class="col-lg-12">
                    <div class="jumbotron">
                        <h1>Uploader votre site</h1>
                        <p>Pour uploader votre site, c'est très simple; vous avez juste a utiliser votre client ftp préferer à vous connecter dessus en utilisant : sftp://labo.itinet.fr port 6509 et à mettre votre login dessus.
                            si vous utilisez filezila, clicker sur le bouton ci dessous: <a href="filezila://" type="button" class="btn btn-primary btn-lg" role="button">Ouvrir Filezilla</a><br> Pour uploader votre base de donné, rien de plus simple ! Clicker sur ce lien : <a href="../../v_user_phpmyadmin.php" type="button" class="btn btn-primary btn-lg" role="button">PhpMyAdmin</a> </p>
                        
                    </div>
                </div>

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Création de base de donné</h1>
                </div>
                <div class="panel panel-default">
                     <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="../modele/m_userdb.php" method="POST">
                                        <div class="form-group">
                                            <label>Base de donné</label><br>
                                             Login:<input class="form-control" type="text" id="projet" name="projet">
                                             password:<input class="form-control" type="password" name="password"><br>
                                             <input id="submit" value="Valider" type="submit" class="btn btn-default"></input>
                                        </div>
                                    </form>
                                </div>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
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