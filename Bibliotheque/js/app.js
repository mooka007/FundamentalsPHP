

var mune = document.getElementById("mune");
var nav_bar = document.getElementById("nav_bar");
var x_nav = document.getElementById("x-nav")

mune.addEventListener("click" , ()=>{
    nav_bar.classList.add("left-nav")
})

x_nav.addEventListener("click" , ()=>{
    nav_bar.classList.remove("left-nav")
})