<?php 
session_start();
// check is submit button clicked!

if (isset($_POST['submit'])) {
    
    // Grabing the data

    $uid = $_POST['uid'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $pwdrepeat = $_POST['pwdrepeat'];

    // Instantiate Signup Control class
    include "../classes/dbh.classes.php";
    include "../classes/signup.classes.php";
    include "../classes/signup-contr.classes.php";
    $signup = new SignupContr($uid, $email, $pwd, $pwdrepeat);

    // Running error handlers and user signup
    $signup->signupUser();

    // Going to back to front page
    header('location: ../index.php?error=none');
    
}