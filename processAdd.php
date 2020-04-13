<?php 
session_start();
if(isset($_SESSION['email'])){
	if (isset($_POST['btnAdd'])) {
		$name 	 = $_POST['addName'];
		$phone   = $_POST['addPhone'];
		$account = $_POST['addEmail'];
		$pass 	 = $_POST['addPass'];

		include("connect.php");
		$sql ="INSERT INTO user SET name=?,phone=?,account=?,pass=?";
		$stmt = $conn->prepare($sql);
		$stmt->bindValue(1,$name);
		$stmt->bindValue(2,$phone);
		$stmt->bindValue(3,$account);
		$stmt->bindValue(4,$pass);
		if ($stmt->execute()==true) {
			header("location:list.php");
		}else{
			header("location:user.php");
		}

	}
	}else{
		header("location:index.php");
	}
 ?>