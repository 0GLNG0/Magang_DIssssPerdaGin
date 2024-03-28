<?php
include 'config.php';
session_start();

if (isset($_SESSION["username"])) {
    header("Location: berhasilLogin.php");
    exit();
}

if (isset($_POST["submit"])) {
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = hash("sha256", $_POST["password"]);

    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION["username"] = $row["username"];
        $_SESSION["login_message"] = "Login Berhasil";
        header("Location: index.php");
        exit();
    } else {
        $_SESSION["login_message"] = "Email atau Password tidak sesuai";
    }
}

if (isset($_SESSION['login_message'])) {
    echo '<script>
                document.addEventListener("DOMContentLoaded", function() {
                    var floatingMessage = document.createElement("div");
                    floatingMessage.className = "floating-message";
                    floatingMessage.textContent = "' . $_SESSION['login_message'] . '";

                    document.body.appendChild(floatingMessage);

                    setTimeout(function() {
                        document.body.removeChild(floatingMessage);
                    }, 3000);
                });
            </script>';
    unset($_SESSION['login_message']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/login.css">

    <title>Login</title>
</head>

<body>
    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text">Login</p>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Login</button>
            </div>
        </form>
    </div>
</body>

</html>