const panel = document.getElementsByClassName("panel")[0];
const modal = document.getElementsByClassName("modal")[0];
const close = document.getElementById("closeModal");
const approveleave = document.getElementById("accept_leave");
const declineleave = document.getElementById("decline_leave");
var leave;

document.addEventListener('click', (e) => {
    if (e.target.id == 'closeBtn')
        panel.classList.remove('view');
    else if (e.target.id == 'menuBtn')
        panel.classList.add('view');
    else if (e.target.id.toString().includes("lea-")) {
        modal.classList.add("modal-view");
        leave = e.target.id.split("-")[1];

        $.ajax({
            url: "../php_script/fetchleave.php",
            type: "post",
            data: {'leave':leave} ,
            success: function (response) {
                
                var obj = JSON.parse(response);
                
                document.getElementById("leaveid")
                document.getElementById("category")
                document.getElementById("from")
                document.getElementById("to")
                document.getElementById("dura")
                document.getElementById("status")



                window.location.replace("H_leaves.php");
            }
        });

    }
});

close.addEventListener('click', () => {
    modal.classList.remove("modal-view");
});

approveleave.addEventListener('click',(e)=>{
    $.ajax({
        url: "../php_script/leaveapproval.php",
        type: "post",
        data: {'leave':leave,'result':'Approved'} ,
        success: function (response) {
            console.log(response);
            window.location.replace("H_leaves.php");
        }
    });


})

declineleave.addEventListener('click',(e)=>{
    $.ajax({
        url: "../php_script/leaveapproval.php",
        type: "post",
        data: {'leave':leave,'result':'Declined'} ,
        success: function (response) {
            console.log(response);
            window.location.replace("H_leaves.php");
        }
    });


})