<html>
    <head>
        <title>PHP String Variables</title>
    </head>
    <body>
        <?php
            $first_name = "Luu";
            $last_name = "Tung";
            $full_name1 = $first_name.$last_name;
            $full_name2 = "$last_name $first_name";
            $len = strlen($full_name2);
            $lower = strtolower($full_name1);
            $upper = strtoupper($full_name1);
            print("Full name = $full_name1 or $full_name2<br></br>");
            print("Lower case : $lower<br></br>");
            print("Upper case : $upper<br></br>");
            print("Length = $len");
            
        ?>
    </body>
</html>