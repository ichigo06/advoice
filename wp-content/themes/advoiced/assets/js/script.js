let buttonMenu = document.querySelectorAll('#primary-menu li');
buttonMenu.forEach((item) => {
    item.addEventListener("click" , filterButton)
})
function filterButton() {
    button.forEach((item) => {
        item.classList.remove("item-image-active");
    })
    this.classList.add("item-image-active");
}
