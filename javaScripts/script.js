document.addEventListener('DOMContentLoaded', function() {

  const triggerOpen = document.querySelectorAll('.search-trigger');
  const triggerClose = document.querySelectorAll('[close-button]');
  const overlay = document.querySelector('[data-overly]');
  const menuTrigger = document.getElementById('menu-trigger'); // Sélectionnez l'élément du menu-burger
  const mobileMenu = document.getElementById('menu-mobile'); // Sélectionnez l'élément de la sous-menu

  for (let i = 0; i < triggerOpen.length; i++) {
    let currentId = triggerOpen[i].dataset.target;
    let targetEl = document.getElementById(currentId);
    const openData = function() {
      if (targetEl) {
        targetEl.classList.remove('active');
      }
    };

    triggerOpen[i].addEventListener('click', function() {
      if (targetEl) {
        targetEl.classList.add('active');
        overlay.classList.add('active');
      }
    });

    if (targetEl && targetEl.querySelector('[close-button]')) {
      targetEl.querySelector('[close-button]').addEventListener('click', openData);
    }
    if (overlay) {
      overlay.addEventListener('click', openData);
    }

    console.log('Current target element:', targetEl);
  }

  // mobile-menu submenu

  const submenu = document.querySelectorAll('.child-trigger');
  submenu.forEach((menu) => menu.addEventListener('click', function(e) {
    e.preventDefault();
    submenu.forEach((item) => item !== this ? item.closest('.has-child').classList.remove('active') : null);
    if (this.closest('.has-child').classList.contains('active')) {
      this.closest('.has-child').classList.remove('active');
    } else {
      this.closest('.has-child').classList.add('active');
    }

    console.log('Clicked submenu:', this);
  }));

  // Ajoutez l'événement de clic au menu-burger
  menuTrigger.addEventListener('click', function() {
    mobileMenu.classList.toggle('active');
  });

  // sorter 

  const sorter = document.querySelector('.sort-list');
  if (sorter) {
    const sortLi = sorter.querySelectorAll('li');

    sorter.querySelector('.op-trigger').addEventListener('click', function () {
      sorter.querySelector('ul').classList.toggle('show');
    });

    sortLi.forEach((item) => item.addEventListener('click', function (event) {
      event.preventDefault(); // Empêcher le comportement par défaut du lien

      sortLi.forEach((li) => li != this ? li.classList.remove('active') : null);

      this.classList.add('active');
      sorter.querySelector('.op-trigger .value').textContent = this.textContent;
      sorter.querySelector('ul').classList.remove('show');
    }));
  }

  // tabbed

  const trigger = document.querySelectorAll('.tabbed-trigger');
  const content = document.querySelectorAll('.tabbed > div');

  if (trigger.length > 0 && content.length > 0) {
    trigger.forEach((btn) => {
      btn.addEventListener('click', function() {
        let dataTarget = this.dataset.id;
        let body = document.querySelector(`#${dataTarget}`);

        // Ajoutez une classe "active" au bouton de déclenchement sélectionné
        trigger.forEach((b) => b.parentNode.classList.remove('active'));
        this.parentNode.classList.add('active');

        // Affichez la section correspondante et masquez les autres sections
        content.forEach((section) => {
          if (section.id === dataTarget) {
            section.classList.add('active');
          } else {
            section.classList.remove('active');
          }
        });
      });
    });
  }

  // Slider

  const swiper = new Swiper('.sliderbox', {

    // loop: true,
    effect: 'fade',
    autoHeight: true,
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },

  });

  // carousel

  const carousel = new Swiper('.carouselbox', {

    spaceBetween: 30,
    slidesPerView: 'auto',
    centeredSlides: true,

    // If we need pagination
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',

    },
    breakpoints: {
      481: {
        slidesPerView: 2,
        slidesPerGroup: 1,
        centeredSlides: false,
      },
      640: {
        slidesPerView: 3,
        slidesPerGroup: 3,
        centeredSlides: false,
      },
      992: {
        slidesPerView: 4,
        slidesPerGroup: 4,
        centeredSlides: false,
      }
    }

  });

  // Product image > page-single

  const thumbImage = new Swiper('.thumbmail-image', {

    loop: true,
    direction: 'vertical',
    spaceBetween: 15,
    slidesPerView: 1,
    freeMode: true,
    watchSlidesProgress: true,

  });
  const mainImage = new Swiper('.main-image', {

    loop: true,
    autoHeight: true,

    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    thumbs: {
      swiper: thumbImage,
    }
  });
  
});


