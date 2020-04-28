const noteBtn = document.querySelector("#note-btn");
const modal = document.querySelector(".modal");
const close = document.querySelector(".close");



noteBtn.addEventListener("click",toggleModal);

close.addEventListener("click",toggleModal);

function toggleModal() {
 modal.classList.toggle("is-open");
}