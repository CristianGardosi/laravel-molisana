require('./bootstrap');
// !Import VUEJS & AXIOS
import Vue from 'vue';
import axios from 'axios';


const hamburger = document.querySelector('.hamburger');
const navLinks = document.querySelector('.nav-list');
const link = document.querySelectorAll('.nav-item');

hamburger.addEventListener('click', () => {
    navLinks.classList.toggle('open');
    link.forEach(link => {
        link.classList.toggle('fade');
    });
});



// * Active class for the selected nav-link * \\
let current = window.location.href;
let links = document.querySelectorAll('.nav-link');


for (let i = 0; i < links.length; i++) {
    if(links[i] == current) {
        links[i].classList.add = "active";
    }
}