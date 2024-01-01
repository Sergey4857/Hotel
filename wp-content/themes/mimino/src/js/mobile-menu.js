const button = document.querySelector(".btn-mobile-menu");
const header = document.querySelector(".header-items");
const body = document.body;

button.addEventListener("click", onClick);

function onClick() {
  header.classList.toggle("active");
  button.classList.toggle("active");
  body.classList.toggle("modal-open");
}
