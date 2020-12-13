const panel = document.getElementsByClassName("panel")[0],
    cat = document.getElementById("cat"),
    table =  document.getElementById('table'),
    sub = document.getElementById("sub"),
    newBtn = document.getElementById("newBtn");

let count = 1;
document.addEventListener('click', (e)=>{
    if(e.target.id == 'closeBtn')
        panel.classList.remove('view');
    else if(e.target.id == 'menuBtn')
        panel.classList.add('view');
})

newBtn.addEventListener("click", () =>{

    const newRow = table.insertRow(1);
    newRow.id = `leave-${count}-`;

    const id = newRow.insertCell(0),
        category = newRow.insertCell(1),
        subject = newRow.insertCell(2),
        date = newRow.insertCell(3),
        time = newRow.insertCell(4),
        status = newRow.insertCell(5);

    id.innerText = (count).toString();
    newRow.id = `comp-${count}-Compid`;

    category.innerText = cat.value;
    category.id = `comp-${count}-Cat`;

    subject.innerText = sub.value.toString();
    subject.id= `comp-${count}-Sub`;

    let d = new Date();
    date.innerText = d.getDate().toString() +'-'+ (d.getMonth() + 1).toString() +'-'+ d.getFullYear().toString();
    cat.id = `comp-${count}-Date`;

    time.innerText = d.getHours().toString() +':'+ d.getMinutes().toString();
    cat.id = `comp-${count}-Time`;

    status.innerText = "Pending";
    status.id = `comp-${count}-Status`;

    count++;

    console.log(newRow);
})