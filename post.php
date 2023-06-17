<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
	
<div class="container-fluid">
	<div class="row">

		<form method="post" action="post.php">
			<div class="form-group">	
	<input type="text" name="user" class="form-control"  placeholder="User ...">
			</div>

			<div class="form-group">	
	<input type="password" name="pass" class="form-control"  placeholder="Password ...">
			</div>


		<div class="form-group">
				
<button type="submit" class="btn btn-primary">Login</button>			</div>
		</form>
		


	</div>

	<div class="row">
		 <h3>
          <?php 

      $username = (isset($_POST['user']))?$_POST['user']:NULL;
      $password = (isset($_POST['pass']))?$_POST['pass']:NULL;

      echo $username,$password;

           ?>
		 </h3>
	</div>


</div>


</body>
</html>