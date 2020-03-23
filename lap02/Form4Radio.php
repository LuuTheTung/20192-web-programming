<html>
    <head>
        <title> Receiving Input </title> 
    </head>
    <body>
        <?php
        print ("Got Your Input");
        $email = $_POST["email"];
        $optradio = $_POST["optradio"];
        print ("<br>Your email address is : $email");
        print ("<br> Contact preference is : $optradio");
        ?>
    </body>
</html>