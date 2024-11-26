<?php

//----------- affiche le detail d'un post
function recup_detail_post($mat_post){
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

}

//------------------------------fonction pour afficher les vues sur les posts

function vues_posts($matricule_post){ 

    $url_vues= "https://akila.blog/api_text/api_new/categorie_vues";
    
    $data1 = array( 
               'matricule_post' => $matricule_post, 
               );
    
    // utilisez 'http' même si vous envoyez la requête sur https:// ...
    $options = array(
     'http' => array(
       'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
       'method'  => 'POST',
       'content' => http_build_query($data1)
     )
    );
    $context  = stream_context_create($options);
    $result= file_get_contents($url_vues, false, $context);
    $vues = json_decode($result);
    if ($vues === FALSE) { /* Handle error */ }
    // var_dump($vues);
    return $vues;
}

//--------------------------- fin 

//--------------------------- requete pour afficher les elements d'une categores

function info_cat_post($matricule_cat){ //---requete pour afficher les elements d'une categores

    $url_vues= "https://akila.blog/api_text/api_new/categorie_vues";
    
    $data1 = array( 
               'matricule_cat' => $matricule_cat, 
               );
    
    // utilisez 'http' même si vous envoyez la requête sur https:// ...
    $options = array(
     'http' => array(
       'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
       'method'  => 'POST',
       'content' => http_build_query($data1)
     )
    );
    $context  = stream_context_create($options);
    $result= file_get_contents($url_vues, false, $context);
    $info_categorie = json_decode($result);
    if ($info_categorie === FALSE) { /* Handle error */ }
    // var_dump($vues);
    return $info_categorie[0];
}

//--------------------------- fin 
//=----------------------fonction qui recuper les administrateur du blog
function info_admin($matricule_admin){ 

    $url= "https://akila.blog/api/categorie_vues";
    
    $data = array( 
               'mat_admin' => $matricule_admin, 
               );
    
    // utilisez 'http' même si vous envoyez la requête sur https:// ...
    $options = array(
     'http' => array(
       'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
       'method'  => 'POST',
       'content' => http_build_query($data)
     )
    );
    $context  = stream_context_create($options);
    $result= file_get_contents($url, false, $context);

    $info_admin = json_decode($result);
    if ($info_admin === FALSE) { /* Handle error */ }
    // var_dump($info_admin);
    return $info_admin;
}

//=============== Function qui permet d'afficher le nombre de produits par categorie================================
function count_produit_cat($mat_cat) {

    $array=recup_mat_cat();
    $nbr = array();
    $nbr = count(array_keys($array,$mat_cat));
    return $nbr;
    
}
//--------------------fin

//=== fonction qui recuper tous les produits ayant la meme categories============

function recupProduitCategorie($mat_categori){
    $artticles_cat=[];
    $data= recup_article();
    foreach($data as $value){
        if($value->id_categorie == $mat_categori){
            $artticles_cat[]=$value;
        }
    }
    return $artticles_cat;
}


function Recuper_service_detail($mat_Services){
    $service=[];
    $data= recup_services();
    foreach($data as $value){
        if($value->matricule_entreprise == $mat_Services){
            $services[]=$value;
        }
    }
    return $service;
}




