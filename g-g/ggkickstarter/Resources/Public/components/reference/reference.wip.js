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
      applicationAreas: [],
      systemGroups: [],
      references: [],
      selectedFilters: [],


      applications: [],
      filteredApplications: [],
      system_groups: [],
      api_url: env.dev.api_url,
    };
  },
  async mounted() {
    const data = await this.getDataFromApi()

    // Rebuild data and only take what we need

    this.applicationAreas = data.map(area => {
      return {
        id: area.id,
        title: area.title,
        className: area.class,
        refToShow: 3,
      }
    })

    this.references = data.map( ({references}) => {
      return references.map( reference => {
        return {
          id: reference.id,
          title: reference.title, 
          subtitle: reference.subtitle,
          image: JSON.parse(reference.images)[0],
          applications: reference.applications.map( ({title}) => title.toLowerCase().trim() ),
          systems: reference.systems.map(({systemgroups}) => {
            return systemgroups.map(({id, title}) => ({id, title}))
          }).reduce((previous, current) => previous.concat(current), [])
        }
      })
    }).reduce((previous, current) => previous.concat(current), [])

    const testSystemgroups = this.references  
      .filter(({systems}) => systems.length > 0)
      .map(({systems}) => systems)
      .reduce((previous, current) => previous.concat(current), [])
    
    this.systemGroups = getUniqueArray(testSystemgroups, ['id'])

    
    // let that = this;
    // $.get(this.api_url + "api/reference", function (data, status) {
    //   for (var index = 0; index < data.length; index++) {
    //     data[index].refToShow = 3;
    //   }
    //   that.applications = data;
    //   that.filteredApplications = data;
    //   that.find_all_existing_system_groups();
    // });
  },

  computed: {
    filteredReferences(){
      return this.references.filter(reference => {
        return reference.applications.some(item => this.selectedFilters.includes(item))
        
      })
    }
  },

  methods: {

    updateFilter(key){
      const processedKey = key.toLowerCase().trim()
      const index = this.selectedFilters.indexOf(processedKey)
      console.log(index)
      if( index == -1 ){
        this.selectedFilters.push(processedKey)
      } else {
        this.selectedFilters.splice(index, 1)
      }
    },

    // find_all_existing_system_groups: function () {
    //   let system_groups = [];
    //   let application = this.applications;
    //   for (let i = 0; i < application.length; i++) {
    //     let application_references = application[i].references;
    //     for (let j = 0; j < application_references.length; j++) {
    //       let systems = application_references[j].systems;
    //       this.applications[i].references[j].system_groups_ids = []; //to collect all system_groups id for this refrences
    //       for (let k = 0; k < systems.length; k++) {
    //         let systemgroups = systems[k].systemgroups;
    //         for (let l = 0; l < systemgroups.length; l++) {
    //           let systemgroup = {
    //             id: systemgroups[l].id,
    //             title: systemgroups[l].title,
    //           };

    //           //push system_groups id in refrences
    //           this.applications[i].references[j].system_groups_ids.push(
    //             String(systemgroups[l].id)
    //           );
    //           // system_groups_ids.push(systemgroups[l].id); //collect all system_groups id to push in refrences

    //           if (
    //             !system_groups.some((group) => group.id === systemgroups[l].id)
    //           ) {
    //             system_groups.push(systemgroup);
    //           }
    //         }
    //       }
    //     }
    //   }
    //   this.system_groups = system_groups;
    // },

    // do_filter: function () {
    //   let filterApplicationValues = $(
    //     "input[name='filterApplication[]']:checked"
    //   )
    //     .map(function () {
    //       return $(this).val();
    //     })
    //     .get();
    //   let systemGroupsValues = $("input[name='systemGroups[]']:checked")
    //     .map(function () {
    //       return $(this).val();
    //     })
    //     .get();

    //   let applications = this.applications;
    //   let tempData = [];
    //   if (filterApplicationValues.length > 0) {
    //     for (let i = 0; i < applications.length; i++) {
    //       let application_id = applications[i].id;
    //       if (filterApplicationValues.indexOf(String(application_id)) > -1) {
    //         tempData.push(applications[i]);
    //       }
    //     }
    //   } else {
    //     tempData = applications;
    //   }
    //   // filter systemgroups
    //   if (systemGroupsValues.length > 0) {
    //     let references = tempData
    //       .map(item => item.references)
    //       .reduce((previous, current) => {
    //         return previous.concat(current)
    //       }, [])
    //       .filter(reference => {
    //         return reference.system_groups_ids.some(id => systemGroupsValues.includes(id));
    //       })

    //     console.log(references)

    //     // for (let i = 0; i < tempData.length; i++) {
    //     //   let references = tempData[i].references;
    //     //   for (let j = 0; j < references.length; j++) {
    //     //     let system_groups_ids = references[j].system_groups_ids;
    //     //     let is_this_refrence_has_filter = this.findCommonElements(
    //     //       system_groups_ids,
    //     //       systemGroupsValues
    //     //     );
    //     //     if (is_this_refrence_has_filter===false) {
    //     //       id =tempData[i].references[j].id;
    //     //       delete tempData[i].references[j];
    //     //       // console.log(id)
    //     //       // removeIndex = tempData[i].references.findIndex(
    //     //       //   (item) => item.id === id
    //     //       // );
    //     //       // tempData[i].references.splice(removeIndex, 1);
    //     //     }
    //     //   }
    //     // }
    //   }
    //   // console.log(tempData)

    //   this.filteredApplications = tempData;
    // },

    // findCommonElements: function (arr1, arr2) {
    //   return arr1.some((item) => arr2.includes(item));
    // },

    async getDataFromApi() {
      return await fetch(`${this.api_url}api/reference`).then(response => response.json())
    }

  },
};

if (document.querySelector(referencesList.el)) {
  new Vue(referencesList);
}


/**
 * Returns an array of objects with no duplicates
 * @param {Array} arr Array of Objects
 * @param {Array} keyProps Array of keys to determine uniqueness
 */
 function getUniqueArray(arr, keyProps) {
  return Object.values(
    arr.reduce((uniqueMap, entry) => {
      const key = keyProps.map((k) => entry[k]).join('|')
      if (!(key in uniqueMap)) uniqueMap[key] = entry
      return uniqueMap
    }, {}),
  )
}