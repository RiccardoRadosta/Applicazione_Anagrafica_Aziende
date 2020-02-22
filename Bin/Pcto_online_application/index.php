<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">


    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

     <!-- Site Metas -->
    <title>PCTO Online Application  </title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="app_version" data-spy="scroll" data-target="#navbarApp" data-offset="98">

    <!-- LOADER -->
    <!-- <div id="preloader">
        <img class="preloader" src="images/loaders/loader-app.gif" alt="">
    </div> end loader -->
    <!-- END LOADER -->
	<div class="top-bar">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="left-soi">
						<ul>
							<a class="navbar-brand"><a href="https://www.marconiverona.edu.it/pvw/app/VRIT0007/pvw_sito.php"><img src="uploads/VRIT0007_logo.png" width = "65" height = "40" alt="image"></a>
              <a class="navbar-brand"><a href="https://web.spaggiari.eu/sdf/app/default/sito.php?"><img src="uploads/cvv_logo.png" width = "80" height = "45" alt="image"></a>
              <a class="navbar-brand"><a href="https://campus.marconivr.it/"><img src="uploads/logo_campus.png" width = "125" height = "35" alt="image"></a>
						</ul>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div align="right">
            <?php
              if (isset($_SESSION["user"])){
                echo "<a href=\"login/logout.php\"><input type='submit' class='btn btn-light btn-radius btn-brd' value='Logout'><i class='fa fa-play' aria-hidden='true'></i></a>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>";
              }
            ?>
					</div>
				</div>
			</div>
		</div>
	</div>
    <header class="header header_style_01">
        <nav class="navbar header-nav navbar-expand-lg">
            <div class="container">
				<a class="navbar-brand"><img src="images/logos/prova.png" alt="image"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarApp" aria-controls="navbarApp" aria-expanded="false" aria-label="Toggle navigation">
					<span></span>
					<span></span>
					<span></span>
				</button>

            </div>
        </nav>
    </header>

    <div id="home" class="parallax first-section" style="background-image:url('uploads/bg-img.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="big-tagline">
                      <?php
                        if (!isset($_SESSION["user"])){
                          echo"
                            <br><h2>Non hai effettuato il login</h2>
                            <p class='lead'>Se sei un professore, per poter usufruire di tutte le funzionalità esegui il Login<br>Utilizzare credenziali CLASSEVIVA</p>
                            <form action='login/login.php' method='post'>
                              <table align='center'>
                              <tr><td><h1>Nome utente</h1></td><td><h1>Password</h1></td><td></td></tr>
                              <td><input type='text' name='username'></td>
                              <td><input type='password' name='password' ></td>
                              <td><input type='submit' class='btn btn-light btn-radius btn-brd' value='Invia'><i class='fa fa-play' aria-hidden='true'></i></a>
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>
                              </table>
                            </form>";
                        }
                        else {
                          $username = $_SESSION["user"];
                          echo "<h2>Buongiorno $username</h2>";
                          #var_dump($username);
                        }
                       ?>
                    </div>
                </div>
                <div>
                    <img src="uploads/VRIT0007_logo.png">
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <div id="features" class="section wb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Barra di ricerca</h3>
                <?php
                    echo"
                      <form action='search.php' method='post'>
                        <table align='center'>
                        <tr><td><h1>Comune</h1></td><td><h1>****</h1></td><td></td></tr>
                        <td><input type='text' name='comun'></td>
                        <td><input type='submit' class='btn btn-light btn-radius btn-brd' value='cerca'><i class='fa fa-play' aria-hidden='true'></i></a>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>
                        </table>
                      </form>";
                    include "create_table.php";
                 ?>
            </div><!-- end title -->

            <div id="default" class="row clearfix zenith_slider">

        </div><!-- end container -->
    </div><!-- end section -->


    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-left">
                    <p class="footer-company-name">All Rights Reserved. &copy; 2018 <a href="#">Appfast</a> Design By :
					<a href="https://html.design/">html design</a></p>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
	<script src="js/zenith.js"></script>


</body>
</html>
