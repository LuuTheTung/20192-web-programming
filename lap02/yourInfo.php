<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="\PhpProject1\bootstrap-4.4.1-dist\css\bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="\PhpProject1\bootstrap-4.4.1-dist\js\bootstrap.min.js"></script>
        <title>PHP Page Personal Infomation</title>
    </head>
    <body>
        <?php 
        $name = $_POST["name"];
        $univer = $_POST["univer"];
        $email = $_POST["email"];
        $pwd = $_POST["pwd"];
        $gender = $_POST["optradio"];
        $hobbies = $_POST["hobbies"];

        printf("Your name: $name");
        printf("<br>Your university: $univer");
        printf("<br>Your email: $email");
        printf("<br>Your password: $pwd");
        printf("<br>Your gender: $gender");
        printf("<br>Hobbies :");
        if(empty($hobbies)){
            print "No hobby";
        }
        elseif(!empty($hobbies)){
            print "<ol>";
            foreach ($hobbies as $hb){
                print "<li>$hb</li>";
            }
            print "</ol>";
        }
        ?>
        
    </body>
</html>
