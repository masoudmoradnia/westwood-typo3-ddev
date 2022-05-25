{
  const fabricatorSearchApp = {
    el: '#ww-fabricatorsearch',
    data() {
      return {
        currentStep: 1,
        status: false,
        loading: false,
        msg: [],
        areas: [],
        selectedArea: '',
        api_url: env.dev.api_url,
      }
    },
    mounted() {
      this.loadAreas()
    },
    methods: {
      loadAreas: function () {
        let that = this
        $.get(this.api_url + 'api/applications', function (data, status) {
          that.areas = data
        })
      },

      nextStep() {
        this.currentStep++
      },
      previousStep() {
        //   prevent going below 1
        if (this.currentStep == 1) return
        this.currentStep--
      },
      submitForm(event) {
        event.preventDefault()
        this.loading = true
        let form = $('#fabricatorsearch__form')
        let formData = form.serialize()
        let that = this
        $.post('?type=22589421453', formData, function (data, status) {
          that.status = data.status
          if (data.status == 'success') {
            document.getElementById('fabricatorsearch__form').reset()
            // that.currentStep=1
          }
          that.loading = false
          that.msg = data.msg
        })
        // this.$refs["ww-fabricatorsearch__form"].submit();
      },
    },
  }

  if (document.querySelector(fabricatorSearchApp.el)) {
    new Vue(fabricatorSearchApp)
  }
}
// var options = {
//   componentRestrictions: { country: "de" },
// };
// google.maps.event.addDomListener(window, "load", function () {
//   var places = new google.maps.places.Autocomplete(
//     document.getElementById("address"),
//     options
//   );
//   google.maps.event.addListener(places, "place_changed", function () {
//     var place = places.getPlace();
//     var address = place.formatted_address;
//     var latitude = place.geometry.location.A;
//     var longitude = place.geometry.location.F;
//     var mesg = "Address: " + address;
//     mesg += "\nLatitude: " + latitude;
//     mesg += "\nLongitude: " + longitude;
//     alert(mesg);
//   });
// });
