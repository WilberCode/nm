export const slider = ()=>{ 
  showModal = (element) => {
      let img = element.getElementsByTagName('img')[0].src;
      let caption = element.getElementsByTagName('img')[0].dataset.caption;
      id('imageModal').innerHTML = '<img src="' + img + '">';
      id('captionModal').innerHTML = '<p>' + caption + '</p>';

      className('wrappModal')[0].classList.add('showModal');
      className('overflow')[0].classList.add('showModalWrapp');
  }

  closeModal = () => {
      className('wrappModal')[0].classList.remove('showModal');
      className('overflow')[0].classList.remove('showModalWrapp');
  }
}
