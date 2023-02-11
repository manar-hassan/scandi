<?php
class dvd {
  public function dvd($value){
    if($value['size']>=1){
      echo "Size : ".$value['size']." MB";
    }else{
   return "00";
    }
  }
}
?>