<?php 
 include 'includes/config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  


  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="title" content="Nuevo Mundo Espacios">
  <meta name="decription" content="Te damos el espacio que necesitas
En departamentos amplios, funcionales y perfectamente distribuidos que se adaptan a tu estilo de vida">

  <!-- Limpia el cache -->
  <meta http-equiv="Expires" content="0">
  <meta http-equiv="Last-Modified" content="0">
  <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
  <meta http-equiv="Pragma" content="no-cache">

  <!-- opengraph facebook-->
  <meta name="theme-color" content="#00a8ac" class="next-head">
  <meta property="og:type" content="website">
  <meta property="og:title" content="NUEVO MUNDO ESPACIOS">
  <meta property="og:description" content="Te damos el espacio que necesitas
En departamentos amplios, funcionales y perfectamente distribuidos que se adaptan a tu estilo de vida.">
  <meta property="og:url" content="<?= $ruta_web ?>">
  <meta property="og:site_name" content="NUEVO MUNDO ESPACIOS">
  <meta property="og:image" content="<?= $ruta_web ?>img/fachada.png">
  <meta property="og:image:secure_url" content="<?= $ruta_web ?>img/fachada.png">
  <meta property="og:image:width" content="800">
  <meta property="og:image:height" content="600">

  <!-- opengraph twitter-->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:description" content="Te damos el espacio que necesitas
En departamentos amplios, funcionales y perfectamente distribuidos que se adaptan a tu estilo de vida.">
  <meta name="twitter:title" content="NUEVO MUNDO ESPACIOS">
  <meta name="twitter:image" content="<?= $ruta_web ?>img/fachada.png">

  <link rel="shortcut icon" href="<?= $ruta_web ?>img/svg/logo.ico" type="image/x-icon">
  <link rel="stylesheet" href="<?= $ruta_web ?>dist/css/slick.css" />
  <link rel="stylesheet" href="<?= $ruta_web ?>dist/owl/assets/owl.carousel.min.css" />
  <link rel="stylesheet" href="<?= $ruta_web ?>dist/owl/assets/owl.theme.default.min.css" />
  <link rel="stylesheet" href="<?= $ruta_web ?>dist/owl/assets/owl.theme.green.min.css" />
  <link rel="stylesheet" type="text/css" href="<?= $ruta_web ?>dist/css/slick.css" />
  <link rel="stylesheet" type="text/css" href="<?= $ruta_web ?>dist/css/slick-theme.css" />
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
  <link rel="stylesheet" type="text/css" href="<?= $ruta_web ?>dist/css/aos.css" />
  <script type="text/javascript" src="https://use.fontawesome.com/releases/v5.0.6/js/all.js?ver=5.0"></script>
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap"
    rel="stylesheet">
  <!-- <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="<?= $ruta_web ?>dist/fonts/styles.css">
  <link rel="stylesheet" href="<?= $ruta_web ?>dist/css/tailwindcss.css" />
  <link rel="stylesheet" href="<?= $ruta_web ?>dist/css/style.css" />
  <title>NM espacios</title>
</head>

