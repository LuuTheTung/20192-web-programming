<!DOCTYPE html>

<html>
    <head>
        <title>Date Time Function</title>
    </head>

    <body>
        <h4>Birthdays</h4>

        <?php
            function age($timestamp) {
                return (int) (abs(time() - $timestamp) / (60 * 60 * 24 * 365));
            }
        ?>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
        <table>
                <tr>
                    <td colspan="2">
                    Name of first person :
                    </td>
                    <td colspan="3">
                        <input type="text" name="name1" id="name1" maxlength="20">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" >Birthday of first person :</td>
                    <td ><input type="date" name="birthday1"/></td>
                </tr>
                <tr>
                    <td colspan="2">
                    Name of second person :
                    </td>
                    <td colspan="3">
                        <input type="text" name="name2" id="name2" maxlength="20">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" >Birthday of second person :</td>
                    <td ><input type="date" name="birthday2"/></td>
                </tr>
                <tr>
                    <td align="right" colspan="2"> <input type="submit" value="Submit"></td>
                    <td align="left"> <input type="reset" value="Reset"></td>
                </tr>
            </table>
            
            <?php
                    $birthday1 = $_POST["birthday1"];
                    $birthday2 = $_POST["birthday2"];
                    $time1 = strtotime($birthday1);
                    $time2 = strtotime($birthday2);
                    $age1 = age($time1);
                    $age2 = age($time2);
                    $birthday_f = date('D, d M Y',$time1);
                    $birthday_s = date('D, d M Y',$time2);
                    if ($time1 == FALSE) {
                        print("<font color=red>First person's birthday is invalid.</font><br>");
                    } else {
                        print("<font color=blue>First person's birthday is $birthday_f. First person is  $age1 years old.</font><br>");
                    }
                    
                    if ($time2 == FALSE) {
                        print("<font color=red>Second person's birthday is invalid.</font>");
                    } else {
                        print("<font color=blue>Second person's birthday is $birthday_s. First person is  $age2 years old.</font>");
                    }
                    
                    if ($time1 !== FALSE && $time2 !== FALSE) {
                        $day_different = abs ($time2 - $time1) / 60 / 60 / 24;
                        print "<br>There are $day_different days " . " between first person's birthday and second person's birthday.<br>"; 
                        print "There are ".abs($age2 - $age1). " year(s) between first person's birthday and second person's birthday.";
                    }
                
            ?>
        </form>
        
       
    </body>
</html>


