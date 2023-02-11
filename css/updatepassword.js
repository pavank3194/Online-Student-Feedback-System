let pass1=document.getElementById("password-1")
let pass2=document.getElementById("password-2")
let pass3=document.getElementById("password-3")

let text1=document.getElementById("password-update")
let text2=document.getElementById("password-error")

function passwordfunction(){
    let n1=pass1.value
    let n2=pass3.value
    let n3=pass2.value

    if(n1==="pavan@123" && n2==n3){
        text1.textContent="Updation Successful !"
        text2.textContent=""

    }
    else if(n1==="pavan@123" && n2!=n3){
        // pass2.val.innertext="re enter ! "
        // pass2.val.innertext="re enter ! "
        text2.textContent="Enter correct Password !"
        text1.textContent=""

    }
    else{
        text2.textContent="Enter correct Password !"
        text1.textContent=""
        // pass1.val.innertext="Enter Correct Passwoed ! "
    }
}

function resetfunction(){
    pass1.value=""
    pass2.value=""
    pass3.value=""
    text2.textContent=""
    text1.textContent=""

}