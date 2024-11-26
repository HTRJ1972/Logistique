<?php

//--------------------- lien pour les images 88732230809
// $lien_logo ="https://akila.blog/logo_site/";        // lien du logo de l'entreprise

// $matricule_entreprise="1011121121";
// $matricule_entreprise="654b7262c7d05";

//===== Recuper les info de l'entreprises ===== 
 $info_header =info_entreprise();
//  print_r($info_header);
//==== fin de recuperation========== info_partenaire()



function info_entreprise(){
    global $matricule_entreprise;
    $fields = [
        "matricule_entreprise" => $matricule_entreprise, //---------------------
    ];
    $postdata = http_build_query($fields);
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL, 'https://akila.blog/api_text/api_new/info_entreprise');
    curl_setopt($ch,CURLOPT_POST, true);
    curl_setopt($ch,CURLOPT_POSTFIELDS, $postdata);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    
    $info_entreprise = json_decode($result);
    //-- verifie si les informtion recupé ne sont pas vide
    if (isset($info_entreprise)) {
        return $info_entreprise[0];
        // var_dump($produits[0]->nom_art);
    }else{
        
    }
    //--- fin 
  }
  
/*
exemple des donnees recuperer sortant dans variable: $info_header 
exemple d'affichage d'une valeur (une ville):
<p> la ville est :  $info_header ->ville  </p>

stdClass Object
(
    [id] => 48
    [permalien] => lmb
    [nom_entreprise] => La maison des billets +
    [cours_nom] => LMB
    [matricule_entreprise] => 65c3e2b8e0756
    [matricule_admin] => 15215885894
    [pays] => 8
    [ville] => Douala
    [region] => Littoral
    [email] => lamaisondesbillets@gmail.com
    [quartier] => Bonadiotto
    [telephone] => +237 672 605 647
    [id_core] => 6
    [logo] => 24-02-07-10akila_blog.png
    [color1] => #f18b08
    [color2] => #312783
    [google_map] => 
    [decription] => LMB +  est une entreprise fondée dans le cadre de l'initiative gouvernementale visant à promouvoir l'entrepreneuriat chez les jeunes au Cameroun. LMB+ opère dans plusieurs domaines
    [pixel_fb] => 
    [lien_fb] => Https://web.facebook.com/LaMaisonDesBillets
    [lien_linkedin] => 
    [twitter] => 
    [youtube] => 
    [instagram] => 
    [whatsapp] => 237672605647
    [titre_service] => Nos meilleurs services
    [titre_blog] => Tous les articles récents de notre journal
    [titre_member] => Notre équipe technique
    [bouton_whatsapp] => oui
    [page404] => non

    [page1] => Accueil
    [page2] => Services
    [page3] => blog
    [page4] => Contact
    [banniere] => 2
    
    [mention_titre] => Nos succès
    [mention_des] => La détermination est le facteur le plus important de la réussite
    
    [mention1] => 50
    [mention_titre1] => Projet terminé
    
    [mention2] => 205
    [mention_titre2] => Clients satisfaits
    
    [mention3] => 25
    [mention_titre3] => Total gagné
    
    [mention4] => 35
    [mention_titre4] => Prix remportés
    
    [nom_domaine] => 
    [onsite] => 1
    [page_vente] => oui
    [articles] => 1
    [site_actu] => 1
)


*/



//----------- affiche le detail d'un post



