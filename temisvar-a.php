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
      <p id="5h" class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><i class="fa fa-car"></i> 4 sata vožnje</p>

      <h2 class="template-headline col-lg-12">Temišvar</h2>
    </div>
    <!-- class="weather col-lg-6">
      <p class="day col-lg-12">Pon|Uto</p>
      <p class="celsius col-lg-12"><i class="fa fa-sun-o"></i>25˚C</p>
    </div>-->

    <div class="template-images col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="template-image "><img src="images/gradovi/temisvar.jpg" alt="" class="img-responsive"></div>
      <div id="map-container" class="hidden-xs hidden-sm"></div>
    </div>

    <div class="template-text col-lg-12 col-md-12 col-sm-12 col-xs-12">

      <h4 class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><b>Kombi prevoz do Aerodroma Temišvar</b></h4>
      <p class="col-lg-12 col-md-12 col-sm-12 col-xs-12">Aerodrom u Temišvaru je najpoznatiji po jeftinim avio kartama. Best Tours agencija prati red letenja na aerodromu u Temišvaru, zbog toga smo Vam omogućili redovne ture do Temišvara. Put do aerodroma Temišvar traje između 4 i 5 sati i putnici stižu 2 sata pred sam let. Kako bi se čekirali i imali vremena da bez kašnjenja uđu na svoj let. Best Tours agencija takođe čeka putnike na aerodromu bez dodatnih doplata u slučaju kašnjenja leta.  Mesta za prtljag ima dovoljno pa tako nije ograničen broj prtljaga koji nosite sa sobom.  Kombi prevoz je idealan način i takođe najlakši način da stignete na vreme do aerodroma u Temišvaru.
<br>
<br>
<a href="http://www.aerotim.ro">Red letenja Aerodrom Temišvar</a>
<br>
<br>
<b>Cena kombi prevoza do aerodroma u jednom smeru iznosi 25 evra, dok u oba pravca iznosi 40 evra.
Za studente, učenike i penzionere nudimo specijalne popuste.</b>
</span></p>
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

    var directionsDisplay = new google.maps.DirectionsRenderer({ draggable: true });
  var directionsService = new google.maps.DirectionsService();
  var map;

  $(window).load(function() {
      var myOptions = {
          zoom: 10,
          mapTypeId: google.maps.MapTypeId.ROADMAP,
          center: new google.maps.LatLng(45.810269613156485, 15.990826328124962)
      };
      map = new google.maps.Map(document.getElementById("map-container"), myOptions);
      directionsDisplay.setMap(map);
      directionsDisplay.setPanel(document.getElementById("directions"));
      calcRoute();
  });


  function calcRoute() {
      var request = {
          origin: 'Beograd',
          destination: 'timisoara',
          travelMode: google.maps.TravelMode.DRIVING
      };
      directionsService.route(request, function(response, status) {
          if (status == google.maps.DirectionsStatus.OK) {
              directionsDisplay.setDirections(response);
          }
      });
  }
  </script>
</body>
</html>
