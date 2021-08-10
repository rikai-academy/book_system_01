<?php
 function rateform(){
    $count = 11;
    for($i=1;$i<$count;$i++){
      $input1 ='<input type="radio" name="rate" id="rate-'.$i.'" value="'.$count-$i.'">';
      $input2 ='<label for="rate-'.$i.'" class="fas fa-star"></label>';
      echo $input1."".$input2;
    }
 }
 function oldrate($rate){
   for($i=10;$i>= 1; $i--){
      if($rate>= $i){
         echo $input1 = '<label for="rate-'.$i.'" class="fas fa-star" style="color:#fd4"></label>';
      }
      else{
         echo $input2 = '<label for="rate-'.$i.'" class="fas fa-star"></label>';
      }
   }
 }
 function like($review){
   if(Auth::user()->isLikeReviews($review)){
      echo __('message.is_like_review');
   }else{
      echo __('message.Like');
   }
 }

 function comment($comment){
   if(Auth::user()->isLikeComments($comment)){
      echo __('message.is_like_comment');
   }else{
      echo __('message.Comments');
   }
 }
?>