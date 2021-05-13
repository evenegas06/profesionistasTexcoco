const btnTheme = document.querySelector("#theme");

btnTheme.addEventListener("click", () => {
    document.body.classList.toggle("dark");
    btnTheme.classList.toggle("active");
});