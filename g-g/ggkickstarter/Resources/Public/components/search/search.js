Vue.directive('focus', {
  inserted: function (el, binding, vnode) {
    Vue.nextTick(function() {
      el.focus()
    })
  }
})
{
  const searchApp = {
    el: '#ww-search',
    data() {
      return {
        overlayActive: false,
        query: '',
        results: [],
      }
    },
    methods: {
      toggleSearchOverlay() {
        document.body.classList.toggle('overlay--active')
        this.overlayActive = !this.overlayActive
		//document.getElementById("ww-search__input").focus();
        return false
      },
      // onclick(e) {
      //   if (e.target.closest(".ww-search") === null) {
      //     if (!document.body.classList.contains("overlay--active")) return;
      //     this.toggleSearchOverlay();
      //   }
      // },
    },
    computed: {
      computedResults() {
        return this.results.filter((result) => {
          return result.toLowerCase().includes(this.query.toLowerCase())
        })
      },
    },
    async mounted() {
      // fill with demo data
      this.results = [
        'Wecryl 108',
        'Wecryl 110',
        'Wecryl 114',
        'Wecryl 122',
        'Wecryl 178',
        'Weproof 264',
        'Weproof 269',
      ]
    },
    // created() {
    //   document.onclick = this.onclick;
    // },
  }

  // Vue.createApp(searchApp).mount("#ww-search");
  new Vue(searchApp)
}

// search result

// const search__result = {
//   el: "#ww-search__result",
//   name: "search-reault",
//   data() {
//     return {
//       api_url: env.dev.api_url,
//       results: {},
//     };
//   },

//   computed: {
//     searchTerm() {
//       const queryString = window.location.search;
//       const urlParams = new URLSearchParams(queryString);
//       return urlParams.get("query");
//     },
//   },

//   mounted() {
//     if (this.searchTerm) {
//       this.loadResults();
//     }
//   },
//   methods: {
//     loadResults: function () {
//       let that = this;
//       $.get(
//         this.api_url + "api/search?search_term=" + this.searchTerm,
//         function (data, status) {
//           that.results = data;
//         }
//       );
//     },
//   },
// };

// if (document.querySelector(search__result.el)) {
//   new Vue(search__result);
// }



;(function () {
  const ACTIVE_CLASS = 'active'
  const CONTAINER_ACTIVE_CLASS = 'activecontainer'
  const buttons = document.querySelectorAll('.search_result_nav > li')
  let currentButton = buttons[0]
  let currentContent = document.getElementById(
    currentButton.dataset.target
  )
  // const closeAlls = document.querySelectorAll('.closeAllPlaces')
  // let tb = document.getElementById("v-places__contents")

  buttons.forEach((button, index) => {
    button.addEventListener('click', (event) => {
      
      if(event.target.closest('button') === currentButton && currentButton.classList.contains(ACTIVE_CLASS)) {
        currentButton.classList.remove(ACTIVE_CLASS)
        currentButton = null
        currentContent.classList.remove(ACTIVE_CLASS)
      } else {
        if(currentButton) {
          currentButton.classList.remove(ACTIVE_CLASS)
        }
        currentButton = button
        currentButton.classList.add(ACTIVE_CLASS)
        
        currentContent.classList.remove(CONTAINER_ACTIVE_CLASS)
        currentContent = document.getElementById(
          currentButton.dataset.target
        )
        currentContent.classList.add(CONTAINER_ACTIVE_CLASS)

        // let tbtop = currentContent.offsetTop
     
        // window.scrollTo({
        //   top: tbtop-290,
        //   behavior: 'smooth'
        // })
      }
         

    })
  })
  closeAlls.forEach((closeAll, index) => {
    closeAll.addEventListener('click', () => {
      currentButton.classList.remove(ACTIVE_CLASS)
      currentContent.classList.remove(ACTIVE_CLASS)
    })
  })

  return
})()
