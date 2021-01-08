<?php

    /*Mail*/ 
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    
    $mailSubjet = "Welcome to your personal wallet!";
    $msjb = "
    <!DOCTYPE html>
    <head>
        <style>
            .box{
                width: 30%;
                text-align: center;
                font-family: sans-serif;
                background-color: lightgreen;
                border-radius: 5px;
                padding: 2vh;
                margin: 2vh;
                padding-bottom: 4vh;
            }
        </style>
    </head>
    <body>
        <div class='box'>
            <h2>Welcome ";
            

    /* Between msjb and msja goes 'user' */
            
    $msja = "!</h2>
            <p>Welcome to your new personal wallet, we expect that this can be useful for you</p>
        </div>
    </body>
    </html>
    ";