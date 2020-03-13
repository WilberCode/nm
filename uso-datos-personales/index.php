<?php 
 include '../includes/config.php';
 $menu_interior = 1;
?>
<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />

      <meta name="decription" content="El Grupo Nuevo Mundo Inmobiliaria cuenta con la experiencia de más de 14 años en la construcción, gerencia de proyectos y
          administración de centros empresariales y hoteles, lo que nos permite ofrecer hoy, departamentos con espacios que cubran
          las expectativas y exigencias del mercado.">
      <meta name="theme-color" content="#00a8ac" class="next-head">
      <meta property="og:type" content="website">
      <meta property="og:title" content="NUEVO MUNDO ESPACIOS">
      <meta property="og:description" content="El Grupo Nuevo Mundo Inmobiliaria cuenta con la experiencia de más de 14 años en la construcción, gerencia de proyectos y administración de centros empresariales y hoteles, lo que nos permite ofrecer hoy, departamentos con espacios que cubran
                las expectativas y exigencias del mercado.">
      <meta property="og:url" content="<?= $ruta_web ?>">
      <meta property="og:site_name" content="NM ESPACIOS">
      <meta property="og:image" content="<?= $ruta_web ?>img/logonm.png">
      <meta property="og:image:secure_url" content="<?= $ruta_web ?>img/logonm.png">
      <meta property="og:image:width" content="800">
      <meta property="og:image:height" content="600">
      <meta name="twitter:card" content="summary_large_image">
      <meta name="twitter:description" content="l Grupo Nuevo Mundo Inmobiliaria cuenta con la experiencia de más de 14 años en la construcción, gerencia de proyectos y
            administración de centros empresariales y hoteles, lo que nos permite ofrecer hoy, departamentos con espacios que cubran
            las expectativas y exigencias del mercado.">
      <meta name="twitter:title" content="NM ESPACIOS">
      <meta name="twitter:image" content="<?= $ruta_web ?>img/logonm.png">

  <link rel="stylesheet" href="<?= $ruta_web ?>dist/css/slick.css" />
  <link rel="stylesheet" href="<?= $ruta_web ?>dist/owl/assets/owl.carousel.min.css" />
  <link rel="stylesheet" href="<?= $ruta_web ?>dist/owl/assets/owl.theme.default.min.css" />
  <link rel="stylesheet" href="<?= $ruta_web ?>dist/owl/assets/owl.theme.green.min.css" />
  <link rel="stylesheet" type="text/css" href="<?= $ruta_web ?>dist/css/slick-theme.css" />
  <link rel="stylesheet" type="text/css" href="<?= $ruta_web ?>dist/css/slick.css" />
  <link rel="stylesheet" type="text/css" href="<?= $ruta_web ?>dist/css/aos.css" /> 
  <script type="text/javascript" src="https://use.fontawesome.com/releases/v5.0.6/js/all.js?ver=5.0"></script>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap"
    rel="stylesheet">
  <!-- <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"> -->
  
  <link rel="stylesheet" href="<?= $ruta_web ?>dist/fonts/styles.css"> 
  <link rel="stylesheet" href="<?= $ruta_web ?>dist/css/tailwindcss.css"/>
  <link rel="stylesheet" href="<?= $ruta_web ?>dist/css/style.css"/>

  <title> USO DE DATOS PERSONALES - nm espacios</title>
</head>

