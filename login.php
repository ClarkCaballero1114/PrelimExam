<?php
session_start();

$username = "admin";
$password = "12345";

if (isset($_POST['login'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    if ($user == $username && $pass == $password) {
        $_SESSION['username'] = $user;
        header("Location: welcome.php");
        exit();
    } else {
        $error = "Invalid username or password!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

    <h2>Login</h2>

    <?php
    if (isset($error)) {
        echo "<p>$error</p>";
    }
    ?>

    <form method="POST">
        <label>Username:</label>
        <input type="text" name="username" required><br><br>

        <label>Password:</label>
        <input type="password" name="password" required><br><br>

        <button type="submit" name="login">Login</button>
    </form>

</body>
</html>