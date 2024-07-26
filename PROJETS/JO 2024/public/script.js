const btnMore = document.querySelector(".a-equipes");
const modal = document.querySelector(".div-modal");

btnMore.addEventListener("click", () => {
    modal.style.display = "flex";
})

const closeBtn = document.querySelector(".close-btn");
closeBtn.addEventListener("click", () => {
    modal.style.display = "none";
})