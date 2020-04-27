<?php
$phone = $_POST["phone"];
$url = $_POST["url"];
$email = $_POST["email"];
function validating($phone)
{
    if (preg_match('/^[0-9]{10}+$/', $phone)) {
        echo "Valid $phone <br>";
    } else {
        echo "Invalid $phone <br>";
    }
}

function validateurl($url)
{
if (preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $url)) {
  echo "Valid URL: $url<br>";
}
else {
  echo "Invalid URL: $url<br>";
}
}

function validateEmail($email) {
    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo"Valid $email";
    }
    else{
        echo"Invalid $email";
    }
 }
validating($phone);validateurl($url);validateEmail($email);