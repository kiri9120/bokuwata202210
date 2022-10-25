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
  setInterval( function() {
    var clientRect = ceo.getBoundingClientRect().top;
    if (clientRect < 0) {
      top_nav.classList.add('stuck');
    } else {
      top_nav.classList.remove('stuck');
    }
  }, 100 );
});

document.addEventListener('DOMContentLoaded', function () {
  const menuOpen = document.getElementsByClassName('js-menu_open');
  for (let i = 0; i < menuOpen.length; i++){
    menuOpen[i].addEventListener('click', (e) => {
      e.preventDefault();
      document.getElementById('menu').classList.add('open');
    })
  }
  const menuClose = document.getElementsByClassName('js-menu_close');
  for (let i = 0; i < menuClose.length; i++){
    menuClose[i].addEventListener('click', (e) => {
      e.preventDefault();
      document.getElementById('menu').classList.remove('open');
    })
  }
});