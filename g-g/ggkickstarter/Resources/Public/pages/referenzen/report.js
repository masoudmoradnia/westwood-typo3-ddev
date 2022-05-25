{
  const referenceReportApp = {
    el: '#ww-reference-report-images',
    name: 'ref-report',
    components: {
      agile: window.VueAgile,
    },
    data() {
      return {
        options1: {
          dots: true,
          navButtons: true,
          slidesToShow: 1,
          infinite: false,
        },
        refReportOptions: {
          dots: false,
          navButtons: true,
          slidesToShow: 1,
          autoplay: true,
        },
        currentSlide: 0,
        captions: [
          'This is slide 1',
          'This is the second slide',
          'This is a third and final slide',
        ],
      }
    },
  }

  if (document.querySelector(referenceReportApp.el)) {
    new Vue(referenceReportApp)
  }
}
