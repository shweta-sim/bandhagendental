
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=2, user-scalable=yes"/>
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Bandhagen Dental | Home</title>

        <!-- Favicon -->
        <link rel="shortcut icon" href="images/favicon.png" type="image/png">

        <!-- Bootstrap CSS -->
        <link href="inner-pages/css/bootstrap.min.css" rel="stylesheet">
        <!--<link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">-->

        <!-- Style CSS -->
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link href="css/template.css" rel="stylesheet" type="text/css"/>


        <!-- Slider CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link href="inner-pages/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <?php
        include 'header.php';
        ?>
        <section class="covid-19-strip">
            <div class="covid-19 text-white">
                <i class="fas fa-exclamation-triangle"></i> 
                <p>För oss på Bandhagen dental care är det viktigt att du känner dig trygg
                    när du besöker oss. Vi tar ansvar och anpassar vår verksamhet enligt
                    rekommendationer från Folkhälsomyndigheten och Region Stockholm för att
                    förhindra spridning av covid-19. <a href="covid-19.php">Läs mer här!</a> </p>
                <button onclick="hideCovid()">OK</button>
            </div>
        </section>
        <section class="banner">
            <div class="container">
                <div class="flex-container justifyCenterSmall mt9">       
                    <a href="https://bandhagen.opusdentalonline.com/" target="_blank"><i class="fas fa-calendar-alt"></i> Boka Online</a>
                    <a href="kontakt.php"><i class="fas fa-address-book"></i> Kontakta Oss</a>
                </div>
            </div>
        </section>
        <section class="valcommen">
            <div class="container">
                <div class="text-center max992">                    
                    <p class="mb2 text-brown font-20">Välkommen till</p>
                    <h2 class="mb4 font-caladea">Bandhagen Dental Care</h2>
                    <p class="mb3">Många drabbas hårt av sin tandvård och det blir en ond cirkel. Vi välkomnar dig gärna med tandvård. Vårt mål är att få våra patienter att känna sig trygga och välskötta.</p>
                    <p class="mb6">På Bandhagen Dental Care utförs alla behandlingar på ett speciellt sätt, med en handgjord och omsorgsfull titt på tandprocedurer och uppmärksamma öron på de psykologiska och emotionella aspekterna av varje klient. I samråd finns lagets oro för att ta hand om varje detalj för att göra tjänsten personlig, avslappnad och differentierad.</p>
                    <div class="flex-container justifyCenter">
                        <div class="valcommen-box light-brown mb2">
                            <a href="akut.php">
                                <span>
                                    <img src="images/icon_akut.png" alt="" class="link-icon-show"/>
                                    <img src="images/icon_akut_hover.png" class="link-icon-hidden" alt=""/>
                                </span>
                                <p class="text">Akut</p>
                            </a>
                        </div>
                        <div class="valcommen-box brown mb2">
                            <a href="lista-mig.php">
                                <span>
                                    <img src="images/icon_lista_mig.png" alt="" class="link-icon-show"/>
                                    <img src="images/icon_lista_mig_hover.png" alt="" class="link-icon-hidden"/>
                                </span>
                                <p class="text">Lista Mig</p>
                            </a>
                        </div>
                        <div class="valcommen-box dark-brown mb2">
                            <a href="ring-mig.php">
                                <span>
                                    <img src="images/icon_ring_mig.png" alt="" class="link-icon-show"/>
                                    <img src="images/icon_ring_mig_hover.png" alt="" class="link-icon-hidden"/>   
                                </span>
                                <p class="text">Ring Mig</p>
                            </a>
                        </div>
                    </div>
                </div> 
            </div>         
        </section>
        <section class="bg-gray">
            <div class="text-center">
                <h2 class="mb1 font-caladea">Behandlingar</h2>
                <p class="mb6 text-brown font-20">Nedan finns de behandlingar vi kan erbjuda dig.</p>
                <div class="flex-container max1200 justifyCenter">
                    <div class="behandlingar-box">
                        <a href="behandlingar.php#forebyggande">
                            <img src="images/icon_forebyggande_tandvard.png" alt=""/>
                            <span>Förebyggande tandvård</span>
                        </a>
                    </div>
                    <div class="behandlingar-box">
                        <a href="behandlingar.php#fyllningar">
                            <img src="images/icon_fyllningar.png" alt=""/>
                            <span>Fyllningar</span>
                        </a>
                    </div>
                    <div class="behandlingar-box">
                        <a href="behandlingar.php#implantat">
                            <img src="images/icon_implantat.png" alt=""/>
                            <span>Implantat</span>
                        </a>
                    </div>
                    <div class="behandlingar-box">
                        <a href="behandlingar.php#kronor">   
                            <img src="images/icon_kronor_broar.png" alt=""/>
                            <span>Kronor & Broar</span>
                        </a>
                    </div>
                    <div class="behandlingar-box">
                        <a href="behandlingar.php#tandlossning">
                            <img src="images/icon_tandlossning.png" alt=""/>
                            <span>Tandlossning</span>
                        </a>
                    </div>
                    <div class="behandlingar-box">
                        <a href="behandlingar.php#rotbehandlingar">
                            <img src="images/icon_rotbehandlingar.png" alt=""/>
                            <span>Rotbehandlingar</span>
                        </a>
                    </div>
                    <div class="behandlingar-box">
                        <a href="behandlingar.php#tandblekning">
                            <img src="images/icon_tandblekning.png" alt=""/>
                            <span>Tandblekning</span>
                        </a>
                    </div>
                    <div class="behandlingar-box">
                        <a href="behandlingar.php#invisalign">
                            <img src="images/icon_invisalign.png" alt=""/>
                            <span>Invisalign</span>
                        </a>
                    </div>
                </div>
                <div class="links mt4">
                    <a href="behandlingar.php">Alla Behandlingar</a>
                </div>   
            </div>
        </section>
        <section>
            <div class="flex-container jcenter pt40">
                <div class="side-image o2">
                    <img src="images/bandhagen_image.png" alt=""/>
                </div>
                <div class="side-content">
                    <div class="flex-column max660">
                        <h2 class="mb1 font-caladea">Tandläkare i Bandhagen</h2>
                        <p class="mb6 mbs4 text-brown font-20">Vi tar emot även patienter från Älvsjö, Huddinge,
                            <br>Farsta och Enskede</p>
                        <p class="mb2">Welcome to our reception located in Högdalen Centrum. Bandhagen Dental Care 
                            offers general traditional dental and aesthetic dental care for a beautiful smile as well
                            as surgical treatment for implants, among other things. </p>
                        <p class="mb6">Many suffer severely from their dental care and it becomes a vicious cycle. We 
                            gladly welcome you with dental care. Our goal is to make our patients feel safe and well 
                            cared for.</p>
                        <div class="links-white">
                            <a href="https://bandhagen.opusdentalonline.com/">Boka Online pa Din Klinik</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="flex-container jcenter pt40 dis-block">
                <div class="side-image">
                    <img src="images/image_klink_two.png" alt=""/>
                </div>
                <div class="side-content">
                    <div class="flex-column max660">
                        <h2 class="mb1 font-caladea">Tandläkare och akut <br>tandvård i Hässelby</h2>
                        <p class="mb6 mbs3 text-brown font-20">Vi tar emot även patienter från Vällingby, Spånga, 
                            <br>Järfälla, Solna och Bromma.</p>
                        <p class="mb2 mb1-5">Welcome to our emergency room in Hässelby, Do you suffer from acute toothache or 
                            have a broken tooth / lost filling? or dental infection ??</p>
                        <p class="mb2 mb1-5">Contact Emergency Dental Care as soon as possible to make an appointment.
                            Do not wait until later, pain and pain often increase if you visit the dentist.</p>
                        <p class="mb6 mbs4">With us you always get an emergency time on the same day. 
                            We offer evening and weekend times</p>
