"use strict";!function(t){var a=t.getElementById("nav-toggle"),l=t.getElementById("nav");a.addEventListener("click",function(){a.classList.toggle("nav-toggle-active"),l.classList.toggle("nav-active")}),t.getElementById("menu").addEventListener("click",function(e){l.classList.toggle("nav-active"),a.classList.toggle("nav-toggle-active")}),showModal=function(e){var a=e.getElementsByTagName("img")[0].src,l=e.getElementsByTagName("img")[0].dataset.caption;t.getElementById("imageModal").innerHTML='<img src="'+a+'">',t.getElementById("captionModal").innerHTML="<p>"+l+"</p>",t.getElementsByClassName("wrappModal")[0].classList.add("showModal"),t.getElementsByClassName("overflow")[0].classList.add("showModalWrapp")},closeModal=function(){t.getElementsByClassName("wrappModal")[0].classList.remove("showModal"),t.getElementsByClassName("overflow")[0].classList.remove("showModalWrapp")},showModalPlano=function(e){var a=e.getElementsByTagName("img")[0].src;t.getElementById("live-modal__img").innerHTML='<img src="'+a+'">',t.getElementById("live-modal-wrap").classList.add("live-modal-wrap-active"),t.getElementsByClassName("overflow_plano")[0].classList.add("show-modal-wrapp")},closeModalPlano=function(){t.getElementById("live-modal-wrap").classList.remove("live-modal-wrap-active"),t.getElementsByClassName("overflow_plano")[0].classList.remove("show-modal-wrapp")}}(document);