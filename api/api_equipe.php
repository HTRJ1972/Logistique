<?php
//$photo_equipe="https://akila.blog/photo_membrer/";  // lien des image des membres
// $matricule_entreprise="1011121121";
// $matricule_entreprise="654b7262c7d05"; 

//===== les vues sur un articles===== 
// $equipe = info_equipe();
// print_r($equipe);
//==== fin de recuperation==========

//==================== fonction qui recuper les membres de l'equipe de l'entreprise l'entreprise ====================
function info_equipe(){
    global $matricule_entreprise;
    $fields = [
        "matricule_entreprise" => $matricule_entreprise, //---------------------
    ];
    $postdata = http_build_query($fields);
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL, 'https://akila.blog/api/equipe');
    curl_setopt($ch,CURLOPT_POST, true);
    curl_setopt($ch,CURLOPT_POSTFIELDS, $postdata);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    
    $equipe = json_decode($result);
    //-- verifie si les informtion recupé ne sont pas vide
    if (isset($equipe)) {
        return $equipe;
        // var_dump($produits[0]->nom_art);
    }else{
        
    }

    //--- fin 
    /*
    Array
(
    [0] => stdClass Object
        (
            [id] => 37
            [matricule_entreprise] => 6561d3dd3bbf7
            [nom] => Guy Marcel SOHAING
            [prenom] => 
            [email] => guy@groupegeosphere.com
            [poste] => CEO
            [telephone] => +237 6 93 30 53 64
            [lien_fb] => 
            [lien_link] => 
            [lien_what] => +237 6 93 30 53 64
            [lien_twit] => 
            [photo_memb] => 24-01-14-56akila_blog.jpeg
            [at_date] => 2023-11-27 14:06:56
        )

    [1] => stdClass Object
        (
            [id] => 38
            [matricule_entreprise] => 6561d3dd3bbf7
            [nom] => KACKAM
            [prenom] => Jean Claver
            [email] => info@groupegeosphere.com
            [poste] => Operations Manager
            [telephone] => 
            [lien_fb] => 
            [lien_link] => 
            [lien_what] => 
            [lien_twit] => 
            [photo_memb] => 24-01-14-07akila_blog.jpeg
            [at_date] => 2023-11-27 14:11:51
        )

)




    */
}
  