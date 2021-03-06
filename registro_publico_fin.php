<!DOCTYPE html>
<html lang="es-es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>VI Competencia Nacional de Robótica 2016</title>
    <meta name="description" content="">
    <meta name="author" content="ink, cookbook, recipes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!-- Place favicon.ico and apple-touch-icon(s) here  -->
    <link rel="shortcut icon" href="../img/favicon.ico">
    <link rel="apple-touch-icon" href="../img/touch-icon-iphone.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../img/touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../img/touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../img/touch-icon-ipad-retina.png">
    <link rel="apple-touch-startup-image" href="../img/splash.320x460.png" media="screen and (min-device-width: 200px) and (max-device-width: 320px) and (orientation:portrait)">
    <link rel="apple-touch-startup-image" href="../img/splash.768x1004.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)">
    <link rel="apple-touch-startup-image" href="../img/splash.1024x748.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)">

    <!-- load Ink's CSS -->
    <link rel="stylesheet" type="text/css" href="css/ink-flex.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

    <!-- load Ink's CSS for IE8 -->
    <!--[if lt IE 9 ]>
        <link rel="stylesheet" href="../css/ink-ie.min.css" type="text/css" media="screen" title="no title" charset="utf-8">
    <![endif]-->

    <!-- test browser flexbox support and load legacy grid if unsupported -->
    <script type="text/javascript" src="js/modernizr.js"></script>
    <script type="text/javascript">
        Modernizr.load({
          test: Modernizr.flexbox,
          nope : '../css/ink-legacy.min.css'
        });
    </script>

    <!-- load Ink's javascript files -->
    <script type="text/javascript" src="js/holder.js"></script>
    <script type="text/javascript" src="js/ink-all.min.js"></script>
    <script type="text/javascript" src="js/autoload.js"></script>
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

    <style type="text/css">
        html, body {
            height: 100%;
            background: #f0f0f0; <!-- fccf2d -->
        }
        .sticky {
            background: #1a1a1a;
        }
        .topbar {
            background: #1a1a1a;
        }
        #intro {
            background: #fccf2d;
        }
        #logos {
            background: #ffffff;
        }
        #post {
            background: #f0f0f0;
        }
        #footer {
            background: #1a1a1a;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            color: white;
            clear: both;
            padding:20px;
        }
        .boxed {
            border: 1px solid black;
        }
        #twitter-tl, #fb-page{
            background: #fccf2d;
            color: black;
        }
        a.back-to-top {
            display: none;
            width: 60px;
            height: 60px;
            text-indent: -9999px;
            position: fixed;
            z-index: 999;
            right: 20px;
            bottom: 20px;
            background: #fccf2d url("img/up-arrow.png") no-repeat center 43%;
            -webkit-border-radius: 30px;
            -moz-border-radius: 30px;
            border-radius: 30px;
        }
        a:hover.back-to-top {
            background-color: #000;
    }
    </style>
</head>

