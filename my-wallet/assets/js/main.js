alert("Copyright 2021, Nicolas Estoquin, All rights reserved.");

function reset(){
    var answer = confirm('This is gonna delete al data from your records, are you sure you wanna do this?');
    if(answer == true){
        location.replace('../../app/reset.php');
    }
}

function erase(){
    var answer = confirm('This is gonna delete your user, there is no going back after this, are you sure?');
    if(answer == true){
        location.replace('../../app/delete.php');
    }
}

function pass(){
    var pass = document.getElementById("password1").value;
    var passcheck = document.getElementById("password2").value;

    if(pass =="" || passcheck ==""){
        document.getElementById("passcheck").innerHTML ="";
    }
    else if(pass == passcheck){
        console.log("Igual");
        document.getElementById("passcheck").style.color="green";
        document.getElementById("passcheck").innerHTML ="Valid!";
    }
    else{
        console.log("Not match");
        document.getElementById("passcheck").style.color="red";
        document.getElementById("passcheck").innerHTML ="Password not matching";
    }
}