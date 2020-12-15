const panel = document.getElementsByClassName("panel")[0];
const modal = document.getElementsByClassName("modal")[0];
const close = document.getElementById("closeModal");
var add = document.getElementById("add");
const varBtn = document.getElementById("addUpdate");
const remove = document.getElementById("remove");

var empID;
document.addEventListener('click', (e) => {
    if (e.target.id == 'closeBtn')
        panel.classList.remove('view');
    else if (e.target.id == 'menuBtn')
        panel.classList.add('view');
    else if (e.target.id.toString().includes("emp-")) {
        varBtn.innerHTML = "Update";
        modal.classList.add("modal-view");
        remove.style.display = "inline";
    
        empID =  e.target.id.split("-")[1];
        console.log(empID);

        $.ajax({
            url: "../php_script/getEmployee.php",
            type: "post",
            data: {'emp':empID} ,
            success: function (response) {
                var obj = JSON.parse(response);
                console.log(obj['name']);


                document.getElementById("empid").Value=obj['empID'];
                document.getElementById("name").value=obj['name'];
                document.getElementById("phone").value=obj['phone'];
                document.getElementById("email").value=obj['email'];
                document.getElementById("desig").value=obj['designation'];
                document.getElementById("dept").value=obj['department'];
                document.getElementById("rating").value=obj['rating'];
                document.getElementById("projcount").value=obj['rating'];
                document.getElementById("DOB").value=obj['DOB'];
                document.getElementById("address").value=obj['Address'];
                document.getElementById("aadhar").value=obj['Aadhar'];
                document.getElementById("bankname").value=obj['Bank_name'];
                document.getElementById("accname").value=obj['Account_name'];
                document.getElementById("accno").value=obj['Account_no'];
                document.getElementById("ifsc").value=obj['IFSC'];
                document.getElementById("bname").value=obj['Branch_name'];
                document.getElementById("sal").value=obj['Salary'];
                document.getElementById("loginid").value=obj['Login'];
    
               // You will get response from your PHP page (what you echo or print)
            },
        });


    }
});

close.addEventListener('click', () => {
    modal.classList.remove("modal-view");
});

add.addEventListener('click', () => {
    addItem();
});

remove.addEventListener("click",()=>{
    $.ajax({
        url: "../php_script/deleteEmployee.php",
        type: "post",
        data: {'emp':empID} ,
        success: function (response) {
            console.log(response);
            window.location.replace("H_home.php");
        }
    });

});

const addItem = () => {
    varBtn.innerHTML = "Add";
    remove.style.display = "none";
    modal.classList.add("modal-view")
}