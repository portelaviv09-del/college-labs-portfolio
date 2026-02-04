<?php
include_once("includes/connect.php");

if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $_SESSION['username'] = $username;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome Page</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

    <?php include "header.php"; ?>
    <div class="wrapper-main3">
    
    <!-- Welcome message -->
    <?php
        if (isset($_SESSION['username'])) {
            echo "<h1>Welcome, " . htmlspecialchars($_SESSION['username']) . "!</h1></br>";
        } else {
            echo "<p>Please log in or sign up.</p>";
        }
    ?>

    <!-- Mock information display code -->


    <h2>Account overview:</h2>
    <table>
        <tr>
            <th>Date</th>
            <th>Description </th>
            <th> Amount</th>
        </tr>
        <tr>
            <td>2025-11-15</td>
            <td>Deposit</td>
            <td>$500.00</td>
        </tr>
        <tr>
            <td>2025-11-10</td>
            <td>Payment</td>
            <td>$120.00</td>
        </tr>
    </table><br>
        <h2>Your Information:</h2>
        <p>Name: Vivian Portela</p>
        <p>Email: vportela@student.alamo.edu</p>
        <p><a href="#">Edit Profile</a></p>
    </div>
    <?php include "footer.php"; ?>
</body>
</html>