import "./bootstrap";
import "../css/app.css";
var themeToggleDarkIcon = document.getElementById("theme-toggle-dark-icon");
var themeToggleLightIcon = document.getElementById("theme-toggle-light-icon");
var header = document.querySelector("header");
var logo = header.querySelector("img");
var footerLogo = document.querySelector("#footer-logo");

// Change the icons inside the button based on previous settings
if (
    localStorage.getItem("color-theme") === "dark" ||
    (!("color-theme" in localStorage) &&
        window.matchMedia("(prefers-color-scheme: dark)").matches)
) {
    themeToggleLightIcon.classList.remove("hidden");
    logo.setAttribute("src", "/assets/logo-dark.png");
    footerLogo.setAttribute("src", "/assets/logo-dark.png");
} else {
    themeToggleDarkIcon.classList.remove("hidden");
    logo.setAttribute("src", "/assets/logo-light.png");
    footerLogo.setAttribute("src", "/assets/logo-light.png");
}

var themeToggleBtn = document.getElementById("theme-toggle");

themeToggleBtn.addEventListener("click", function () {
    themeToggleDarkIcon.classList.toggle("hidden");
    themeToggleLightIcon.classList.toggle("hidden");

    // if set via local storage previously
    if (localStorage.getItem("color-theme")) {
        if (localStorage.getItem("color-theme") === "light") {
            document.documentElement.classList.add("dark");
            localStorage.setItem("color-theme", "dark");
            logo.setAttribute("src", "/assets/logo-dark.png");
            footerLogo.setAttribute("src", "/assets/logo-dark.png");
        } else {
            document.documentElement.classList.remove("dark");
            localStorage.setItem("color-theme", "light");
            logo.setAttribute("src", "/assets/logo-light.png");
            footerLogo.setAttribute("src", "/assets/logo-light.png");
        }

        // if NOT set via local storage previously
    } else {
        if (document.documentElement.classList.contains("dark")) {
            document.documentElement.classList.remove("dark");
            localStorage.setItem("color-theme", "light");
            logo.setAttribute("src", "/assets/logo-light.png");
            footerLogo.setAttribute("src", "/assets/logo-light.png");
        } else {
            document.documentElement.classList.add("dark");
            localStorage.setItem("color-theme", "dark");
            logo.setAttribute("src", "/assets/logo-dark.png");
            footerLogo.setAttribute("src", "/assets/logo-dark.png");
        }
    }
});
