<?php
class furniture {
  public function furniture($value){
    if($value['height']>=1){
      echo "Dimension : " .$value['height']." x ".$value['width']." x ".$value['length'];
    }else{
   return NULL;
    }
  }
}
?>