<?php
if (isset($_POST['submit'])){
  require_once('handle.php');
  $sc=new handle();
  $sc->setSku($_POST['sku']);
  $sc->setName($_POST['name']);
  $sc->setPrice($_POST['price']);
  $sc->setProductType($_POST['productType']);
  
  if(isset($_POST['productType'])){
    if($_POST['productType']=="dvd"&& !empty($_POST['size'])){
      $sc->setSize($_POST['size']);
      $sc->setHeight(0);
      $sc->setWidth(0);
      $sc->setLength(0);
      $sc->setWeight(0);

    }else if($_POST['productType']=="dvd"&& empty($_POST['size'])) {
      echo '<div class="error text-danger" id="size_err" >Please, provide size</div>';
    }

  if ($_POST['productType']=="furniture" && empty($_POST['height'])){
    echo '<div class="error text-danger" id="height_err" >Please, provid height</div>';
  }
   if($_POST['productType']=="furniture" && empty($_POST['width'])){
    echo '<div class="error text-danger" id="width_err" >Please, provide width</div>';
  }
  if($_POST['productType']=="furniture"  && empty($_POST['length'])){
    echo '<div class="error text-danger" id="length_err" >Please, provide length</div>';
  }

  if($_POST['productType']=="book"&& empty($_POST['weight'])){
    echo '<div class="error text-danger" id="weight_err" >Please, provide weight</div>';
  }else if($_POST['productType']=="book"&& !empty($_POST['weight'])){
    $sc->setWeight($_POST['weight']);
    $sc->setHeight(0);
    $sc->setWidth(0);
    $sc->setLength(0);
    $sc->setSize(0);
  }
  if($_POST['productType']=="furniture"&& !empty($_POST['height'])&& !empty($_POST['width'])&& !empty($_POST['length'])){
    $sc->setHeight($_POST['height']);
  $sc->setWidth($_POST['width']);
  $sc->setLength($_POST['length']);
  $sc->setSize(0);
    $sc->setWeight(0);
  }
  
}
  $sc->insert();
}

  
?>