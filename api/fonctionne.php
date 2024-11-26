<?php 
    function affichage_img($chemin,$image){
        if(!empty($image)){
        if (!filter_var($image, FILTER_VALIDATE_URL) === false) {
            $img=$image;
          } else {
            $img=$chemin . $image;
              }
        return $img;    
    }
  }

  function strTextLent($text,$nbr){
    $txt='';
    $text= strip_tags($text);
    if(strlen($text)>$nbr):
        $txt= substr($text,0,$nbr).' ...';
    else:
        $txt=$text;
    endif;
    return $txt;
  }

  function data_date($data){
    $data = explode('-',$data);
    switch ($data[1]) {
        case '01':
            $moi='Jan';
            break;
        case '02':
            $moi='Frev';
            break;
        case '03':
            $moi='Mars';
            break;
        case '04':
            $moi='Avril';
            break;

        case '05':
            $moi='Mai';
            break;
        case '06':
            $moi='Jin';
            break;
        case '07':
            $moi='Juin';
            break;
        case '08':
            $moi='Aout';
            break;
        case '09':
            $moi='Sept';
            break;
        case '10':
            $moi='Oct';
            break;
        case '11':
            $moi='Nov';
            break;
        case '12':
            $moi='Dec';
            break;
        default:
        $moi='pas de mois';
            break;
    }
    $data= $data[2].' '.$moi.', '.$data[0];

}

function titre($b){
    
    $nom=explode(' ',$b);
    $nom=implode('-',$nom);
    $nom=strtolower(str_replace('?','!',$nom));
     $nom=strtolower(str_replace('/','-',$nom));
    return $nom;
}