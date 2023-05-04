

function displayDateAndTime(){

    let time = getCurrentTime();
    let date = getCurrentDate();

    document.getElementById("time").innerHTML = date+ " " +time;
    
}

function getCurrentTime(){
    const time = new Date();

    let hour = time.getHours();
    let minute = time.getMinutes();
    let seconds = time.getSeconds();

    let fullTime = hour+":"+minute+":"+seconds;
    return fullTime;


}

function getCurrentDate(){
    const now = new Date();

    
    let day = now.getDay();
    let month = now.getMonth();
    let dayNumb = now.getDate();
    let year = now.getFullYear();

    let date = "";

    switch(day){

        case 0:date += "Sunday, ";break;
        
        case 1:date += "Monday, ";break;

        case 2:date += "Tuesday, ";break;

        case 3:date += "Wednesday, "; break;                   

        case 4:date+="Thursday, ";break;
        
        case 5:date+="Friday. "; break;
        
        case 6: date+="Saturday, ";break;


    }

    switch (month){

        case 0:date += "January ";break;

        case 1:date += "February ";break;

        case 2:date += "March ";break;

        case 3: date +="April";break;

        case 4:date += "May ";break;

        case 5:date += "June ";break;

        case 6:date +="July "; break;

        case 7:date +="August "; break;

        case 8:date +="September"; break;
        
        case 9: date += "October"; break;

        case 10: date += "November"; break;

        case 11: date +="December"; break;

    }
    
    date += dayNumb + ", "+year;
  

    return date;

}




    setInterval(displayDateAndTime,1000);