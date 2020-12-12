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

    const newRow = document.createElement("tr");
    newRow.id=`comp-${count}-`;

    const id = document.createElement("td");
    id.innerText = (count).toString();
    newRow.id = `comp-${count}-Compid`;

    const category = document.createElement("td");
    category.innerText = cat.value;
    category.id = `comp-${count}-Cat`;

    const subject = document.createElement("td");
    subject.innerText = sub.value.toString();
    subject.id= `comp-${count}-Sub`;

    let d = new Date();
    const date = document.createElement("td");
    date.innerText = d.getDate().toString() +'-'+ (d.getMonth() + 1).toString() +'-'+ d.getFullYear().toString();
    cat.id = `comp-${count}-Date`;

    const time = document.createElement("td");
    time.innerText = d.getHours().toString() +':'+ d.getMinutes().toString();
    cat.id = `comp-${count}-Time`;

    const status = document.createElement("td");
    status.innerText = "Pending";
    cat.id = `comp-${count}-Status`;

    newRow.appendChild(id);
    newRow.appendChild(category);
    newRow.appendChild(date);
    newRow.appendChild(time);
    newRow.appendChild(status);
    table.appendChild(newRow)
    count++;
    console.log(newRow);
})