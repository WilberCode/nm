  
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
        $("body").css('overflow-y','hidden');
      }else{
        return;
      }  
    });
    // Close Modal Gallery  
    $("#gallery-modal__btn").click(function (e) { 
        gallerModalWrap.classList.remove('gallery-modal-show')
        $("body").css('overflow-y','auto');
    })  
    $("#gallery-modal-wrap").click(function (e) { 
      const parentID = e.target.parentNode.parentNode.id 
      if (parentID !== 'gallery-modal'){
          gallerModalWrap.classList.remove('gallery-modal-show') 
          $("body").css('overflow-y','auto');
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
            Id('departamentos').classList.add('live-no-scroll')      
            $("body").css('overflow-y','hidden');
            } else {
            return;
            }
    });
    // Close Modal Plano 
    $("#live-modal__btn").click(function (e) { 
        Id('live-modal-wrap').classList.remove('live-modal-show')
        Id('departamentos').classList.remove('live-no-scroll')
        $("body").css('overflow-y','auto');

    }) 

 
     $("#live-modal-wrap").click(function (e) { 
        const parentID = e.target.parentNode.id 
        if (parentID !== 'live-modal-img' && e.target.id !== 'live-modal-img' ) {
            Id('live-modal-wrap').classList.remove('live-modal-show')
            $("body").css('overflow-y','auto');
        } else {
            return;
        }
    })


   

    let formMessage = Id('form-message')
    let form = Id('form') 

    let currentHostname = window.location.href
    $("form").submit(function (event) {
        if ($("input").first().val() === "") {  
            return;
        } 
        reloadPage(event)
        event.preventDefault(); 
        console.log(event)
        $(".form-message").show().fadeOut(6000);    
    });
    function reloadPage(e){  
        setTimeout(() => { 
            e.target.submit(()=>{ 
              console.log('enviado!')
            })   
            $("#form :input").each(function(){
              $(this).val('')
            } )
            window.location.replace(currentHostname)
        }, 5000)
       
    } 
    

      // Elimina el hash de los links

    $('a[href*="#"]') 
        .not('[href="#"]')
        .not('[href="#0"]')
        // .not('[href="index.php"]')
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

