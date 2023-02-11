<?php
  class book {
    public function book($value){
      if($value['weight']>=1){
        echo "Weight : ".$value['weight']." KG";
      }else{
     return NULL;
      }
    }
  }
?>