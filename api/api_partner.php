<?php

// $logo_partenaire="https://akila.blog/@ressouce/logo_site/";   // lien des logos des partenaire

// $matricule_entreprise="654b7262c7d05";
//===== les vues sur un articles===== 
// $partenaire = info_partenaire();
//==== fin de recuperation==========

//====================fonction qui recuper les partenaire de l'entreprise ====================
function info_partenaire(){
    global $matricule_entreprise;
    $fields = [
        "matricule_entreprise" => $matricule_entreprise, //---------------------
    ];
    $postdata = http_build_query($fields);
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL, 'https://akila.blog/api/info_partenaire');
    curl_setopt($ch,CURLOPT_POST, true);
    curl_setopt($ch,CURLOPT_POSTFIELDS, $postdata);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    
    $info_partenaire = json_decode($result);
    //-- verifie si les informtion recupé ne sont pas vide
    if (isset($info_partenaire)) {
        return $info_partenaire;
        // var_dump($produits[0]->nom_art);
    }else{
        
    }
    //--- fin 
  }
/*
  matricule_entreprise      => 
  logo                      => 
  nom                       => 
  lien_site                 => 
  at_date   
  */
  