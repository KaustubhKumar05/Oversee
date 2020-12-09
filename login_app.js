const hr = document.getElementById("HR"),
    user = document.getElementById("User"),
    redirectTo = document.getElementById("redirectTo"),
    loginBtn = document.getElementById("loginBtn");

loginBtn.addEventListener('click', () => {
    if(hr.checked && authenticate())
        redirectTo.href = "HR/H_home.html";

    else if(user.checked && authenticate())
        redirectTo.href = "User/U_home.html";
})


const authenticate = () => {
    //you can code it here
    return true;
}