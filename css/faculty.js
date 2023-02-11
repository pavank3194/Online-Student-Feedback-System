let pavan=document.getElementById("enter-mail1")
let rajesh=document.getElementById("enter-password1")
let ramesh=document.getElementById("faculty-btn")

let grp=document.getElementById("grpproject")

// grp.addEventListener("click" function(){
//     console.log("heyy")
//     if(pavan.value=="pavan@gmail.coom" && rajesh.value=="pavan"){
//         window.open("../faculty/faculty-main.html" , _self)
//     }else{
//         ramesh.textContent="INVALID LOGIN ATTEMP!"
//     }
// })



function faculty(){
    console.log("hey2")
    if( pavan.value=="admin@gmail.com" && rajesh.value=="sreepc@123" ){
        window.open("../faculty/faculty-main.html","_self")
    }
    else{
        ramesh.textContent="INVALID LOGIN "
    }
}