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
      <p id="5h" class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><i class="fa fa-car"></i> 7 sati vožnje</p>

      <h2 class="template-headline col-lg-12">Grac</h2>
    </div>
    <!-- class="weather col-lg-6">
      <p class="day col-lg-12">Pon|Uto</p>
      <p class="celsius col-lg-12"><i class="fa fa-sun-o"></i>25˚C</p>
    </div>-->

    <div class="template-images col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="template-image "><img src="images/gradovi/grac2.jpg" alt="" class="img-responsive"></div>
      <div id="map-container" class="hidden-xs hidden-sm"></div>
    </div>

    <div class="template-text col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <h4 class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><b>BEOGRAD - GRAZ - BEOGRAD</b></h4>
      <p class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><b>Beograd Grac kombi prevoz</b> sa Best Tours turističkom agencijom povoljno, sigurno i brzo do željene destinacije. Prevoz Beograd Grac od adrese u Beogradu na željenu adresu u Gracu. Svakodnevni polasci na relaciji Beograd Grac kao i svakodnevni povratak Grac Beograd. Naša vozila primaju do 8 putnika i moguće je skupljanje putnika u drugim gradovima na relaciji Beograd Grac. Gradovi koje još radimo na ovoj destinaciji su Novi Sad, Subotica, Budimpešta, Beč. Tura Beograd Grac traje oko 8 sati u zavisnosti od zadržavanja na graničnim prelazima. Kvalitetna vozila i sigurni vozači za Vaš ugodan i siguran put. </span></p>
<br>
<br>
<p class="template-text-info col-lg-12 col-md-12 col-sm-12 col-xs-12">
<b>Cena karte u jednom smeru iznosi 50 evra dok u oba izosi 85 evra. Za studente, učenike i penzionere specijalni popusti.</b>
<br>
<br>
<b>Grac</b> (nem. Graz), ranije poznat i kao Gradac, je drugi po veličini grad u Austriji, smešten u jugoistočnom delu države. Grac je upravno, privredno i kulturno središte pokrajine Štajerske, gde čini zaseban gradski okrug.
Grac je poznat po starom gradskom jezgru, jednim od najočuvanijih u srednjoj Evropi, zbog čega je 1999. godine stavljeno na listu kulturne baštine Uneska, a 2010. mu je pridodat i dvorac Egenberg. Druga posebnost grada je naglašena „obrazovno-univerzitetska“ funkcija grada, po čemu je Grac poznat širom Evrope. Grac se nalazi u jugoistočnom delu Austrije, blizu slovenačke granice (oko 30 km). Tako je Gracu najbliži veći grad slovenački Maribor na 50 km udaljenosti južno od grada. Prestonica Beč udaljena je oko 200 km severno ili 2 i po časa vožnje.
Grac se smestio na strateški važnom mestu u južnom podgorju Alpa. Tu se dolina reke Mure, dotle stišnjena među Alpima, širi u štajersku ravnicu, krajnje zapadni obod Panonske nizije. Gradsko jezgro se upravo obrazovalo na prvim bregovima i brdima Alpa, sa kojih se lako mogla nadgledati južno razastrta ravnica.
</p>

    </div>
    <a class="btn btn-large btn-primary col-lg-2 col-lg-offset-5 col-md-2 col-md-offset-5 col-sm-4 col-sm-offset-4 col-xs-5 col-xs-offset-3" href="online-rezervacija.php">ZAKAŽITE VOŽNJU</a>
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
          destination: 'graz',
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
