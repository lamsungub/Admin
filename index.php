<?php 
	include 'template/header.php';
?>
	<section class="container flex-center login">
		<div class="mx-auto col-md-4 login-box">
			<form class=" p-3 text-center form-login rounded" method="post" action="processLogin.php">
				<div class="form-group">
					<i class="fa fa-user-circle"></i>
				</div>
			  	<div class="form-group  mx-auto">
				   	<i class="fa fa-user"></i>
				    <input type="email" name="txtLoginEmail" class="form-control" placeholder="Email">
			  	</div>

			  	<div class="form-group  mx-auto">
			    	<i class="fa fa-lock"></i>
			    	<input type="password" name="txtLoginPass" class="form-control" placeholder="Mật khẩu">
			  	</div>

		  		<button type="submit" name="btnLogin" class="btn btn-success mt-3">Đăng nhập</button>
			</form>
		</div>
	</section>

<?php 
	include 'template/footer.php';
?>