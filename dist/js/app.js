(function(d){
    let navToggle = d.getElementById('nav-toggle')
    let nav = d.getElementById('nav')
    navToggle.addEventListener('click',()=>{
        nav.classList.toggle('hidden')
        d.getElementById('header-wrap').classList.toggle('h-auto')
    })
})(document)
