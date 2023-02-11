<?php
 include 'connect.php';
require_once('product.php');
class handle extends con implements product{
  
private $sku;
private $name;
private $price;
private $productType;
public $size;
private $height;
private $width;
private $length;
private $weight;


public function setSku($sku){
  $this->sku=$sku;
}
public function getSku(){
 return $this->sku;
}

public function setName($name){
  $this->name=$name;
}
public function getName(){
  return $this->name;
}

public function setPrice($price){
  $this->price=$price;
}
public function getPrice(){
  return $this->price;
}

public function setProductType($productType){
  $this->productType=$productType;
}
public function getProductType(){
  return $this->productType;
}

public function setSize($size){
  
  $this->size=$size;
}
public function getSize(){
  return $this->size;

}

public function setHeight($height){
  $this->height=$height;
}
public function getHeight(){
  return $this->height;
}

public function setWidth($width){
  $this->width=$width;
}
public function getWidth(){
  return $this->width;
}

public function setLength($length){
  $this->length=$length;
}
public function getLength(){
  return $this->length;
}

public function setWeight($weight){
  $this->weight=$weight;
}
public function getWeight(){
  return $this->weight;
}


public function insert(){
  

  if(isset ($_POST['submit'])){

  if (empty($_POST['sku'] )){
    echo '<div class="error text-danger" id="sku_err" >Please, provide sku</div>';
  }
  if (empty($_POST['name'])){
    echo '<div class="error text-danger " id="name_err" >Please, provide name</div>';
  }

  if (empty($_POST['price'])){
    echo '<div class="error text-danger" id="price_err" >Please, provide price</div>';
  }
  
  if(!empty($this->sku) &&  !empty($this->name) && !empty($this->price)  && !empty($this->productType) &&  isset($this->size) &&  isset($this->height) && isset($this->width)  && isset($this->length)  && isset($this->weight)   ){

    $sku=$_POST['sku'];
    $query="select sku from products where sku ='$sku'";
    $result=$this->connect()->query($query);

    if($result->num_rows>0){
        echo '<div class="alert bg-danger text-white w-50 ms-5">Duplicate entry '.$this->getSku().' for SKU </div>';
    }else{

    $query="insert into products(sku,name,price,size,productType,height,width,length,weight)
      values('" . $this->getSku() . "','" . $this->getName() . "','" . $this->getPrice() . "','" . $this->getSize() . "','" . $this->getProductType() . "','" . $this->getHeight() . "','" . $this->getWidth() . "','" . $this->getLength() . "','" . $this->getWeight() . "')";
      if($result=$this->connect()->query($query)){
        echo '<div class="alert bg-success text-white w-50 ms-5">data success</div>';
      }else{
        return "error1";
      }
      }


  }else{
    echo '<div class="alert bg-danger text-white w-50 ms-5">please fill all required field</div>';
  }
  
  
  

}
}


public function displyRecord(){


  $query="select sku,name,price,size,height,width,length,weight
  from products";
  $result=$this->connect()->query($query);
  if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
      $data[]=$row;  
    }
    return $data;
  }
}


public function delete(){

  if(isset($_POST['delete-product-btn'])){
    $dele=count($_POST['delete-checkbox']);
    $i=0;
    while($i<$dele){
      $k=$_POST['delete-checkbox'][$i];
      print_r($k);
      $query="delete from products where sku = ('$k')";
      echo $query;
      if($result=$this->connect()->query($query)){
        header('Location:productList.php');
      }
      $i++;
    }

  }
  }
}




