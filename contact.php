<?php
if(isset($_POST['submit'])){
    $to = "looko95@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $subject = "Form submission";
    $message = "Ime i prezime: ". $name .
               "\nTelefon: " . $phone .
               "\n\nPoruka: " . "\n" . $_POST['message'];

    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    echo '<script language="javascript">';
    echo 'alert("Poruka uspesno poslata.")';
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

<body class="contact-body page-contact">
  <?php include 'header.php' ?>
  <div class="header-offset"></div>
    <div class="contact-wrap">
    <div class="contact container">
      <!-- Start of Section 1 (Kontaktirajte nas) -->
      <div class="contact-us col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <p class="blue-headline-no-inset headline">Kontaktirajte nas</p>
        <div class="content">
          <div class="row">
            <div class="contact-box">
              <div class="icon icon-1 col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
              <a href="mailto:office@besttours.com"><p class="info col-lg-10 col-md-10 col-sm-10 col-xs-10">office@besttours.com</p></a>
              <a href="mailto:info@besttours.com"><p class="info col-lg-10 col-md-10 col-sm-10 col-xs-10">info@besttours.com</p></a>
            </div>
          </div>
          <div class="row">
            <div class="contact-box">
              <div class="icon icon-2 col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
              <p class="info col-lg-6 col-md-6 col-sm-6 col-xs-6"><a class="numbers-c" href="tel:+381-64-3022789">+381643022789</a></p>
              <p class="viber col-lg-4 col-md-4 col-sm-4 col-xs-4"></p>
              <p class="info col-lg-6 col-md-6 col-sm-6 col-xs-6"><a class="numbers-c" href="tel:+43-676-4612602">+43 676 4612602</a></p>
              <p class="viber col-lg-4 col-md-4 col-sm-4 col-xs-4"></p>
            </div>
          </div>
        </div>
      </div>
      <!-- End of Section 1 (Kontaktirajte nas) -->

      <!-- Start of Section 2 (Pišite nam) -->
      <div class="contact-form col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <p class="blue-headline-no-inset headline">Pišite nam</p>
        <form class="form-horizontal" role="form" method="post" action="contact.php" id="form">
          <label for="name" class="control-label col-lg-12 col-md-12 col-sm-12 col-xs-12" id="name-label">*Ime i prezime</label>
          <input type="text" class="form-control area col-lg-12 col-md-12 col-sm-12 col-xs-12" id="name" name="name" placeholder="" value="" required>

          <label for="email" class="control-label col-lg-12 col-md-12 col-sm-12 col-xs-12" id="email-label">*Email</label>
          <input type="text" class="form-control area col-lg-12 col-md-12 col-sm-12 col-xs-12" id="email" name="email" placeholder="" value="" required>

          <label for="phone" class="control-label col-lg-12 col-md-12 col-sm-12 col-xs-12" id="phone-label">*Kontakt telefon</label>
          <input type="text" class="form-control area col-lg-12 col-md-12 col-sm-12 col-xs-12" id="phone" name="phone" placeholder="" value="" required>

          <textarea class="form-control area col-lg-12 col-md-12 col-sm-12 col-xs-12" rows="4" name="message" required ></textarea>

          <div class="blue-line blue-line-full col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>

          <input type="submit" id="submit" name="submit"  value="Pošalji" class="btn btn-primary col-lg-12 col-md-12 col-sm-12 col-xs-12" id="contact-submit">
        </form>
      </div>
      <!-- End of Section 2 (Pisite nam) -->

      <!-- Start of Section 3 (Facebook widget) -->
      <div class="facebook-like-page col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <div id="fb-root"></div>
          <div class="fb-page" data-href="https://www.facebook.com/besttoursprevoz/" data-tabs="timeline" data-width="340" data-height="435" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/besttoursprevoz/"><a href="https://www.facebook.com/besttoursprevoz/">Best Tours</a></blockquote></div></div>
      </div>
      <!-- End of Section 3 (Facebook widget) -->
    </div>
  </div>
  <!-- Start of Section 4 (Dva buttona) -->
    <div class="container-fluid contact-buttons">
      <a href="ture.php"><div class="button btn btn-large btn-primary">Pogledajte ture</div></a>
      <a href="online-rezervacija.php"><div class="button btn btn-large btn-primary">Zakažite voznju</div></a>
    </div>
  <!-- End of Section 4 (Dva buttona) -->
  <div id="footer-contact">
  <?php include 'footer.php' ?>
</div>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <!-- WUB javascript -->
  <script src="js/besttours.js"></script>
  <script src="js/bootstrap-slider.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/smoothscroll.js"></script>


  <script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

</body>
</html>
