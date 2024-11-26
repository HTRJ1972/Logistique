<?php

function recup_category(){
    global $matricule_entreprise;
  $url_visiteur= "https://akila.blog/api_text/api_new/categorie_vues";
  
  $data = array( 
             'matricule_entreprise' =>  $matricule_entreprise, 
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
  $result= file_get_contents($url_visiteur, false, $context);
  $categories = json_decode($result);
  if ($categories === FALSE) { /* Handle error */ }
  // var_dump($categories);

  return  $categories;
}


//---requete pour afficher les elements d'une categores
function info_cat_post($matricule_cat){ 

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

//=============== Function qui permet d'afficher le nombre de produits par categorie================================
function count_produit_cat($mat_cat) {

  $array=recup_mat_cat();
  $nbr = array();
  $nbr = count(array_keys($array,$mat_cat));
  return $nbr;
  
}

//====== function qui permet de de recuper tous les matricule des categories des produits ==========================
function recup_mat_cat(){
  global $obj_tous_post;
  $recup_mat_cat=[];
  foreach($obj_tous_post as $value){
      $recup_mat_cat[]= $value->id_categorie;
  }
  return $recup_mat_cat;
}
//-------------------------fin