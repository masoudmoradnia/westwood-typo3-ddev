{
  const referenceFilterBox = document.getElementById('ww-reference__filter')

  if (referenceFilterBox) {
    function toggleReferenceFilterBox() {
      if (queryMinWidth992.matches) {
        referenceFilterBox.classList.add('show')
      } else {
        referenceFilterBox.classList.remove('show')
      }
    }

    toggleReferenceFilterBox()

    queryMinWidth992.addEventListener('change', () => {
      toggleReferenceFilterBox()
    })
  }
}
// const systemToggleBoxes = document.querySelectorAll(".ww-systems__toggle");

// if (systemToggleBoxes) {
//   function toggleSystemBoxes() {
//     if (queryMinWidth768.matches) {
//       systemToggleBoxes.forEach((box) => {
//         box.querySelector(".collapse").classList.add("show");
//       });
//     } else {
//       systemToggleBoxes.forEach((box) => {
//         box.querySelector(".collapse").classList.remove("show");
//       });
//     }
//   }

//   toggleSystemBoxes();

//   queryMinWidth768.addEventListener("change", () => {
//     toggleSystemBoxes();
//   });
// }
