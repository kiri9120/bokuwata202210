document.addEventListener('DOMContentLoaded', function () {
  const smoothScrollTrigger = document.querySelectorAll('a[href^="#"]');
  for (let i = 0; i < smoothScrollTrigger.length; i++){
    smoothScrollTrigger[i].addEventListener('click', (e) => {
      e.preventDefault();
      let href = smoothScrollTrigger[i].getAttribute('href');
      let targetElement = document.getElementById(href.replace('#', ''));
      const rect = targetElement.getBoundingClientRect().top;
      const offset = window.pageYOffset;
      const gap = 30;
      const target = rect + offset - gap;
      window.scrollTo({
        top: target,
        behavior: 'smooth',
      });
    });
  }
});

document.addEventListener('DOMContentLoaded', function () {
  const closePopup = document.getElementsByClassName('js-close_popup');
  for (let i = 0; i < closePopup.length; i++){
    closePopup[i].addEventListener('click', (e) => {
      e.preventDefault();
      document.getElementById('pickup').classList.add('close');
    })
  }
});

document.addEventListener('DOMContentLoaded', function () {
  const ceo = document.getElementById("ceo");
  const top_nav = document.getElementById("top_nav");
  if(top_nav) {
    setInterval( function() {
      var clientRect = ceo.getBoundingClientRect().top;
      if (clientRect < 0) {
        top_nav.classList.add('stuck');
      } else {
        top_nav.classList.remove('stuck');
      }
    }, 100 );
  }
});

document.addEventListener('DOMContentLoaded', function () {
  const ceo = document.getElementById("career");
  const top_nav = document.getElementById("ceo_nav");
  if(top_nav) {
    setInterval( function() {
      var clientRect = ceo.getBoundingClientRect().top;
      if (clientRect < 0) {
        top_nav.classList.add('stuck');
      } else {
        top_nav.classList.remove('stuck');
      }
    }, 100 );
  }
});

document.addEventListener('DOMContentLoaded', function () {
  const menuOpen = document.getElementsByClassName('js-menu_open');
  for (let i = 0; i < menuOpen.length; i++){
    menuOpen[i].addEventListener('click', (e) => {
      e.preventDefault();
      document.getElementById('menu').classList.add('open');
      $('body').css('overflow', 'hidden');
    })
  }
  const menuClose = document.getElementsByClassName('js-menu_close');
  for (let i = 0; i < menuClose.length; i++){
    menuClose[i].addEventListener('click', (e) => {
      e.preventDefault();
      document.getElementById('menu').classList.remove('open');
      $('body').css('overflow', 'auto');
    })
  }
});

$(document).ready(function(){
  $(".scroll_work").slick({
    autoplay: true,
    autoplaySpeed: 1000,
    speed: 1000,
    dots: true,
    arrows: true,
    infinite: true,
    pauseOnHover: false,
    prevArrow: '<button class="slide-arrow prev-arrow"></button>',
    nextArrow: '<button class="slide-arrow next-arrow"></button>',
    centerMode: true,
    centerPadding: "15%",
  });
});

var time = new Date().getTime();
function stopload() {
  $('#loader').fadeOut(1000);
  $('body').css('overflow', 'auto');
}
jQuery(function () {
  var webStorage = function () {
    if (sessionStorage.getItem('access')) {
      $('.beforeLoad').css('display', 'none');
      const loader = document.getElementById('loader');
      if(loader) {
        loader.classList.add('loaded');
      }
    } else {
      sessionStorage.setItem('access', 0);
      $('.beforeLoad').css('display', 'none');
      $('body').css('overflow', 'hidden');
      $('#loader').css('display', 'block');
      // ローディング
      window.addEventListener("load", function() {
        var now = new Date().getTime();
        if (now-time<=12000) {
          setTimeout('stopload()',12000-(now-time));
          return;
        } else {
          stopload();
        }
      });
    }
  }
  webStorage();
});

const setFillHeight = () => {
  const vh = window.innerHeight * 0.01;
  document.documentElement.style.setProperty('--vh', `${vh}px`);
}
let vw = window.innerWidth;
window.addEventListener('resize', () => {
  if (vw === window.innerWidth) {
    return;
  }
  vw = window.innerWidth;
  setFillHeight();
});
setFillHeight();

document.addEventListener( 'wpcf7mailsent', function( event ) {
  document.getElementById('submit').classList.add('open');
  $(".contact_header").addClass("submited");
  var position = $("#contact").offset().top;
  var speed = 500;
  $("html, body").animate({
    scrollTop: position
  }, speed, "swing");
}, false );

document.addEventListener('DOMContentLoaded', function () {
  const closePopup = document.getElementsByClassName('js-close_submit_popup');
  for (let i = 0; i < closePopup.length; i++){
    closePopup[i].addEventListener('click', (e) => {
      e.preventDefault();
      document.getElementById('submit').classList.remove('open');
    })
  }
});