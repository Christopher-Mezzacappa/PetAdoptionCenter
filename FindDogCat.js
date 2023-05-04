function validate(){


    let form = document.getElementById("formDogCat"); 
    
    let dog = document.getElementById("dogInput").checked; //checkBox
    let cat = document.getElementById("catInput").checked; //checkBox
    
    let breed = document.getElementById("breedInput").value;
    let age = document.getElementById("ageInput").value;
    let gender = document.getElementById("genderInput").value;
    
    let genderAny = document.getElementById("genderAny").checked; //checkBox
    let ageAny = document.getElementById("ageAny").checked; //checkBox
    let breedAny = document.getElementById("breedAny").checked; //checkBox

    let getAlongD = document.getElementById("getAlongDogs").checked; //checkBox
    let getAlongC = document.getElementById("getAlongCats").checked; //checkBox
    let getAlongK = document.getElementById("getAlongkids").checked; //checkBox 

    
    if(dog==false && cat==false){
        alert("Missing field for Dog or Cat");
        return false;
    }

    if(breed =="" && breedAny == false){
        alert("Missing info for Breed");
        return false;
    }
    if(age =="" && ageAny == false){
        alert("Missing info for age");
        return false;
    }
    if(gender =="" && genderAny == false){
        alert("Missing info for gender");
        return false;
    }

    if(getAlongD == false && getAlongC == false && getAlongK == false){
        alert("Missing info in Get Along section, select all if all apply");
        return false;
    }

    alert("You have successfully submited the form!");
    

   
    
}


