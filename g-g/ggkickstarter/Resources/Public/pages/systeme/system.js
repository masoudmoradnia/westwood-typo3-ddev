{
  const systemDetailApp = {
    el: '#ww-systems__detail',
    components: {
      agile: window.VueAgile,
    },
    data() {
      return {
        asNavFor1: [],
        asNavFor2: [],
        options1: {
          dots: false,
          fade: true,
          navButtons: false,
          infinite: false,
        },

        options2: {
          autoplay: false,
          centerMode: false,
          dots: false,
          navButtons: false,
          // slidesToShow: 3,
          infinite: false,
        },

        options3: {
          dots: false,
          navButtons: false,
          slidesToShow: 1.5,
          infinite: false,
          responsive: [
            {
              breakpoint: 576,
              settings: {
                slidesToShow: 2,
              },
            },
            {
              breakpoint: 1200,
              settings: {
                slidesToShow: 3,
              },
            },
          ],
        },
      }
    },
    mounted() {
      this.asNavFor1.push(this.$refs.thumbnails)
      this.asNavFor2.push(this.$refs.main)
    },
  }

  if (document.querySelector(systemDetailApp.el)) {
    new Vue(systemDetailApp)
  }

  const systemToggleBoxes = document.querySelectorAll('.ww-systems__toggle')

  if (systemToggleBoxes) {
    function toggleSystemBoxes() {
      if (queryMinWidth768.matches) {
        systemToggleBoxes.forEach((box) => {
          box.querySelector('.collapse').classList.add('show')
        })
      } else {
        systemToggleBoxes.forEach((box) => {
          box.querySelector('.collapse').classList.remove('show')
        })
      }
    }

    // toggleSystemBoxes();

    // queryMinWidth768.addEventListener("change", () => {
    //   toggleSystemBoxes();
    // });
  }
}
