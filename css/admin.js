let mail=document.getElementById("enter-mail")
let password=document.getElementById("enter-password")
let err=document.getElementById("adminlogin-error")

function adminlogin(){
    if( mail.value=="admin@gmail.com" && password.value=="admin" ){
        window.open("../admin/admin-login.html","_self")
    }
    else{
        err.textContent="INVALID LOGIN "
    }
}