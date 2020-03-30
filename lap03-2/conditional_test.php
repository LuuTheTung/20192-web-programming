<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="\PhpProject1\bootstrap-4.4.1-dist\css\bootstrap.min.css">
        <title>Conditional test</title>
    </head>
    <body>
        <?php 
        $name = $_POST["name"];
        printf("Your name: $name");
        $mscore = $_POST["mscore"];
        printf("<br>Your midterm score: $mscore");
        $fscore = $_POST["fscore"];
        printf("<br>Your finalterm score: $fscore <br>");

        $final = (2*$mscore + 3*$fscore)/5;
        $rate;
        if($final> 89){
            print("Your final grade is $final. You got an A. Congratulation!");
            $rate = "A";
        } elseif($final >79){
            print("Your final grade is $final. You got a B.");
            $rate = "B";
        }elseif($final>69){
            print("Your final grade is $final. You got a C.");
            $rate = "C";
        }elseif($final>59){
            print("Your final grade is $final. You got a D.");
            $rate = "D";
        }elseif ($final>=0) {
            print("Your final grade is $final. You got a F.");
            $rate = "F";
        } else {
            print("Illegal grade less than 0. Final grade = $final");
            $rate = "Illegal";
        }
        print "<br><br>";
        switch($rate){
        case "A": print "Excellent!"; break;
        case "B": print "Good!"; break;
        case "C": print "Not bad!"; break;
        case "D": print "Normal!"; break;
        case "F": print "You have to try again!"; break;
        default : print "Illegal grade";
        }
        ?>
        
    </body>
</html>
