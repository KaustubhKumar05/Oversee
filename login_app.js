const hr = document.getElementById("HR"),
    user = document.getElementById("User"),
    redirectTo = document.getElementById("redirectTo"),
    idField = document.getElementById("id"),
    pwdField = document.getElementById("pwd"),
    loginBtn = document.getElementById("loginBtn");

loginBtn.addEventListener('click', () => {
    if(hr.checked && authenticate(idField.value.toString(), pwdField.value.toString()))
        redirectTo.href = "HR/H_home.html";


    else if(user.checked && authenticate(idField.value.toString(), pwdField.value.toString()))
        redirectTo.href = "User/U_home.html";

})


const authenticate = (id, pwd) => {
    console.log(id, pwd);
    return true;
}