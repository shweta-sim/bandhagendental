<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Kontakta legitimerade tandläkare för traditionell, estetisk & akut tandvård i Älvsjö, Huddinge, Farsta & Enskede i Stockholm. Även läppförstoring och botox." />
<meta name="keywords" content="Kontakt för tandläkare, Akut tandvård, Bandhagen, Hässelby, Älvsjö, Huddinge, Farsta, Enskede, Stockholm, E-mail, Telefon, fyll i formulär. " />
<meta name="robots" content="index,follow,noodp,noydir" />
<meta name="author" content="">
<title>Kontakt för tandvård och akut tandvård | Bandhagen Dental Care</title>
<link rel="icon" type="image/png" href="images/favicon.png">
<link href="inner-pages/css/bootstrap.min.css" rel="stylesheet">
<link href="inner-pages/css/main.css" rel="stylesheet">
<link href="css/template.css" rel="stylesheet">
<link href="inner-pages/fonts/css/fontello.css" rel="stylesheet">
<link href="inner-pages/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<!-- Facebook Pixel Code -->

<script>

  !function(f,b,e,v,n,t,s)

  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?

  n.callMethod.apply(n,arguments):n.queue.push(arguments)};

  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';

  n.queue=[];t=b.createElement(e);t.async=!0;

  t.src=v;s=b.getElementsByTagName(e)[0];

  s.parentNode.insertBefore(t,s)}(window, document,'script',

  'https://connect.facebook.net/en_US/fbevents.js');

  fbq('init', '441259379973506');

  fbq('track', 'PageView');

</script>

<noscript><img height="1" width="1" style="display:none"

  src="https://www.facebook.com/tr?id=441259379973506&ev=PageView&noscript=1"

/></noscript>

<!-- End Facebook Pixel Code -->

<script>

  fbq('track', 'Lead');

</script>
</head>
<body id="innerpage">
<div class="wrap ccm-page">
    <!-- Header Start -->    
	<?php include("header.php"); ?>
    <!-- Header Ends --> 
  
  <!-- Breadcrumbs Start -->
  <div class="breadcrumb">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12"> Du är här : <span class="active">Tack</span> </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumbs Ends --> 
  
  <!-- Main Start -->
  <div class="main" id="main">
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-12">


            <?php if(isset($_POST['btn-message']))
        form_contact();  
        
        function form_contact()
  {
  //Change Recipient's email addreess.
  $to="kontakt@bandhagendental.se";    
  
  //Change subject field.
  $subject="Bandhagen Dental Care";

  $arende=$_POST['arende'];
  $valj=$_POST['valj'];
  $dittnam=$_POST['dittnam'];
  $tel=$_POST['tel'];
  $epost=$_POST['epost'];
  $meddelande=$_POST['meddelande']; 

  //The from filed
  $from=$_POST['epost'];
  $body="
  Ditt nam: $dittnam
  Tel: $tel
  Arende: $arende
  Klinik: $valj\r\n
  $meddelande
";
  mail($to, $subject, $body, "From: $from");
  }     
        ?>


            <h1 class="text-center">Ditt meddelande har skickats. Tack!</h1>
            <h4 class="text-center">En av våra proffs kommer att se över ditt meddelande och komma tillbaka till dig inom 24 timmar.</h4>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

            
           
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- Main Ends --> 
  
  <!-- Footer Start -->
  <?php include("footer.php"); ?>
  <!-- Footer Ends --> 
</div>
<!-- Core Javascripts --> 
<script type="text/javascript" src="inner-pages/js/jquery.js"></script> 
<script type="text/javascript" src="inner-pages/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/navigation.js"></script> 

<script type="text/javascript" src="inner-pages/js/form-validations.js"></script>
<script type="text/javascript" src="inner-pages/js/jquery.js"></script> 
<script type="text/javascript" src="inner-pages/js/offcanvas.js"></script>

</body>
</html>