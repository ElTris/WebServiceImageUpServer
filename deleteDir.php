<?php 
function rmDir_rf($carpeta){
    foreach(glob($carpeta . "/*") as $archivosCarpeta){
        if(is_dir($archivosCarpeta)){
            rmDir_rf($archivosCarpeta);
        }else{
            unlink($archivosCarpeta);
        }
    }
    rmdir($carpeta);
}
$nameDirectory = $_POST["nameDirectory"];
$route = $nameDirectory;
if (file_exists($route)) {
    rmDir_rf($route);
    echo json_encode(array('response2'=>'el directorio se ha eliminado')); 
}else{
    echo json_encode(array('response2'=>'el directorio no fue creado antes')); 
}

?>