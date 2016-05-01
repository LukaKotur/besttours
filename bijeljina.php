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
      <p id="5h" class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><i class="fa fa-car"></i> 9 sati vožnje</p>

      <h2 class="template-headline col-lg-12">Bijeljina</h2>
    </div>
    <!-- class="weather col-lg-6">
      <p class="day col-lg-12">Pon|Uto</p>
      <p class="celsius col-lg-12"><i class="fa fa-sun-o"></i>25˚C</p>
    </div>-->

    <div class="template-images col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="template-image "><img src="images/gradovi/bijeljina.jpg" alt="" class="img-responsive"></div>
      <div id="map-container" class="hidden-xs hidden-sm"></div>
    </div>

    <div class="template-text col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <p class="template-text-info col-lg-12 col-md-12 col-sm-12 col-xs-12"><b>Bijeljina</b> (pogrešno Bjeljina) je gradsko naselje u gradu Bijeljina u Republici Srpskoj (BiH).Bijeljina se nalazi u sjeveroistočnom dijelu Republike Srpske (Bosna i Hercegovina) na koordinatama 44°49′14" sjeverno i 20°27′44" istočno, na 119 metara nadmorske visine. To je nakon Banjaluke drugo naselje po veličini u Republici Srpskoj i peto u Bosni i Hercegovini. Smještena je u ravnici Semberiji i predstavlja raskršće puteva za Srbiju, Hrvatsku i unutrašnjost Bosne i Hercegovine. Smatra se nezvaničnim centrom istočnog dijela Republike Srpske sa oko 45.000 stanovnika.[2] Udaljena je 6 km (4 km) od granice sa Srbijom i 40 km (25 km) sa Hrvatskom. Pošto se nalazi praktično u središtu plodne ravnice, predstavlja jedan od centara proizvodnje i trgovine hrane. Glavninu proizvodnje čine žitarice pšenica i kukuruz te povrće kao kupus, paprika i paradajz. Voćarstvo i stočarstvo su takođe zastupljeni, ali u manjoj mjeri. Bijeljina je prepoznatljiva po velikom centralnom trgu, čiju ljepotu upotpunjava ambijent obližnjeg gradskog parka.</p>
      <h4 class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><b>BEČ - BIJELJINA - BEČ</b></h4>
      <p class="col-lg-12 col-md-12 col-sm-12 col-xs-12">Beč Bijeljina kombi prevoz sa Best Tours turističkom agencijom povoljno, sigurno i brzo do željene destinacije. Prevoz Beč Bijeljina
od adrese u Beču na željenu adresu u Bijeljini. Svakodnevni polasci na relaciji Beč Bijeljina kao i svakodnevni povratak Bijeljina Beč. Naša vozila primaju do 8 putnika i moguće je skupljanje putnika u drugim gradovima na relaciji Beč Bijeljina (Grac Bijeljina). Tura Beč Bijeljina traje između 8 i 9 sati u zavisnosti od zadržavanja na graničnim prelazima. Putnici iz Graca se mogu takođe prijaviti za ovu rutu ako žele da stignu do Bijeljine. Kvalitetna vozila i sigurni vozači za Vaš ugodan i siguran put.
<br>
<br>
<b>Cena karte u jednom smeru iznosi 45 evra dok u oba smera iznosi 85 evra. Za studente, učenike i penzionere specijalan popust.</b>
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
          origin: 'vienna',
          destination: 'bijeljina',
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
