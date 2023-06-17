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

$srcImg = ['img/001.jpg','img/002.jpg','img/003.jpg','img/004.jpg','img/005.jpg','img/006.jpg','img/007.jpg']

 ?>

<div id="ecoin" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
  	<?php
      $active = 1;
       foreach ($srcImg as $v):
       	$cl = ($active)?'active':'';
    
  	 ?>
    <div class="carousel-item <?php echo $cl; ?>">
      <img src="<?php echo $v ?>" class="d-block w-100" alt="...">
    </div>
  <?php  
     $active = 0;
    endforeach; ?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#ecoin" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#ecoin" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js" ></script>

	<script>
const myCarouselElement = document.querySelector('#ecoin')

const carousel = new bootstrap.Carousel(myCarouselElement, {
  interval: 2000,
  touch: false
})
	</script>
</body>
</html>