// Vue.component("vueper-slides", window.vueperslides.VueperSlides);
// Vue.component("vueper-slide", window.vueperslides.VueperSlide);

// const heroApp = {
//   el: "#ww-hero",
//   data() {
//     return {
//       slides: [
//         {
//           title: "Slide #1",
//           content: "Slide content.",
//         },
//         {
//           title: "Slide #2",
//           content: "Slide content.",
//         },
//       ],
//     };
//   },
// };

// new Vue(heroApp);
{
  const heroApp = {
    el: '#ww-hero',
    components: {
      agile: window.VueAgile,
    },
  }

  if (document.querySelector(heroApp.el)) {
    new Vue(heroApp)
  }
}
