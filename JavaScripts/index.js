window.addEventListener('scroll', function (){
    var nav = document.querySelector('nav');
    var navMobile = document.querySelector(".nav-toggle-label");
    nav.classList.toggle('scrolling-active', window.scrollY > 800);
    navMobile.classList.toggle('scrolling-active', window.scrollY > 400)
});

window.addEventListener('click', function (e){
   if(e.target.id !== "nav-toggle" && e.target.id !== "nav-body"){
       document.getElementById("nav-toggle").checked = false;
   }
});