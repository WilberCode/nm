"use strict";!function(s){var a=s.getElementById("nav-toggle"),t=s.getElementById("nav");a.addEventListener("click",function(){a.classList.toggle("nav-toggle-active"),t.classList.toggle("nav-active")}),s.getElementById("menu").addEventListener("click",function(e){t.classList.toggle("nav-active"),a.classList.toggle("nav-toggle-active")}),showModal=function(e){var a=e.getElementsByTagName("img")[0].src,t=e.getElementsByTagName("img")[0].dataset.caption;s.getElementById("imageModal").innerHTML='<img src="'+a+'">',s.getElementById("captionModal").innerHTML="<p>"+t+"</p>",s.getElementsByClassName("wrappModal")[0].classList.add("showModal"),s.getElementsByClassName("overflow")[0].classList.add("showModalWrapp")},closeModal=function(){s.getElementsByClassName("wrappModal")[0].classList.remove("showModal"),s.getElementsByClassName("overflow")[0].classList.remove("showModalWrapp")},showModalPlano=function(e){var a=e.getElementsByTagName("img")[0].src;s.getElementById("live-modal__img").innerHTML='<img src="'+a+'">',s.getElementById("live-modal-wrap").classList.add("live-modal-wrap-active"),s.getElementsByClassName("overflow_plano")[0].classList.add("show-modal-wrapp")},closeModalPlano=function(){s.getElementById("live-modal-wrap").classList.remove("live-modal-wrap-active"),s.getElementsByClassName("overflow_plano")[0].classList.remove("show-modal-wrapp")};s.getElementById("form-message"),s.getElementById("form");$("form").submit(function(e){""!==$("input").first().val()&&$(".form-message").show().fadeOut(6e3)}),$('a[href*="#"]').not('[href="#"]').not('[href="#0"]').click(function(e){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var a=$(this.hash);(a=a.length?a:$("[name="+this.hash.slice(1)+"]")).length&&(e.preventDefault(),$("html, body").animate({scrollTop:a.offset().top},1e3,function(){}))}})}(document);