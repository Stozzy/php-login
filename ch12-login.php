<?php
//start the session
session_start();
?>

<html>

<head>
    <title>ch12 - Form Processing</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<nav>
    <ul>
        <li><a href="ch12-login.php">Home Page</a></li>
        <li><a href="ch12-protected-page.php">Protected Page</a></li>
        <li><a href="#">Contact Page</a></li>
        <li><a href="ch12-logout.php">Logout Page</a></li>
    </ul>
</nav>
<main>
<?php

if(isset($_SESSION['isLoggedIn'])) {

    //the user logged in - don't show form and confuse the poor guy!
    echo "<p>You are already logged in buddy!</p>";

} else {

//using heredoc, to echo out the form
$theForm = <<<FORM

   <p>Welcome to WheatBook!</p>
   <h3>Please enter your user name and password to log in:</h2>
   <form method="post" action='ch12-login-response.php'>
       <input type='text' name='userName' id='username'>
       <input type='password' name='password'>
       <input type='submit'>
   </form>

FORM;

echo $theForm;
}
?>

<?php
    //using the querystrong to send messages back to this login page

    $isBlock = $_GET["isBlock"];
    $badUserCredentials = $_GET["badUserCredentials"];

    if(isset($isBlock)) {

        echo "<h2> Ah, ah, aaaaah .... you need to log in buddy! </h2>";
        echo "<script>document.getElementById('username').focus();</script>";

    } else if($badUserCredentials) {

        echo "<h2>User name OR password is wrong buddy!</h2>";
        echo "<script>document.getElementById('username').focus();</script>";
    }
?>
    </main>
</html>
