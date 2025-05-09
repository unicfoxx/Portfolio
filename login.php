<?php
include('include/db.inc.php');
session_start();
$errors = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = trim($_POST["email"]);
    $password = $_POST["password"];

    $stmt = $conn->prepare("SELECT id, username, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows === 1) {
        $stmt->bind_result($id, $username, $hashed);
        $stmt->fetch();

        if (password_verify($password, $hashed)) {
            $_SESSION["user_id"] = $id;
            $_SESSION["username"] = $username;
            header("Location: index.html");
            exit();
        }
    }
    $errors[] = "Invalid email or password.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <link rel="stylesheet" href="CSS/stylesheet_index.css">
</head>
<body id="centerer">
    <form method="POST">
        <h2>Login</h2>
        <?php if ($errors): foreach ($errors as $e): echo "<p>$e</p>"; endforeach; endif; ?>
        <label>Email</label>
        <input type="email" name="email" required>
        <label>Password</label>
        <input type="password" name="password" required>
        <input type="submit" value="Login">
    </form>
</body>
</html>
