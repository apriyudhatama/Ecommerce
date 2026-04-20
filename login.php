<?php include 'config.php'; ?>

<form method="POST">
    <h2>Login</h2>
    <input type="text" name="username" placeholder="Username" required><br><br>
    <input type="password" name="password" placeholder="Password" required><br><br>
    <button type="submit" name="login">Login</button>
</form>

<?php
if (isset($_POST['login'])) {
    $user = $_POST['username'];
    $pass = md5($_POST['password']);

    $query = mysqli_query($conn, "SELECT * FROM users WHERE username='$user' AND password='$pass'");
    
    if (mysqli_num_rows($query) > 0) {
        $_SESSION['login'] = true;
        header("Location: dashboard.php");
    } else {
        echo "Login gagal!";
    }
}
?>
