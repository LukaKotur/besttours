<!DOCTYPE html>
<html lang="en">
<head>
  <link href='https://fonts.googleapis.com/css?family=Raleway:200,300,400,500,600,700,800' rel='stylesheet' type='text/css'>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title></title>
  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <link href="css/bootstrap-slider.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
</head>
<body class="tours-body page-tours">

  <?php include 'header.php' ?>
  <div id="startchange"></div>
  <div class="header-offset"></div>
  <div class="container">
    <a href="#" class="pdf-price col-lg-12 col-md-12 col-sm-12 col-xs-12">Preuzmite PDF cenovnik</a>
    <div class="tours-chooser blue-headline blue-headline-chooser col-lg-15 col-md-15 col-sm-15 col-xs-15" id="tours-bg" onclick="changeToursBelgrade()">Ture iz Beograda</div>
    <div class="tours-chooser blue-headline blue-headline-chooser col-lg-15 col-md-15 col-sm-15 col-xs-15" id="tours-vi" onclick="changeToursVienna()">Ture iz Beca</div>
    <div class="tours-chooser blue-headline blue-headline-chooser col-lg-15 col-md-15 col-sm-15 col-xs-15" id="tours-gr" onclick="changeToursGraz()">Ture iz Graca</div>
    <div class="tours-chooser blue-headline blue-headline-chooser col-lg-15 col-md-15 col-sm-15 col-xs-15" id="tours-ai" onclick="changeToursAirport()">Aerodrom ture</div>
    <!-- <div class="tours-chooser blue-headline blue-headline-chooser col-lg-15 col-md-15 col-sm-15 col-xs-15" id="tours-sh" onclick="changeToursShopping()">Shopping ture</div> -->
  </div>
  <a href="#0" class="cd-top"></a>

  <div class="container tours-content" id="tours-content-bg">
    <?php include 'tours-belgrade.php' ?>
  </div>
  <div class="container tours-content" id="tours-content-vi">
    <?php include 'tours-vienna.php' ?>
  </div>
  <div class="container tours-content" id="tours-content-gr">
    <?php include 'tours-graz.php' ?>
  </div>
  <div class="container tours-content" id="tours-content-ai">
    <?php include 'tours-airport.php' ?>
  </div>
  <div class="container tours-content" id="tours-content-sh">
    <?php include 'tours-shopping.php' ?>
  </div>

  <?php include 'popularni.php' ?>
  <?php include 'footer.php' ?>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery-1.12.3.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <!-- WUB javascript -->
  <script src="js/besttours.js"></script>
  <script src="js/bootstrap-slider.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/smoothscroll.js"></script>
  <script src="js/modernizr.js"></script> <!-- Modernizr -->
  <script src="js/main.js"></script> <!-- Gem jQuery -->
  <script src="http://localhost:35729/livereload.js" charset="utf-8"></script>
</body>
</html>
