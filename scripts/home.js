const swiper = new Swiper('.prodcontainer .swiper', {
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },

    loop: true,
  
    pagination: {
      el: '.swiper-pagination',
      clickable: true
    },
  });