<body>
  <div id="app" class="app">
    <?php include 'includes/header.php' ?>
    <div class="services">
      <div class="container flex flex-wrap mt-10">
        <div class="w-full md:w-2/5">
          <h1 class=" text-base sm:text-xl font-bold text-black" data-aos="fade-up">Te damos el espacio que necesitas
          </h1>
          <p class=" text-base sm:text-xl text-black" data-aos="fade-up" data-aos-delay="500">En departamentos amplios,
            funcionales y perfectamente distribuidos que se adaptan a tu estilo de vida.</p>
          <ul class="services-list list-none mt-8" data-aos="fade-up" data-aos-delay="600">
            <li>
              <p>Iluminación y ventilación natural.</p>
            </li>
            <li>
              <p>Sala lounge de uso común.</p>
            </li>
            <li>
              <p>Ubicación privilegiada a un paso de San Isidro y cerca al parque Gonzales Prada.</p>
            </li>
          </ul>
          <ul class="services-characteristics mt-12" data-aos="fade-up" data-aos-delay="700">
            <li> <img src="img/services/relacion.png" alt="relaciones">
              <p>Acabados y diseño de excelente <br>
                relación calidad > precio </p>
            </li>
            <li> <img src="img/services/cocina.png" alt="cocina">
              <p>Cocina integrada o independiente
              </p>
            </li>
            <li> <img src="img/services/estacionamiento.png" alt="estacionamiento">
              <p>Estacionamientos y depósitos
              </p>
            </li>
            <li> <img src="img/services/seguridad.png" alt="seguridad">
              <p>Seguridad integral en el
                edificio <br> y departamentos</p>
            </li>
            <li> <img src="img/services/ascensor.png" alt="ascensor">
              <p>02 ascensores
              </p>
            </li>
            <li> <img src="img/services/gas.png" alt="gas">
              <p>Gas natural doméstico </p>
            </li>
          </ul>
        </div>
        <div class=" w-full md:w-3/5 pl-0 md:pl-10 mt-6 md:mt-0 " data-aos="flip-right" data-aos-duration="800">
          <img class="w-full " src="img/fachada.png" alt="fachada" />
          <div class="bg-black py-3 sm:py-5  mt-1">
            <div class="container block md:flex px-4  px-5 ">
              <div class="w-full md:w-1/2  ">
                <h1
                  class=" text-center md:text-left text-xl md:text-2xl font-semibold text-white leading-tight sm:leading-normal"
                  data-aos-offset="100" data-aos-duration="400" data-aos="fade-right">36 departamentos <br> de 1, 2 y 3
                  dormitorios </h1>
              </div>
              <div class="w-full md:w-1/2 flex justify-center items-center mt-2 sm:mt-0">
                <div class="w-full espacios-description-img" data-aos="zoom-in" data-aos-delay="500"
                  data-aos-duration="600">
                  <img src="img/espacios/desde-hasta.svg" alt="desde hasta" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="max-w-3xl mx-auto block sm:flex flex-wrap justify-around md:justify-between mt-12 md:mt-6">
          <div class="services-squard mb-4 xs:mb-10 w-full sm:max-w-xs md:max-w-14" data-aos="fade-up"
            data-aos-delay="100">
            <a class="block  p-2 sm:p-3" href="#gallery"> Galería fotos</a>
          </div>
          <div class="services-squard mb-4 xs:mb-10 w-full sm:max-w-xs md:max-w-14" data-aos="fade-up"
            data-aos-delay="200">
            <a class="block  p-2 sm:p-3" href="#departamentos"> Departamentos</a>
          </div>
          <div class="services-squard mb-4 xs:mb-10 w-full sm:max-w-xs md:max-w-14" data-aos="fade-up"
            data-aos-delay="300">
            <a class="block  p-2 sm:p-3" href="#ubicacion">Ubicación</a>
          </div>
        </div>
      </div>
      <div class="container mt-8 xs:mt-10">
        <div class="gallery" id="gallery">
          <img src="img/gallery/lobby.png" alt="lobby" class="" title="Lobby" data-caption="Lobby" />
          <img src="img/gallery/area-comun.png" title="Sala lounge de uso común" alt="area comun" class=""
            data-caption="Sala lounge de uso común" />
          <img src="img/gallery/cocina.jpg" title="Cocina" alt="cocina" 
            data-caption="Cocina: granito en encimeras de cocina, muebles de MDF, pisos de porcelanato." />
          <img src="img/gallery/dormitorio-principal.png" title="Dormitorio principal" alt="dormitorio" class=""
            data-caption="Dormitorio principal con walk in closet y baño integrado." />
          <img src="img/gallery/sala.png" alt="sala" title="Sala" class="" data-caption="Sala" />
          <img src="img/gallery/bano.png" alt="baño principal" title="Baño principal" class=""
            data-caption="Baño principal. Acabados de calidad." />
          <img src="img/gallery/dormitorio-secundario.png" title="Dormitorio secundario" alt="dormitorio secundario"
            class="" data-caption="Dormitorio secundario." />
        </div>
      </div>
    </div>
  </div>
  <div id="gallery-modal-wrap" class="gallery-modal-wrap flex justify-center items-center">
    <div id="gallery-modal" class="gallery-modal text-right">
      <button id="gallery-modal__btn" class="gallery-modal__btn  text-right">X</button>
      <div id="gallery-modal-img" class="flex justify-center w-full"></div>
      <div id="gallery-modal-caption" class="gallery-modal-caption text-center text-xl font-bold"></div>
    </div>
  </div>

  <div class="w-full espacios mt-16 ">
    <div class="owl-carousel owl-theme h-600 md:h-auto">
      <div class="espacios-imgwrap">
        <img src="img/slider/slider-1.png" class="block " />
      </div>
      <div class="espacios-imgwrap">
        <img src="img/slider/slider-2.png" class="block " />
      </div>
      <div class="espacios-imgwrap">
        <img src="img/slider/slider-3.png" class="block " />
      </div>
    </div>

  </div>
  <div class="bg-white w-full">
    <div class="bg-black py-3 sm:py-5">
      <div class="container block md:flex px-4 md:px-0">
        <div class="w-full md:w-1/2">
          <h1
            class=" text-center md:text-left text-xl md:text-3xl font-semibold text-white leading-tight sm:leading-normal"
            data-aos-offset="100" data-aos-duration="400" data-aos="fade-right">36 departamentos <br> de 1, 2 y 3
            dormitorios </h1>
        </div>
        <div class="w-full md:w-1/2 flex justify-center items-center mt-2 sm:mt-0">
          <div class="w-full espacios-description-img" data-aos="zoom-in" data-aos-delay="500" data-aos-duration="600">
            <img src="img/espacios/desde-hasta.svg" alt="desde hasta" />
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="live relative z-10" id="departamentos">
    <div class="container live-wrap mt-16">
      <h1 class="text-jade text-base  text-left sm:text-3xl font-semibold">DECIDE DÓNDE QUIERES VIVIR</h1>
      <div class="live-box w-full mt-6">
        <div class="live-box__names flex nowrap border-1 border-jade mr-4 mb-2">
          <div class="live-box__names-name w-1/6 md:w-2/6 text-center ">
            <h4 class="text-sm md:text-xl">Plano</h4>
          </div>
          <div class="live-box__names-name w-1/6 text-center ">
            <h4 class="text-sm md:text-xl">Dpto.</h4>
          </div>
          <div class="live-box__names-name w-1/6 text-center ">
            <h4 class="text-sm md:text-xl">Dorm.</h4>
          </div>
          <div class="live-box__names-name w-2/6 md:w-1/6 text-center ">
            <h4 class="text-sm md:text-xl">Área</h4>
          </div>
          <div class="live-box__names-name w-1/6 text-center ">
            <h4 class="text-sm md:text-xl">Precio</h4>
          </div>
        </div>
        <div class="live-info">
          <div class="live-info__content">
            <div id="live-modal-wrap" class="live-modal-wrap flex justify-center items-center">
              <div class="live-modal text-right">
                <button id="live-modal__btn" class="live-modal__btn  text-right">X</button>
                 <a href="javascript:imagePrint();" id="print-plan">
                <div id="live-modal-img" class="live-modal-img  py-5 px-5 flex justify-center w-full bg-white"></div> 
               </a> 
                
              </div>
            </div>
            <!-- plano fila start 1 -->
            <div class="live-info__squard w-full flex flex-nowrap ">
              <div
                class="live-info__squard-plane relative w-1/6 md:w-2/6 py-1 text-center border-r border-white flex  justify-center items-center bg-gray-200">
                <div class="live-info__squard-plane-img-wrap text-center " id="plano1">
                  <img class="live-info__squard-plane-img h-220 w-auto" src="img/planos/101.png"
                    data-print="img/prints/plano-101.png" alt="Departamento 101">
                </div>
                <button class="live-info__squard-btn absolute left-0 top-0 ">
                </button>
              </div>
              <div class="w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200 ">
                <div class="">
                  <p class="text-black font-semibold">
                    Piso 1<br>
                    101<br>
                    Vista calle <br>
                  </p>
                </div>
              </div>
              <div class="w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">2</p>
                </div>
              </div>
              <div
                class="w-2/6 md:w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">
                    Techada 79.83 m2<br>
                    Terraza 19.50 m2<br>
                    Patio 7.39 m2<br>
                    Ocupada 106.72 m2
                  </p>
                </div>
              </div>
              <div class="w-1/6 py-2 text-center flex  justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">
                    S/610,792.47<br>
                    $178,594.29
                  </p>
                </div>
              </div>
            </div>
            <!-- plano fila end -->
            <!-- plano fila start 2   -->
            <div class="live-info__squard w-full flex flex-nowrap  ">
              <div
                class="live-info__squard-plane relative w-1/6 md:w-2/6 py-1 text-center border-r border-white flex  justify-center items-center bg-gray-200">
                <div class="live-info__squard-plane-img-wrap text-center py-2 ">
                  <img class="live-info__squard-plane-img h-220 w-auto" src="img/planos/102.png"  data-print="img/prints/plano-102.png" alt="Departamento 102"   > 
                </div>

                <button class="live-info__squard-btn absolute left-0 top-0 ">
                </button>
              </div>
              <div class="w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200 ">
                <div class="">
                  <p class="text-black font-semibold">
                    Piso 1 <br>
                    102 <br>
                    Vista interior
                  </p>
                </div>
              </div>
              <div class="w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">2</p>
                </div>
              </div>
              <div
                class="w-2/6 md:w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">
                    Techada 226.74 m2 <br>
                    Terraza 120.81 m2 <br>
                    Ocupada 347.55 m2
                  </p>
                </div>
              </div>
              <div class="w-1/6 py-2 text-center flex  justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">
                    S/1,349,101.49 <br>
                    $394,474.12

                  </p>
                </div>
              </div>
            </div>
            <!-- plano fila end -->
            <!-- plano fila start 3 -->
            <div class="live-info__squard w-full flex flex-nowrap ">
              <div
                class="live-info__squard-plane relative w-1/6 md:w-2/6 py-1 text-center border-r border-white flex  justify-center items-center bg-gray-200">
                <div class="live-info__squard-plane-img-wrap text-center">
                  <img class="live-info__squard-plane-img h-220 w-auto" src="img/planos/103.png"
                    data-print="img/prints/plano-103.png" alt="">
                </div>

                <button class="live-info__squard-btn absolute left-0 top-0">
                </button>
              </div>
              <div class="w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200 ">
                <div class="">
                  <p class="text-black font-semibold">
                    Piso 1 <br>
                    103 <br>
                    Vista calle
                  </p>
                </div>
              </div>
              <div class="w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">3</p>
                </div>
              </div>
              <div
                class="w-2/6 md:w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">
                    Techada 101.76 m2 <br>
                    Terraza 26.76 m2 <br>
                    Patio 3.88 m2 <br>
                    Ocupada 132.40 m2
                  </p>
                </div>
              </div>
              <div class="w-1/6 py-2 text-center flex  justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">
                    S/722,523.56 <br>
                    $211,264.20

                  </p>
                </div>
              </div>
            </div>
            <!-- plano fila end -->
            <!-- plano fila start 4 -->
            <div class="live-info__squard w-full flex flex-nowrap ">
              <div
                class="live-info__squard-plane relative w-1/6 md:w-2/6 py-1 text-center border-r border-white flex  justify-center items-center bg-gray-200">
                <div class="live-info__squard-plane-img-wrap text-center">
                  <img class="live-info__squard-plane-img h-220 w-auto" src="img/planos/201.png"
                    data-print="img/prints/plano-201.png" alt="">
                </div>

                <button class="live-info__squard-btn absolute left-0 top-0 ">
                </button>
              </div>
              <div class="w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200 ">
                <div class="">
                  <p class="text-black font-semibold">
                    Piso 2 <br>
                    201 <br>
                    Vista calle
                  </p>
                </div>
              </div>
              <div class="w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">3</p>
                </div>
              </div>
              <div
                class="w-2/6 md:w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">
                    Techada 103.53 m2 <br>
                    Ocupada 103.53 m2
                  </p>
                </div>
              </div>
              <div class="w-1/6 py-2 text-center flex  justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">
                    S/697,524.18 <br>
                    $203,954.44
                  </p>
                </div>
              </div>
            </div>
            <!-- plano fila end -->
            <!-- plano fila start 5 -->
            <div class="live-info__squard w-full flex flex-nowrap ">
              <div
                class="live-info__squard-plane relative w-1/6 md:w-2/6 py-1 text-center border-r border-white flex  justify-center items-center bg-gray-200">
                <div class="live-info__squard-plane-img-wrap text-center">
                  <img class="live-info__squard-plane-img h-220 w-auto" src="img/planos/202.png"
                    data-print="img/prints/plano-202.png" alt="">
                </div>

                <button class="live-info__squard-btn absolute left-0 top-0 ">
                </button>
              </div>
              <div class="w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200 ">
                <div class="">
                  <p class="text-black font-semibold">
                    Piso 2 <br>
                    202 <br>
                    Vista calle
                  </p>
                </div>
              </div>
              <div class="w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">1</p>
                </div>
              </div>
              <div
                class="w-2/6 md:w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">
                    Techada 46.24 m2 <br>
                    Ocupada 46.24 m2
                  </p>
                </div>
              </div>
              <div class="w-1/6 py-2 text-center flex  justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">
                    S/324,188.54<br>
                    $94,791.97
                  </p>
                </div>
              </div>
            </div>
            <!-- plano fila end -->
            <!-- plano fila start 6 -->
            <div class="live-info__squard w-full flex flex-nowrap ">
              <div
                class="live-info__squard-plane relative w-1/6 md:w-2/6 py-1 text-center border-r border-white flex  justify-center items-center bg-gray-200">
                <div class="live-info__squard-plane-img-wrap text-center">
                  <img class="live-info__squard-plane-img h-220 w-auto" src="img/planos/203.png"
                    data-print="img/prints/plano-203.png" alt="">
                </div>

                <button class="live-info__squard-btn absolute left-0 top-0 ">
                </button>
              </div>
              <div class="w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200 ">
                <div class="">
                  <p class="text-black font-semibold">
                    Piso 2 <br>
                    203 <br>
                    Vista calle
                  </p>
                </div>
              </div>
              <div class="w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">3</p>
                </div>
              </div>
              <div
                class="w-2/6 md:w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">
                    Techada 101.04 m2 <br>
                    Ocupada 101.04 m2
                  </p>
                </div>
              </div>
              <div class="w-1/6 py-2 text-center flex  justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">
                    S/680,748.02 <br>
                    $199,049.13
                  </p>
                </div>
              </div>
            </div>
            <!-- plano fila end -->
            <!-- plano fila start 7 -->
            <div class="live-info__squard w-full flex flex-nowrap ">
              <div
                class="live-info__squard-plane relative w-1/6 md:w-2/6 py-1 text-center border-r border-white flex  justify-center items-center bg-gray-200">
                <div class="live-info__squard-plane-img-wrap text-center">
                  <img class="live-info__squard-plane-img h-220 w-auto" src="img/planos/204.png"
                    data-print="img/prints/plano-204.png" alt="">
                </div>

                <button class="live-info__squard-btn absolute left-0 top-0 ">
                </button>
              </div>
              <div class="w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200 ">
                <div class="">
                  <p class="text-black font-semibold">
                    Piso 2 <br>
                    204 <br>
                    Vista interior
                  </p>
                </div>
              </div>
              <div class="w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">3</p>
                </div>
              </div>
              <div
                class="w-2/6 md:w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">
                    Techada 90.77 m2 <br>
                    Ocupada 90.77 m2
                  </p>
                </div>
              </div>
              <div class="w-1/6 py-2 text-center flex  justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">
                    S/580,510.66<br>
                    $169,739.96
                  </p>
                </div>
              </div>
            </div>
            <!-- plano fila end -->
            <!-- plano fila start 8 -->
            <div class="live-info__squard w-full flex flex-nowrap ">
              <div
                class="live-info__squard-plane relative w-1/6 md:w-2/6 py-1 text-center border-r border-white flex  justify-center items-center bg-gray-200">
                <div class="live-info__squard-plane-img-wrap text-center">
                  <img class="live-info__squard-plane-img h-220 w-auto" src="img/planos/205.png"
                    data-print="img/prints/plano-205.png" alt="">
                </div>

                <button class="live-info__squard-btn absolute left-0 top-0 ">
                </button>
              </div>
              <div class="w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200 ">
                <div class="">
                  <p class="text-black font-semibold">
                    Piso 2 <br>
                    205 <br>
                    Vista interior
                  </p>
                </div>
              </div>
              <div class="w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">1</p>
                </div>
              </div>
              <div
                class="w-2/6 md:w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">
                    Techada 44.10 m2 <br>
                    Ocupada 44.10 m2
                  </p>
                </div>
              </div>
              <div class="w-1/6 py-2 text-center flex  justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">
                    S/294,102.90 <br>
                    $85,995.00
                  </p>
                </div>
              </div>
            </div>
            <!-- plano fila end -->
            <!-- plano fila start 9 -->
            <div class="live-info__squard w-full flex flex-nowrap ">
              <div
                class="live-info__squard-plane relative w-1/6 md:w-2/6 py-1 text-center border-r border-white flex  justify-center items-center bg-gray-200">
                <div class="live-info__squard-plane-img-wrap text-center">
                  <img class="live-info__squard-plane-img h-220 w-auto" src="img/planos/206.png"
                    data-print="img/prints/plano-206.png" alt="">
                </div>

                <button class="live-info__squard-btn absolute left-0 top-0 ">
                </button>
              </div>
              <div class="w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200 ">
                <div class="">
                  <p class="text-black font-semibold">
                    Piso 2 <br>
                    206 <br>
                    Vista interior
                  </p>
                </div>
              </div>
              <div class="w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">3</p>
                </div>
              </div>
              <div
                class="w-2/6 md:w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">
                    Techada 85.08 m2 <br>
                    Ocupada 85.08 m2
                  </p>
                </div>
              </div>
              <div class="w-1/6 py-2 text-center flex  justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">
                    S/544,120.84 <br>
                    $159,099.66
                  </p>
                </div>
              </div>
            </div>
            <!-- plano fila end -->
            <!-- plano fila start 10 -->
            <div class="live-info__squard w-full flex flex-nowrap ">
              <div
                class="live-info__squard-plane relative w-1/6 md:w-2/6 py-1 text-center border-r border-white flex  justify-center items-center bg-gray-200">
                <div class="live-info__squard-plane-img-wrap text-center">
                  <img class="live-info__squard-plane-img h-220 w-auto" src="img/planos/301.png"
                    data-print="img/prints/plano-301.png" alt="">
                </div>

                <button class="live-info__squard-btn absolute left-0 top-0 ">
                </button>
              </div>
              <div class="w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200 ">
                <div class="">
                  <p class="text-black font-semibold">
                    Piso 3 <br>
                    301 <br>
                    Vista calle
                  </p>
                </div>
              </div>
              <div class="w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">3</p>
                </div>
              </div>
              <div
                class="w-2/6 md:w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">
                    Techada 103.53 m2 <br>
                    Ocupada 103.53 m2
                  </p>
                </div>
              </div>
              <div class="w-1/6 py-2 text-center flex  justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">
                    S/697,524.18 <br>
                    $203,954.44
                  </p>
                </div>
              </div>
            </div>
            <!-- plano fila end -->
            <!-- plano fila start 11 -->
            <div class="live-info__squard w-full flex flex-nowrap ">
              <div
                class="live-info__squard-plane relative w-1/6 md:w-2/6 py-1 text-center border-r border-white flex  justify-center items-center bg-gray-200">
                <div class="live-info__squard-plane-img-wrap text-center">
                  <img class="live-info__squard-plane-img h-220 w-auto" src="img/planos/302.png"
                    data-print="img/prints/plano-302.png" alt="">
                </div>

                <button class="live-info__squard-btn absolute left-0 top-0 ">
                </button>
              </div>
              <div class="w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200 ">
                <div class="">
                  <p class="text-black font-semibold">
                    Piso 3 <br>
                    302 <br>
                    Vista calle
                  </p>
                </div>
              </div>
              <div class="w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">1</p>
                </div>
              </div>
              <div
                class="w-2/6 md:w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">
                    Techada 46.24 m2 <br>
                    Ocupada 46.24 m2
                  </p>
                </div>
              </div>
              <div class="w-1/6 py-2 text-center flex  justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">
                    S/324,188.54 <br>
                    $94,791.97
                  </p>
                </div>
              </div>
            </div>
            <!-- plano fila end -->
            <!-- plano fila start 12  -->
            <div class="live-info__squard w-full flex flex-nowrap ">
              <div
                class="live-info__squard-plane relative w-1/6 md:w-2/6 py-1 text-center border-r border-white flex  justify-center items-center bg-gray-200">
                <div class="live-info__squard-plane-img-wrap text-center">
                  <img class="live-info__squard-plane-img h-220 w-auto" src="img/planos/303.png"
                    data-print="img/prints/plano-303.png" alt="">
                </div>

                <button class="live-info__squard-btn absolute left-0 top-0 ">
                </button>
              </div>
              <div class="w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200 ">
                <div class="">
                  <p class="text-black font-semibold">
                    Piso 3 <br>
                    303 <br>
                    Vista calle
                  </p>
                </div>
              </div>
              <div class="w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">3</p>
                </div>
              </div>
              <div
                class="w-2/6 md:w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">
                    Techada 101.04 m2 <br>
                    Ocupada 101.04 m2
                  </p>
                </div>
              </div>
              <div class="w-1/6 py-2 text-center flex  justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">
                    S/680,748.02 <br>
                    $199,049.13
                  </p>
                </div>
              </div>
            </div>
            <!-- plano fila end -->
            <!-- plano fila start 13 -->
            <div class="live-info__squard w-full flex flex-nowrap ">
              <div
                class="live-info__squard-plane relative w-1/6 md:w-2/6 py-1 text-center border-r border-white flex  justify-center items-center bg-gray-200">
                <div class="live-info__squard-plane-img-wrap text-center">
                  <img class="live-info__squard-plane-img h-220 w-auto" src="img/planos/304.png"
                    data-print="img/prints/plano-304.png" alt="">
                </div>

                <button class="live-info__squard-btn absolute left-0 top-0 ">
                </button>
              </div>
              <div class="w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200 ">
                <div class="">
                  <p class="text-black font-semibold">
                    Piso 3 <br>
                    304 <br>
                    Vista interior
                  </p>
                </div>
              </div>
              <div class="w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">3</p>
                </div>
              </div>
              <div
                class="w-2/6 md:w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">
                    Techada 90.77 m2 <br>
                    Ocupada 90.77 m2
                  </p>
                </div>
              </div>
              <div class="w-1/6 py-2 text-center flex  justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">
                    S/580,510.66 <br>
                    $169,739.96
                  </p>
                </div>
              </div>
            </div>
            <!-- plano fila end -->
            <!-- plano fila start 14 -->
            <div class="live-info__squard w-full flex flex-nowrap ">
              <div
                class="live-info__squard-plane relative w-1/6 md:w-2/6 py-1 text-center border-r border-white flex  justify-center items-center bg-gray-200">
                <div class="live-info__squard-plane-img-wrap text-center">
                  <img class="live-info__squard-plane-img h-220 w-auto" src="img/planos/305.png"
                    data-print="img/prints/plano-305.png" alt="">
                </div>

                <button class="live-info__squard-btn absolute left-0 top-0 ">
                </button>
              </div>
              <div class="w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200 ">
                <div class="">
                  <p class="text-black font-semibold">
                    Piso 3 <br>
                    305 <br>
                    Vista interior
                  </p>
                </div>
              </div>
              <div class="w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">1</p>
                </div>
              </div>
              <div
                class="w-2/6 md:w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">
                    Techada 44.10 m2 <br>
                    Ocupada 44.10 m2
                  </p>
                </div>
              </div>
              <div class="w-1/6 py-2 text-center flex  justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">
                    S/294,102.90<br>
                    $85,995.00
                  </p>
                </div>
              </div>
            </div>
            <!-- plano fila end -->
            <!-- plano fila start 15 -->
            <div class="live-info__squard w-full flex flex-nowrap ">
              <div
                class="live-info__squard-plane relative w-1/6 md:w-2/6 py-1 text-center border-r border-white flex  justify-center items-center bg-gray-200">
                <div class="live-info__squard-plane-img-wrap text-center">
                  <img class="live-info__squard-plane-img h-220 w-auto" src="img/planos/306.png"
                    data-print="img/prints/plano-306.png" alt="">
                </div>

                <button class="live-info__squard-btn absolute left-0 top-0 ">
                </button>
              </div>
              <div class="w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200 ">
                <div class="">
                  <p class="text-black font-semibold">
                    Piso 3 <br>
                    306 <br>
                    Vista interior
                  </p>
                </div>
              </div>
              <div class="w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">3</p>
                </div>
              </div>
              <div
                class="w-2/6 md:w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">
                    Techada 85.08 m2 <br>
                    Ocupada 85.08 m2
                  </p>
                </div>
              </div>
              <div class="w-1/6 py-2 text-center flex  justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">
                    S/544,120.84<br>
                    $159,099.66
                  </p>
                </div>
              </div>
            </div>
            <!-- plano fila end -->

            <!-- plano fila start 16 -->
            <div class="live-info__squard w-full flex flex-nowrap ">
              <div
                class="live-info__squard-plane relative w-1/6 md:w-2/6 py-1 text-center border-r border-white flex  justify-center items-center bg-gray-200">
                <div class="live-info__squard-plane-img-wrap text-center">
                  <img class="live-info__squard-plane-img h-220 w-auto" src="img/planos/401.png"
                    data-print="img/prints/plano-401.png" alt="">
                </div>

                <button class="live-info__squard-btn absolute left-0 top-0 ">
                </button>
              </div>
              <div class="w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200 ">
                <div class="">
                  <p class="text-black font-semibold">
                    Piso 4<br>
                    401<br>
                    Vista calle
                  </p>
                </div>
              </div>
              <div class="w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">3</p>
                </div>
              </div>
              <div
                class="w-2/6 md:w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">
                    Techada 103.53 m2 <br>
                    Ocupada 103.53 m2
                  </p>
                </div>
              </div>
              <div class="w-1/6 py-2 text-center flex  justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">
                    S/697,524.18 <br>
                    $203,954.44
                  </p>
                </div>
              </div>
            </div>
            <!-- plano fila end -->

            <!-- plano fila start 17 -->
            <div class="live-info__squard w-full flex flex-nowrap ">
              <div
                class="live-info__squard-plane relative w-1/6 md:w-2/6 py-1 text-center border-r border-white flex  justify-center items-center bg-gray-200">
                <div class="live-info__squard-plane-img-wrap text-center">
                  <img class="live-info__squard-plane-img h-220 w-auto" src="img/planos/402.png"
                    data-print="img/prints/plano-402.png" alt="">
                </div>

                <button class="live-info__squard-btn absolute left-0 top-0 ">
                </button>
              </div>
              <div class="w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200 ">
                <div class="">
                  <p class="text-black font-semibold">
                    Piso 4 <br>
                    402 <br>
                    Vista calle
                  </p>
                </div>
              </div>
              <div class="w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">1</p>
                </div>
              </div>
              <div
                class="w-2/6 md:w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">
                    Techada 46.24 m2 <br>
                    Ocupada 46.24 m2
                  </p>
                </div>
              </div>
              <div class="w-1/6 py-2 text-center flex  justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">
                    S/324,188.54 <br>
                    $94,791.97
                  </p>
                </div>
              </div>
            </div>
            <!-- plano fila end -->
            <!-- plano fila start 18 -->
            <div class="live-info__squard w-full flex flex-nowrap ">
              <div
                class="live-info__squard-plane relative w-1/6 md:w-2/6 py-1 text-center border-r border-white flex  justify-center items-center bg-gray-200">
                <div class="live-info__squard-plane-img-wrap text-center">
                  <img class="live-info__squard-plane-img h-220 w-auto" src="img/planos/403.png"
                    data-print="img/prints/plano-403.png" alt="">
                </div>

                <button class="live-info__squard-btn absolute left-0 top-0 ">
                </button>
              </div>
              <div class="w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200 ">
                <div class="">
                  <p class="text-black font-semibold">
                    Piso 4 <br>
                    403 <br>
                    Vista calle
                  </p>
                </div>
              </div>
              <div class="w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">3</p>
                </div>
              </div>
              <div
                class="w-2/6 md:w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">
                    Techada 101.04 m2 <br>
                    Ocupada 101.04 m2
                  </p>
                </div>
              </div>
              <div class="w-1/6 py-2 text-center flex  justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">
                    S/680,748.02 <br>
                    $199,049.13
                  </p>
                </div>
              </div>
            </div>
            <!-- plano fila end -->
            <!-- plano fila start 19 -->
            <div class="live-info__squard w-full flex flex-nowrap ">
              <div
                class="live-info__squard-plane relative w-1/6 md:w-2/6 py-1 text-center border-r border-white flex  justify-center items-center bg-gray-200">
                <div class="live-info__squard-plane-img-wrap text-center">
                  <img class="live-info__squard-plane-img h-220 w-auto" src="img/planos/404.png"
                    data-print="img/prints/plano-404.png" alt="">
                </div>

                <button class="live-info__squard-btn absolute left-0 top-0 ">
                </button>
              </div>
              <div class="w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200 ">
                <div class="">
                  <p class="text-black font-semibold">
                    Piso 4 <br>
                    404 <br>
                    Vista interior
                  </p>
                </div>
              </div>
              <div class="w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">3</p>
                </div>
              </div>
              <div
                class="w-2/6 md:w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">
                    Techada 90.77 m2 <br>
                    Ocupada 90.77 m2
                  </p>
                </div>
              </div>
              <div class="w-1/6 py-2 text-center flex  justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">
                    S/580,510.66 <br>
                    $169,739.96
                  </p>
                </div>
              </div>
            </div>
            <!-- plano fila end -->
            <!-- plano fila start 20 -->
            <div class="live-info__squard w-full flex flex-nowrap ">
              <div
                class="live-info__squard-plane relative w-1/6 md:w-2/6 py-1 text-center border-r border-white flex  justify-center items-center bg-gray-200">
                <div class="live-info__squard-plane-img-wrap text-center">
                  <img class="live-info__squard-plane-img h-220 w-auto" src="img/planos/405.png"
                    data-print="img/prints/plano-405.png" alt="">
                </div>

                <button class="live-info__squard-btn absolute left-0 top-0 ">
                </button>
              </div>
              <div class="w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200 ">
                <div class="">
                  <p class="text-black font-semibold">
                    Piso 4<br>
                    405<br>
                    Vista interior
                  </p>
                </div>
              </div>
              <div class="w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">1</p>
                </div>
              </div>
              <div
                class="w-2/6 md:w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">
                    Techada 44.10 m2 <br>
                    Ocupada 44.10 m2
                  </p>
                </div>
              </div>
              <div class="w-1/6 py-2 text-center flex  justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">
                    S/294,102.90 <br>
                    $85,995.00
                  </p>
                </div>
              </div>
            </div>
            <!-- plano fila end -->
            <!-- plano fila start 21 -->
            <div class="live-info__squard w-full flex flex-nowrap ">
              <div
                class="live-info__squard-plane relative w-1/6 md:w-2/6 py-1 text-center border-r border-white flex  justify-center items-center bg-gray-200">
                <div class="live-info__squard-plane-img-wrap text-center">
                  <img class="live-info__squard-plane-img h-220 w-auto" src="img/planos/406.png"
                    data-print="img/prints/plano-406.png" alt="">
                </div>

                <button class="live-info__squard-btn absolute left-0 top-0 ">
                </button>
              </div>
              <div class="w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200 ">
                <div class="">
                  <p class="text-black font-semibold">
                    Piso 4 <br>
                    406 <br>
                    Vista interior
                  </p>
                </div>
              </div>
              <div class="w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">3</p>
                </div>
              </div>
              <div
                class="w-2/6 md:w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">
                    Techada 85.08 m2 <br>
                    Ocupada 85.08 m2
                  </p>
                </div>
              </div>
              <div class="w-1/6 py-2 text-center flex  justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">
                    S/544,120.84<br>
                    $159,099.66
                  </p>
                </div>
              </div>
            </div>
            <!-- plano fila end -->

            <!-- plano fila start 22 -->
            <div class="live-info__squard w-full flex flex-nowrap ">
              <div
                class="live-info__squard-plane relative w-1/6 md:w-2/6 py-1 text-center border-r border-white flex  justify-center items-center bg-gray-200">
                <div class="live-info__squard-plane-img-wrap text-center">
                  <img class="live-info__squard-plane-img h-220 w-auto" src="img/planos/501.png"
                    data-print="img/prints/plano-501.png" alt="">
                </div>

                <button class="live-info__squard-btn absolute left-0 top-0 ">
                </button>
              </div>
              <div class="w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200 ">
                <div class="">
                  <p class="text-black font-semibold">
                    Piso 5<br>
                    501<br>
                    Vista calle
                  </p>
                </div>
              </div>
              <div class="w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">3</p>
                </div>
              </div>
              <div
                class="w-2/6 md:w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">
                    Techada 103.53 m2 <br>
                    Ocupada 103.53 m2
                  </p>
                </div>
              </div>
              <div class="w-1/6 py-2 text-center flex  justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">
                    S/683,360.19<br>
                    $199,812.92
                  </p>
                </div>
              </div>
            </div>
            <!-- plano fila end -->
            <!-- plano fila start 23 -->
            <div class="live-info__squard w-full flex flex-nowrap ">
              <div
                class="live-info__squard-plane relative w-1/6 md:w-2/6 py-1 text-center border-r border-white flex  justify-center items-center bg-gray-200">
                <div class="live-info__squard-plane-img-wrap text-center">
                  <img class="live-info__squard-plane-img h-220 w-auto" src="img/planos/502.png"
                    data-print="img/prints/plano-502.png" alt="">
                </div>

                <button class="live-info__squard-btn absolute left-0 top-0 ">
                </button>
              </div>
              <div class="w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200 ">
                <div class="">
                  <p class="text-black font-semibold">
                    Piso 5 <br>
                    502 <br>
                    Vista calle
                  </p>
                </div>
              </div>
              <div class="w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">1</p>
                </div>
              </div>
              <div
                class="w-2/6 md:w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">
                    Techada 46.24 m2 <br>
                    Ocupada 46.24 m2
                  </p>
                </div>
              </div>
              <div class="w-1/6 py-2 text-center flex  justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">
                    S/317,862.94<br>
                    $92,942.38
                  </p>
                </div>
              </div>
            </div>
            <!-- plano fila end -->
            <!-- plano fila start 24 -->
            <div class="live-info__squard w-full flex flex-nowrap ">
              <div
                class="live-info__squard-plane relative w-1/6 md:w-2/6 py-1 text-center border-r border-white flex  justify-center items-center bg-gray-200">
                <div class="live-info__squard-plane-img-wrap text-center">
                  <img class="live-info__squard-plane-img h-220 w-auto" src="img/planos/503.png"
                    data-print="img/prints/plano-503.png" alt="">
                </div>

                <button class="live-info__squard-btn absolute left-0 top-0 ">
                </button>
              </div>
              <div class="w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200 ">
                <div class="">
                  <p class="text-black font-semibold">
                    Piso 5<br>
                    503<br>
                    Vista calle
                  </p>
                </div>
              </div>
              <div class="w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">3</p>
                </div>
              </div>
              <div
                class="w-2/6 md:w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">
                    Techada 101.04 m2 <br>
                    Ocupada 101.04 m2
                  </p>
                </div>
              </div>
              <div class="w-1/6 py-2 text-center flex  justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">
                    S/666,924.69 <br>
                    $195,007.22
                  </p>
                </div>
              </div>
            </div>
            <!-- plano fila end -->
            <!-- plano fila start 25 -->
            <div class="live-info__squard w-full flex flex-nowrap ">
              <div
                class="live-info__squard-plane relative w-1/6 md:w-2/6 py-1 text-center border-r border-white flex  justify-center items-center bg-gray-200">
                <div class="live-info__squard-plane-img-wrap text-center">
                  <img class="live-info__squard-plane-img h-220 w-auto" src="img/planos/504.png"
                    data-print="img/prints/plano-504.png" alt="">
                </div>

                <button class="live-info__squard-btn absolute left-0 top-0 ">
                </button>
              </div>
              <div class="w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200 ">
                <div class="">
                  <p class="text-black font-semibold">
                    Piso 5 <br>
                    504 <br>
                    Vista interior
                  </p>
                </div>
              </div>
              <div class="w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">3</p>
                </div>
              </div>
              <div
                class="w-2/6 md:w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">
                    Techada 90.77 m2<br>
                    Ocupada 90.77 m2
                  </p>
                </div>
              </div>
              <div class="w-1/6 py-2 text-center flex  justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">
                    S/568,092.40 <br>
                    $166,108.89
                  </p>
                </div>
              </div>
            </div>
            <!-- plano fila end -->

            <!-- plano fila start 26 -->
            <div class="live-info__squard w-full flex flex-nowrap ">
              <div
                class="live-info__squard-plane relative w-1/6 md:w-2/6 py-1 text-center border-r border-white flex  justify-center items-center bg-gray-200">
                <div class="live-info__squard-plane-img-wrap text-center">
                  <img class="live-info__squard-plane-img h-220 w-auto" src="img/planos/505.png"
                    data-print="img/prints/plano-505.png" alt="">
                </div>

                <button class="live-info__squard-btn absolute left-0 top-0 ">
                </button>
              </div>
              <div class="w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200 ">
                <div class="">
                  <p class="text-black font-semibold">
                    Piso 5<br>
                    505<br>
                    Vista interior
                  </p>
                </div>
              </div>
              <div class="w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">1</p>
                </div>
              </div>
              <div
                class="w-2/6 md:w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">
                    Techada 44.10 m2 <br>
                    Ocupada 44.10 m2
                  </p>
                </div>
              </div>
              <div class="w-1/6 py-2 text-center flex  justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">
                    S/288,069.58 <br>
                    $84,230.87
                  </p>
                </div>
              </div>
            </div>
            <!-- plano fila end -->
            <!-- plano fila start 27 -->
            <div class="live-info__squard w-full flex flex-nowrap ">
              <div
                class="live-info__squard-plane relative w-1/6 md:w-2/6 py-1 text-center border-r border-white flex  justify-center items-center bg-gray-200">
                <div class="live-info__squard-plane-img-wrap text-center">
                  <img class="live-info__squard-plane-img h-220 w-auto" src="img/planos/506.png"
                    data-print="img/prints/plano-506.png" alt="">
                </div>

                <button class="live-info__squard-btn absolute left-0 top-0 ">
                </button>
              </div>
              <div class="w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200 ">
                <div class="">
                  <p class="text-black font-semibold">
                    Piso 5 <br>
                    506<br>
                    Vista interior
                  </p>
                </div>
              </div>
              <div class="w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">3</p>
                </div>
              </div>
              <div
                class="w-2/6 md:w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">
                    Techada 85.08 m2<br>
                    Ocupada 85.08 m2
                  </p>
                </div>
              </div>
              <div class="w-1/6 py-2 text-center flex  justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">
                    S/532,481.00<br>
                    $155,696.20
                  </p>
                </div>
              </div>
            </div>
            <!-- plano fila end -->
            <!-- plano fila start 28 -->
            <div class="live-info__squard w-full flex flex-nowrap ">
              <div
                class="live-info__squard-plane relative w-1/6 md:w-2/6 py-1 text-center border-r border-white flex  justify-center items-center bg-gray-200">
                <div class="live-info__squard-plane-img-wrap text-center">
                  <img class="live-info__squard-plane-img h-220 w-auto" src="img/planos/501.png"
                    data-print="img/prints/plano-601.png" alt="">
                </div>

                <button class="live-info__squard-btn absolute left-0 top-0 ">
                </button>
              </div>
              <div class="w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200 ">
                <div class="">
                  <p class="text-black font-semibold">
                    Piso 6 <br>
                    601<br>
                    Vista calle
                  </p>
                </div>
              </div>
              <div class="w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">3</p>
                </div>
              </div>
              <div
                class="w-2/6 md:w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">
                    Techada 103.53 m2<br>
                    Ocupada 103.53 m2
                  </p>
                </div>
              </div>
              <div class="w-1/6 py-2 text-center flex  justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">
                    S/683,360.19<br>
                    $199,812.92
                  </p>
                </div>
              </div>
            </div>
            <!-- plano fila end -->
            <!-- plano fila start 29 -->
            <div class="live-info__squard w-full flex flex-nowrap ">
              <div
                class="live-info__squard-plane relative w-1/6 md:w-2/6 py-1 text-center border-r border-white flex  justify-center items-center bg-gray-200">
                <div class="live-info__squard-plane-img-wrap text-center">
                  <img class="live-info__squard-plane-img h-220 w-auto" src="img/planos/602.png"
                    data-print="img/prints/plano-602.png" alt="">
                </div>

                <button class="live-info__squard-btn absolute left-0 top-0 ">
                </button>
              </div>
              <div class="w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200 ">
                <div class="">
                  <p class="text-black font-semibold">
                    Piso 6<br>
                    602<br>
                    Vista calle
                  </p>
                </div>
              </div>
              <div class="w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">1</p>
                </div>
              </div>
              <div
                class="w-2/6 md:w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">
                    Techada 46.24 m2<br>
                    Ocupada 46.24 m2
                  </p>
                </div>
              </div>
              <div class="w-1/6 py-2 text-center flex  justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">
                    S/317,862.94 <br>
                    $92,942.38
                  </p>
                </div>
              </div>
            </div>
            <!-- plano fila end -->
            <!-- plano fila start 30 -->
            <div class="live-info__squard w-full flex flex-nowrap ">
              <div
                class="live-info__squard-plane relative w-1/6 md:w-2/6 py-1 text-center border-r border-white flex  justify-center items-center bg-gray-200">
                <div class="live-info__squard-plane-img-wrap text-center">
                  <img class="live-info__squard-plane-img h-220 w-auto" src="img/planos/603.png"
                    data-print="img/prints/plano-603.png" alt="">
                </div>

                <button class="live-info__squard-btn absolute left-0 top-0 ">
                </button>
              </div>
              <div class="w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200 ">
                <div class="">
                  <p class="text-black font-semibold">
                    Piso 6 <br>
                    603 <br>
                    Vista calle
                  </p>
                </div>
              </div>
              <div class="w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">3</p>
                </div>
              </div>
              <div
                class="w-2/6 md:w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">
                    Techada 101.04 m2<br>
                    Ocupada 101.04 m2
                  </p>
                </div>
              </div>
              <div class="w-1/6 py-2 text-center flex  justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">
                    S/666,924.69<br>
                    $195,007.22
                  </p>
                </div>
              </div>
            </div>
            <!-- plano fila end -->


            <!-- plano fila start 31 -->
            <div class="live-info__squard w-full flex flex-nowrap ">
              <div
                class="live-info__squard-plane relative w-1/6 md:w-2/6 py-1 text-center border-r border-white flex  justify-center items-center bg-gray-200">
                <div class="live-info__squard-plane-img-wrap text-center">
                  <img class="live-info__squard-plane-img h-220 w-auto" src="img/planos/604.png"
                    data-print="img/prints/plano-604.png" alt="">
                </div>

                <button class="live-info__squard-btn absolute left-0 top-0 ">
                </button>
              </div>
              <div class="w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200 ">
                <div class="">
                  <p class="text-black font-semibold">
                    Piso 6<br>
                    604<br>
                    Vista interior
                  </p>
                </div>
              </div>
              <div class="w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">3</p>
                </div>
              </div>
              <div
                class="w-2/6 md:w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">
                    Techada 90.77 m2<br>
                    Ocupada 90.77 m2
                  </p>
                </div>
              </div>
              <div class="w-1/6 py-2 text-center flex  justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">
                    S/568,092.40 <br>
                    $166,108.89
                  </p>
                </div>
              </div>
            </div>
            <!-- plano fila end -->
            <!-- plano fila start 32 -->
            <div class="live-info__squard w-full flex flex-nowrap ">
              <div
                class="live-info__squard-plane relative w-1/6 md:w-2/6 py-1 text-center border-r border-white flex  justify-center items-center bg-gray-200">
                <div class="live-info__squard-plane-img-wrap text-center">
                  <img class="live-info__squard-plane-img h-220 w-auto" src="img/planos/505.png"
                    data-print="img/prints/plano-605.png" alt="">
                </div>

                <button class="live-info__squard-btn absolute left-0 top-0 ">
                </button>
              </div>
              <div class="w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200 ">
                <div class="">
                  <p class="text-black font-semibold">
                    Piso 6<br>
                    605<br>
                    Vista interior
                  </p>
                </div>
              </div>
              <div class="w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">1</p>
                </div>
              </div>
              <div
                class="w-2/6 md:w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">
                    Techada 44.10 m2<br>
                    Ocupada 44.10 m2
                  </p>
                </div>
              </div>
              <div class="w-1/6 py-2 text-center flex  justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">
                    S/288,069.58<br>
                    $84,230.87
                  </p>
                </div>
              </div>
            </div>
            <!-- plano fila end -->
            <!-- plano fila start 33 -->
            <div class="live-info__squard w-full flex flex-nowrap ">
              <div
                class="live-info__squard-plane relative w-1/6 md:w-2/6 py-1 text-center border-r border-white flex  justify-center items-center bg-gray-200">
                <div class="live-info__squard-plane-img-wrap text-center">
                  <img class="live-info__squard-plane-img h-220 w-auto" src="img/planos/606.png"
                    data-print="img/prints/plano-606.png" alt="">
                </div>

                <button class="live-info__squard-btn absolute left-0 top-0 ">
                </button>
              </div>
              <div class="w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200 ">
                <div class="">
                  <p class="text-black font-semibold">
                    Piso 6<br>
                    606<br>
                    Vista interior
                  </p>
                </div>
              </div>
              <div class="w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">3</p>
                </div>
              </div>
              <div
                class="w-2/6 md:w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">
                    Techada 85.08 m2<br>
                    Ocupada 85.08 m2
                  </p>
                </div>
              </div>
              <div class="w-1/6 py-2 text-center flex  justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">
                    S/532,481.00<br>
                    $155,696.20
                  </p>
                </div>
              </div>
            </div>
            <!-- plano fila end -->
            <!-- plano fila start 34 agregado -->
            <div class="live-info__squard w-full flex flex-nowrap ">
              <div
                class="live-info__squard-plane relative w-1/6 md:w-2/6 py-1 text-center border-r border-white flex  justify-center items-center bg-gray-200">
                <div class="live-info__squard-plane-img-wrap text-center py-2">
                  <img class="live-info__squard-plane-img h-220 w-auto" src="img/planos/701.png"  data-print="img/prints/plano-701.png"  alt="Departamento 701">  
                </div>

                <button class="live-info__squard-btn absolute left-0 top-0 ">
                </button>
              </div>
              <div class="w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200 ">
                <div class="">
                  <p class="text-black font-semibold">
                    Piso 7<br>
                    701<br>
                    Vista calle
                  </p>
                </div>
              </div>
              <div class="w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">3</p>
                </div>
              </div>
              <div
                class="w-2/6 md:w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">
                    Techada 189.11 m2<br>
                    Terraza 72.42 m2 <br>
                    Ocupada 261.53 m2
                  </p>
                </div>
              </div>
              <div class="w-1/6 py-2 text-center flex  justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">
                    S/1,081,587.62<br>
                    $316,253.69
                  </p>
                </div>
              </div>
            </div>
            <!-- plano fila end -->
            <!-- plano fila start 35 -->
            <div class="live-info__squard w-full flex flex-nowrap ">
              <div
                class="live-info__squard-plane relative w-1/6 md:w-2/6 py-1 text-center border-r border-white flex  justify-center items-center bg-gray-200">
                <div class="live-info__squard-plane-img-wrap text-center">
                  <img class="live-info__squard-plane-img h-220 w-auto" src="img/planos/702.png"
                    data-print="img/prints/plano-702.png" alt="">
                </div>

                <button class="live-info__squard-btn absolute left-0 top-0 ">
                </button>
              </div>
              <div class="w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200 ">
                <div class="">
                  <p class="text-black font-semibold">
                    Piso 7<br>
                    702<br>
                    Vista interior
                  </p>
                </div>
              </div>
              <div class="w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">3</p>
                </div>
              </div>
              <div
                class="w-2/6 md:w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">
                    Techada 80.13 m2<br>
                    Terraza 8.35 m2<br>
                    Patio 2.28 m2<br>
                    Ocupada 90.76 m2
                  </p>
                </div>
              </div>
              <div class="w-1/6 py-2 text-center flex  justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">
                    S/501,133.46<br>
                    $ 146,530.25
                  </p>
                </div>
              </div>
            </div>
            <!-- plano fila end -->

            <!-- plano fila start 36 -->
            <div class="live-info__squard w-full flex flex-nowrap ">
              <div
                class="live-info__squard-plane relative w-1/6 md:w-2/6 py-1 text-center border-r border-white flex  justify-center items-center bg-gray-200">
                <div class="live-info__squard-plane-img-wrap text-center">
                  <img class="live-info__squard-plane-img h-220 w-auto" src="img/planos/703.png"
                    data-print="img/prints/plano-703.png" alt="Departamento 703">
                </div>

                <button class="live-info__squard-btn absolute left-0 top-0 ">
                </button>
              </div>
              <div class="w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200 ">
                <div class="">
                  <p class="text-black font-semibold">
                    Piso 7<br>
                    703<br>
                    Vista interior
                  </p>
                </div>
              </div>
              <div class="w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">3</p>
                </div>
              </div>
              <div
                class="w-2/6 md:w-1/6 py-2 text-center flex border-r border-white justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">
                    Techada 74.75 m2<br>
                    Terraza 8.27 m2<br>
                    Patio 2.06 m2<br>
                    Ocupada 85.08 m2
                  </p>
                </div>
              </div>
              <div class="w-1/6 py-2 text-center flex  justify-center items-center bg-gray-200">
                <div>
                  <p class="text-black font-semibold">
                    S/468,233.40<br>
                    $136,910.35
                  </p>
                </div>
              </div>
            </div>
            <!-- plano fila end -->

          </div>
        </div>
      </div>
    </div>

  </div>
  <div class="container">
    <div class="live-description text-dark mt-6">
      <h1 class="font-bold py-3 px-3 md:px-6 text-sm sm:text-xl tracking-widest text-center"> Estacionamiento Simple
        $11,200.00 / S/38,304.00 Depósitos desde $840.00 / S/2,872.80</h1>
      <p class=" text-sm sm:text-base mt-5 text-black">Precio referencial incluye IGV. Disponible hasta agotar los
        departamentos, estacionamientos o depósitos y es sujeto a
        cambios. Tipo de cambio referencial de S/3.42, la venta se realizará en dólares al tipo de cambio vigente del
        día.</p>
    </div>
  </div>





  <div class="location mt-20" id="ubicacion">
    <div class="container">
      <div class="flex flex-wrap">
        <div class="w-full md:w-1/2 pr-0 sm:pr-10 lg:pr-40">
          <h2 class=" text-lg sm:text-4xl font-bold akrobat  md:mt-16">UBICACIÓN INMEJORABLE A UN PASO DE SAN ISIDRO
          </h2>
          <p class="text-base sm:text-xl mt-5">
            <strong>El Edificio RUTTE1</strong>
            <br> cuenta con una ubicación privilegiada y estratégica, muy cerca de avenidas principales como son Javier
            Prado Oeste, Av. Brasil y Av. Pershing.</p>
          <p class="text-base sm:text-xl mt-3">
            A solo 10 minutos de la Costa Verde y del Centro Comercial Real Plaza Salaverry. Rodeado de parques y cerca de los
            principales restaurantes,
            supermercados, centros de entretenimiento, centros educativos, bancos y más. ¡Vive cerca de todo lo que te
            gusta!
          </p>
        </div>
        <div class="w-full md:w-1/2 mt-8 md:mt-0">
          <iframe class="w-full h-256 sm:h-600 md:h-full" class="mapaGoogle w_100 w_55_desktop"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.30438944382!2d-77.062392228287!3d-12.091302045529366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c9a94286d6b1%3A0x3de1973a14debc82!2sRodolfo+Rutte+642%2C+Lima+15076!5e0!3m2!1ses-419!2spe!4v1553845830198!5m2!1ses-419!2spe"
            frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
  <div class="institutions mt-20">
    <div class="container">
      <div class="flex flex-wrap">
        <div class="w-2/4 md:w-3/6 lg:w-1/6 mb-5 lg:mb-0 flex items-center" data-aos="fade-up" data-aos-delay="100">
          <img src="img/institutions/restaurantes.svg" alt="restaurantes" />
          <p>Restaurantes</p>
        </div>
        <div class="w-2/4 md:w-3/6 lg:w-1/6 mb-5 lg:mb-0 flex items-center" data-aos="fade-up" data-aos-delay="200">
          <img src="img/institutions/bancos.svg" alt="bancos" />
          <p>Bancos</p>
        </div>
        <div class="w-2/4 md:w-3/6 lg:w-1/6 mb-5 lg:mb-0 flex items-center" data-aos="fade-up" data-aos-delay="300">
          <img src="img/institutions/tiendas.svg" alt="tiendas" />
          <p>Tiendas</p>
        </div>
        <div class="w-2/4 md:w-3/6 lg:w-1/6 mb-5 lg:mb-0 flex items-center" data-aos="fade-up" data-aos-delay="400">
          <img src="img/institutions/colegios.svg" alt="colegios" />
          <p>Colegios</p>
        </div>
        <div class="w-2/4 md:w-3/6 lg:w-1/6 mb-5 lg:mb-0 flex items-center" data-aos="fade-up" data-aos-delay="500">
          <img src="img/institutions/parques.svg" alt="parques" />
          <p>Parques</p>
        </div>
        <div class="w-2/4 md:w-3/6 lg:w-1/6 mb-5 lg:mb-0 flex items-center" data-aos="fade-up" data-aos-delay="600">
          <img src="img/institutions/centros-salud.svg" alt="centros de salud" />
          <p>Centros de salud</p>
        </div>
      </div>
    </div>
  </div>

  <div class="contact bg-medium mt-16 py-10" id="contacto">
    <div class="container ">
      <div class="contact-form-wrap flex flex-wrap">
        <div class="w-full md:w-1/2">
          <h1 class="akrobat text-white text-2xl">Ingresa tus datos y en breve te atenderemos</h1>
          <form id="form" action="<?=$_SERVER['PHP_SELF']?>" method="post" class="form mt-4 pr-0 lg:pr-30 ">
            <div class="form-group">
              <label for="name">Nombres y apellidos</label>
              <input type="text" class="name" id="name" name="name" required>
            </div>
            <div class="flex flex-wrap mt-5">
              <div class="form-group w-full  sm:w-2/3 pr-0 sm:pr-5">
                <label for="email">E-mail</label>
                <input type="email" class="gmail" id="email" name="email" required>
              </div>
              <div class="form-group w-full mt-5  sm:mt-0 sm:w-1/3">
                <label for="phone">Teléfono</label>
                <input type="tel" class="phone" maxlength="9" id="phone" name="phone" required>
              </div>
            </div>
            <div class="form-group mt-5">
              <label for="message">Mensaje</label>
              <textarea class="w-full h-128 mt-2 p-2 " class="message" id="message" name="message" required></textarea>
            </div>
            <div class="mt-5  text-left sm:text-right ">
              <button type="submit" class=" w-full sm:w-auto btn btn-send bg-jade">ENVIAR</button>
            </div>
          </form>
          <div id="orm-message" class="form-message hidden">
            <div class="flex mt-8 rounded overflow-hidden ">
              <div class=" bg-green-500 p-4 flex items-center">
                <i class=" text-white fas fa-check"></i>
              </div>
              <div class=" bg-white py-2 px-6 text-green-500 ">
                <p class="block text-xs md:text-base">¡Gracias por contactarnos! Estaremos en contacto con usted en
                  breve.</p>
              </div>
            </div>
          </div>
          <?php 
              // $mensaje="Mensaje del formulario de contacto de nmespacios.com";
              // $mensaje.= "\nNombre y Apellidos ". $_POST['name'];
              // $mensaje.= "\nEmail: ".$_POST['email'];
              // $mensaje.= "\nTelefono: ". $_POST['phone'];
              // $mensaje.= "\nMensaje: \n".$_POST['message'];
              // $destino= "wphfrontend@gmail.com";
              // $remitente = $_POST['email'];
              // $asunto = "Mensaje enviado por: ".$_POST['name'];
              // mail($destino,$asunto,$mensaje,"FROM: $remitente");
            ?>
        </div>
        <div class="w-full md:w-1/2">
          <div class="pl-0 md:pl-10 lg:pl-20">
            <h1 class="akrobat text-xl sm:text-4xl text-white mt-20 font-bold">COMUNÍCATE CON NOSOTROS</h1>
            <p class="text-white text-sm md:text-lg lg:text-xl font-thin mt-2">informes@nuevomundoespacios.com.pe</p>
            <p class="text-white tracking-widest middle mt-2"> <img class="h-24 inline-block mr-3 middle"
                src="img/svg/cellphone.png" alt=""> 913 050 272</p>
            <p class="text-white tracking-widest middle mt-2"><img class="h-24 inline-block mr-3 middle "
                src="img/svg/phone.png" alt="">(01) 624 3601</p>
            <h1 class="akrobat text-xl sm:text-3xl  text-white font-bold mt-5"> VISITA LA SALA DE VENTAS</h1>
            <p class="text-white text-lg md:text-xl font-thin leading-none">Rodolfo Rutte 650 Magdalena</p>
            <a class="text-blue-300 text-sm" href="#ubicacion">VER MAPA</a>
          </div>
        </div>
      </div>
      <p class="text-sm text-white tracking-wide mt-5 text-thin">NUEVO MUNDO ESPACIOS te recuerda que tus datos
        personales están incorporados en su banco de datos de “Clientes” y que son
        utilizados para identificarte y/o atender tus consultas, comentarios, peticiones, reclamos u otros
        requerimientos y actualizar
        tu información personal, relacionados a la(s) unidad(es) inmobiliaria(s) que separaste o adquiriste de la
        empresa, hasta
        que nos manifiestes tu voluntad de no continuar con el uso de tus datos, según nuestra <a
          href="<?=$ruta_web ?>politica-privacidad-web" class="text-blue-300">POLÍTICAS DE PRIVACIDAD WEB</a></p>
      <p class="text-sm text-white tracking-wide mt-5 text-thin">Al hacer clic en “ENVIAR” otorgo mi <a
          href="<?=$ruta_web ?>uso-datos-personales" class="text-blue-300">CONSENTIMIENTO INFORMADO </a>y declaro que
        conozco las <a href="<?=$ruta_web ?>politica-privacidad-web" class="text-blue-300">POLÍTICAS DE PRIVACIDAD
          WEB</a> de NUEVO
        MUNDO ESPACIOS.</p>
    </div>
  </div>

  <div class="projects mt-10" id="nosotros">
    <div class="container">
      <div class="projects-description mt-8 text-dark mb-4">
        <div>
          <h1 class=" text-xl sm:text-2xl md:text-4xl font-bold akrobat inline-block leading-tight">PROYECTOS DESTACADOS
            <span class="text-lg md:text-2xl">Más de 160 mil mt2 construidos</span>
          </h1>
        </div>
        <p class=" text-base sm:text-lg md:text-xl mt-5"> El Grupo Nuevo Mundo Inmobiliaria cuenta con la experiencia de
          más de 14 años en la gestión, promoción, gerencia de proyectos y administración de centros empresariales y
          hoteles, lo que nos permite ofrecer hoy, departamentos con espacios que cubran las expectativas y exigencias
          del mercado.</p>
      </div>
      <div class="px-2">
        <div class="flex flex-wrap -mx-1 mb-2">
          <div class="w-1/2 sm:w-1/2 md:w-1/3 px-1 mb-2">
            <div class="bg-gray-400   " data-aos="zoom-in" data-aos-delay="500" data-aos-duration="800">
              <img class="w-full" src="img/projects/proyectosant-01.png" alt="">
            </div>
          </div>
          <div class="w-1/2 sm:w-1/2 md:w-1/3 px-1 mb-2 " data-aos="zoom-in" data-aos-delay="500"
            data-aos-duration="800">
            <div class="bg-gray-500  ">
              <img class="w-full" src="img/projects/proyectosant-02.png" alt="">
            </div>
          </div>
          <div class="w-1/2 sm:w-1/2 md:w-1/3 px-1 mb-2 " data-aos="zoom-in" data-aos-delay="500"
            data-aos-duration="800">
            <div class="bg-gray-400  ">
              <img class="w-full" src="img/projects/proyectosant-03.png" alt="">
            </div>
          </div>
          <div class="w-1/2 sm:w-1/2 md:w-1/3 px-1 mb-2 sm:mb-0 " data-aos="zoom-in" data-aos-delay="500"
            data-aos-duration="800">
            <div class="bg-gray-400  ">
              <img class="w-full " src="img/projects/proyectosant-04.png " alt=" ">
            </div>
          </div>
          <div class="w-1/2 sm:w-1/2 md:w-1/3 px-1 mb-2 sm:mb-0 " data-aos="zoom-in" data-aos-delay="500"
            data-aos-duration="800">
            <div class="bg-gray-500  ">
              <img class="w-full" src="img/projects/proyectosant-05.png" alt="">
            </div>
          </div>
          <div class="w-full xs:w-1/2 sm:w-1/2 md:w-1/3 px-1 mb-2 sm:mb-0 flex items-end" data-aos="zoom-in"
            data-aos-delay="500" data-aos-duration="800">
            <div class=" p-2 sm:p-4 md:p-8 text-sm sm:text-xs md:text-base text-dark ">
              <p>
                <strong>1.</strong> Centro Empresarial Miraflores - CEM I
                <br>
                <strong>2.</strong> Centro Empresarial Miraflores - CEM II
                <br>
                <strong>3.</strong> Centro Empresarial Miraflores - CEM III
                <br>
                <strong>4.</strong> Centro Empresarial Miraflores - CEM IV
                <br>
                <strong>5.</strong> NM Lima Hotel</p>
            </div>
          </div>
        </div>
      </div>
 
    </div>
  </div>
 <!-- <div class="" id="prueba"><img class="live-info__squard-plane-img h-220 w-auto" src="img/plano-102.png" alt="dedw"></div> -->
 
