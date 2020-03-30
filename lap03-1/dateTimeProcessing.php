<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Date Time Processing</title>
    </head>
    <body>
        Enter your name and select date and time for the appointment:
        <br>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="GET">
            <table>
                <tr>
                    <td colspan="2">
                        Your name :
                    </td>
                    <td colspan="3">
                        <input type="text" name="name" id="name">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" >Date :</td>
                    <td ><input type="date" name="year"></td>
                </tr>
                <tr>
                    <td colspan="2">Time :</td>
                    <td><input type="time" name="time"></td>
                </tr>
                <tr>
                    <td align="right" colspan="2"> <input type="submit" value="Submit"></td>
                    <td align="left"> <input type="reset" value="Reset"></td>
                </tr>
            </table>
            <?php
            $name = $_GET["name"];
            $year = $_GET["year"];
            $time = $_GET["time"];
            $year_format = date('D, d M Y',strtotime($year));
            $getYear = date('Y',strtotime($year));
            print("Hi $name!<br>");
            print("You have an appointment on $time, $year_format.");
            if(is_leap_year($getYear)){
                print("<br>$getYear is leap year.");
            }
            else{
                print("<br>$getYear is not a leap year.");
            }
            $getDate = date("t", strtotime($year));
            print("<br>This month has $getDate days.");
            ?>

            <?php
                function is_leap_year($year)
                {
                    return ((($year % 4) == 0) && ((($year % 100) != 0) || (($year %400) == 0)));
                }
            ?>
        </form>

        
    </body>
</html>

