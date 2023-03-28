// untuk bagian hamburger

const hamburger = document.querySelector('#hamburger');
const navbarMenu = document.querySelector('#navbar');

hamburger.addEventListener('click', function(){

    hamburger.classList.toggle('hamburger-active');
    navbarMenu.classList.toggle('hidden');

});

// cek jika windows di scroll
window.onscroll = function() {
    const header = document.querySelector('header');

    const fixedNav = header.offsetTop;

    if(window.pageYOffset >  fixedNav)
    {   
        header.classList.add('navbar-fixed');
    }else{
        header.classList.remove('navbar-fixed');
    }

}