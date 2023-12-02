function validateForm(){
    var username=document.getElementById("uname").value;
    var password=document.getElementById("pwd").value;

    if(username==="" ,  password===""){
        alert ("All fields are required");
        return false
    }
    return true
    
}