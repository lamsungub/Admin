<?php 
session_start();
	//kiểm tra sự tồn tại của phiên;
	if (isset($_SESSION['email'])) {
		unset($_SESSION['email']);
		header('location:index.php');
	}
	else{
		header('location:index.php');
}
?>