<!--                        <div class="links-white">
                            <a href="https://bandhagen.opusdentalonline.com/">Boka Online pa Din Klinik</a>
                        </div>-->
                    </div>
                </div>

            </div>
        </section>
        <section class="tesimonial-bg">
            <div class="container">
                <div id="testimonial-slider" class="owl-carousel">
                    <div class="testimonial">
                        <p class="description mb3">
                            Har alltid varit jobbigt att gå till tandläkaren pga 
                            rädsla. Smärta är ju vanligt tänkte jag och jag har plågats många gånger i 
                            mitt liv. Så jag slutade gå i massor av år. Kom av en slump hit och nu valt 
                            att fortsätta. Skall genomgå omfattande behandling och tandsten sedan massor 
                            av år är rensad (Tack) och nu ska hela munnen åtgärdas av en mkt skicklig 
                            tandläkare som Jag har fått stort förtroende för. Tack för att ni fanns där 
                            när jag behövde akut komma och vilken tur för mig. 
                        </p>
                        <p class="text-brown mb6 text12">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </p>
                        <p class="testimonial-title">Jeannette Karlsson</p>
                        <!--<p class="testimonial-sub-title">Elkins Park, Hässelby Stockholm</p>-->
                    </div>
                    <div class="testimonial">
                        <p class="description mb3">
                            Jag blev lite orolig när jag såg att jag skulle till en tandläkare som inte fanns med i personallistan, men jag sökte på hans namn och fann en mycket erfaren och duktig tandläkare som jag kommer att återkomma till om jag behöver. Han redogjorde för mig allt som jag behövde veta. Mycket kunnig och ett glatt och trevligt sätt. Kommer absolut att återkomma till denna praktik.
                        </p>
                        <p class="text-brown mb6 text12">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </p>
                        <p class="testimonial-title">Yvonne Jonsson</p>
                        <!--<p class="text-white">Elkins Park, Hässelby Stockholm</p>-->
                    </div>
                    <div class="testimonial">
                        <p class="description mb3">
                            Kommer nog aldrig trivas hos en tandläkare, har man fobi, har man, men att få mig att stanna kvar i stolen utan att jag flyr, det är en bedrift, och att få mig boka nya tider och komma på dem, än större bedrift. Fixar man detta, då är ju bemötandet både proffesionellt och mjukt. Tack!
                        </p>
                        <p class="text-brown mb6 text12">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </p>
                        <p class="testimonial-title">O Tarja Örnelund</p>
                        <!--<p class="text-white">Elkins Park, Hässelby Stockholm</p>-->
                    </div>
                    <div class="testimonial">
                        <p class="description mb3">
                            Det var en väldigt bra och trevtig bemötande. Väligt ducktigt personal och tandläkare, som hjälpte mig med implantad operation. Allting gick väldigt smidigt ock snabbt utan värk. Jag är mycket nöjd. Tack så mycket.
                        </p>
                        <p class="text-brown mb6 text12">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </p>
                        <p class="testimonial-title">Ali Gholipour</p>
                        <!--<p class="text-white">Elkins Park, Hässelby Stockholm</p>-->
                    </div>
                    <div class="testimonial">
                        <p class="description mb3">
                            Supernöjd med Sara som hjälpt mig att få tillbaka att jag kan le ute igen. Ar klar med överkäken och nya porslinsfasader och håller ni på med underkäken. Så hoppas att slutresultatet är lika bra som det börjat.
                        </p>
                        <p class="text-brown mb6 text12">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </p>
                        <p class="testimonial-title">Päivi Lempinen</p>
                        <!--<p class="text-white">Elkins Park, Hässelby Stockholm</p>-->
                    </div>
                    <div class="testimonial">
                        <p class="description mb3">
                            Mycket professionella och trevliga. Det gäller alla på mottagningen. Kan varmt rekommendera! 
                        </p>
                        <p class="text-brown mb6 text12">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </p>
                        <p class="testimonial-title">Andre Hanes</p>
                        <!--<p class="text-white">Elkins Park, Hässelby Stockholm</p>-->
                    </div>
                </div>
            </div>
        </section>
        <?php
        include 'footer.php';
        include 'cookie.php';
        ?>
        <!-- Core Javascripts --> 
        <script type="text/javascript" src="inner-pages/js/jquery.js"></script> 
        <script type="text/javascript" src="inner-pages/js/bootstrap.min.js"></script> 

        <script type="text/javascript" src="inner-pages/js/jquery-1.9.1.min.js"></script> 
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>

        <script type="text/javascript">
                    $(document).ready(function () {
                        $("#testimonial-slider").owlCarousel({
                            items: 1,
                            itemsDesktop: [1000, 1],
                            itemsDesktopSmall: [979, 1],
                            itemsTablet: [768, 1],
                            pagination: true,
                            navigation: false,
                            navigationText: ["", ""],
                            slideSpeed: 1000,
                            singleItem: true,
                            autoPlay: false
                        });

                    });
                    let covidBar = document.querySelector(".covid-19-strip");
                    console.log(covidBar);

                    window.onload = function () {
                        if (!document.cookie.split('; ').find(row => row.startsWith('openThisOnce'))) {
                            let cookieModal = document.getElementById('cookieModal');
                            cookieModal.style.display = "block";
                            document.cookie = "openThisOnce=true; expires=Fri, 31 Dec 9999 23:59:59 GMT";
                        }
                    };

                    function cookieModalClose() {
                        let cookieModal = document.getElementById('cookieModal');
                        cookieModal.style.display = "none";
                        covidBar.classList.add('covid-19-strip-show');
                    }
                    function hideCovid() {
                        covidBar.style.display = "none";
                    }
        </script>
        <script type="text/javascript" src="js/navigation.js"></script>
    </body>
</html>