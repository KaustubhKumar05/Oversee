const panel = document.getElementsByClassName("panel")[0];
const modal = document.getElementsByClassName("modal")[0];
const close = document.getElementById("closeModal");
var add = document.getElementById("add");
const varBtn = document.getElementById("addUpdate");
const remove = document.getElementById("remove");

document.addEventListener('click', (e) => {
    if (e.target.id == 'closeBtn')
        panel.classList.remove('view');
    else if (e.target.id == 'menuBtn')
        panel.classList.add('view');
    else if (e.target.id.toString().includes("emp-")) {
        varBtn.innerHTML = "Update";
        modal.classList.add("modal-view");
        remove.style.display = "inline";
        var empID =  e.target.id.split("-")[1];
        
        console.log(empID);

        $.ajax({
            url: "getEmployee.php",
            type: "post",
            data: {emp=empID} ,
            success: function (response) {
                
                var obj = JSON.parse(response);
                varBtn.innerHTML = obj['name'];


    
               // You will get response from your PHP page (what you echo or print)
            },
        });


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