<body id="top">
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.5";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <div class="topbar large" id="main-nav">
        <nav class="ink-navigation ink-grid">
            <ul class="menu horizontal black push-center" id="main-nav-site">
                <li><a href="index.html">Inicio</a></li>
                <li><a href="categorias.html">Categorías</a></li>
                <li class="heading active"><a>Participantes</a>
                    <ul class="submenu">
                        <li><a href="informacion-general.html">Información General</a></li>
                        <li><a href="localizacion.html">Localización</a></li>
                        <li><a href="registro.php">Registro participantes</a></li>
                        <li><a href="registro_publico.php">Registro público general</a></li>
                        <li><a href="participantes.html">Lista de participantes</a></li>
                    </ul>
                </li>
                <li><a href="calendario.html">Calendario</a></li>
                <li><a href="patrocinantes.html">Patrocinantes</a></li>
                <li><a href="comite.html">Comité</a></li>
                <li><a href="faq.html">FAQ</a></li>
            </ul>
        </nav>
    </div>
    <div class="content-drawer" id="intro">
        <section class="ink">
            <div class="ink-grid">
                <div class="column-group push-middle">
                    <div class="xlarge-75 large-75 all-100 align-center push-center quarter-top-space">
                        <p><img src="img/logo2.png" align="middle"></p>
                    </div>
                </div>
                <div class="xlarge-50 large-50 all-100 align-center push-center quarter-top-space">
                    <h3> Caracas, 7-9 de Noviembre del 2016</h3>
                </div>
            </div>
        </section>
    </div>

    <div class="ink-grid" id="post">
        <section class="top-padding vertical-padding clearfix">
            <h1 class="align-center half-bottom-space">
                Registro de participantes
            </h1>

            <div class="column-group gutters">
               <?php
                $success = $_GET['msg'];
                if (isset($success)){
                    $success = $_GET['msg'] == '1' ? true : false;
                    if($success){
                        ?>
                            <div class="xlarge-75 large-75 all-100">
                                <div class="quarter-top-space">
                                    <p>¡Registro finalizado! Al correo indicado les llegará un mensaje de confirmación de que su solicitud ha sido recibida.</p>
                                    <p>¡Nos vemos en Noviembre!</p>
                                </div>
                            </div>
                        <?php
                    }else{
                        ?>
                            <div class="xlarge-75 large-75 all-100">
                                <div class="quarter-top-space">
                                    <p>Ha ocurrido un error con el registro. Por favor, inténtelo más tarde, o contáctenos a <a href="mailto:USBBots2016@gmail.com">USBBots2016@gmail.com</a>.</p>
                                </div>
                            </div>
                        <?php
                    }
                }else{
                    ?>
                    <script language="javascript">
                        <!-- code for my StatScript here -->
                        window.location='registro.php';
                    </script>
                    <?php
                }
                ?>


                <div class="xlarge-25 large-25 all-100 align-center">
                    <div id="tw-container">
                        <p class="align-center" id="twitter-tl">Twitter</p>
                        <a class="twitter-timeline" href="https://twitter.com/USBBots" data-widget-id="723542167130652672" data-chrome="noheader nofooter transparent">Tweets by @USBBots</a><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                    </div>

                    <div class="half-top-space" id="fb-container">
                        <p class="align-center half-bottom-space" id="fb-page">Facebook</p>
                        <div class="fb-page" data-href="https://www.facebook.com/mecatronicaUSB/" data-tabs="timeline" data-width="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/mecatronicaUSB/"><a href="https://www.facebook.com/mecatronicaUSB/">Grupo de Investigación y Desarrollo en Mecatrónica GID38</a></blockquote></div></div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="content-drawer" id="logos">
        <section class="ink">
            <div class="ink-grid">
                <div class="column-group push-middle">
                    <div class="xlarge-30 large-30 all-30 align-center push-center quarter-top-space">
                        <p><img src="img/averod.jpg" align="middle"></p>
                    </div>
                    <div class="xlarge-30 large-30 all-30 align-center push-center quarter-top-space">
                        <p><img src="img/logoUSB.png" align="middle"></p>
                    </div>
                    <div class="xlarge-30 large-30 all-30 align-center push-center quarter-top-space">
                        <p><img src="img/logo_mecatronica_alfa.png" align="middle"></p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="push"></div>
    <footer class="clearfix" id="footer">
        <div class="ink-grid">
            <div class="page-footer-social-media">
                <h2><font color="white">Redes sociales</font></h2>
                <a href="https://www.facebook.com/mecatronicaUSB" target="_blank"><i class="fa fa-facebook-square fa-2x" style="color:white"></i></a>
                <a href="https://twitter.com/USBBots" target="_blank"><i class="fa fa-twitter-square fa-2x"  style="color:white"></i></a>
                <a href="mailto:USBBots2016@gmail.com" target="_blank"><i class="fa fa-envelope fa-2x" style="color:white"></i></a>
            </div>
            <div class="quarter-top-space">
                <p class="note">Copyright 2016 - Grupo de Mecatrónica, Universidad Simón Bolívar.</p>
            </div>
        </div>
    </footer>

    <script type="text/javascript">
    // create the back to top button
    $('body').prepend('<a href="#" class="back-to-top">Back to Top</a>');

    var amountScrolled = 300;

    $(window).scroll(function() {
            if ( $(window).scrollTop() > amountScrolled ) {
                    $('a.back-to-top').fadeIn('slow');
            } else {
                    $('a.back-to-top').fadeOut('slow');
            }
    });

    $('a.back-to-top, a.simple-back-to-top').click(function() {
            $('html, body').animate({
                    scrollTop: 0
            }, 700);
            return false;
    });
    </script>
</body>

</html>
