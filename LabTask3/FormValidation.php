<?php
require 'mydb.php';

$validateName = "";
$validateEmail = "";
$validUserName = "";
$genderValidation = "";
$validPassword = "";
$valiDate = "";
$flag=1;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Name = $_REQUEST["fname"];
    $email = $_REQUEST["email"];
    $password = $_REQUEST["password"];
    $confirmPassword = $_REQUEST["confirmPassword"];
    $date = $_REQUEST["birthday"];
    $userName = $_REQUEST["userName"];

    if (empty($name) || strlen($name) < 5 || !preg_match("/^[a-zA-Z-' ]*$/", $name)) {
        $validateName = "you must enter your name";
        $flag=0;
    } else {
        $validateName = "your name is " . $name;
    }
    if (empty($email) || !preg_match("/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/", $email)) {
        $validateEmail = "you must enter your email";
        $flag=0;
    } else {
        $validateEmail = "your email is " . $email;
    }
    if (empty($userName) || strlen($userName) < 5) {
        $validUserName = "you must enter your user name";
        $flag=0;
    } else {
        $validUserName = "your user name is " . $userName;
    }
    if (!isset($_REQUEST["gender"])) {
        $genderValidation = "select your gender";
        $flag=0;
    } else {
        $gender = $_REQUEST["gender"];
        $genderValidation = "your gender is " . $gender;
    }
    if (empty($password) || empty($confirmPassword)) {
        $validPassword = "enter valid password ";
        $flag=0;
    } elseif ($password != $confirmPassword) {
        $validPassword = "password not match";
        $flag=0;
    } elseif (strlen($password) < 8) {
        $flag=0;
        $validPassword = "password must contain at least 8 characters";
    } elseif (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/", $password)) {
        $flag=0;
        $validPassword = "condition  not match";
    } else {
        $validPassword = "password correct";
    }

    if (empty($date)) {
        $flag=0;
        $valiDate = "date field is required";
    } else {
        $valiDate = "select date is " . $date;
    }
    if($flag==1)
    {
        $connection = new db();
        $conobj=$connection->OpenCon();
        $connection->insertUserdata($connection, $Name,$Email,$UserName,$Password,$Gender,$Date);
        $connection->CloseCon($conobj);
        echo "inserted";
    }
}
