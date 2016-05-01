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
      <p id="5h" class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><i class="fa fa-car"></i> 8 sati vožnje</p>

      <h2 class="template-headline col-lg-12">Beograd</h2>
    </div>
    <!-- class="weather col-lg-6">
      <p class="day col-lg-12">Pon|Uto</p>
      <p class="celsius col-lg-12"><i class="fa fa-sun-o"></i>25˚C</p>
    </div>-->

    <div class="template-images col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="template-image "><img src="images/gradovi/beograd.jpg" alt="" class="img-responsive"></div>
      <div id="map-container" class="hidden-xs hidden-sm"></div>
    </div>

    <div class="template-text col-lg-12 col-md-12 col-sm-12 col-xs-12">

<h4 class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><b>GRAC - BEOGRAD - GRAC</b></h4>
      <p class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><b>Grac Beograd kombi prevoz</b> sa Best Tours turističkom agencijom povoljno, sigurno i brzo do željene destinacije. Prevoz Graz Beograd od adrese u Grazu na željenu adresu u Beogradu. Svakodnevni polasci na relaciji Graz Beograd kao i svakodnevni povratak Beograd Graz. Naša vozila primaju do 8 putnika i moguće je skupljanje putnika u drugim gradovima na relaciji Graz Beograd (Beč Beograd). Tura Graz Beograd traje između 7 i 8 sati u zavisnosti od zadržavanja na graničnim prelazima. Putnici iz Beča se mogu takođe prijaviti za ovu rutu ako žele da stignu do Beograda. Kvalitetna vozila i sigurni vozači za Vaš ugodan i siguran put.
</span></p>


      <p class="template-text-info col-lg-12 col-md-12 col-sm-12 col-xs-12">
<br>
<br> <b>Cena karte u jednom smeru iznosi 45 evra dok u oba smera iznosi 80 evra. Za studente, učenike i penzionere specijalan popust.</b>
<br>
<br><b>Beograd</b> je glavni i najveći grad Srbije. Jedan je od najstarijih gradova u Evropi. Prva naselja na teritoriji Beograda datiraju iz praistorijske Vinče, 4.800 godina pre nove ere. Sam Beograd su osnovali Kelti u 3. veku pre n. e, pre nego što je postao rimsko naselje Singidunum.[2][3] Slovensko ime „Beligrad“ (slov. Bjelgrad) prvi put je zabeleženo 878. godine, u čemu je sadržan utisak izgleda tadašnje tvrđave. Beograd je glavni grad Srbije od 1405. godine i bio je prestonica raznih južnoslovenskih država od 1918. pa do 2003, kao i Srbije i Crne Gore od 2003. do 2006.[4]
Grad leži na ušću Save u Dunav u centralnom delu Srbije, gde se Panonska nizija spaja sa Balkanskim poluostrvom.

Grad Beograd ima status posebne teritorijalne jedinice u Srbiji sa svojom lokalnom samoupravom.[5] Njegova teritorija je podeljena na 17 gradskih opština, od kojih svaka ima svoje lokalne organe vlasti.[6] Beograd zauzima preko 3,6% teritorije Republike Srbije, a u njemu živi 21% ukupnog broja građana dela Srbije na kome je izvršen popis 2002. Godine. Beograd je takođe ekonomski centar Srbije i središte srpske kulture, obrazovanja i nauke.
</p>

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
          origin: 'graz',
          destination: 'Beograd',
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
