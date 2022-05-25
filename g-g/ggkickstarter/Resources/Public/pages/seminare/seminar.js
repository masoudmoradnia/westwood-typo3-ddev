{
  const seminar = {
    el: '#tx-ww-seminars',
    data() {
      return {
        status: true,
        first_attempt_add_person: true,
        msg: [],
        api_url: env.dev.api_url,
      }
    },
    mounted() {
      // this.loadAreas();
    },
    computed: {
      personFormField: function () {
        return $('#person-container').html()
      },
    },
    methods: {
      submitForm(event) {
        event.preventDefault()
        let form = $('#seminar_form')
        let formData = form.serialize()
        let that = this
        $.post('?type=225898745', formData, function (data, status) {
          that.status = data.status
          if (data.status == 'success') {
            document.getElementById('seminar_form').reset()
          }
          that.msg = data.msg
        })
        // this.$refs["ww-fabricatorsearch__form"].submit();
      },
      add_person(event) {
        event.preventDefault()

        $('#person-container').append(this.personFormField)
      },
    },
  }

  if (document.querySelector(seminar.el)) {
    new Vue(seminar)
  }
}
