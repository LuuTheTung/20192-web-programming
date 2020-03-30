<!DOCTYPE html>
<html>
    <head>
        <title>
            Convert degree to radian
        </title>
    </head>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
            Enter a number :
            <input type="text" name ="number" >
            <br>
            <input type="radio" name="function" value="1" checked> Degree to Radian
            <input type="radio" name="function" value="2"> Radian to Degree
            <br>
            <input type="submit" value="Submit">
            <input type="reset" value="Reset">
            <?php
            
                if(!empty($_GET["number"])){
                    $number = $_GET["number"];
                    if(is_numeric($number)){
                        $function = $_GET["function"];
                        $result = 0;
                        if($function == 1){
                            print("<br>Converted degree to radian.");
                            $result = degToRad($number);
                        }
                        elseif($function == 2){
                            print("<br>Converted radian to degree.");
                            $result = radToDeg($number);
                        } 
                        print ("<br><font color=green>Result = $result</font>");
                    }else{
                        print "<br><font color=red>Wrong number format!</font>";
                    }
                }
                else {
                    print "<br><font color=red>Wrong number format!</font>";
                }
            ?>
        </form>
        <?php
            function degToRad($number){
                return $number * M_PI / 180;
            }
            function radToDeg($number){
                return $number * 180 / M_PI;
            }
        ?>
    </body>
</html>
