"use strict";function reloadPage(e){setTimeout(function(){e.target.submit(function(){console.log("enviado!")}),$("#form :input").each(function(){$(this).val(""),window.location.replace(currentHostname)})},5e3)}var Id=document.getElementById.bind(document),className=document.getElementsByClassName.bind(document),tagName=document.getElementsByTagName.bind(document),navToggle=Id("nav-toggle"),nav=Id("nav");navToggle.addEventListener("click",function(){navToggle.classList.toggle("nav-toggle-active"),nav.classList.toggle("nav-active")}),Id("menu").addEventListener("click",function(e){nav.classList.toggle("nav-active"),navToggle.classList.toggle("nav-toggle-active")});var gallerModalWrap=Id("gallery-modal-wrap");$("#gallery").click(function(e){var a=e.target.currentSrc;void 0!==a&&(Id("gallery-modal-img").innerHTML='<img src="'+a+'">',Id("gallery-modal-caption").innerHTML="<p>"+e.target.dataset.caption+"</p>",gallerModalWrap.classList.add("gallery-modal-show"),$("body").css("overflow-y","hidden"))}),$("#gallery-modal__btn").click(function(e){gallerModalWrap.classList.remove("gallery-modal-show"),$("body").css("overflow-y","auto")}),$("#gallery-modal-wrap").click(function(e){"gallery-modal"!==e.target.parentNode.parentNode.id&&(gallerModalWrap.classList.remove("gallery-modal-show"),$("body").css("overflow-y","auto"))}),$(".live-info__squard-plane-img-wrap").click(function(e){var a=e.target.currentSrc||e.target.children[0].src;void 0!==a&&(Id("live-modal-img").innerHTML='<img src="'+a+'">',Id("live-modal-wrap").classList.add("live-modal-show"),Id("departamentos").classList.add("live-no-scroll"),$("body").css("overflow-y","hidden"))}),$("#live-modal__btn").click(function(e){Id("live-modal-wrap").classList.remove("live-modal-show"),Id("departamentos").classList.remove("live-no-scroll"),$("body").css("overflow-y","auto")}),$("#live-modal-wrap").click(function(e){"live-modal-img"!==e.target.parentNode.id&&"live-modal-img"!==e.target.id&&(Id("live-modal-wrap").classList.remove("live-modal-show"),$("body").css("overflow-y","auto"))});var formMessage=Id("form-message"),form=Id("form"),currentHostname=window.location.href;$("form").submit(function(e){""!==$("input").first().val()&&($("#sendMessage").val("Enviando mensaje..."),$("#sendMessage").disabled=!0,reloadPage(e),e.preventDefault(),$(".form-message").show().fadeOut(6e3))}),$('a[href*="#"]').not('[href="#"]').not('[href="#0"]').not('[href="index.php"]').click(function(e){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var a=$(this.hash);(a=a.length?a:$("[name="+this.hash.slice(1)+"]")).length&&(e.preventDefault(),$("html, body").animate({scrollTop:a.offset().top},1e3,function(){}))}});