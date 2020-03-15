<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP page</title>
    </head>
    <body>
        <div>hello</div>
        <?php 
        $name = $_POST["name"];
        printf("Your name: $name");
        $univer = $_POST["univer"];
        printf("<br>Your university: $univer");
        $email = $_POST["email"];
        printf("<br>Your email: $email");
        $pwd = $_POST["pwd"];
        printf("<br>Your password: $pwd");
        $gender = $_POST["optradio"];
        printf("<br>Your gender: $gender");
        ?>
        
    </body>
</html>
