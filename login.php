<?php
$user = "Sarah";
$pass = "5678";

$verify = [
    "Sarah" => "1234",
    "Llano" => "5678"
];

switch ($user){
    case "Sarah":
        if ($pass === $verify ["Sarah"]){
            echo "You are logged in as Sarah";
        }
        else{
            echo "Password is incorrect!";
        }
        break;
    case "Llano":
        if ($pass === $verify ["Llano"]){
            echo "You are logged in as Llano";
        }
        else{
            echo "Password is incorrect!";
        }
        break;
    default:
    echo "Account not found!";
    break;

}
?>