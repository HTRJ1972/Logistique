<?php
// $img_service="https://akila.blog/img_service/";  // lien des image des membres
// $matricule_entreprise="1011121121";
// $matricule_entreprise="654b7262c7d05"; 

//===== les vues sur un articles===== 
// $services = recup_services();
// print_r($services);
//==== fin de recuperation==========

//==================== fonction qui recuper les membres de l'equipe de l'entreprise l'entreprise ====================
function recup_services(){
    global $matricule_entreprise;
    $fields = [
        "matricule_entreprise" => $matricule_entreprise, //---------------------
    ];
    $postdata = http_build_query($fields);
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL, 'https://akila.blog/api/services');
    curl_setopt($ch,CURLOPT_POST, true);
    curl_setopt($ch,CURLOPT_POSTFIELDS, $postdata);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    
    $services = json_decode($result);
    //-- verifie si les informtion recupé ne sont pas vide
    if (isset($services)) {
        return $services;
        // var_dump($produits[0]->nom_art);
    }else{
        
    }
    //--- fin 
    
  }

//------------recupe detail service
  function Recuper_service_detail($mat_Services){
    $service=[];
    $data= recup_services();
    foreach($data as $value){
        if($value->matricule_service == $mat_Services){
            $service []=$value;
        }
    }
    return $service;
}
  /*
  exemple des donnees recuperer sortant dans variable: $services 
exemple d'affichage d'une valeur (du titre d'un service):
<p> le titre est :  $services[0] ->nom  </p>
  stdClass Object
(
    [id] =&gt; 109
    [matricule_service] =&gt; 65c48ea880b8e
    [nom] =&gt; CHANGE DE DEVISES
    [description] =&gt; 
    [matricule_entreprise] =&gt; 65c3e2b8e0756
    [image] =&gt; https://img.freepik.com/free-photo/cozy-living-room-interior-with-panoramic-window_1262-12322.jpg?size=626&amp;ext=jpg&amp;uid=R42397107&amp;ga=GA1.2.629720794.1686654544&amp;semt=ais
    [formation] =&gt; 1
    [at_date] =&gt; 2024-02-08

)

  */
  