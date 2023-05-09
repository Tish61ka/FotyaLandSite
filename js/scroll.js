window.addEventListener('scroll', function () {
  if (pageYOffset > 100) {
    document.querySelector("nav").style.backgroundColor = "white";
    document.querySelector("nav").style.borderBottom = "0.01px" + " " + "solid" + " " + "rgba(" + 32 + "," + 32 + "," + 32 + "," + 0.5 + ")";
  }
  else if (pageYOffset <= 100) {
    document.querySelector("nav").style.backgroundColor = "transparent";
    document.querySelector("nav").style.borderBottom = "none";
  }
});