<!-- <button type="button" onclick="javascript:imagePrint();">Imprimir</button> -->

  <?php include 'includes/footer.php' ?>


  <script src="<?= $ruta_web ?>dist/js/jquery-3.3.1.min.js"></script>
  <script src="<?= $ruta_web ?>dist/js/parallax.min.js"></script>
  <script src="<?= $ruta_web ?>dist/js/slick.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script>

  <script src="<?= $ruta_web ?>dist/js/ready.js"></script>

  <script src="<?= $ruta_web ?>dist/owl/owl.carousel.min.js"></script>
  <script src="<?= $ruta_web ?>dist/js/aos.js"></script>
  <script src="dist/js/app.js"></script>


  <script>
    $('.owl-carousel').owlCarousel({
      margin: 0,
      loop: true,
      items: 1,
      autoplay: true,
      autoplayTimeout: 4000,
      autoplayHoverPause: true,
      dots: false 
    })

    AOS.init({
      once: true,
    });

 
    // $("#print-plan").click(function (e) {
    //   var mywindow = window.open('', 'PRINT', 'height=400,width=600');
    //   mywindow.document.write('<html><head>');
    //   mywindow.document.write('<style> body{ text-align:center;display:flex; align-items:center;justify-content:center;} img{ text-align-center; width:60%;}</style>');
    //   mywindow.document.write('</head><body >');  
    //   mywindow.document.write(document.getElementById('live-modal-img').innerHTML);
    //   mywindow.document.write('</body></html>');
    //   mywindow.document.close(); // necesario para IE >= 10
    //   mywindow.focus(); // necesario para IE >= 10
    //   // mywindow.print();
    //   // mywindow.close();
    //   return true;
    //}) 

function imagePrint(){
    var mywindow = window.open('', 'PRINT', 'height=1000,width=700,left=100, top=50');
        mywindow.document.write('<html><head>');
      mywindow.document.write('<style>.tabla{width:100%;border-collapse:collapse;margin:16px 0 16px 0;}.tabla th{border:1px solid #ddd;padding:4px;background-color:#d4eefd;text-align:left;font-size:15px;}.tabla td{border:1px solid #ddd;text-align:left;padding:6px;} img{width:600px;} body{ display:flex; justify-content:center; align-items:center; }  </style>');
        mywindow.document.write('</head><body >');
        mywindow.document.write(document.getElementById('live-modal-img').innerHTML);
        mywindow.document.write('</body></html>');
        mywindow.document.close(); // necesario para IE >= 10 
        mywindow.focus(); // necesario para IE >= 10
        mywindow.print();
        mywindow.close();
    return true;
  
} 
  

    $('.gallery').slick({
      dots: false,
      infinite: false,
      speed: 300,
      slidesToShow: 3,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            dots: true
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true

          }
        }
      ]
    });
  </script>
</body>

</html>