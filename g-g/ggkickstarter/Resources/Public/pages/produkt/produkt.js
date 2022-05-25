{
  const productDetailApp = {
    el: '#ww-product__detail',
    components: {
      agile: window.VueAgile,
    },
    data() {
      return {
        options1: {
          dots: false,
          navButtons: false,
          slidesToShow: 1.5,
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
  }

  if (document.querySelector(productDetailApp.el)) {
    new Vue(productDetailApp)
  }

  const productToggleBoxes = document.querySelectorAll('.ww-product__toggle')

  if (productToggleBoxes) {
    function toggleProductBoxes() {
      if (queryMinWidth768.matches) {
        productToggleBoxes.forEach((box) => {
          box.querySelector('.collapse').classList.add('show')
        })
      } else {
        productToggleBoxes.forEach((box) => {
          box.querySelector('.collapse').classList.remove('show')
        })
      }
    }

    toggleProductBoxes()

    queryMinWidth768.addEventListener('change', () => {
      toggleProductBoxes()
    })
  }
}
