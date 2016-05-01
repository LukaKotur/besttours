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
      <p id="5h" class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><i class="fa fa-car"></i> 6 sati vožnje</p>

      <h2 class="template-headline col-lg-12">Beč</h2>
    </div>
    <!-- class="weather col-lg-6">
      <p class="day col-lg-12">Pon|Uto</p>
      <p class="celsius col-lg-12"><i class="fa fa-sun-o"></i>25˚C</p>
    </div>-->

    <div class="template-images col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="template-image "><img src="images/gradovi/bec.jpg" alt="" class="img-responsive"></div>
      <div id="map-container" class="hidden-xs hidden-sm"></div>
    </div>

    <div class="template-text col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <p class="template-text-info col-lg-12 col-md-12 col-sm-12 col-xs-12"><b>Aerodrom u Beču,</b> međunarodni aerodrom Beč-Švehat (IATA: VIE, ICAO: LOWW) (nem. Flughafen Wien-Schwechat) je naprometniji i najveći aerodrom u Republici Austriji. Aerodrom je udaljen 18km jugoistočno od glavnog grada Beča. Aerodrom je poznat pod imenom Švehat, jer je to naziv obližnjeg grada. Bečki aerodrom je u mogućnosti da primi avione kao što su Boing 747 i Erbas A340. Na aerodromu se nalaze baze Ostrijan erlajnsa i ostalih avio-kompanija. Prvobitno je korišćen kao vojni aerodrom 1938, a Britanci su ga preuzeli 1945. godine. Betriebsgesellschaft je osnovan 1954. godine i novi aerodrom je zamenio aerodrom Aspern i postao glavni aerodrom u Beču i Austriji. Postojala je samo jedna pista, koja je 1959. godine bila produžena do ukupne dužine od 3.000 metara. 1960. godine je započeta izgradnja nove zgrade aerodroma i 1972. godine je sagrađena još jedna pista.
Na aerodrom su dva puta sletali olimpijski timovi zato što je Austrija dva puta bila domaćin Zimskih olimpijskih igara. 27. decembra 1985. godine palestinski teroristi su napali šalter za čekiranje aviokompanije El al i tada je dvoje ljudi ubijeno, a 39 njih je ukazana hitna medicinska pomoć. (Vidite: Napadi na aerodrome u Rimu i Beču)


      <h4 class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><b>Kombi prevoz do Aerodroma u Beču</b></h4>
      <p class="col-lg-12 col-md-12 col-sm-12 col-xs-12">Aerodrom u Beču - Švehat (Schwechat) je najpoznatiji po jeftinim avio kartama. Best Tours agencija prati red letenja na aerodromu u Beču, zbog toga smo Vam omogućili redovne ture do Beča. Put do aerodroma Beč traje između 6 i 7 sati i putnici stižu 2 sata pred sam let. Kako bi se čekirali i imali vremena da bez kašnjenja uđu na svoj let. Best Tours agencija takođe čeka putnike na aerodromu bez dodatnih doplata u slučaju kašnjenja leta.  Mesta za prtljag ima dovoljno pa tako nije ograničen broj prtljaga koji nosite sa sobom.  Kombi prevoz je idealan način i takođe najlakši način da stignete na vreme do aerodroma u Beču (VIE)
<br>
<br>
<a href="http://www.viennaairport.com">Red letenja Aerodrom Beč</a>
<br>
<br>
<b>Cena kombi prevoza do aerodroma u jednom smeru iznosi 40 evra, dok u oba pravca iznosi 70 evra.
Za studente, učenike i penzionere nudimo specijalne popuste.</b>
</span></p>
    </div>
    <a class="btn btn-large btn-primary col-lg-2 col-lg-offset-5 col-md-2 col-md-offset-5 col-sm-4 col-sm-offset-4 col-xs-5 col-xs-offset-3" href="online-rezervacija">ZAKAŽITE VOŽNJU</a>
    </div>

    <?php include 'popularni.php';?>
    <?php include 'footer.php';?>

<script src="js/jquery-1.12.3.min.js"></script>
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
          destination: 'Vienna',
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
