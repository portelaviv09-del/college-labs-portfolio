<?php 
    session_start();
?>

<header class="header">
    <a href="response.php">
        <img src="img/logo.jpg" alt="Logo">
    </a>
    <nav class="main-nav">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <?php
            if (isset($_SESSION['username'])) {
                echo '<li><a href="includes/logout.inc.php">Log Out</a></li>';
            } 
            else {
                echo '<li><a href="login.php">Log In</a></li>';
                echo '<li><a href="signup.php">Sign Up</a></li>';
            }
            ?>
        </ul>
    </nav>
</header>