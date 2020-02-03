<?php
$route="fotos/";
$route=$route.basename($_FILES['file']['name']);
//die(var_dump($route));
if(move_uploaded_file($_FILES['file']['tmp_name'], $route)){
  exec( 'icacls "'.$route.'" /q /c /reset' );
  die("Archivo cargado correctamente");
}
else{
  die("Error al cargar archivo");
};
?>
