<?php 
	include 'template/header.php';
	include 'template/navbar.php';
	if (isset($_SESSION['email'])) {
		if(isset($_GET['id'])){
			$id =$_GET['id'];
		    include("connect.php"); 
			$sql = 'SELECT * FROM user WHERE id=?';
			$stmt = $conn->prepare($sql);
			$stmt -> bindValue(1, $id);
			$stmt -> execute();
			$item = $stmt->fetch(PDO::FETCH_ASSOC);
			header('local:list.php');
		}
?>
	<section class="container degisn-add-user bg-light navbar-light rounded">
		<div class="pt-2 pb-2 mb-5 row justify-content-center">
			<i class="fa fa-users"></i><h1><?php echo isset($id)?'Chỉnh sửa người dùng':'Thêm người dùng' ?></h1>
		</div>

		<?php
			if(isset($id)) {
		 ?>

				<form method="post" action="processEdit.php?id=<?php echo $item['id']?>">
		<?php
			}else{
		?>

			 	<form method="post" action="processAdd.php">

	 	<?php
			}
		?>

			<div class="form-group row">
		    	<label class="col-sm-2 col-form-label">Họ và tên</label>
		    	<div class="col-sm-10">
		      		<input type="text" name="<?php echo isset($id)? 'editName' : "addName"; ?>" class="form-control" value="<?php echo isset($id)? $item['name'] : ""; ?>">
		    	</div>
		  	</div>

		  	<div class="form-group row">
		    	<label  class="col-sm-2 col-form-label">Số điện thoại</label>
		    	<div class="col-sm-10">
		      		<input type="tel" name="<?php echo isset($id)? 'editPhone' : "addPhone"; ?>" class="form-control" value="<?php echo isset($id)? $item['phone']: ""; ?>">
		    	</div>
		  	</div>

		  	<div class="form-group row">
		    	<label  class="col-sm-2 col-form-label">Email</label>
		    	<div class="col-sm-10">
		      		<input type="email" name="<?php echo isset($id)? 'editEmail' : "addEmail"; ?>" class="form-control" value="<?php echo isset($id)? $item['account']: ""; ?>">
		    	</div>
		  	</div>

		  	<div class="form-group row">
			    <label  class="col-sm-2 col-form-label">Mật khẩu</label>
			    <div class="col-sm-10">
			      	<input type="<?php echo isset($id)? 'text' : "password"; ?>" name="<?php echo isset($id)? 'editPass' : "addPass"; ?>" class="form-control" value="<?php echo isset($id)? $item['pass']:"" ?>">
			    </div>
		  	</div>

		  	<?php 
		  		if (isset($id)) {
		  	?>

			<div class="text-right">
				<button type="submit" name="btnEdit" class="btn btn-info">Lưu lại</button>
			</div>

			<?php 
				}else{		
			 ?>

			 <div class="text-right">
				<button type="submit" name="btnAdd" class="btn btn-info">Thêm</button>
		  		<button type="reset" name="btnReset" class="btn btn-dark">Nhập lại</button>
			</div>
			<?php 
				}
			?>
		</form>
	</section>
	
<?php
	include 'template/footer.php';
	}else{
		header("location:index.php");
	}
?>