<?php
if(isset($_POST['submit'])){
    $to = "looko95@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $start_dest = $_POST['sel1'];
    $start_dest_a = $_POST['polazak'];
    $start_dest_d = $_POST['datum-polaska'];
    $end_dest = $_POST['sel2'];
    $end_dest_a = $_POST['odlazak'];
    $end_dest_d = $_POST['datum-odlaska'];
    $subject = "Online rezervacija";
    $message = "Ime i prezime: ". $name .
               "\nTelefon: " . $phone .
               "\nPolazna destinacija: " . $start_dest .
               "\nAdresa polaska: ". $start_dest_a .
               "\nDatum polaska: ". $start_dest_d .
               "\nDolazna destinacija: ". $end_dest .
               "\nAdresa dolazka: ". $end_dest_a .
               "\nDatum dolazka: ". $end_dest_a .
               "\n\nPoruka: " . "\n" . $_POST['message'];

    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    echo '<script language="javascript">';
    echo 'alert("Rezervacija uspesna.")';
    echo '</script>';
  }
  ?>

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
<body>

  <div class="online-reservation container">
    <form class="form-horizontal" role="form" method="post" action="online-rezervacija.php" id="form">
    <div class="title col-lg-12 col-md-12 col-sm-12 col-xs-12"><p>Online rezervacija</p></div>
    <div class="item col-lg-4 col-md-4 col-sm-6 col-xs-12">
      <label for="name" class="control-label" id="name-label"><span class="orange">*</span>Ime i prezime</label>
      <input type="text" class="form-control area" id="name" name="name" placeholder="" value="" required>
    </div>
    <div class="item col-lg-4 col-md-4 col-sm-6 col-xs-12">
      <label for="email" class="control-label" id="email-label"><span class="orange">*</span>Email</label>
      <input type="text" class="form-control area" id="email" name="email" placeholder="" value="" required>
    </div>
    <div class="item col-lg-4 col-md-4 col-sm-6 col-xs-12">
      <label for="phone" class="control-label" id="phone-label"><span class="orange">*</span>Telefon</label>
      <input type="text" class="form-control area" id="phone" name="phone" placeholder="" value="" required>
    </div>

    <div class="orange-line orange-line-2 col-lg-12 hidden-xs hidden-sm hidden-md"></div>


    <div class="item col-lg-4 col-md-4 col-sm-6 col-xs-12">
      <label for="sel1"><span class="orange">*</span>Polazna destinacija:</label>
      <select class="form-control" id="sel1" name="sel1">
        <option>Beograd</option>
        <option>Beč</option>
        <option>Grac</option>
        <option>Salcburg</option>
        <option>Zagreb</option>
        <option>Rijeka</option>
        <option>Benkovac</option>
        <option>Zadar</option>
        <option>Knin</option>
        <option>Sarajevo</option>
        <option>Banjaluka</option>
        <option>Bijeljina</option>
        <option>Tuzla</option>
        <option>Budimpešta</option>
        <option>Segedin</option>
        <option>Temišvar</option>
        <option>Ljubljana</option>
        <option>Bratislava</option>
        <option>Parndorf</option>
        <option>Palmanova</option>
        <option>BTC Slovenija</option>
      </select>
    </div>
    <div class="item col-lg-4 col-md-4 col-sm-6 col-xs-12">
      <label for="email" class="control-label" id="polazak-label"><span class="orange">*</span>Adresa polaska</label>
      <input type="text" class="form-control area" id="polazak" name="polazak" placeholder="" value="" required>
    </div>
    <div class="item col-lg-4 col-md-4 col-sm-6 col-xs-12">
      <label for="phone" class="control-label" id="datum-polaska-label"><span class="orange">*</span>Datum polaska</label>
      <input type="text" class="form-control area" id="datum-polaska" name="datum-polaska" placeholder="" value="" required>
    </div>

    <div class="item col-lg-4 col-md-4 col-sm-6 col-xs-12">
      <label for="sel2"><span class="orange">*</span>Dolazna destinacija:</label>
      <select class="form-control" id="sel2" name="sel2">
        <option>Beograd</option>
        <option>Beč</option>
        <option>Grac</option>
        <option>Salcburg</option>
        <option>Zagreb</option>
        <option>Rijeka</option>
        <option>Benkovac</option>
        <option>Zadar</option>
        <option>Knin</option>
        <option>Sarajevo</option>
        <option>Banjaluka</option>
        <option>Bijeljina</option>
        <option>Tuzla</option>
        <option>Budimpešta</option>
        <option>Segedin</option>
        <option>Temišvar</option>
        <option>Ljubljana</option>
        <option>Bratislava</option>
        <option>Parndorf</option>
        <option>Palmanova</option>
        <option>BTC Slovenija</option>
      </select>
    </div>
    <div class="item col-lg-4 col-md-4 col-sm-6 col-xs-12">
      <label for="email" class="control-label" id="odlazak-label"><span class="orange">*</span>Adresa dolaska</label>
      <input type="text" class="form-control area" id="odlazak" name="odlazak" placeholder="" value="" required>
    </div>
    <div class="item col-lg-4 col-md-4 col-sm-6 col-xs-12">
      <label for="phone" class="control-label" id="datum-odlaska-label"><span class="orange">*</span>Datum odlaska</label>
      <input type="text" class="form-control area" id="datum-odlaska" name="datum-odlaska" placeholder="" value="" required>
    </div>

    <div class="item col-lg-4 col-lg-offset-8 col-md-4 col-sm-6 col-xs-12">
      <textarea class="form-control area col-lg-12 col-md-12 col-sm-12 col-xs-12" rows="4" name="message" required placeholder="Poruka..."></textarea>
    </div>

    <input id="submit" name="submit" type="submit" value="Pošalji" class="btn btn-primary col-lg-4 col-lg-offset-8 col-md-12 col-sm-12 col-xs-12" id="btn-order">
  </form>
  </div>

</body>
</html>
