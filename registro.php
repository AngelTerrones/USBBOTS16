<?php
if(isset($_POST['email'])) {
    require 'PHPMailerAutoload.php';

    $mail = new PHPMailer();
    $mail->CharSet = 'UTF-8';
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->Host = "smtp.postmarkapp.com";
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';
    $mail->Username = "4f033f73-497f-4de3-8070-964cbacf59e2";
    $mail->Password = "4f033f73-497f-4de3-8070-964cbacf59e2";

    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }

    // validation expected data exists

    if(!isset($_POST['nombre_equipo']) ||
        !isset($_POST['nombre_robot']) ||
        !isset($_POST['universidad']) ||
        !isset($_POST['categoria']) ||
        !isset($_POST['name1']) ||
        !isset($_POST['ID1']) ||
        !isset($_POST['email']) ||
        !isset($_POST['phone'])) {

        died('We are sorry, but there appears to be a problem with the form you submitted.');
    }

    $team_name = $_POST['nombre_equipo']; // required
    $nombre_robot = $_POST['nombre_robot']; // required
    $university_name = $_POST['universidad']; // not required
    $categoria = $_POST['categoria'];
    $email_to = $_POST['email']; // required
    $telephone = $_POST['phone']; // required
    $member1_name = $_POST['name1']; //required
    $member1_id = $_POST['ID1']; //required
    $member2_name = $_POST['name2']; //not required
    $member2_id = $_POST['ID2']; //not required
    $member3_name = $_POST['name3']; //not required
    $member3_id = $_POST['ID3']; //not required
    $member4_name = $_POST['name4']; //not required
    $member4_id = $_POST['ID4']; //not required

    $id_pago = $_POST['comprobante-pago']; //not required
    $fecha_pago = $_POST['fecha-pago']; //not required
    $monto_pago = $_POST['monto-pago']; //not required

    $email_message = "**Mensaje generado en forma automática.**<br /><br />
    Gracias por participar en la VI Competencia Nacional de Robótica.<br />
    Su inscripción será confirmada una vez de haga la verificación del pago realizado.<br /><br />";

    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }

    $email_message .= "Información del equipo:<br />";
    $email_message .= "Nombre equipo: ".clean_string($team_name)."<br />";
    $email_message .= "Universidad/centro: ".clean_string($university_name)."<br />";
    $email_message .= "Email: ".clean_string($email_to)."<br />";
    $email_message .= "Teléfono: ".clean_string($telephone)."<br />";
    $email_message .= "Categoría a participar: ".clean_string($categoria)."<br />";

    $email_message .= "Participante 1: ".clean_string($member1_name)." Cédula: ".clean_string($member1_id)."<br />";
    if(strlen($member2_name) > 0){
      $email_message .= "Participante 2: ".clean_string($member2_name)." Cédula: ".clean_string($member2_id)."<br />";
    }
    if(strlen($member3_name) > 0){
      $email_message .= "Participante 3: ".clean_string($member3_name)." Cédula: ".clean_string($member3_id)."<br />";
    }
    if(strlen($member4_name) > 0){
      $email_message .= "Participante 4: ".clean_string($member4_name)." Cédula: ".clean_string($member4_id)."<br />";
    }

    $email_message .= "<br />Información de pago:<br />";
    $email_message .= "Comprobante de pago: ".clean_string($id_pago)."<br />";
    $email_message .= "Fecha de pago: ".clean_string($fecha_pago)."<br />";
    $email_message .= "Monto de pago: ".clean_string($monto_pago)."<br />";

    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_from = "usbbots2016@gmail.com";

    $mail->setFrom("aterrones@usb.ve");
    $mail->addReplyTo($email_from, "VI Competencia Nacional de Robótica USBBots");
    $mail->addAddress($email_to);
    $mail->addBCC($email_from);
    //$mail->addBCC($email_from);

    $mail->Subject = "Registro equipo USBBots 2016";
    $mail->Body = $email_message;
    $mail->AltBody = $email_message;
    $mail->isHTML(false);

    if($mail->Send()){
      $success = true;
    }else{
      $success = $mail->ErrorInfo;
    }

    header('Location:registro_fin.php?msg='.$success);
}
?>

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
                        <li><a href="registro.php">Registro</a></li>
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
                    <h3> Caracas, 2-4 de Noviembre del 2016</h3>
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
               <div class="xlarge-75 large-75 all-100">

                    <div class="quarter-top-space">
                        <h2>Datos para hacer el depósito de la inscripción</h2>
                        <p>Para recibir los pagos de inscripción, se tiene disponible la siguiente cuenta bancaria:</p>

                        <p>
                        Cta. Corriente Mercantil  </br>
                        0105-0024-91-1024303888 </br>
                        Corporación Parque Tecnológico Sartenejas </br>
                        RIF: J-30343562-9 </br>
                        </p>
                        <p><strong>Solo se acepta depósito en efectivo o tranferencia electrónica.</strong></p>

                        <h2>Formulario de inscripción</h2>
                        <p>Para realizar el proceso formal de inscripción, es necesario completar el siguiente
                        formulario:</p>
                    </div>

                    <form class="ink-form" id="planilla-registro" method="post" action="">
                        <section>
                            <h2>Información de contacto</h2>
                            <fieldset>
                                <div class="control-group required">
                                    <label for="nombre_equipo">Nombre del equipo</label>
                                    <div class="control">
                                        <input type="text" data-rules="required|text[true,false]" data-error="Nombre de equipo inválido" name="nombre_equipo" id="nombre-equipo">
                                    </div>
                                </div>

                                <div class="control-group required">
                                    <label for="nombre_robot">Nombre del robot</label>
                                    <div class="control">
                                        <input type="text" data-rules="required|text[true,false]" data-error="Nombre de robot inválido" name="nombre_robot" id="nombre-robot">
                                    </div>
                                </div>

                                <div class="control-group required">
                                    <label for="universidad">Universidad o centro que representa</label>
                                    <div class="control">
                                        <input type="text" data-rules="required|text[true,false]" data-error="Nombre de universidad o centro inválido" name="universidad" id="universidad-centro-rep">
                                    </div>
                                </div>

                                <div class="control-group required">
                                    <label for="categoria">Categoría a participar</label>
                                    <div class="control">
                                        <select name="categoria" data-rules="required" data-error="Categoría inválida" >
                                            <option value="">Seleccionar Categoría</option>
                                            <option value="Velocista">Velocista</option>
                                            <option value="Sumo">Sumo</option>
                                            <option value="Laberinto">Laberinto</option>
                                            <option value="Desafío">Desafío</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="control-group required">
                                    <label for="email">Email de contacto</label>
                                    <div class="control prepend-symbol">
                                        <span>
                                            <input type="text" data-rules="required|email" data-error="Insertar un correo válido" name="email" placeholder="email">
                                            <i class="fa fa-envelope-o"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="control-group required">
                                    <label for="phone">Teléfono de contacto</label>
                                    <div class="control prepend-symbol">
                                        <span>
                                            <input type="text" data-rules="required" data-error="Insertar un número de teléfono válido" name="phone" id="phone">
                                            <i class="fa fa-phone"></i>
                                        </span>
                                    </div>
                                </div>

                                <div class="column-group gutters">
                                    <div class="control-group all-50 required">
                                        <label for="name1">Nombre participante (capitán)</label>
                                        <div class="control">
                                            <input type="text" data-rules="required|text[true,false]" data-error="Nombre inválido" name="name1" id="name1">
                                        </div>
                                    </div>
                                    <div class="control-group all-50 required">
                                        <label for="ID1">Cédula de Identidad</label>
                                        <div class="control">
                                            <input type="text" data-rules="required|integer" data-error="Cédula inválida" name="ID1" id="ID1">
                                        </div>
                                    </div>
                                </div>
                                <div class="column-group gutters">
                                    <div class="control-group all-50">
                                        <label for="name2">Nombre participante</label>
                                        <div class="control">
                                            <input type="text" data-rules="text[true,false]" data-error="Nombre inválido" name="name2" id="name2">
                                        </div>
                                    </div>
                                    <div class="control-group all-50">
                                        <label for="ID2">Cédula de Identidad</label>
                                        <div class="control">
                                            <input type="text" data-rules="integer" data-error="Cédula inválida" name="ID2" id="ID2">
                                        </div>
                                    </div>
                                </div>
                                <div class="column-group gutters">
                                    <div class="control-group all-50">
                                        <label for="name3">Nombre participante</label>
                                        <div class="control">
                                            <input type="text" data-rules="text[true,false]" data-error="Nombre inválido" name="name3" id="name3">
                                        </div>
                                    </div>
                                    <div class="control-group all-50">
                                        <label for="ID3">Cédula de Identidad</label>
                                        <div class="control">
                                            <input type="text" data-rules="integer" data-error="Cédula inválida" name="ID3" id="ID3">
                                        </div>
                                    </div>
                                </div>
                                <div class="column-group gutters">
                                    <div class="control-group all-50">
                                        <label for="name4">Nombre participante</label>
                                        <div class="control">
                                            <input type="text" data-rules="text[true,false]" data-error="Nombre inválido" name="name4" id="name4">
                                        </div>
                                    </div>
                                    <div class="control-group all-50">
                                        <label for="ID4">Cédula de Identidad</label>
                                        <div class="control">
                                            <input type="text" data-rules="integer" data-error="Cédula inválida" name="ID4" id="ID4">
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </section>

                        <section>
                            <h2> Información de pago</h2>

                            <fieldset>
                                <div class="control-group required">
                                    <label for="comprobante-pago">Número de referencia de transacción bancaria</label>
                                    <div class="control">
                                        <input type="text" data-rules="required|integer" data-error="Insertar número de comprobante (sólo números)" name="comprobante-pago" id="comprobante-pago">
                                    </div>
                                </div>

                                <div class="column-group gutters">
                                    <div class="control-group all-50 required">
                                        <label for="fecha-pago">Fecha en la que se realizó el pago</label>
                                        <div class="control">
                                            <input type="text"
                                            class="ink-datepicker" data-format="d-m-Y"
                                            data-rules="required"
                                            data-css-class="ink-calendar my-never-closing-datepicker"
                                            data-show-clean="false"
                                            data-show-close="false"
                                            name="fecha-pago" id="fecha-pago">
                                        </div>
                                    </div>
                                    <div class="control-group all-50 required">
                                        <label for="monto-pago">Monto del pago realizado</label>
                                        <div class="control">
                                            <input type="text" data-rules="required|integer" data-error="Monto inválido"
                                            name="monto-pago" id="monto-pago">
                                        </div>
                                    </div>
                                    <style>
                                        .my-never-closing-datepicker {
                                            position: static;
                                            display: inline-block;
                                            overflow: hidden;
                                        }
                                    </style>
                                </div>
                            </fieldset>
                        </section>
                        <div>
                            <input type="submit" name="sub" value="Registrar" class="ink-button success" />
                        </div>
                    </form>
                    <script>
                        Ink.requireModules( ['Ink.UI.FormValidator_2', 'Ink.Dom.Selector_1'], function( FormValidator, Selector ){
                            var myValidator = new FormValidator( '#planilla-registro');
                        });
                    </script>
                </div>

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
