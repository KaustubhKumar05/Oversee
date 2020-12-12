const panel = document.getElementsByClassName("panel")[0];
const modal = document.getElementsByClassName("modal")[0];
const close = document.getElementById("closeModal");
const add = document.getElementById("add");
const varBtn = document.getElementById("addUpdate");
const remove = document.getElementById("remove");

document.addEventListener('click', (e) => {
    if (e.target.id == 'closeBtn')
        panel.classList.remove('view');
    else if (e.target.id == 'menuBtn')
        panel.classList.add('view');
    else if (e.target.id.toString().includes("dept-")) {
        varBtn.innerHTML = "Update";
        modal.classList.add("modal-view");
        remove.style.display = "inline";
    }
})

close.addEventListener('click', () => {
    modal.classList.remove("modal-view");
})

add.addEventListener('click', () => {
    addItem()
})

const addItem = () => {
    varBtn.innerHTML = "Add";
    remove.style.display = "none";
    modal.classList.add("modal-view")
}