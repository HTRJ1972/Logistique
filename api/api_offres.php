<?php

// $Lien_image_offres="https://akila.blog/img_page/";   // lien des logos des partenaire

// $matricule_entreprise="654b7262c7d05";
//===== les vues sur un articles===== 
$offres = info_offres();
// print_r($offres);
//==== fin de recuperation==========

//====================fonction qui recuper les partenaire de l'entreprise ====================
function info_offres(){
    global $matricule_entreprise;
    $fields = [
        "matricule_entreprise" => $matricule_entreprise, //---------------------
    ];
    $postdata = http_build_query($fields);
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL, 'https://akila.blog/api/offres');
    curl_setopt($ch,CURLOPT_POST, true);
    curl_setopt($ch,CURLOPT_POSTFIELDS, $postdata);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    
    $info_offres = json_decode($result);
    //-- verifie si les informtion recupé ne sont pas vide
    if (isset($info_offres)) {
        return $info_offres;
        // var_dump($produits[0]->nom_art);
    }else{
        
    }
    //--- fin 

    /*
    Array
(
    [0] =&gt; stdClass Object
        (
            [id] =&gt; 23
            [matricule_entreprise] =&gt; 65707eb0c3041
            [matricule_page] =&gt; 6575f55cb4608
            [nom_page] =&gt; VISA Etudiant pour le Canada
            [titre] =&gt; Obtenez votre VISA Etudiant pour le Canada à 5 Millions de Fcfa !
            [img_banniere] =&gt; 23-12-10-33akila_blog.png
            [content] =&gt; 

            [publie] => 2
            [matricule_admin] => 2159230325
            [date] => 2023-12-10
            [time] => 17:29:00
            [permalien_page] => visa-etudiant-pour-le-canada
            [page_vente] => oui
            [telephone_lien] => https://akila.blog/canada-best-life-b/contact
            [text_bouton] => Inscrivez-vous pour profiter !
            [page_ab] => 
            [page_ag] => 
            [devise] => 
            [pay] => 
            [prix] => 
        )



)



    */
  }
  