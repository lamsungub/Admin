<?php
	session_start();
//xử lí đăng nhập
	if(isset($_POST['btnLogin'])){
		$email = $_POST['txtLoginEmail'];
		$pass = $_POST['txtLoginPass'];
		//kết nối cơ sở dữ liệu
		include("connect.php");
		// tạo đối tượng truy vấn: lấy tất cả bản ghi trong bảng admin có email = $email(truyền vào) và có passowrd = $password truyền vào.
		$sql = "SELECT * FROM admin WHERE email=:e AND password=:p";
		$stmt = $conn->prepare($sql);
		$stmt->bindParam(":e", $email);
		$stmt->bindParam(":p", $pass);
		$stmt->execute();


		//Chuyển đổi kết quả được trả về từ Object chuyển đổi thành Array (Association array)
		$result = $stmt->fetchAll();
		if($stmt->rowCount()>0){
		//Tạo phiên làm việc cho tài khoản này
			$_SESSION['email'] = $email;
			header("location:list.php");
		}else{
			header("location:index.php");
		}
	}else{
		header("location:index.php");
	}
?>
