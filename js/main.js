// Select DOM elements

const menuBtn = document.querySelector('.menu-btn');
const menu = document.querySelector('.menu');
const sideNav = document.querySelector('.menu-nav');
const navItems = document.querySelectorAll('.nav-item');
const homePicture = document.querySelector('.home-picture');



// Set default state of menu-button

let showMenu = false;
menuBtn.addEventListener('click', toggleMenu);

function toggleMenu() {
    if (!showMenu) {
        menuBtn.classList.add('close');
        menu.classList.add('show');
        sideNav.classList.add('show');
        navItems.forEach(item => item.classList.add('show'));

        showMenu = true;
    } else {
        menuBtn.classList.remove('close');
        menu.classList.remove('show');
        sideNav.classList.remove('show');
        navItems.forEach(item => item.classList.remove('show'));

        showMenu = false;
    }
}

//Slide in homePicture
const slideIn = document.querySelector(".home-picture");
window.onload




//Run home title
/*
var i = 0;
var txt = "Hi, I am Milovan, self taught front-end developer";
var speed = 50;
function typewriter() {
    if (i < txt.length) {
        document.querySelector(".line-1").innerHTML += txt.charAt(i);
        i++;
        setTimeout(typewriter, speed);
    }
}
typewriter();*/


