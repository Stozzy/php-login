<?php
//start the session
session_start();

//this could have code put into a include so you can password protect any page you want

//check session to see if they logged in:

if(isset($_SESSION['isLoggedIn'])) {

    //do nothing, the user logged in.

} else {

    header('Location: ch12-login.php?isBlocked=true');
}

?>

<!DOCTYPE html>
<html>
    <title>ch12 - form procressing - protected page.</title>
    <link rel="stylesheet" type="text/css" href="ch12-styles.css">

<body>

    <nav>
        <ul>
        <li><a href="ch12-login.php">Home</a></li>
        <li><a href="ch12-protected-page.php">Protected Page</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="ch12-logout.php">Log Out</a></li>
        </ul>
    </nav>

    <main>

        <p>You are now viewing members only content.  Aren't you special?</p>

    </main>

</body>

</html>
