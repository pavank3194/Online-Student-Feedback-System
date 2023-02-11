let email=document.getElementById("enter-mail")
let passwordenter=document.getElementById("enter-password")
let btn=document.getElementById("student-btn")
let inv=document.getElementById("invalid-msg")

// btn.addEventListener("click",function(){

//     window.open("student-login.html","_self")


// })
function studentlogin(){
    if(email.value=="pavank3194@gmail.com" && passwordenter.value=="pavan@123"){
        window.open("../student/student-login.html","_self")
    }
    else{
        inv.textContent="INVALID LOGIN"
        // console.log("Invalid")
    }
}