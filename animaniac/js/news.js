

var swiper = new Swiper(".slide-content:nth-of-type(1)", {
    slidesPerView: 3,
    spaceBetween: 25,
    loop: true,
    loopFillGroupWithBlank: true,
    centerSlide: 'true',
    fade: 'true',
    grabCursor: 'true',
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  })

var swiper2 = new Swiper(".featured-slide-content", {
    slidesPerView: 1,
    spaceBetween: 25,
    loop: true,
    // loopFillGroupWithBlank: true,
    centerSlide: 'true',
    fade: 'true',
    grabCursor: 'true',
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    // breakpoints:{
    //     0: {
    //         slidesPerView: 1,
    //     },
    //     520: {
    //         slidesPerView: 2,
    //     },
    //     950: {
    //         slidesPerView: 3,
    //     },
    // },
  })

// var swiper2 = new Swiper(".slide-content:nth-of-type(2)", {
//     slidesPerView: 2,
//     spaceBetween: 25,
//     loop: true,
//     loopFillGroupWithBlank: true,
//     // centerSlide: 'true',
//     fade: 'true',
//     grabCursor: 'true',
//     pagination: {
//       el: ".swiper-pagination",
//       clickable: true,
//       dynamicBullets: true,
//     },
//     navigation: {
//       nextEl: ".swiper-button-next",
//       prevEl: ".swiper-button-prev",
//     },

//     breakpoints:{
//         0: {
//             slidesPerView: 1,
//         },
//         520: {
//             slidesPerView: 2,
//         },
//         950: {
//             slidesPerView: 3,
//         },
//     },
//   })

