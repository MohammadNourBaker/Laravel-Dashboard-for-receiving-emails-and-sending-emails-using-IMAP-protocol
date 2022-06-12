
const linkColor = document.querySelectorAll('.nav__link')
function colorLink(){
    linkColor.forEach(l => l.classList.remove('active-link'))
    this.classList.add('active-link')
}

linkColor.forEach(l => l.addEventListener('click', colorLink))


const showMenu = (toggleId, navbarId) =>{
    const toggle = document.getElementById(toggleId),
    navbar = document.getElementById(navbarId)

    if(toggle && navbar){
        toggle.addEventListener('click', ()=>{
            navbar.classList.toggle('show-menu')
            toggle.classList.toggle('rotate-icon')
        })
    }
}
showMenu('nav-toggle','nav')

var header=document.querySelector("header"),
    mainSection =document.getElementById("dashboard"),
    sidBar = document.querySelector("#nav");
window.addEventListener("scroll",()=>{
    if(window.scrollY >= header.offsetHeight){
        header.classList.add("fixed-header");
        sidBar.classList.remove("show-menu")
        sidBar.classList.add("sid-bar-fixed");
        if(window.innerWidth > 768){
            mainSection.style="padding-top: 76px ;padding-left: 70px;"
        }
    }
    else{
        header.classList.remove("fixed-header");
        sidBar.classList.add("show-menu")
        sidBar.classList.remove("sid-bar-fixed");
        mainSection.style="padding-top: 0px ;padding-left: 0px;"
    }

});
