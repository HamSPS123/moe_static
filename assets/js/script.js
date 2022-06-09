//navbar toggle button
var btn = document.querySelector(".btn-toggle");
var toggleCenter = document.querySelector(".nav-center.nav-toggle");
var toggleRight = document.querySelector(".nav-right.nav-toggle");
btn.addEventListener('click',()=>{
    toggleCenter.classList.toggle("show");
    toggleRight.classList.toggle("show");
})