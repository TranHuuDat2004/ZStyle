const toggle = document.querySelector(".menu-toggle");
const menu = document.querySelector(".menu-mobile");
const closeMenu = document.querySelector(".close-menu");
toggle.addEventListener("click", handleToggleMenu);
function handleToggleMenu() {
  menu.classList.add("is-show");
}
closeMenu.addEventListener("click", handleClose);
function handleClose() {
  menu.classList.remove("is-show");
}
document.addEventListener("click", handleClickOutMenu);
function handleClickOutMenu(event) {
  if (!menu.contains(event.target) && !event.target.matches(".menu-toggle")) {
    menu.classList.remove("is-show");
  }
}
