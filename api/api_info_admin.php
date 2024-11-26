<?php
$lien_profil= 'https://akila.blog/@ressouce/profile/' ;
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

/*
stdClass Object
(
    [nom] => bayiha
    [prenom] => dieudonne
    [tel] => +237 690386539
    [profil] => 23-08-03-36akila_blog.png
)



*/
