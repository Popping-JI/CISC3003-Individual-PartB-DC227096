<?php

if(isset($_POST["submit"])) {
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];
    $email = $_POST["email"];
    

    include "../classes/dbh.inc.php";
    include "../classes/signup.classes.php";
    include "../classes/signup-contr.classes.php";

    $signup = new SignupContr($uid, $pwd,  $pwdRepeat, $email);

    // Error handlers
    // 1. Check for empty fields
    $signup->signupUser();

    //Going back to the front page
    header("location: ../index.php?error=none");

}