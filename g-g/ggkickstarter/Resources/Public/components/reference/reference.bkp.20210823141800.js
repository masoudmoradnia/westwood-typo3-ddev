const referencesApp = {
  el: "#ww-references-slider",
  name: "ref-slider",
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
    };
  },
};

if (document.querySelector(referencesApp.el)) {
  new Vue(referencesApp);
}

// references list
const referencesList = {
  el: "#ww-referenzenFilterApp",
  name: "ref-list",

  data() {
    return {
      applications: [],
      filteredApplications: [],
      system_groups: [],
      api_url: env.dev.api_url,
    };
  },
  mounted() {
    let that = this;
    $.get(this.api_url + "api/reference", function (data, status) {
      for (var index = 0; index < data.length; index++) {
        data[index].refToShow = 3;
      }
      that.applications = data;
      that.filteredApplications = data;
      that.find_all_existing_system_groups();
    });
  },

  methods: {
    find_all_existing_system_groups: function () {
      let system_groups = [];
      let application = this.applications;
      for (let i = 0; i < application.length; i++) {
        let application_references = application[i].references;
        for (let j = 0; j < application_references.length; j++) {
          let systems = application_references[j].systems;
          this.applications[i].references[j].system_groups_ids = []; //to collect all system_groups id for this refrences
          for (let k = 0; k < systems.length; k++) {
            let systemgroups = systems[k].systemgroups;
            for (let l = 0; l < systemgroups.length; l++) {
              let systemgroup = {
                id: systemgroups[l].id,
                title: systemgroups[l].title,
              };

              //push system_groups id in refrences
              this.applications[i].references[j].system_groups_ids.push(
                String(systemgroups[l].id)
              );
              // system_groups_ids.push(systemgroups[l].id); //collect all system_groups id to push in refrences

              if (
                !system_groups.some((group) => group.id === systemgroups[l].id)
              ) {
                system_groups.push(systemgroup);
              }
            }
          }
        }
      }
      this.system_groups = system_groups;
    },

    do_filter: function () {
      let filterApplicationValues = $(
        "input[name='filterApplication[]']:checked"
      )
        .map(function () {
          return $(this).val();
        })
        .get();
      let systemGroupsValues = $("input[name='systemGroups[]']:checked")
        .map(function () {
          return $(this).val();
        })
        .get();

      let applications = this.applications;
      let tempData = [];
      if (filterApplicationValues.length > 0) {
        for (let i = 0; i < applications.length; i++) {
          let application_id = applications[i].id;
          if (filterApplicationValues.indexOf(String(application_id)) > -1) {
            tempData.push(applications[i]);
          }
        }
      } else {
        tempData = applications;
      }
      // filter systemgroups
      if (systemGroupsValues.length > 0) {
        let references = tempData
          .map(item => item.references)
          .reduce((previous, current) => {
            return previous.concat(current)
          }, [])
          .filter(reference => {
            return reference.system_groups_ids.some(id => systemGroupsValues.includes(id));
          })

        console.log(references)

        // for (let i = 0; i < tempData.length; i++) {
        //   let references = tempData[i].references;
        //   for (let j = 0; j < references.length; j++) {
        //     let system_groups_ids = references[j].system_groups_ids;
        //     let is_this_refrence_has_filter = this.findCommonElements(
        //       system_groups_ids,
        //       systemGroupsValues
        //     );
        //     if (is_this_refrence_has_filter===false) {
        //       id =tempData[i].references[j].id;
        //       delete tempData[i].references[j];
        //       // console.log(id)
        //       // removeIndex = tempData[i].references.findIndex(
        //       //   (item) => item.id === id
        //       // );
        //       // tempData[i].references.splice(removeIndex, 1);
        //     }
        //   }
        // }
      }
      // console.log(tempData)

      this.filteredApplications = tempData;
    },
    findCommonElements: function (arr1, arr2) {
      return arr1.some((item) => arr2.includes(item));
    },
  },
};

if (document.querySelector(referencesList.el)) {
  new Vue(referencesList);
}


