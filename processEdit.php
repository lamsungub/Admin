<?php 
	if (isset($_POST['btnEdit']) && !empty($_GET['id'])) {
		$id      = $_GET['id'];
		$name 	 = $_POST['editName'];
		$phone   = $_POST['editPhone'];
		$account = $_POST['editEmail'];
		$pass 	 = $_POST['editPass'];

		include 'connect.php';
		$sql = "UPDATE user SET name=?,phone=?,account=?,pass=? WHERE id=$id";
		$stmt = $conn->prepare($sql);
		$stmt->bindValue(1,$name);
		$stmt->bindValue(2,$phone);
		$stmt->bindValue(3,$account);
		$stmt->bindValue(4,$pass);
		if ($stmt->execute()==true) {								
			header("location:list.php");
		}
		else{
			header("location:user.php");
		}
	}else{
		header("location:user.php");
	}
 ?>