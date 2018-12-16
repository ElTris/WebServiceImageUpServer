<?php
$image = $_POST["image"];
$name = $_POST["name"];
$nameDirectory = $_POST["nameDirectory"];
$upload_path = "$nameDirectory/$name.jpg";
$route = "$nameDirectory";
$nameTotall=$name.'.jpg';
$rutaDirectory=$nameDirectory.'/'.$nameTotall;
    if (!file_exists($route)) {
    
    
      system("mkdir $route");


    if(file_exists($rutaDirectory) or $name == ""){
     echo json_encode(array('response'=>'el archivo ya existe o no tiene un nombre')); 
    }else{
      file_put_contents($upload_path,base64_decode($image));
      echo json_encode(array('response'=>'image uploaded succesfully'));
    }
    
  
  }
    
    else{
      if(file_exists($rutaDirectory) or $name == ""){
        echo json_encode(array('response'=>'el archivo ya existe o no tiene un nombre')); 
       }else{
         file_put_contents($upload_path,base64_decode($image));
         echo json_encode(array('response'=>'image uploaded succesfully'));
       }
    }
 ?>
