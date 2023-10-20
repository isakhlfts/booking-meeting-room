<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validasi kredensial admin
    $admin_username = "admin"; // Ganti dengan nama pengguna admin yang sebenarnya
    $admin_password = "admin123"; // Ganti dengan kata sandi admin yang sebenarnya

    $input_username = $_POST["username"];
    $input_password = $_POST["password"];

    if ($input_username == $admin_username && $input_password == $admin_password) {
        // Login sukses
        $_SESSION["admin_logged_in"] = true;
        header("Location: admin.php");
        exit;
    } else {
        $login_error = "Nama pengguna atau kata sandi salah!";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Admin</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Login Admin</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <label for="username">Nama Pengguna:</label>
            <input type="text" id="username" name="username" required><br><br>

            <label for="password">Kata Sandi:</label>
            <input type="password" id="password" name="password" required><br><br>

            <input type="submit" value="Login">
        </form>
        <?php
        if (isset($login_error)) {
            echo "<p>$login_error</p>";
        }
        ?>
    </div>
</body>
</html>
