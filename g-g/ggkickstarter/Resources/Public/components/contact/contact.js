{
  const contact = {
    el: '#ww-contactform',
    data() {
      return {
        status: false,
        msg: [],
        api_url: env.dev.api_url,
      }
    },
    mounted() {
      // this.loadAreas();
    },
    methods: {
      submitForm(event) {
        event.preventDefault()
        let form = $('#contactform')
        let formData = form.serialize()
        let that = this
        $.post('?type=85986896522', formData, function (data, status) {
          that.status = data.status
          if (data.status == 'success') {
			document.getElementById('validation_message').scrollIntoView({ behavior: 'smooth', block: 'center' });
            document.getElementById('contactform').reset()
          }
          that.msg = data.msg
        })
        // this.$refs["ww-fabricatorsearch__form"].submit();
      },
    },
  }

  if (document.querySelector(contact.el)) {
    new Vue(contact)
  }
}
