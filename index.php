<?php
//& Task 1

phpinfo()

//&task 2

 define("WEBSITE_NAME", "New Website");
 echo WEBSITE_NAME."<br>";

//& Task 3

echo "Server Name: ".$_SERVER['SERVER_NAME']."<br>";
echo "Server Address: ".$_SERVER['SERVER_ADDR']."<br>";
echo "Server Port: ".$_SERVER['SERVER_PORT']."<br>";
echo "Filename: ".basename(__FILE__)."<br>";
echo "Path: ".dirname(__FILE__)."<br>";

//& Task 4
$age = 10;
switch($age){
    case $age < 5:
        echo "Stay at home";
        break;
    case $age == 5:
        echo "Go to Kindergarten";
        break;
    case ($age > 5 && $age <= 12):
        echo "Go to grade: ".$age;
        break;
    default:
        echo "Invalid age";
}
?>