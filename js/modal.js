function openModal() {
    document.querySelector(".modal-icon").classList.remove("removed");
}
function closeModal() {
    document.querySelector(".modal-icon").classList.add("removed");
}
function openDanger() {
    document.querySelector(".danger-modal").classList.remove("close-modal");
    setTimeout(() => { document.querySelector(".danger-modal").classList.add("close-modal"); }, 2500);
}