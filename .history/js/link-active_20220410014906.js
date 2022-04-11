var center = document.getElementsByClassName("nav-link");
for (let i = 0; i < center.length; i++) {
  center[i].addEventListener("click", function (e) {
    for (let i = 0; i < center.length; i++) {
      center[i].classList.remove("active");
      e.target.classList.add("active");
    }
  });
}
