<?php
	//Khai báo các thuộc tính của CSDL
	$server_name = "localhost";
	$username 	 = "root";
	$password 	 = "";
	$db_name 	 = "user";

	//Tiến hành kết nối CSDL
	try{
		$conn = new PDO("mysql:host=$server_name;dbname=$db_name", $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$conn->exec("SET NAMES 'utf8'");
	}
	catch(PDOException $ex){
		echo "Lỗi: ". $ex->getMessage();
	}
?>