<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>
<body>
	
<?php 

$cards = [
 			['img'=>'img/001.jpg','text'=>'lorem1'],
 			['img'=>'img/002.jpg','text'=>'lorem2'],
 			['img'=>'img/003.jpg','text'=>'lorem3'],
 			['img'=>'img/004.jpg','text'=>'lorem4'],
 			['img'=>'img/005.jpg','text'=>'lorem5']
 ]

/*
  $img = [
 			'img/001.jpg',
 			'img/002.jpg',
 			'img/003.jpg',
 			'img/004.jpg',
 			'img/005.jpg' ];


  $text = [
 			'lorem 1',
 			'lorem2 ',
 			'lorem 3',
 			'lorem4 ',
 			'lorem 5' ];
*/
 ?>


     	<div class="row">
 <?php     
foreach ($cards as $v):	
/*
 for($i = 0; $i<count($img); $i++):*/
  ?>
     		<div class="card" style="width: 18rem;">
			  <img src="<?php echo $v['img']; ?>" class="card-img-top" alt="...">
			  <div class="card-body">
			    <p class="card-text"><?php echo  $v['text']; ?></p>
			  </div>
			</div>
 <?php  
/*endfor;*/
endforeach; 

?>


     	</div>





		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js" ></script>

</body>
</html>