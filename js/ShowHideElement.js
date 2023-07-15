const ShowHideDomicileFormBtn = document.querySelector(".ShowHide-Domicile-form-btn");
const xx = document.querySelector(".input1");

ShowHideDomicileFormBtn.addEventListener("click", (e) => {
  xx.classList.toggle("show-input1");
});


const showHideImageBtn = document.querySelector(".ShowHide-Domicile-form-btn");
const img = document.querySelector(".content-choice-img");

showHideImageBtn.addEventListener("click", (e) => {
  img.classList.toggle("hideImg");
});






ShowHideAppelFormBtn = document.querySelector(".ShowHide-Appel-form-btn");
xy = document.querySelector(".input2");

ShowHideAppelFormBtn.addEventListener("click", (e) => {
    xx.classList.toggle("hide-input1");
    xy.classList.toggle("show-input2");
    
});

const showHideImageBtn2 = document.querySelector(".ShowHide-Appel-form-btn");
const img2 = document.querySelector(".content-choice-img");

showHideImageBtn2.addEventListener("click", (e) => {
 img2.classList.toggle("hideImg");
});