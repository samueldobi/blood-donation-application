<?php 


// THIS IF STATEMENT CHECKS IF THE USER CLICKED ON THE SUBMIT BUTTON ON THE HTML FORM
if ( $_SERVER["REQUEST_METHOD"] === "POST"){
    $username =  $_POST["username"];
    $email =  $_POST["email"];
    $pwd =  $_POST["password"];



    try {
        //code...
    } catch (PDOException $e) {
        die("Connection failed: " . $e->getMessage() . " (Error code: " . $e->getCode() . ")");
    }
    // REQUIRE THE NECCESARY FILES
    require_once './includes/dbh.inc.php';
    require_once 'signup_model.inc.php';
    require_once 'signup_control.inc.php';

    // ERROR HANDLERS

    //CREATE USER FUNCTION




}else{
    header("Location:.../index.php");
    die();
}