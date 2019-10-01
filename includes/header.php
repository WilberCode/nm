 <header class="header shadow w-full h-auto  ">
        <div id="header-wrap" class=" bg-white relative flex flex-wrap justify-between container h-105  lg:h-105">
          <div class="logo relative z-50">
             <a href="<?= $ruta_web ?>">
              <img src="img/logonm.png" alt="Logo nm espacios" />
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
          <ul id="menu" class="menu w-full lg:flex  justify-end lg:items-center  lg:w-auto first-medium">
            <li class="menu-item"><a class="menu__link lg:px-4  lg:inline-block" href="<?= $ruta_web ?>/#ubicacion">UBICACIÓN</a></li> 
            <li class="menu-item"><a class="menu__link lg:px-4  lg:inline-block" href="<?= $ruta_web ?>/#contacto">CONTACTO</a></li>
            <li class="menu-item"><a class="menu__link lg:px-4  lg:inline-block" href="<?= $ruta_web ?>/#departamentos">DEPARTAMENTOS</a></li>
            <li class="menu-item"><a class="menu__link lg:px-4  lg:inline-block" href="<?= $ruta_web ?>/#transparencia">TRANSPARENCIA</a></li>
            <li class="menu-item"><a class="menu__link lg:px-4  lg:inline-block" href="<?= $ruta_web ?>/#nosotros">NOSOTROS</a></li>
          </ul>
        </nav>
        </div> 
      </header> 