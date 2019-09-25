 

    // Shorthand 
    const  Id =  document.getElementById.bind(document)
    const  className =  document.getElementsByClassName.bind(document) 
    const  tagName =  document.getElementsByTagName.bind(document) 
 
  // Toggle and Menu 
    let navToggle = Id('nav-toggle')
    let nav = Id('nav') 

    navToggle.addEventListener('click', () => {
      navToggle.classList.toggle('nav-toggle-active') 
      nav.classList.toggle('nav-active') 
     
    })  
    
    Id('menu').addEventListener('click',(e)=>{ 
          nav.classList.toggle('nav-active') 
          navToggle.classList.toggle('nav-toggle-active') 
    }) 

    // Gallery Modal 
    const gallerModalWrap = Id('gallery-modal-wrap') 
   
    $("#gallery").click(function (e) {
      let src = e.target.currentSrc
      if(src !== undefined){  
        Id('gallery-modal-img').innerHTML = `<img src="${src}">`
        Id('gallery-modal-caption').innerHTML = `<p>${ e.target.dataset.caption}</p>`
        gallerModalWrap.classList.add('gallery-modal-show')  
        
      }else{
        return;
      }  
    });
    // Close Modal Gallery
    Id('gallery-modal__btn').addEventListener('click', () => {
        gallerModalWrap.classList.remove('gallery-modal-show')
    }) 
    Id('gallery-modal-wrap').addEventListener('click', (e) => { 
        const parentID = e.target.parentNode.parentNode.id 
        if (parentID !== 'gallery-modal'){
            gallerModalWrap.classList.remove('gallery-modal-show') 
        } else{
            return;
        }  
    })

   
 
    // Plano Modal
    $(".live-info__squard-plane-img-wrap").click(function (e) { 
            let src = e.target.currentSrc || e.target.children[0].src  
            if (src !== undefined ) {
            Id('live-modal-img').innerHTML = `<img src="${src}">` 
            Id('live-modal-wrap').classList.add('live-modal-show')  
            } else {
            return;
            }
    });
    // Close Modal Plano
    Id('live-modal__btn').addEventListener('click', () => {
        Id('live-modal-wrap').classList.remove('live-modal-show')
    }) 


    Id('live-modal-wrap').addEventListener('click', (e) => {
        const parentID = e.target.parentNode.id 
        if (parentID !== 'live-modal-img' && e.target.id !== 'live-modal-img' ) {
            Id('live-modal-wrap').classList.remove('live-modal-show')
        } else {
            return;
        }
    })


   

    let formMessage = Id('form-message')
    let form = Id('form') 
    $("form").submit(function (event) {
        if ($("input").first().val() === "") {  
            return;
        } 
        // event.preventDefault(); 
        $(".form-message").show().fadeOut(6000);    
    });

      // Elimina el hash de los links

    $('a[href*="#"]') 
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

