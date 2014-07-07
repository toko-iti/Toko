<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Toko</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS for the 'Business Frontpage' Template -->
    <link href="css/business-frontpage.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-fixed-top navbar-inverse" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            <img src=" img/toko.png" height="50" width="150" alt="Toko" />
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="vue/v_login.php">Se connecter</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="business-header">

        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <!-- The background image is set in the custom CSS -->
                    <h1 class="tagline">Héberger en toute simplicité.</h1>
                    <!-- Register in toko project-->

                    <div class="container">
        <div class="row">
            <div class="col-md-4">
            
                                    <div class="panel-body">
                        <form role="form" action="control/c_registration.php" method="POST">
                            <fieldset>
                                <div class="col-lg-12">
                    <h2 class="tagline1">S'pitch</h2>
                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" required autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Project" name="project" type="project" required autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" required >
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Confirm password" name="password2" type="password" required/>
                                </div>
                                
                                <!-- Change this to a button or input when using this as a form -->
                                <input id="submit" value="Valider" type="submit" class="btn btn-lg btn-success btn-block">
                                
                            </fieldset>
                        </form>
                    </div>
                
            </div>
        </div>
    </div>

    <!-- Core Scripts - Include with every page -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/sb-admin.js"></script>
                </div>
            </div>

        </div>

    </div>

    <div class="container">

        <hr>

        <div class="row">
            <div class="col-lg-8 col-sm-8">
                <h2>Notre Projet</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean convallis, sapien in gravida condimentum, risus nunc ullamcorper dolor, ac scelerisque quam turpis eget sem. Morbi consequat felis et odio ultrices tempus. Maecenas ac velit id nisl feugiat pharetra egestas lobortis ante. In porta dignissim vehicula. Pellentesque elit quam, pretium ac lacus et, vehicula tempus arcu. Nullam dapibus ullamcorper lorem ut gravida. Pellentesque euismod orci tempus, sagittis lorem id, sagittis erat. Curabitur vulputate purus quis lectus iaculis, imperdiet facilisis diam sollicitudin. Praesent nec luctus urna, eget tristique nibh.</p>
                <p>Suspendisse feugiat eleifend lacus at fringilla. Suspendisse tincidunt vitae ligula quis accumsan. Vivamus porttitor at dolor eu pretium. Nunc tristique aliquet augue et aliquet. Aliquam sodales, purus dignissim semper venenatis, eros neque suscipit nisi, quis vehicula lacus lacus pulvinar risus. Nulla eu lacus consectetur, gravida arcu id, accumsan enim. Quisque porttitor, ante ac feugiat aliquet, magna lorem auctor lorem,</p>
                <p><a class="btn btn-default btn-large" href="#">Inscrivez-vous &raquo;</a>
                </p>
            </div>
            <div class="col-lg-4 col-sm-4">
                <h2>Contactez nous</h2>
                <address>
                   
                    <br>
                    <abbr title="Email">E:</abbr> <a href="mailto:#">vamier@mintechinfo.fr</a>
                </address>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-sm-4">
                <img class="img-circle img-responsive text-center" src="http://placehold.it/300x300">
                <h2>Mathieu</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean convallis, sapien in gravida condimentum, risus nunc ullamcorper dolor, ac scelerisque quam turpis eget sem.</p>
            </div>
            <div class="col-sm-4">
                <img class="img-circle img-responsive" src="http://placehold.it/300x300">
                <h2>Christophe</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean convallis, sapien in gravida condimentum, risus nunc ullamcorper dolor, ac scelerisque quam turpis eget sem.</p>
            </div>
            <div class="col-sm-4">
                <img class="img-circle img-responsive" src="http://placehold.it/300x300">
                <h2>Joshua</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean convallis, sapien in gravida condimentum, risus nunc ullamcorper dolor, ac scelerisque quam turpis eget sem.</p>
            </div>
        </div>

        <hr>

        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Toko &copy; </p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /container -->


    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

</body>

</html>
