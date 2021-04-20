<?php
session_start();
include_once "ketnoiCSDL.php";
if (isset($_POST['dangnhap'])) {
    $user = $_POST['user'];
    $pass = $_POST['passwordd'];
    if (empty($user) || empty($pass)) {
        header('Location:http://localhost/codePHP/phpbasic/login.php?error=empty');
        exit();
    } else {
        $query = "select * from admin where username='$user'";
        $result = connect("dulieu", $query);
        if ($row = mysqli_fetch_array($result)) {
            $password = $row["password"];
            if ($pass == $password) {
                $_SESSION['user'] = 1;
                header('Location:http://localhost/codePHP/phpbasic/t3.html');
            } else {
                header('Location:http://localhost/codePHP/phpbasic/login.php?error=wrong');
                exit();
            }
        } else {
            header('Location:http://localhost/codePHP/phpbasic/login.php?error=wrong');
        }
    }
}
