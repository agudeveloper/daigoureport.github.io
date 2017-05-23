<?php
    // Start the session
    ob_start();
    session_start();

    // Check to see if actually logged in. If not, redirect to login page
    if (!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] == false) {
        header("Location: index.php");
    }
?>

<p>Logged in. Here should show the user profile. </p>
<form method="post" action="logout.php">
    <input type="submit" value="Logout">
</form>
