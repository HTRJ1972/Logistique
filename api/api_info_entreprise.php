<?php

//--------------------- lien pour les images 88732230809  image_baniere
// $lien_logo ="https://akila.blog/logo_site/";        // lien du logo de l'entreprise
// $image_banniere="https://akila.blog/@ressouce/couverture_banniere/";
// $image_banniere="https://akila.blog/image_baniere/";
// $matricule_entreprise="1011121121";
// $matricule_entreprise="654b7262c7d05";

//===== Recuper les info de l'entreprises ===== 
 $dataEntreprise = entreprise();
//  print_r($dataEntreprise);
//==== fin de recuperation========== info_partenaire()



function entreprise(){
    global $matricule_entreprise;
    $fields = [
        "matricule_entreprise" =>$matricule_entreprise, //--------------------- info_core
    ];
    $postdata = http_build_query($fields);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE );
    curl_setopt( $ch, CURLOPT_HEADER, 0 );
    curl_setopt($ch,CURLOPT_URL, 'https://akila.blog/api/info_core');
    curl_setopt($ch,CURLOPT_POST, true);
    curl_setopt($ch,CURLOPT_POSTFIELDS, $postdata);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
    curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, TRUE );
    $result = curl_exec($ch);
    
    $entreprise = json_decode($result);
    // var_dump($entreprise);

    //-- verifie si les informtion recupé ne sont pas vide
    if (isset($entreprise)) {
        return $entreprise[0];
        // var_dump($produits[0]->nom_art);
    }else{
        return 'rien';
    }
    
    //--- fin 
  }
  

/*
stdClass Object
(
    [id] => 9
    [matricule_entreprise] => 65c3e2b8e0756
    [annee] => 
    [siteweb] => 
    [date] => 2024-02-07
    [time] => 20:06:16
    [permalien] => 
    [titre_des_posts] => 
    [priorite1] => 0
    [sup_admin] => oui
    [bouton_whatsapp] => oui
    [site] => oui
    [g_titre] => Nos services
    [banniere_site1] => 24-02-08-14akila_blog.jpg
    [banniere_site2] => 
    [t_baniere1] => Vente des Billets d'avion
    [d_baniere1] => Nous vous facilitons d'obtention des billets d'avions pour vos voyages
    [t_baniere2] => Logements Meublés
    [d_baniere2] => Nous vous proposons des logements meublés chics et sécurisés  à des prix compétitifs.
    [t_baniere3] => Demande de visa
    [d_baniere3] => Nous vous accompagnons de bout en bout dans vos démarches jusqu'à l'obtention de votre visa.
    [color1] => 
    [color2] => 
    [propos] => 

    [titre_baniere] => 
    [descrip_baniere] => 
    [about_image1] => 24-02-07-26akila_blog.png
    [banniere_image2] => https://img.freepik.com/free-photo/home-interior-design-arrangement_23-2148986613.jpg?size=626&ext=jpg&uid=R42397107&ga=GA1.1.629720794.1686654544&semt=ais
    [banniere_image3] => https://img.freepik.com/free-photo/visa-application-form-tablet_23-2149117762.jpg?size=626&ext=jpg&uid=R42397107&ga=GA1.2.629720794.1686654544&semt=ais
    [titre_banniere_service] => Tous nos services
    [titre_banniere_blog] => Tous nos posts
    [titre_banniere_member] => 

    [titre_s] => Notre particularité
    [titre_s1] => Accompagnement
    [discription_s1] => Nous vous accompagnons de bout en bout dans vos démarches jusqu'à l'obtention de vos document .
    [titre_s2] => Conseils
    [description_s2] => Nous apportons des conseil pour prendre de bonne décisions durant la période de voyage
    [titre_s3] => Le suivis des clients
    [description_s3] => Nous suivons nos clients même après, être arrivé  à leur destination.
    
    [mention_titre] => Nos succès
    [mention_des] => 
    [mention1] => 20
    [mention_titre1] => Projet terminé
    [mention2] => 27
    [mention_titre2] => Des clients satisfaits
    [mention3] => 52k
    [mention_titre3] => Total gagné
    [mention4] => 15
    [mention_titre4] => Prix remportés
    [motivation_titre] => 	Raisons de choisir Camerounaise des services
    [motivation_desription] => 
    [motivation_img] => 
    [offre_titre] => Remplir ce formulaire
    [offre_descripr] => 'Décidez de vos objectifs et nous vous aidons à les atteindre pas à pas, sans vous exténuer mais en agissant de façon pérenne, grâce à un projet de partenariat de développement commercial de vos activités.
    [offre_img] => 
)




*/


//----------- affiche le detail d'un post



