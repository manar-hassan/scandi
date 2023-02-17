<?php
require_once ('dvd.php');
require_once ('furniture.php');
require_once ('book.php');
require_once('handle.php');
$sc=new handle();
$data=$sc->displyRecord();
$delete=$sc->delete();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>product add</title>
  <style>
body{
  background-image:url(Simple%20Shiny.svg);
}
.navbar-brand{
  margin-right: 20%;
  color:#ECF4F3;
}
hr{
  margin:  0 auto 50px auto;
}
.card{
  width: 18rem;
  height: 12rem;
  background-color:#ECF4F3;
}

.cardBody{
  text-align: center;
  color:#379237;
}
a{
  text-decoration:none;
  color:black;
}

</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light ">
  <div class="container-fluid d-flex justify-content-around">
    <a class="navbar-brand " href="#"><h1>Product List</h1></a>
    <div>
    <a href="index.php"><button type="submit" class="btn btn-outline-success mx-3 bg-white text-success" >ADD</button></a>
    <button type="submit" form="listForm" name="delete-product-btn" id="delete-product-btn" class="btn bg-danger text-light border-0">MASS DELETE</button>
    </div>
  </div>
</nav>
<hr class="w-75">
<div class="container">
  <div class="row">
<?php 
if (is_array($data) || is_object($data))
{
foreach($data as $value){
  $dvd = new dvd;
  $furniture = new furniture;
  $book= new book;
  $dvd = new dvd ;
  
?>
<div class="card   m-auto mb-2 ">
  <div class="card-body ">
    <form action="" id="listForm" method="post">
    <input type="checkbox" class="delete-checkbox" name="delete-checkbox[]" form="listForm" value="<?php echo $value['sku'] ;?>">
    <h5 class="sku cardBody  mb-3"><?php echo  $value['sku'] ;?></h5>
    <h6 class="name cardBody mb-3 "><?php echo $value['name'] ;?></h6>
    <p class="price cardBody  mb-3"><?php echo $value['price'] ."$";?></p>
    <p class="size cardBody  mb-3" ><?php $dvd->dvd($value); ?></p>
    <p class= "Dimension cardBody  mb-3"><?php $furniture->furniture($value) ?></p>
    <p class="weight cardBody "><?php $book->book($value);?></p>
    </form>
  </div>
</div>
<?php
}
}else{
  echo '<div class="alert bg-danger text-white w-75 ms-5">There are no products </div>';
}
?>
</div>
</div>
</body>
</html>