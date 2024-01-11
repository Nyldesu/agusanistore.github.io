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

  const addition = document.querySelector(".addition"),
  minus = document.querySelector(".minus"),
  counter = document.querySelector(".counter")

  let a = 1;

  addition.addEventListener("click", ()=>{
    a++;
    a= (a < 10) ? "0" + a : a;
    counter.innerText = a;
    console.log(a);
  });

  minus.addEventListener("click", ()=>{
    if(a > 1){
      a--;
      a = (a < 10) ? "0" + a : a;
      counter.innerText = a;
    }
  });