<body>
  <div id="app" class="">
    <?php include '../includes/header.php' ?>
    
    <div class="banner">
      <div class="w-full">
        <img class="w-full h-400 xl:h-600 object-cover object-center " src="../img/slider/slider-2.png"alt="">
      </div>
    </div>
    <div class="document pt-16">
      <div class="container text-dark">
        <h1 class="  md:text-2xl akrobat font-bold mb-12" >CONSENTIMIENTO INFORMADO <br> PARA EL USO Y TRATAMIENTO DE DATOS PERSONALES</h1>

        <p class="text-lg mt-6" >En atención a lo dispuesto en la Ley N° 29733, Ley de Protección de Datos Personales modificada por Decreto Legislativo N°
        1353 (Ley) y su Reglamento, aprobado por Decreto Supremo N° 003-2013-JUS modificado por Decreto Supremo N° 019-2017-JUS (Reglamento),
        mediante clic en el botón “ENVIAR”, autorizo de manera voluntaria, previa, expresa, informada e inequívoca, a Centro Inmobiliario
        Rutté I S.A.C. <strong>(NUEVO MUNDO ESPACIOS)</strong>, quien actuará como responsable del tratamiento de mis datos personales, para que recolecte,
        almacene, circule, suprima, comparta, actualice, transmita y utilice los datos que completaré en el formulario “Contáctanos”
        del portal web de <strong>NUEVO MUNDO ESPACIOS</strong>, de conformidad con el siguiente detalle:</p>

        <p class="text-lg mt-6" > <strong>A.</strong> Mis datos personales serán almacenados por plazo indefinido en el banco de datos personales denominado “PROSPECTOS DE
        CLIENTES”, cuyo titular y responsable es <strong>NUEVO MUNDO ESPACIOS</strong>, para que pueda atender sus consultas, peticiones, reclamos,
        requerimiento y/o comunicaciones, así como remitirme publicidad, ofrecerme promociones comerciales, ofertas, descuentos e
        información relacionada a los productos y/o servicios que <strong>NUEVO MUNDO ESPACIOS</strong> comercializa.</p>

        <p class="text-lg mt-6" > <strong>B.</strong> <strong>NUEVO MUNDO ESPACIOS</strong> podrá transferir a nivel nacional e internacional sus datos personales a terceros, siempre que ello
        sea necesario y proporcional a la finalidad antes señalada. Para mayor detalle sobre la lista de destinatarios, sírvase revisar
        los anexos de nuestra Política de Privacidad publicada en nuestra página web <a href="<?= $ruta_web ?>"><?= $ruta_web ?>.</a> </p>

        <p class="text-lg mt-6" > <strong>C.</strong> En caso no brinde mi consentimiento, declaro que conozco que <strong>NUEVO MUNDO ESPACIOS</strong> no podrá utilizar mis datos personales
        para los actos antes mencionados.</p>

        <p class="text-lg mt-6" > <strong>D.</strong> Declaro conocer que podré revocar mi consentimiento y ejercer mis derechos previstos en la Constitución Política Perú,
        en la Ley y en el Reglamento, especialmente los derechos de acceso, rectificación, cancelación y oposición al tratamiento
        de mis datos personales (derechos “ARCO”), los cuales podré ejercer dirigiéndome al correo electrónico: <a class="text-blue-500" href="mailto:asesor1@nuevomundoespacios.com.pe">asesor1@nuevomundoespacios.com.pe </a>  (Banco de Datos “Prospecto de Clientes”) o <a class="text-blue-500" href="gvelarde@nuevomundoespacios.com.pe">gvelarde@nuevomundoespacios.com.pe </a> (Banco de Datos “Clientes”) (asunto
        “Protección de Datos Personales”) o a las oficinas de <strong>NUEVO MUNDO ESPACIOS</strong> ubicadas en Calle Francisco Del Castillo Nº 292,
        Miraflores, Lima.</p>
         
        <p class="text-lg mt-6" >
           <strong>E.</strong> De igual forma, declaro que de ser el caso que revoque mi consentimiento a que mis datos personales sean usados por <strong> NUEVO MUNDO ESPACIOS</strong> en los términos señalados en el presente documento, <strong>NUEVO MUNDO ESPACIOS</strong> no podrá realizar ninguna de las
          actividades antes descritas para las cuales solicita mi consentimiento y tratamiento de datos personales.
        </p>
        <p class="text-lg mt-6" >
           <strong>F.</strong> Declaro que <strong>NUEVO MUNDO ESPACIOS</strong> podrá modificar su Política de Privacidad en cualquier momento, cambio que será informado
          y publicado oportunamente en la página web <a href="<?= $ruta_web ?>"><?= $ruta_web ?></a> o a través de los medios que disponga para
          tal fin.
        </p>
         
        <p class="text-lg mt-6" >
           <strong>G.</strong> Este consentimiento constituye su autorización previa para el envío de comunicaciones sobre los productos y servicios
          de <strong>NUEVO MUNDO ESPACIOS</strong> , vía mensajes electrónicos, sin contravenir lo establecido en el literal e) del numeral 58.1 del
          artículo 58º de la Ley Nº 29571, Código de Protección y Defensa del Consumidor y sus normas modificatorias.
        </p>
         
      </div>
    </div>
   <?php include '../includes/footer.php' ?>
  <script src="<?= $ruta_web ?>dist/js/jquery-3.3.1.min.js"></script>
  <script src="<?= $ruta_web ?>dist/js/parallax.min.js"></script>
  <script src="<?= $ruta_web ?>dist/js/slick.js"></script>
  <script src="<?= $ruta_web ?>dist/js/ready.js"></script>
  <script src="<?= $ruta_web ?>dist/owl/owl.carousel.min.js"></script>
  <script src="<?= $ruta_web ?>dist/js/aos.js"></script>
  <script src="<?= $ruta_web ?>dist/js/app.js"></script>



  <script>
    $('.owl-carousel').owlCarousel({
      margin: 0,
      loop: true,
      items: 1,
      autoplay: true,
      autoplayTimeout: 4000,
      autoplayHoverPause: true
    })
    
  </script>
</body>

</html>
