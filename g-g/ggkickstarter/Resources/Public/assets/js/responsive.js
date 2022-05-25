responsiveTargetGroup = (match) => {
  //   const targetGroupContainer = document.querySelector(".ww-targetgroupselect");
  const targetGroupItems = document.querySelectorAll(
    '.ww-targetgroupselect__item'
  )
  const targetGroupImg = document.querySelector(
    '.ww-targetgroupselect > aside > img'
  )

  targetGroupItems.forEach((item) => {
    item.addEventListener('mouseover', (event) => {
      targetGroupImg.src = item.dataset.img
    })
  })

  if (match) {
    targetGroupImg.src = targetGroupImg.dataset.src
  } else {
    targetGroupImg.src = ''
  }
}

const media768 = (query) => {
  const targetGroupContainer = document.querySelector('.ww-targetgroupselect')

  if (query.matches) {
    // If media query matches
    if (targetGroupContainer) responsiveTargetGroup(true)
  } else {
    if (targetGroupContainer) responsiveTargetGroup(false)
  }
}

const media992 = (query) => {
  if (query.matches) {
  } else {
  }
}

// Define Media Query
const queryMinWidth768 = window.matchMedia('(min-width: 768px)')
const queryMinWidth992 = window.matchMedia('(min-width: 992px)')

// Call listener function at run time
media768(queryMinWidth768)
media992(queryMinWidth992)

// Attach listener function on state changes
queryMinWidth768.addEventListener('change', media768)
queryMinWidth992.addEventListener('change', media992)





  const getParams = getParameters();
  console.log(getParams)
  if(getParams.consent_googlemap == 1) {
    document.getElementById('ww-fabricatorsearch-anchor').scrollIntoView({ behavior: 'smooth' })
  }
    function getParameters() {
        let urlString = window.location.href
        let get = {}
        let paramString = urlString.split('?')[1];
        let queryString = new URLSearchParams(paramString);
        for(let pair of queryString.entries()) {
          get[pair[0]] = pair[1]
         
        }
      return get
      
    }


