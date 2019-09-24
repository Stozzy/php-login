<?php
//start session
session_start();


$userName = $_POST["userName"];

if(trim($userName) == "Stan") {

    $_SESSION['isLogedIn'] = true;
    header('Location: ch12-protected-page.php');

} else {

    header('Location: ch12-login.php?badUserCredentials=true');

}
