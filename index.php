<?php
session_start();

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Admin credentials
    $adminUser = "admin";
    $adminPass = "12345"; // change cheyyachu

    if ($username === $adminUser && $password === $adminPass) {
        $_SESSION['admin'] = $username;
        header("Location: index1.html"); 
        exit();
    } else {
        echo "<script>
                alert('Invalid Username or Password!');
                window.location.href = 'index.html';
              </script>";
        exit();
    }
} else {
    header("Location: index.html");
    exit();
}
?>
