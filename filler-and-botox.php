<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Legitimerade Tandläkare för traditionell & akut tandvård. Även Tandblekning, rynkbehandling, botox m.m. I Stockholm finns vi i Älvsjö, Huddinge, Farsta & Enskede." />
<meta name="keywords" content="Legitimerade Tandläkare i Älvsjö, Huddinge, Farsta & Enskede, Stockholm. Akut tandvård, traditionell tandvård, Estetisk tandvård, botox och läppförstoring." />
<meta name="robots" content="index,follow,noodp,noydir" />
<meta name="author" content="">
<title>Akut tandvård, Tandläkare i Älvsjö, Huddinge, Farsta & Enskede | Bandhagen Dental Care</title>
<link rel="icon" type="image/png" href="images/favicon.png">
<link href="inner-pages/css/bootstrap.min.css" rel="stylesheet">
<link href="inner-pages/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="inner-pages/css/main.css" rel="stylesheet">
<link href="css/template.css" rel="stylesheet">
<link href="inner-pages/fonts/css/fontello.css" rel="stylesheet">

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
<noscript>
<img height="1" width="1" style="display:none"

  src="https://www.facebook.com/tr?id=441259379973506&ev=PageView&noscript=1"

/>
</noscript>

<!-- End Facebook Pixel Code -->

<script>

  fbq('track', 'ViewContent');

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
        <div class="col-md-12"> Du är här : <span class="active">Fillers and Botox</span> </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumbs Ends --> 
  
  <!-- Main Start -->
  <div class="main" id="main">
    <section class="nopadding">
    <div class="container" id="forebyggande"> <a name="forebyggande"></a>
      <div class="row treatment-list first">
          <div class="col-md-5 col-sm-5 pull-left nopadding"> 
              <img src="inner-pages/images/img-fillers-and-botox.jpg" alt="" class="img-responsive"> 
          </div>
        <div class="col-md-7 col-sm-7 pull-right treatment-text">
          <h4>Fillers and Botox</h4>
            <div class="font-16">Vi utför inte injektionsbehandling på dig som:<br>
                <br>
                - är gravid eller ammar<br>
                <br>
                - är allergisk mot lidokain (bedövningsmedel)<br>
                <br>
                - har feber, sjukdomskänsla i kroppen eller har en aktiv infektion runt behandlingsområdet.
            </div>
            <div class="font-16">Viktigt att tänka på innan din behandling:<br>
                <br>
                - Undvik att röka precis innan behandling.<br>
                <br>
                - Undvik alkohol, ipren, Salicylsyra, Omega-3 ca en vecka före behandling.<br>
                <br>
                -Tar du blodförtunnande mediciner så som Waran, Trombyl eller Eliquis så kontakta kliniken innan du bokar din behandling samt kontakta din läkare för eventuell nedtrappning av dessa mediciner innan behandling.
                <br><br>- Kom gärna osminkad
            </div>
        </div>
      </div>
    </div>
    <div class="bg-grey">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="ba-slider">
              <img src="images/teeth-whitening-after.jpg" alt="">
              <div class="resize"> <img src="images/teeth-whitening-before.jpg" alt=""> </div>
              <span class="handle"></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Main Ends --> 
  
  <!-- Footer Start -->
  <?php include("footer.php"); ?>
  <!-- Footer Ends --> 
</div>
<!-- Core Javascripts --> 
<script type="text/javascript" src="inner-pages/js/jquery.js"></script> 
<script type="text/javascript" src="inner-pages/js/bootstrap.min.js"></script> 
<script type="text/javascript">
$(document).ready(function() {
    // Configure/customize these variables.
    var showChar = 400;  // How many characters are shown by default
    var ellipsestext = "...";
    var moretext = "Läs mer";
    var lesstext = "Läs mindre";
    $('.more').each(function() {
        var content = $(this).html(); 
        if(content.length > showChar) { 
            var c = content.substr(0, showChar);
            var h = content.substr(showChar, content.length - showChar);
 
            var html = c + '<span class="moreellipses">' + ellipsestext+ '</span><span class="morecontent"><span>' + h + '</span><div class="inner-links"><a href="" class="morelink links">' + moretext + '</a></div></span>';
 
            $(this).html(html);
        }
    }); 
    $(".morelink").click(function(){
        if($(this).hasClass("less")) {
            $(this).removeClass("less");
            $(this).html(moretext);
        } else {
            $(this).addClass("less");
            $(this).html(lesstext);
        }
        $(this).parent().prev().toggle();
        $(this).prev().toggle();
        return false;
    });
});
</script>
  <!-- Before/After Slider JS -->
  <script type="text/javascript">
    // Call & init
    $(document).ready(function() {
      $('.ba-slider').each(function() {
        var cur = $(this);
        // Adjust the slider
        var width = cur.width() + 'px';
        cur.find('.resize img').css('width', width);
        // Bind dragging events
        drags(cur.find('.handle'), cur.find('.resize'), cur);
      });
    });
    // Update sliders on resize. 
    // Because we all do this: i.imgur.com/YkbaV.gif
    $(window).resize(function() {
      $('.ba-slider').each(function() {
        var cur = $(this);
        var width = cur.width() + 'px';
        cur.find('.resize img').css('width', width);
      });
    });

    function drags(dragElement, resizeElement, container) {
      // Initialize the dragging event on mousedown.
      dragElement.on('mousedown touchstart', function(e) {

        dragElement.addClass('draggable');
        resizeElement.addClass('resizable');

        // Check if it's a mouse or touch event and pass along the correct value
        var startX = (e.pageX) ? e.pageX : e.originalEvent.touches[0].pageX;

        // Get the initial position
        var dragWidth = dragElement.outerWidth(),
          posX = dragElement.offset().left + dragWidth - startX,
          containerOffset = container.offset().left,
          containerWidth = container.outerWidth();

        // Set limits
        minLeft = containerOffset + 10;
        maxLeft = containerOffset + containerWidth - dragWidth - 10;

        // Calculate the dragging distance on mousemove.
        dragElement.parents().on("mousemove touchmove", function(e) {

          // Check if it's a mouse or touch event and pass along the correct value
          var moveX = (e.pageX) ? e.pageX : e.originalEvent.touches[0].pageX;

          leftValue = moveX + posX - dragWidth;

          // Prevent going off limits
          if (leftValue < minLeft) {
            leftValue = minLeft;
          } else if (leftValue > maxLeft) {
            leftValue = maxLeft;
          }

          // Translate the handle's left value to masked divs width.
          widthValue = (leftValue + dragWidth / 2 - containerOffset) * 100 / containerWidth + '%';

          // Set the new values for the slider and the handle. 
          // Bind mouseup events to stop dragging.
          $('.draggable').css('left', widthValue).on('mouseup touchend touchcancel', function() {
            $(this).removeClass('draggable');
            resizeElement.removeClass('resizable');
          });
          $('.resizable').css('width', widthValue);
        }).on('mouseup touchend touchcancel', function() {
          dragElement.removeClass('draggable');
          resizeElement.removeClass('resizable');
        });
        e.preventDefault();
      }).on('mouseup touchend touchcancel', function(e) {
        dragElement.removeClass('draggable');
        resizeElement.removeClass('resizable');
      });
    }
  </script>

<script type="text/javascript" src="js/navigation.js"></script>
<script type="text/javascript" src="inner-pages/js/jquery.js"></script> 
<script type="text/javascript" language="javascript" src="inner-pages/js/bookmarkscroll.js"></script> 
<script type="text/javascript" src="inner-pages/js/offcanvas.js"></script>
</body>
</html>