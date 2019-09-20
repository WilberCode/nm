 

(function (d) {

    let navToggle = d.getElementById('nav-toggle')
    let nav = d.getElementById('nav')


    navToggle.addEventListener('click', () => {
      navToggle.classList.toggle('nav-toggle-active') 
      nav.classList.toggle('nav-active') 
    }) 

    let menu =   d.getElementById('menu')
    menu.addEventListener('click',(e)=>{ 
          nav.classList.toggle('nav-active') 
          navToggle.classList.toggle('nav-toggle-active') 
    }) 
    showModal = (element) => {
        let img = element.getElementsByTagName('img')[0].src;
        let caption = element.getElementsByTagName('img')[0].dataset.caption;
        d.getElementById('imageModal').innerHTML = '<img src="' + img + '">';
        d.getElementById('captionModal').innerHTML = '<p>' + caption + '</p>';

        d.getElementsByClassName('wrappModal')[0].classList.add('showModal');
        d.getElementsByClassName('overflow')[0].classList.add('showModalWrapp');
    }

    closeModal = () => {
        d.getElementsByClassName('wrappModal')[0].classList.remove('showModal');
        d.getElementsByClassName('overflow')[0].classList.remove('showModalWrapp');
    }

    // Plano Modal
    showModalPlano = (element) => {
        let img = element.getElementsByTagName('img')[0].src;
        d.getElementById('live-modal__img').innerHTML = '<img src="' + img + '">';

        d.getElementById('live-modal-wrap').classList.add('live-modal-wrap-active');
        d.getElementsByClassName('overflow_plano')[0].classList.add('show-modal-wrapp');
    }

    closeModalPlano = () => {
        d.getElementById('live-modal-wrap').classList.remove('live-modal-wrap-active');
        d.getElementsByClassName('overflow_plano')[0].classList.remove('show-modal-wrapp');
    } 

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
})(document);





