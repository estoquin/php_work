alert("Copyright 2021, Nicolas Estoquin, All rights reserved.");

$(document).ready(function(){

});//End of document.ready

//ADD NEW ENTERPRISE
$('.form').submit(function(event){

    //Set the objet to send
    var formData = {
        'name'      :   $('input[name = name]').val(),
        'web'       :   $('input[name = web]').val(), 
        'email'     :   $('input[name = email]').val(),
        'about'      :   $('input[name = about]').val()
    }

    //AJAX
    $.ajax({
        type        : 'POST',          
        url         : 'app/add.php',   
        data        : formData
    })

    //If POST succss
    .done(function(response){
        if(response){
            $('#response').css("color", "green");
            $('#response').html("Added!");
        }
        else{
            $('#response').css("color", "red");
            $('#response').html("Failed!");
        }
    });

    event.preventDefault();

})


//MAIL ENTERPRISES!
function send(){


    var answer = confirm("Send mail?");
    //Get current date (https://stackoverflow.com/questions/1531093/how-do-i-get-the-current-date-in-javascript)
    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
    var yyyy = today.getFullYear();

    today = mm + '/' + dd + '/' + yyyy;

    if(answer){

        $('.response').css("color", "#28ADFF");
        $('.response').html("Sending!");

        $.ajax({
            type :'POST',
            url  :'app/mail.php',
            data : today
        })
        .done(function(response){
            $('.response').css("color", "green");
            $('.response').html("Sended!!");
        });
    }
    else{
        alert("Canceled");
    }
}