<?php 
session_start();
// check is submit button clicked!

if (isset($_POST['submit'])) {
    
    // Grabing the data

    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];

    // Instantiate Login Control class
    include "../classes/dbh.classes.php";
    include "../classes/login.classes.php";
    include "../classes/login-cortr.classes.php";
    $login = new LoginContr($uid, $pwd);

    // Running error handlers and user Login
    $login->loginUser();

    // Going to back to front page
    header('location: ../index.php?error=none');
    
}