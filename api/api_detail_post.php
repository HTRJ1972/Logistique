<?php 
//----------- affiche le detail d'un post
/*function recup_detail_post($mat_post){
    global $matricule_entreprise;
    $obj='';
    if(isset($mat_post)) {
      $matricule_post=$mat_post;
      
      $url="https://akila.blog/api_text/api_new/articles/$matricule_entreprise/$matricule_post"; //---enligne
  
      $data= file_get_contents($url);
      $ob_blog=json_decode($data);
      // var_dump($ob_blog);
      if(empty($ob_blog)) {
          // header("location: ../blog");
      } else {
          // $obj= json_decode($data);
          $obj=$ob_blog;
      } 
  
    }
    return  $obj[0];
  
} */
?>