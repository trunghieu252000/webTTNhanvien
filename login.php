<?php
echo "<h2>Login</h2>";
echo "<form action='/codePHP/phpbasic/xulyLogin.php' method='POST'";
echo "<label for='username'>Tên đăng nhập:  </label>";
echo "<input type='text' id='username' name='user'>";
echo "<br><br>";
echo "<label for='pass'>Mật khẩu:  </label>";
echo "<input type='password' id='pass' name='passwordd' >";
echo "<br><br>";
echo "<input type='submit' value='Đăng nhập' name='dangnhap'>";

if(isset($_GET['error'])){
    $error=$_GET['error'];
    if($error=='empty'){    
        echo"<script language='javascript'>
        alert('Hãy nhập đầy đủ thông tin');
        </script>";
    }
    else if($error=='wrong'){
        echo"<script language='javascript'>
            alert('Sai tên đăng nhập hoặc mật khẩu');
        </script>";
    }
}
?>
