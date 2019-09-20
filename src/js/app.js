

(function (d) {

    let navToggle = d.getElementById('nav-toggle')
    let nav = d.getElementById('nav')


    navToggle.addEventListener('click', () => {
        nav.classList.toggle('hidden')
        d.getElementById('header-wrap').classList.toggle('h-auto')
    }) 

   function closeNav(){
       nav.classList.add('nav--close')
   }


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


})(document);





