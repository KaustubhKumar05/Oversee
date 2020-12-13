const panel = document.getElementsByClassName("panel")[0],
    cat = document.getElementById("cat"),
    table =  document.getElementById('table'),
    reason = document.getElementById("reason"),
    from = document.getElementById("from"),
    to = document.getElementById("to"),
    newBtn = document.getElementById("newBtn");

let count = 1;
document.addEventListener('click', (e)=>{
    if(e.target.id == 'closeBtn')
        panel.classList.remove('view');
    else {
        if (e.target.id == 'menuBtn')
            panel.classList.add('view');
    }
})

newBtn.addEventListener("click", () =>{

    const newRow = table.insertRow(1);
    newRow.id = `leave-${count}-`;

    const id = newRow.insertCell(0),
        category = newRow.insertCell(1),
        fromDate = newRow.insertCell(2),
        toDate = newRow.insertCell(3),
        duration = newRow.insertCell(4),
        status = newRow.insertCell(5);

    id.innerText = (count).toString();
    newRow.id = `leave-${count}-Leaveid`;

    category.innerText = cat.value;
    category.id = `leave-${count}-Cat`;

    fromDate.innerText = formatDate(from.value.toString());
    fromDate.id= `leave-${count}-From`;

    toDate.innerText = formatDate(to.value.toString());
    toDate.id= `leave-${count}-Tp`;

    duration.innerHTML = getDuration(from.value, to.value).toString();
    duration.id = `comp-${count}-Duration`;

    status.innerText = "Pending";
    status.id = `comp-${count}-Status`;
    count++;
})

const getDuration = (from, to) => Math.ceil((new Date(to) - new Date(from)) / (1000 * 60 * 60 * 24));

const formatDate = to => {
    let val = to.split('-');
    return val.reverse().join('-');
}