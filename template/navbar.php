<section class="container navbar-dark bg-dark rounded">
		<nav class="navbar navbar-expand-sm">
  			<a class="navbar-brand" href="#">User</a>
			  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu_reponsive" >
			    	<span class="navbar-toggler-icon"></span>
			  	</button>

		  	<div class="collapse navbar-collapse" id="menu_reponsive">
		    	<ul class="navbar-nav ">
		      		<li class="nav-item">
		        		<a class="nav-link" href="user.php">Thêm tài khoản</a>
			      	</li>
			      	<li class="nav-item">
			        	<a class="nav-link" href="list.php">Danh sách tài khoản</a>
			      	</li>
		    	</ul>
	    		<form class="form-inline mx-auto" method="get" action="processSearch.php">
		      		<input class="form-control mr-sm-2" name="keyword" type="search" placeholder="Nhập từ khoá"
		      		value="<?php echo isset($_GET['keyword'])? $_GET['keyword']: "";?>">
		      		<button class="btn btn-outline-success my-2 my-sm-0" type="submit">
		      			Tìm kiếm
		      		</button>
	    		</form>
	    		<ul class="navbar-nav">
			      	<li class="nav-item my-2 my-lg-0">
		        		<?php
			        		if (isset($_SESSION['email'])) {
			        			echo "<a href='#' class ='nav-link active'>"."Xin chào &nbsp;".$_SESSION['email']. "</a>";
			        		}else{
			        			echo "<a href='index.php' class ='nav-link '> Đăng nhập</a>";
			        		}      		
						?>	
			      	</li>
			      	<li class="nav-item">
			        	<a class="nav-link" href="processLogout.php">Đăng xuất</a>
			      	</li>
	    		</ul>
		  </div>
		</nav>
</section>