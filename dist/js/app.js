(function(d){
    let toggleNav = d.getElementById('toggleNav')
    let nav = d.getElementById('nav')
    toggleNav.addEventListener('click',()=>{
        nav.classList.toggle('hidden')
        d.getElementById('header-wrap').classList.toggle('h-auto')
    })
})(document)
