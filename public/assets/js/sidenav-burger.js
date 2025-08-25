// sidenav transition-burger

// ✅ Pastikan variable page selalu ada
if (typeof window.page === "undefined") {
    window.page = "dashboard"; // default value
}

var sidenav = document.querySelector("aside");
var sidenav_trigger = document.querySelector("[sidenav-trigger]");
var sidenav_close_button = document.querySelector("[sidenav-close]");

// ✅ Cek dulu biar nggak error kalau elemen tidak ada
if (sidenav && sidenav_trigger) {
    var burger = sidenav_trigger.firstElementChild;
    var top_bread = burger ? burger.firstElementChild : null;
    var bottom_bread = burger ? burger.lastElementChild : null;

    sidenav_trigger.addEventListener("click", function () {
        if (window.page === "virtual-reality") {
            sidenav.classList.toggle("xl:left-[18%]");
        }

        if (sidenav.getAttribute("aria-expanded") === "false") {
            sidenav.setAttribute("aria-expanded", "true");
        } else {
            sidenav.setAttribute("aria-expanded", "false");
        }

        sidenav.classList.toggle("translate-x-0");
        sidenav.classList.toggle("ml-6");
        sidenav.classList.toggle("shadow-xl");

        // Animasi burger
        if (top_bread && bottom_bread) {
            if (window.page === "rtl") {
                top_bread.classList.toggle("-translate-x-[5px]");
                bottom_bread.classList.toggle("-translate-x-[5px]");
            } else {
                top_bread.classList.toggle("translate-x-[5px]");
                bottom_bread.classList.toggle("translate-x-[5px]");
            }
        }
    });

    if (sidenav_close_button) {
        sidenav_close_button.addEventListener("click", function () {
            sidenav_trigger.click();
        });
    }

    window.addEventListener("click", function (e) {
        if (
            !sidenav.contains(e.target) &&
            !sidenav_trigger.contains(e.target)
        ) {
            if (sidenav.getAttribute("aria-expanded") === "true") {
                sidenav_trigger.click();
            }
        }
    });
}
