// const targetGroupContainer = document.querySelector(".ww-targetgroupselect");
// const targetGroupItems = document.querySelectorAll(
//   ".ww-targetgroupselect__item"
// );
// const targetGroupImg = document.querySelector(
//   ".ww-targetgroupselect > aside > img"
// );

// // const imageContainer = document.createElement("aside");
// // const img = document.createElement("img");
// // img.src = "https://picsum.photos/id/237/600";
// // imageContainer.append(img);

// targetGroupItems.forEach((item) => {
//   item.addEventListener("mouseover", (event) => {
//     targetGroupImg.src = item.dataset.img;
//   });
// });

// // const imgUrls = [
// //   ...document.querySelectorAll(".ww-targetgroupselect__item"),
// // ].map((item) => {
// //   return item.dataset.img;
// // });

// // let asideExists = false;

// function myFunction(x) {
//   if (x.matches) {
//     // If media query matches

//     targetGroupImg.src = targetGroupImg.dataset.src;

//     // if (asideExists) return;

//     // const imgs = imgUrls.forEach((url) => {
//     //   const img = document.createElement("img");
//     //   img.src = url;
//     //   imageContainer.append(img);
//     // });

//     // targetGroupContainer.append(imageContainer);
//     // asideExists = true;
//   } else {
//     targetGroupImg.src = "";
//   }
// }

// const x = window.matchMedia("(min-width: 768px)");
// myFunction(x); // Call listener function at run time
// x.addEventListener("change", myFunction); // Attach listener function on state changes
