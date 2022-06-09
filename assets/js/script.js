//navbar toggle button
var btn = document.querySelector(".btn-toggle");
var toggleCenter = document.querySelector(".nav-center.nav-toggle");
var toggleRight = document.querySelector(".nav-right.nav-toggle");
btn.addEventListener('click',()=>{
    toggleCenter.classList.toggle("show");
    toggleRight.classList.toggle("show");
})



// fixed navbar
var nav = document.querySelector('.nav');

window.addEventListener('scroll', ()=>{
    let page = window.pageYOffset
    if(page > 0 ){
        nav.classList.add("fixed");
    }
    else{
        nav.classList.remove("fixed");
    }
})



