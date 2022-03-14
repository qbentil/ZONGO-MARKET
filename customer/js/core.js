window.onload = function () {
    document.querySelector("#loader").style.display = "none";
    document.querySelector("#show").style.display = "block";
      var swiper = new Swiper('.swiper-container', {
          spaceBetween: 30,
          centeredSlides: true,
          autoplay: {
            delay: 2500,
            disableOnInteraction: false,
          },
          pagination: {
            el: '.swiper-pagination',
            clickable: true,
            bulletActiveClass: 'bullet'
          },
        });
};
    
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.body.style.overflow="hidden"
}
    
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.body.style.overflow="auto" 
}
// initialize swiper
var swiper = new Swiper('.swiper-container', {
    speed: 600,
    parallax: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    });
      