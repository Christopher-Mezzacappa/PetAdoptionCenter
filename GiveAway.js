function validate(){
   
    let dog = document.getElementById("dog2").checked;
    let cat = document.getElementById("cat2").checked;
  
    let breed = document.getElementById("breed2").value;
    let mixed = document.getElementById("mixed").checked;
    
    let age = document.getElementById("age2").value;

    let gender = document.getElementById("gender2").value;

    let getAlongD = document.getElementById("getAlongD2").checked;
    let getAlongC = document.getElementById("getAlongC2").checked;
    let getAlongK = document.getElementById("getAlongK2").checked;

    let owner = document.getElementById("owner").value;;

    let email = document.getElementById("email").value;

    let emailCheck = validateEmail(email);

    if(dog == false && cat == false){
        alert("You must check atleast dog or cat");
        return false;
    }
    
    if(breed =="" && mixed==false){
        alert("Missing info for breed");
        return false;
    }
    
    if(age==""){
        alert("missing info for age");
        return false;
    }

    if(gender == ""){
        alert("missing info for gender");
        return false;
    }

    if(getAlongD == false && getAlongC == false && getAlongK== false){
        alert("missing info for getting along with field.");
        return false;
    }

    if(owner == false){
        alert("Missing owner");
        return false;
    }

    if(!emailCheck){
        alert("Invalid Email Adress");
        return false;
    }

    alert("You have successfully submite the information!");
    return true;






}

function validateEmail(email){
     const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
     return emailPattern.test(email);
}