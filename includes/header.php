<header class="header shadow w-full h-auto  ">
<div id="header-wrap" class=" bg-white relative flex flex-wrap justify-between container h-105  lg:h-105">
  <div class="logo relative z-50">
     <a href="<?=$ruta_web ?>">
      <img src="<?= $ruta_web ?>img/logo_header_nmespacios.png" alt="Nm espacios"  />
    </a>
  </div>
  <div class="nav-toggle-wrap block lg:hidden mt-4 lg:mt-0 h-48 absolute z-50">
    <button  id="nav-toggle" class="nav-toggle focus:outline-none border-none"> 
        <span ></span> 
        <span ></span> 
        <span ></span> 
        <span ></span> 
        <span ></span> 
        <span ></span>  
    </button>
  </div>
  <nav id="nav" class="nav z-40  absolute lg:relative w-full lg:w-auto lg:flex  justify-end lg:items-center   h-auto lg:h-105 ">
    <?php if (isset($menu_interior) && $menu_interior = 1) {?>
      <a href="<?=$ruta_web ?>" class="link_home_img"><img src="<?=$ruta_web ?>img/home.png" class="home_img w-10 "></a>
    <?php } ?>
    <ul id="menu" class="menu w-full lg:flex  justify-end lg:items-center  lg:w-auto first-medium">
      <li class="menu-item"><a class="menu__link lg:px-4  lg:inline-block" href="<?= $ruta_web ?>#ubicacion">UBICACIÓN</a></li> 
      <li class="menu-item"><a class="menu__link lg:px-4  lg:inline-block" href="<?= $ruta_web ?>#contacto">CONTACTO</a></li>
      <li class="menu-item"><a class="menu__link lg:px-4  lg:inline-block" href="<?= $ruta_web ?>#departamentos">DEPARTAMENTOS</a></li>
      <li class="menu-item"><a class="menu__link lg:px-4  lg:inline-block" href="<?= $ruta_web ?>#transparencia">TRANSPARENCIA</a></li>
      <li class="menu-item"><a class="menu__link lg:px-4  lg:inline-block" href="<?= $ruta_web ?>#nosotros">NOSOTROS</a></li>
    </ul>
  </nav>
</div> 
</header> 
<div class="w-full encabezado-home relative z-10 flex justify-end parallax-window  py-6" data-parallax="scroll" data-image-src="<?= $ruta_web ?>img/bg-encabezado.jpg">
<h1  data-aos="fade-left" data-aos-anchor="#example-anchor" data-aos-offset="500" data-aos-duration="500" class="w-full md:max-w-lg  text-center md:text-left py-3 px-5">MAGDALENA RUTTE
  <span>1</span>
</h1>
</div>