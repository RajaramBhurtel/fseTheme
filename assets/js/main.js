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
