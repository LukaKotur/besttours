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
      <p id="5h" class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><i class="fa fa-car"></i> 3 sata vožnje</p>

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
    <h4 class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><b>BEOGRAD - TEMIŠVAR - BEOGRAD</b></h4>
      <p class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><b>Beograd Temišvar kombi prevoz</b> sa Best Tours turističkom agencijom povoljno, sigurno i brzo do željene destinacije. Prevoz Beograd Temišvar od adrese u Beogradu na željenu adresu u Temišvaru. Svakodnevni polasci na relaciji Beograd Temišvar kao i svakodnevni povratak Temišvar Beograd. Naša vozila primaju do 8 putnika i moguce je skupljanje putnika u drugim gradovima na relaciji Beograd Temišvar. Tura Beograd Temišvar traje izmedju 3 i 4 sata u zavisnosti od zadržavanja na graničnim prelazima.  Kvalitetna vozila i sigurni vozači za Vaš ugodan i siguran put.  Kombi prevoz putnika na relaciji Beograd Temišvar aerodrom. Temišvar aerodrom nudi jeftine avionske karte preko kompanije Wizz Air. Sa agencijom Best Tours možete lako stici bez kašnjejna na let.
</span></p>
      <br>
      <br>
      <p class="template-text-info col-lg-12 col-md-12 col-sm-12 col-xs-12">
     <br><b> Cena karte u jednom smeru iznosi 25 evra dok u oba iznosi 40 evra. Za studente, učenike i penzionere specijalan popust.</b>

     <br>
<br>  <b>Temišvar</b> je grad u Rumuniji. Najveći je grad Banata, leži na reci Begej i sedište je Županije Tamiš. Sa 412.753 stanovnika Temišvar je četvrti grad po veličini u Rumuniji, a takođe je poznat kao i kulturni, obrazovni i trgovački centar zapadne Rumunije.[3]
Temišvar je i najveći kulturno-istorijski centar Srba u Rumuniji. Najviše srpskog življa okupljeno je upravo u Temišvaru, gde inače postoje mnoge kulturne ustanove koje ih zbližavaju. U Temišvaru se nalazi sedište Eparhije temišvarske Srpske pravoslavne crkve, kao i Saveza Srba u Rumuniji, a takođe se ovde izdaje i srpski nedeljnik „Naša reč“.
Grad se naziva i „Malim Bečom“, jer je veoma dugo bio pod Habzburgovcima, i njegovo središte svojom arhitekturom i ambijentima podseća na stari deo Beča. Temišvar duguje ime reci Tamiš. Zanimljivo je da kroz grad protiče samo reka Begej. Razlog ovome je povezanost i isprepletanost tokova ove dve reke u prošlosti na području grada. Kasnijom kanalizacijom i obaloutvrdom njihovi tokovi su dobili drugačije pravce, koji su do danas u tom obliku.
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
          destination: 'Timisoara',
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
