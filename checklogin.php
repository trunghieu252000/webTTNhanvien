<?php

if (isset($_SESSION['user']) != 1) {
	// Nếu người dùng chưa đăng nhập thì chuyển hướng website sang trang đăng nhập
	header('Location:http://localhost/codePHP/phpbasic/login.php');
}else {
   // header('Location:http://localhost/codePHP/phpbasic/xemthongtinNV.php');
}
?>
