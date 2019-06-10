var $burguer = document.getElementById('burguer');
var $menu = document.getElementById('menu');
var $squeeze = document.getElementById('squeeze');
// var $hamburger = document.querySelectorAll(".hamburger");
function toggleMenu(){
    $menu.classList.toggle('active');
    $squeeze.classList.toggle('is-active');
};
$burguer.addEventListener('click',toggleMenu);