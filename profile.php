<?php
session_start();
if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Profile</title>
    <link rel="stylesheet" href="CSS/stylesheet_index.css">
</head>
<body>
    <div id="profilepage">
        <h2>Welcome, <?= htmlspecialchars($_SESSION["username"]) ?>!</h2>
        <p>This is your profile page.</p>
        <a href="logout.php">Logout</a>
        <a href="index.html">Home</a>
    </div>
</body>
</html>