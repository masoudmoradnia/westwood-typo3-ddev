{
  const referencesApp = {
    el: '#ww-references-slider',
    name: 'ref-slider',
    components: {
      agile: window.VueAgile,
    },
    data() {
      return {
        myOptions: {
          navButtons: true,
          dots: false,
          slidesToShow: 1,
          CenterMode: false,
          responsive: [
            {
              breakpoint: 576,
              settings: {
                slidesToShow: 2,
              },
            },
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 3,
              },
            },
          ],
        },
      }
    },
  }

  if (document.querySelector(referencesApp.el)) {
    new Vue(referencesApp)
  }

  // references list
  const referencesList = {
    el: '#ww-referenzenFilterApp',
    name: 'ref-list',

    data() {
      return {
        loading: true,
        references: [],
        applications: [],
        system_groups: [],
        selected: {
          applications: [],
          groups: [],
        },

        api_url: env.dev.api_url,
      }
    },
    beforeMount() {
      const queryString = window.location.search
      const urlParams = new URLSearchParams(queryString)
      // console.log(urlParams.get("group").split(','));
      if (urlParams.get('groups')) {
        this.selected.groups = urlParams.get('groups').split(',')
      }
      if (urlParams.get('applications')) {
        this.selected.applications = urlParams.get('applications').split(',')
      }
    },
    mounted() {
      this.loadApplications()
      this.loadSystemGroups()
      this.loadreferences()
    },

    watch: {
      selected: {
        handler: function () {
          this.loadreferences()
        },
        deep: true,
      },
    },

    methods: {
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

      loadSystemGroups: function () {
        let that = this
        $.get(
          this.api_url + 'api/systemgroups',
          this.selected,
          function (data, status) {
            that.system_groups = data
          }
        )
      },
      loadreferences: function () {
        this.loading = true

        let that = this
        $.get(
          this.api_url + 'api/reference?filter=1',
          this.selected,
          function (data, status) {
            for (var index = 0; index < data.length; index++) {
              data[index].refToShow = 3
            }
            that.references = data
            that.loading = false
          }
        )
      },
    },
  }

  if (document.querySelector(referencesList.el)) {
    new Vue(referencesList)
  }
}
