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

		<form method="GET" action="get.php">
			<div class="form-group">	
	<input type="search" name="q" class="form-control"  placeholder="Search ...">
			</div>


		<div class="form-group">
				
<button type="submit" class="btn btn-primary">search</button>			</div>
		</form>
		


	</div>

	<div class="row">
		 <h3>
		 	<?php 

 $s = (isset($_GET['q']))?$_GET['q']:NULL;

 echo $s;

		 	 ?>
		 </h3>
	</div>


</div>


</body>
</html>