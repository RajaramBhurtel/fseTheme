// arrow to top function

// Get the element
let topBtn = document.querySelector("#evit-fse-to-top");

// On Click, Scroll to the page's top, replace 'smooth' with 'auto' if you don't want smooth scrolling
topBtn.onclick = () => window.scrollTo({ top: 0, behavior: "smooth" });

// window.onload = () => (topBtn.style.opacity = 1);
// On scroll, Show/Hide the btn with animation
window.onscroll = () =>
  window.scrollY > 800
    ? (topBtn.style.opacity = 1)
    : (topBtn.style.opacity = 0);

//---------------------------------------------------------------------------------------------
//search button sidebar
let searchBtn = document.querySelector(".search-sidebar");
let aboutBtn = document.querySelector(".about-sidebar");
let searchBox = document.querySelector("#sidebar");
let aboutBox = document.querySelector("#about-us");
let close = document.querySelector("#close");
let closeAbout = document.querySelector("#close-about");

searchBtn.onclick = () => {
  searchBox.style.width = "25%";
  document.getElementById("overlay").style.display = "block";
  //prevent scroll after clicking button
  scrollTop = window.pageYOffset || document.documentElement.scrollTop;
  (scrollLeft = window.pageXOffset || document.documentElement.scrollLeft),
    // if any scroll is attempted, set this to the previous value
    (window.onscroll = function () {
      window.scrollTo(scrollLeft, scrollTop);
    });
};

aboutBtn.onclick = () => {
  aboutBox.style.width = "25%";
  document.getElementById("overlay").style.display = "block";
  //prevent scroll after clicking button
  scrollTop = window.pageYOffset || document.documentElement.scrollTop;
  (scrollLeft = window.pageXOffset || document.documentElement.scrollLeft),
    // if any scroll is attempted, set this to the previous value
    (window.onscroll = function () {
      window.scrollTo(scrollLeft, scrollTop);
    });
};

close.onclick = () => {
  searchBox.style.width = "0%";
  aboutBox.style.width = "0%";
  window.onscroll = function () {};
  document.getElementById("overlay").style.display = "none";
};
closeAbout.onclick = () => {
  aboutBox.style.width = "0%";
  window.onscroll = function () {};
  document.getElementById("overlay").style.display = "none";
};

function off() {
  document.getElementById("overlay").style.display = "none";
  searchBox.style.width = "0%";
  aboutBox.style.width = "0%";
  window.onscroll = function () {};
}
