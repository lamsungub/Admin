<?php 
	include 'template/header.php';
	include 'template/navbar.php';
	if(isset($_SESSION['email'])){
		include'connect.php';
		$key = $_GET['keyword'];
		$sql = "SELECT * FROM user WHERE name LIKE ?";
		$stmt = $conn->prepare($sql);
		$stmt -> bindValue(1, '%'.$key.'%');
			$stmt->execute();
		header('local:list.php');
?>
	<section class="container degisn-edit-user bg-light navbar-light rounded">
		<div class="pt-2 pb-2 mb-5 row  justify-content-center">
		 	<i class="fa fa-address-book"></i><h1>Danh sách người dùng</h1>
		</div>
		<table class="table table-responsive-lg table-hover">
		  	<thead>
			    <tr>
			      	<th scope="col">ID</th>
			      	<th scope="col">Họ tên</th>
			      	<th scope="col">Số điện thoại</th>
			      	<th scope="col">Tài khoản</th>
			      	<th scope="col">Mật khẩu</th>
			      	<th scope="col">Chỉnh sửa</th>
			      	<th scope="col">Xóa</th>
			    </tr>
		  	</thead>
		  	<?php 
		  			while($Show = $stmt->fetch(PDO::FETCH_ASSOC)){
		  	 ?>
		  	<tbody>
			    <tr>
			    	<td><?php echo $Show['id']; ?></td>
			      	<td><?php echo $Show['name']; ?></td>
			      	<td><?php echo $Show['phone']; ?></td>
			      	<td><?php echo $Show['account']; ?></td>
			      	<td><?php echo $Show['pass']; ?></td>
			      	<td>
			      		<a name="btnList" href="user.php?id=<?php echo $Show['id']; ?>" 
			      			class="btn btn-primary">
			      			<i class="fa fa-wrench"></i>
			      		</a>
			      	</td>
			      	<td>
			      		<a name="btnDel" href="processDel.php?id=<?php echo $Show['id']; ?>" class="btn btn-danger" onclick="confirm('Bạn chắc chắn muốn xóa');">
			      			<i class="fa fa-times-circle"></i>
			      		</a>
			      	</td>
			    </tr>
		  </tbody>
		  <?php 
		  		}
		   ?>
		</table>
	</section>
<?php 
	include 'template/footer.php';
	}else{
		header("location:index.php");
	}
?>
