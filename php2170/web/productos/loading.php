<?php

$directorio = 'productos';  // Carpeta donde están las fotografías
$nombreproducto = 'producto'; // Nombre de las fotografías
$limit =9; // Numero de fotografías  por pagina
$brc = 1;
$dir=opendir($directorio);
while ($file = readdir($dir))
{ 
$archivos[] = $file;
if($file != "." AND $file != "..") {
  {
 	array_push($pn, $file);
  }
 }
}
$total_archivos = count($archivos); 
$total = $total_archivos-2;
$totalpaginas = ceil($total/$limit);
closedir($dir) ;

?>
<?php
 header("location: galeria.php?directorio=$directorio&nombreproducto=$nombreproducto&limit=$limit&total=$total&totalpaginas=$totalpaginas&brc=$brc"); 
?>