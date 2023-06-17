<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>
<body>


	
	<h1><a href="vg.php?p=home">Home</a></h1>
	<h1><a href="vg.php?p=service">Service</a></h1>
	<h1><a href="vg.php?p=about">About Us</a></h1>
	<h1><a href="vg.php?p=contact">Contact Us</a></h1>

	<?php 
	//include "about.php";
     //print_r($_GET);
     $page = (isset($_GET['p']))?$_GET['p']:'home';
/*     if ($page == 'home') {
     	include "home.php";
     }elseif ($page == 'service') {
     	include "service.php";
     } 
     elseif ($page == 'about') {
     	include "about.php";
     } 
     elseif ($page == 'contact') {
     	include "contact.php";
     } else{

     }*/


switch ($page ) {
	case 'home':
		include "home.php";
		break;
	case 'service':
		include "service.php";
		break;
	case 'about':
		include "about.php";
		break;
	case 'contact':
		include "contact.php";
		break;
	
	default:
		// code...
		break;
}

	 ?>





		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js" ></script>
</body>
</html>