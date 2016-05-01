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
  <link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.min.css">
  <link href="css/bootstrap-slider.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.js"></script>
</head>

<body>
  <?php include 'header.php';?>
  <div class="header-offset"></div>
  <div class="container" id="template-article">

    <div class="eta col-lg-6">
      <p id="5h" class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><i class="fa fa-car"></i> 5 sati vožnje</p>

      <h2 class="template-headline col-lg-12">BTC Slovenija</h2>
    </div>
    <!-- class="weather col-lg-6">
      <p class="day col-lg-12">Pon|Uto</p>
      <p class="celsius col-lg-12"><i class="fa fa-sun-o"></i>25˚C</p>
    </div>-->

    <div class="template-images col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="template-image "><img src="images/gradovi/zagreb.jpg" alt="" class="img-responsive"></div>
      <div id="map-container" class="hidden-xs hidden-sm"></div>
    </div>

    <div class="template-text col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <p class="template-text-info col-lg-12 col-md-12 col-sm-12 col-xs-12"><b>Zagreb</b> je glavni grad Republike Hrvatske, i najveći grad u Hrvatskoj po broju stanovnika. Povijesno gledano, Zagreb je izrastao iz dva naselja na susjednim brdima, Gradeca i Kaptola, koji čine jezgru današnjeg Zagreba, njegovo povijesno središte. Zagreb danas predstavlja upravno, gospodarsko, kulturno, prometno i znanstveno središte Hrvatske. Položajem i kulturom spada u gradove srednje Europe. Grad Zagreb je posebna jedinstvena, teritorijalna, upravna i samoupravna jedinica koja ima položaj županije. Zagreb se nalazi u kontinentalnoj središnjoj Hrvatskoj, na južnim obroncima Medvednice te na obalama rijeke Save. Nalazi se na nadmorskoj visini od 122 metara (Zrinjevac). Povoljan zemljopisni smještaj na jugozapadnom kutu Panonske nizine, između alpske, dinarske, jadranske i panonske regije, uzrok je činjenici da se Zagreb nalazi na prometno čvorištu puteva između srednje i jugoistočne Europe te Jadranskog mora.</p>
      <h4 class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><b>BEOGRAD - ZAGREB - BEOGRAD</b></h4>
      <p class="col-lg-12 col-md-12 col-sm-12 col-xs-12">Cena za vožnju u jednom smeru je 30 evra dok voznja u oba pravca košta 60 evra. <span class="orange">***Svaka sesta voznja je gratis***</span></p>
    </div>
    <a class="btn btn-large btn-primary col-lg-2 col-lg-offset-5 col-md-2 col-md-offset-5 col-sm-4 col-sm-offset-4 col-xs-5 col-xs-offset-3" href="online-rezervacija">ZAKAŽITE VOŽNJU</a>
    </div>

    <?php include 'popularni.php';?>
    <?php include 'footer.php';?>


  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/js/bootstrap.min.js"></script>
  <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
  <script>

    function init_map() {
      var var_location = new google.maps.LatLng(45.430817,12.331516);

      var var_mapoptions = {
        center: var_location,
        zoom: 14
      };

      var var_marker = new google.maps.Marker({
        position: var_location,
        map: var_map,
        title:"Venice"});

      var var_map = new google.maps.Map(document.getElementById("map-container"),
        var_mapoptions);

      var_marker.setMap(var_map);

    }

    google.maps.event.addDomListener(window, 'load', init_map);

  </script>
</body>
</html>
