<?php
use App\Models\Category;
use App\Models\Tag;
use App\Models\Book;
use App\Models\TagBook;

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


 function follow($user){
   if(Auth::user()->isFollowing($user)){
      return __('message.Followed');
   }else{
      return __('message.Follow');
   }
 }

 function categorybook(){
   $categorys = DB::table('category')->get();
   foreach($categorys as $category){
   echo '<li><a href="'.route('categoryuser.edit',[$category->id]).'">'.__('message.'.$category->title).'</a></li>';

   }
 }

 function checkreviewhide($review){
   if($review->approve == 1){
      echo "checked";
   }
 }

 function checkcommenthide($comment){
   if($comment->approve == 1){
      echo "checked";
   }
 }

 function statusreading($data){

   if($data["activity"]->read_status == 1){
      return '{{ '.'active'.' }}'; 
   }
   
 }
 function statusread($data){
   if($data["activity"]->read_status == 2){
      return '{{ '.'active'.' }}'; 
   }
 }

 function statusfavorite($data){
   if($data["activity"]->favorite_status == 1){
      return '{{ '.'active'.' }}'; 
   }
 }

function reading($data){
   if($data["activity"]->read_status == 1){
      return ''.'unreading'.'';
   }else{
      return ''.'reading'.'';
   } 

}
function read($data){
   if($data["activity"]->read_status == 2){
      return ''.'unread'.'';
   }else{
      return ''.'read'.'';
   } 

}
function favorite($data){
   if($data["activity"]->favorite_status == 1){
      return ''.'unfavorite'.'';
   }else{
      return ''.'favorite'.'';
   } 

}
function buttonfavorite($data){
   echo '<button type="submit" 
   name="activity" class="parent-btn '.statusfavorite($data).'" value="'.favorite($data).'">'.__('message.Add_to_Favorite').'</button>';
}
function buttonreading($data){
   echo '<button type="submit" 
   name="activity" class="parent-btn '.statusreading($data).'" value="'.reading($data).'">'.__('message.Add_to_Reading').'</button>';
}
function buttonread($data){
   echo '<button type="submit" 
   name="activity" class="parent-btn '.statusread($data).'" value="'.read($data).'">'.__('message.Add_to_Read').'</button>';
}

 function countTag($id){
   $count = Tag::join('taggable_taggables','taggable_taggables.tag_id','=','taggable_tags.tag_id')
   ->where('taggable_tags.tag_id','=',$id)->get();
  return $count->count('tag_id');
 }

?>