{
  // note: selected category hass not relateed v-model and changes with checkRadio
  const mediathek = {
    el: '#ww-media',
    name: 'mediathek',

    data() {
      return {
        categories: [],
        applications: [],
        systemgroups: [],
        productLevels: [],
        downloads: [],
        bulkdownload: [],
        selected: {
          categories: [],
          applications: [],
          systemgroups: [],
          productLevels: [],
          filter: 'download',
        },
        api_url: env.dev.api_url,
      }
    },
    beforeMount() {
      const queryString = window.location.search
      const urlParams = new URLSearchParams(queryString)
      if (urlParams.get('categories')) {
        this.selected.categories = urlParams.get('categories').split(',')
      }
      if (urlParams.get('applications')) {
        this.selected.applications = urlParams.get('applications').split(',')
      }
      if (urlParams.get('systemgroups')) {
        this.selected.applications = urlParams.get('systemgroups').split(',')
      }
      if (urlParams.get('productLevels')) {
        this.selected.applications = urlParams.get('productLevels').split(',')
      }
    },
    mounted() {
      this.loadCategories()
      this.loadApplications()
      this.loadSystemgroup()
      this.loadProductLevels()
      // this.loadDownloads();
    },

    watch: {
      selected: {
        handler: function () {
          this.loadCategories()
          this.loadApplications()
          this.loadSystemgroup()
          this.loadProductLevels()
          this.loadDownloads()
        },
        deep: true,
      },
    },

    methods: {
      loadCategories: function () {
        let that = this
        $.get(
          this.api_url + 'api/categories',
          this.selected,
          function (data, status) {
            that.categories = data
          }
        )
      },

      loadApplications: function () {
        let that = this
        $.get(
          this.api_url + 'api/applications',
          this.selected,
          function (data, status) {
            that.applications = data
          }
        )
      },

      loadSystemgroup: function () {
        let that = this
        $.get(
          this.api_url + 'api/systemgroups',
          this.selected,
          function (data, status) {
            that.systemgroups = data
          }
        )
      },

      loadProductLevels: function () {
        let that = this
        $.get(
          this.api_url + 'api/productlevels',
          this.selected,
          function (data, status) {
            that.productLevels = data
          }
        )
      },

      loadDownloads: function () {
        let that = this
        if (Object.values(this.selected).flat().length > 1) {
          $.get(
            this.api_url + 'api/filterdDownloads',
            this.selected,
            function (data, status) {
              that.downloads = data
            }
          )
        } else {
          this.downloads = []
        }
      },

      dlAll: function () {
        let that = this
        $.get(
          this.api_url + 'api/downloads/bulk',
          { ids: this.bulkdownload },
          function (data, status) {
            window.location.href = that.api_url + 'storage/temp/' + data
          }
        )
      },

      selectAll: function (event) {
        if (event.target.checked) {
          this.bulkdownload = this.downloads.map((item) => {
            const parsedItem = JSON.parse(item.data_file)
            if (parsedItem.length > 0) {
              return parsedItem[0].download_link
            }
            //(JSON.parse(item.data_file))[0].download_link);
          })
        } else {
          this.bulkdownload = []
        }
      },
      checkRadio: function (event, parent_id) {
        let parentElement = document.getElementById(parent_id)
        let checkboxes = parentElement.querySelectorAll(
          'input[type="checkbox"]'
        )
        let checkbox = event.target
        if (checkbox.checked) {
          this.selected.categories = [checkbox.value]
        } else {
          this.selected.categories = []
        }
        checkboxes.forEach((item) => {
          if (item !== checkbox) item.checked = false
        })
      },
    },
  }

  if (document.querySelector(mediathek.el)) {
    new Vue(mediathek)
  }
}
