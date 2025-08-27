// work with sidebar
var btn = document.getElementById("sliderBtn"),
    sideBar = document.getElementById("sideBar"),
    sideBarHideBtn = document.getElementById("sideBarHideBtn");

// show sidebar
btn.addEventListener("click", function () {
    sideBar.classList.remove("-translate-x-full");
    // sideBar.classList.add("translate-x-1/2");
});

// hide sideBar
sideBarHideBtn.addEventListener("click", function () {
    sideBar.classList.add("-translate-x-full");
    // sideBar.classList.remove("translate-x-1/2");
});
// end with sidebar
