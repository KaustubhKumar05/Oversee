const panel = document.getElementsByClassName("panel")[0];
const modal = document.getElementsByClassName("modal")[0];
const close = document.getElementById("closeModal");

document.addEventListener('click', (e) => {
    if (e.target.id == 'closeBtn')
        panel.classList.remove('view');
    else if (e.target.id == 'menuBtn')
        panel.classList.add('view');
    else if (e.target.id.toString().includes("row")) {
        modal.classList.add("modal-view");
    }
})

close.addEventListener('click', () => {
    modal.classList.remove("modal-view");
})
