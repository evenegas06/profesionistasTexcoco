let menuToggle = document.querySelector(".menu-toggle");
let menuToggleIcon = document.querySelector(".menu-toggle i");
let menu = document.getElementById("menu");
let intro = document.getElementById('intro');

menuToggle.addEventListener("click", e =>   {
    menu.classList.toggle("show");

    if (menu.classList.contains("show")) {
        menuToggleIcon.setAttribute("class", "fa fa-times");
        intro.classList.add("prueba--x");

    } else {
        menuToggleIcon.setAttribute("class", "fa fa-bars");
        intro.style.backgroundColor = 'transparent'; 
        // intro.classList.add("prueba--x1");
    }
});



