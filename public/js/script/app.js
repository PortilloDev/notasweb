const btn = document.querySelector('#btn-hidden');
const menu = document.querySelector('#menu-navbar');

btn.addEventListener('click', ()=>{
    menu.classList.toggle('hidden')
});