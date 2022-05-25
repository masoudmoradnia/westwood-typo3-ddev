{
  document.addEventListener('DOMContentLoaded', function () {
    document
      .querySelectorAll('.nav-item.dropdown.has-megamenu')
      .forEach(function (element) {
        element.addEventListener('mouseover', function (event) {
          hideAllDropdowns()
          const ddmenu = element.querySelector('.dropdown-menu.megamenu')
          if (ddmenu) {
            ddmenu.classList.add('show')
          }
        })
      })
    document
      .getElementById('ww-main__menu')
      .addEventListener('mouseout', () => {
        hideAllDropdowns()
      })

    /////// Prevent closing from click inside dropdown
    document.querySelectorAll('.dropdown-menu').forEach(function (element) {
      element.addEventListener('click', function (e) {
        e.stopPropagation()
      })
    })
  })
  // DOMContentLoaded  end

  function hideAllDropdowns() {
    document
      .querySelectorAll('.dropdown-menu.megamenu')
      .forEach((dd) => dd.classList.remove('show'))
  }
}
