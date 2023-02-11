
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>product add</title>
  <style>
    body{
  background-image:url(Simple%20Shiny.svg);
}
.navbar-brand{
  margin-right: 20%;
  color:#ECF4F3;
}
    #divOne,
    #divTwo,
    #divThree {
      visibility: hidden;

    }

    label {
      width: 20%;
      font-weight: bold;
      color:#ECF4F3;
      font-size:19px;
    }
    input{
      border-radius:10px;
      border:none;
      outline:1px solid  green;
      color:#379237;
    }
    select{
      border-radius:10px;
      border:none;
      outline: green;
      color:#379237;
    }
    #productType {
      width: 10%;
    }

    .parentSwitcher {
      height: 30vh;
    }

    .parentFormSwitcher {
      position: relative;

    }

    .childDiv {
      position: absolute;
      top: 0;
      width: 100%;
    }

    .divBtn {
      display: flex;
      justify-content: center;
    }
    hr{
      width: 90%;
      margin: 0 auto 50px auto;
    }
    a{
      text-decoration:none;
      color:white;
    }
    .error{
      position:absolute ;
      left:47%;
    }
    #sku_err{
      top:35.7%;
    }
    #name_err{
      top:47.7%;
    }
    #price_err{
      bottom:37%;
    }
    #size_err{
      bottom:16%;
    }
    #height_err{
      bottom:16%;
    }
    #width_err{
      bottom:9%;
    }
    #length_err{
      bottom:2%;
    }
    #weight_err{
      bottom:16%;
    }

  </style>
</head>
<body>
  

<nav class="navbar navbar-expand-lg navbar-light ">
    <div class="container-fluid d-flex justify-content-between">
      <a href="/" class="navbar-brand ">
        <h1 class="mx-5">Product Add</h1>
      </a>
      <div class= "mx-5">
          <button class="btn btn-outline-success mx-3 bg-white text-success" type="submit" name="submit" id="submit" form="product_form">Save</button>
          <button class="btn bg-danger border-0 " type="reset" form="product_form"><a href="productList.php"> Cancel</a></button>
      </div>
    </div>
</nav>
  <hr>

<div id="message"></div>

<form action="productList.php" method="post" class="product_form mx-4" id="product_form">
    <div class="form-group">
      <label for="sku" class="px-5 py-4">SKU</label>
      <input type="text" class=" w-25 d-inline" id="sku" name="sku">
    </div>

    <div class="form-group">
      <label for="name" class="px-5 py-4">Name</label>
      <input type="text" class=" w-25 d-inline" id="name" name="name">
      <span class="error" id="name_err"> </span>
    </div>

    <div class="form-group">
      <label for="price" class="px-5 py-4">Price ($)</label>
      <input type="number" class=" w-25 d-inline" id="price" name="price">
      <span class="error" id="price_err"> </span>
    </div>

    <div class="form-group">
      <label for="productType" class="px-5 py-4">Type Switcher</label>
      <select class=" d-inline" id="productType" name="productType[]">
        <option selected disabled hidden value="switcher" >Type Switcher</option>
        <option id="dvd" value="dvd">DVD</option>
        <option id="furniture" value="furniture">Furniture</option>
        <option id="book" value="book">Book</option>
      </select>
      <span class="error" id="ProductType_err"> </span>
    </div>

    <div class="parentSwitcher">
      <div class="form-group parentFormSwitcher">

        <div class="childDiv" id="divOne">
          <label for="size" class="px-5 py-2">Size (MB)</label>
          <input type="number" class="w-25 d-inline" id="size" name="size">
          <span class="error" id="size_err" name="size_err" > </span>
        </div>

        <div class="childDiv" id="divTwo">
          <div class="d-block">
            <label for="height" class="px-5 py-2">Height (CM)</label>
            <input type="number" class="w-25 d-inline" id="height" name="height">
            <span class="error" id="height_err"> </span>
          </div>

          <div class="d-block">
            <label for="width" class="px-5 py-2">Width (CM)</label>
            <input type="number" class="w-25 d-inline" id="width" name="width">
            <span class="error" id="width_err"> </span>
          </div>

          <div class="d-block">
            <label for="length" class="px-5 py-2">Length (CM)</label>
            <input type="number" class="w-25 d-inline" id="length" name="length">
            <span class="error" id="length_err"> </span>
          </div>

        </div>

        <div class="childDiv" id="divThree">
          <label for="weight" class="px-5 py-2">Weight (KG)</label>
          <input type="text" class="w-25 d-inline" id="weight" name="weight">
          <span class="error" id="width_err"> </span>
        </div>

</div>
</div>
</form>

<script>
let productType = document.getElementById("productType");
let dvd = document.getElementById("dvd");
let furniture = document.getElementById("furniture");
let book = document.getElementById("book");
let size = document.getElementById("size");
let height = document.getElementById("height");
let width = document.getElementById("width");
let length = document.getElementById("length");
let weight = document.getElementById("weight");
let divOne = document.getElementById("divOne");
let divTwo = document.getElementById("divTwo");
let divThree = document.getElementById("divThree");


productType.addEventListener('change', function () {
if (productType.value == dvd.value) {
  divOne.style.visibility = "visible"
  divTwo.style.visibility = "hidden"
  divThree.style.visibility = "hidden"

}
if (productType.value == furniture.value) {
  divOne.style.visibility = "hidden"
  divTwo.style.visibility = "visible"
  divThree.style.visibility = "hidden"

}
if (productType.value == book.value) {
  divOne.style.visibility = "hidden"
  divTwo.style.visibility = "hidden"
  divThree.style.visibility = "visible"
}
});
</script>
  <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
  <script>
$(document).on("click", "#submit", function (e) {
  e.preventDefault();
  var sku = $("#sku").val();
  var name = $("#name").val();
  var price = $("#price").val();
  var productType = $("#productType").val();
  var size = $("#size").val();
  var height = $("#height").val();
  var width = $("#width").val();
  var length = $("#length").val();
  var weight = $("#weight").val();
  var submit = $("#submit").val();

  $.ajax({
    url:"insertHandle.php",
    type:"post",
    data : {
    sku :sku,
    name :name,
    price :price,
    productType :productType,
    size : size,
    height :height,
    width :width,
    length :length,
    weight :weight,
    submit :submit,
  },
  
  success:function(response){
    $("#message").html(response);
    console.log(response);
    if(response=='<div class="alert bg-success text-white w-50 ms-5">data success</div>')
      location.href ="productList.php";
  }
  });


});
  </script>
  </body>
</html>


    