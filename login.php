<?php
$u = $_POST['username'];
$p = $_POST['password'];

$db = mysqli_connect("localhost","root","","csdldemo");

$sql = "select * from users where username='$u' and password='$p'";

// echo $sql;exit;


$rs = mysqli_query($db,$sql);

if (mysqli_num_rows($rs)>0) {
	// echo "<h1>Dang bhap thanhf cong</1>";
	header("Location: quanli.php");
}else  {
	
	echo "<p>Tài khoản không chính xác vui lòng nhập lại!</p>";

	require_once 'login.html';
}
?>