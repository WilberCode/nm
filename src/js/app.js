// import {id as Id,ale} from './helpers'
//  import {nav} from './menu.js'

    const  Id =  document.getElementById.bind(document)
    const  className =  document.getElementsByClassName.bind(document) 
    const  tagName =  document.getElementsByTagName.bind(document) 
 
  // Toggle and Menu
    let d =  document
    let navToggle = Id('nav-toggle')
    let nav = Id('nav') 

    navToggle.addEventListener('click', () => {
      navToggle.classList.toggle('nav-toggle-active') 
      nav.classList.toggle('nav-active') 
     
    })  

    let menu =   Id('menu')
    menu.addEventListener('click',(e)=>{ 
          nav.classList.toggle('nav-active') 
          navToggle.classList.toggle('nav-toggle-active') 
    }) 

    // Gallery Modal
    // const slider  =  Id('gallery')
    const gallerModalWrap = Id('gallery-modal-wrap') 
    Id('gallery-modal__btn').addEventListener('click',()=>{
      gallerModalWrap.classList.remove('gallery-modal-show')
    }) 
    $("#gallery").click(function (e) {
      let src = e.target.currentSrc
      if(src !== undefined){  
        Id('gallery-modal-img').innerHTML = `<img src="${src}">`
        Id('gallery-modal-caption').innerHTML = `<p>${ e.target.dataset.caption}</p>`
        gallerModalWrap.classList.add('gallery-modal-show') 
        console.log(e.target.currentSrc)
        
      }else{
        return;
      }  
    });
   
 
    // Plano Modal
$(".live-info__squard-plane-img-wrap").click(function (e) { 
    let src = e.target.currentSrc || e.target.children[0].src 
          
        if (src !== undefined ) {
          Id('live-modal-img').innerHTML = `<img src="${src}">` 
          Id('live-modal-wrap').classList.add('live-modal-show') 
          document.rootElement.style.overflowX = "hidden" 
        } else {
          return;
        }
      });
Id('live-modal__btn').addEventListener('click', () => {
    Id('live-modal-wrap').classList.remove('live-modal-show')
    }) 


    
    // showModalPlano = (element) => {
    //     let img = element.getElementsByTagName('img')[0].src;
    //     Id('live-modal__img').innerHTML = '<img src="' + img + '">';

    //     Id('live-modal-wrap').classList.add('live-modal-wrap-active');
    //     className('overflow_plano')[0].classList.add('show-modal-wrapp');
    // }

    // closeModalPlano = () => {
    //     Id('live-modal-wrap').classList.remove('live-modal-wrap-active');
    //     className('overflow_plano')[0].classList.remove('show-modal-wrapp');
    // } 
 

    let formMessage = Id('form-message')
    let form = Id('form') 
    $("form").submit(function (event) {
        if ($("input").first().val() === "") {  
            return;
        } 
        // event.preventDefault(); 
        $(".form-message").show().fadeOut(6000);    
    });
     

    $('a[href*="#"]')
        // Remove links that don't actually link to anything
        .not('[href="#"]')
        .not('[href="#0"]')
        .click(function (event) {
            // On-page links
            if (
                location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
                &&
                location.hostname == this.hostname
            ) {
                // Figure out element to scroll to
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                // Does a scroll target exist?
                if (target.length) {
                    // Only prevent default if animation is actually gonna happen
                    event.preventDefault();
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000, function () {
                        // Callback after animation
                        // Must change focus!

                    });
                }
            }
        }); 

