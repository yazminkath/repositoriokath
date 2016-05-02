<?php
$piedepagina = "../piedepagina/menu.php"; 
?>
<?php
$directorio=$_GET['directorio'];
$nombreproducto=$_GET['nombreproducto'];
$limit=$_GET['limit'];
$total=$_GET['total'];
$totalpaginas=$_GET['totalpaginas'];
$paginactual=$_GET['paginactual'];
$brc=$_GET['brc'];

$paginas = $totalpaginas-1;

if($brc == 1){
	$opciondecarga = $total;	
}else {
	$opciondecarga = ($total - (($limit*$brc)-$limit));
}

$carga1 = $opciondecarga;
$carga2 = $carga1-1;
$carga3 = $carga2-1;
$carga4 = $carga3-1;
$carga5 = $carga4-1;
$carga6 = $carga5-1;
$carga7 = $carga6-1;
$carga8 = $carga7-1;
$carga9 = $carga8-1;

$producto1 = $directorio.'/'.$nombreproducto.$carga1.'.php';
$producto2 = $directorio.'/'.$nombreproducto.$carga2.'.php';
$producto3 = $directorio.'/'.$nombreproducto.$carga3.'.php';
$producto4 = $directorio.'/'.$nombreproducto.$carga4.'.php';
$producto5 = $directorio.'/'.$nombreproducto.$carga5.'.php';
$producto6 = $directorio.'/'.$nombreproducto.$carga6.'.php';
$producto7 = $directorio.'/'.$nombreproducto.$carga7.'.php';
$producto8 = $directorio.'/'.$nombreproducto.$carga8.'.php';
$producto9 = $directorio.'/'.$nombreproducto.$carga9.'.php';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Galería de productos de Brcmedia.com</title>
<link rel="shortcut icon" href="http://www.brcmedia.com/favicon.ico">
<meta name="description" content="Galería de productos disponibles en Brcmedia.com">
<meta name="keywords" content="Productos,hosting,web,diseño,programación,mail,dominio,brcmedia">
<meta name="DC.Creator" content="Martin Brocos">
<meta name="DC.Language" scheme="RFC1766" content="Spanish">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="Author" content="Martin Brocos">
<meta name="Copyright" content="Copyright (c) 2009 by Martin Brocos, All Right Reserved">
<meta content="15 days" name="revisit-after">
<meta content="ALL" name="ROBOTS">
<link href="../css_scripts/02.css" rel="stylesheet" rev="stylesheet" type="text/css">
<script type="text/javascript">
<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
</head>
<body onLoad="MM_preloadImages('../imagenes/inicio2.jpg','../imagenes/laempresa2.jpg','../imagenes/servicios2.jpg','../imagenes/productos2.jpg','../imagenes/contacto2.jpg')">
<div align="center">
  <div align="left">
    <table width="975" border="0" align="center" cellpadding="4" cellspacing="0" bgcolor="#000000">
      <tr>
        <td><img src="../imagenes/mapaweb.gif" alt="Mapa de la web brcmedia.com" name="Image1" width="19" height="15" border="0" id="Image2"> <a href="../mapaweb.html" class="mbrocos" title="Mapa de la web brcmedia.com">Mapa Web</a> /&nbsp;<a class="mbrocos" href="../avisolegal/avisolegal.php" title="Aviso Legal de BRCmedia">Aviso Legal </a>/ <strong>&copy;</strong> mart&iacute;n brocos. Telf: <font color="#FFFFFF">977 11 09 93</font> / M&oacute;vil: <font color="#FFFFFF">636 84 25 10</font></td>
      </tr>
    </table>
    <table width="975" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td><img src="../bannerdeportada/banner1.jpg" alt="Brcmedia empresas servicios productos" width="975" height="223"></td>
      </tr>
    </table>
    <table width="975" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td align="center"><a href="../index.php"><img src="../imagenes/inicio1.jpg" alt="Ir a la página principal de Brcmedia.com" name="Image6" width="104" height="70" border="0" id="Image6" onMouseOver="MM_swapImage('Image6','','../imagenes/inicio2.jpg',1)" onMouseOut="MM_swapImgRestore()"></a><a href="../laempresa/laempresa.php"><img src="../imagenes/laempresa1.jpg" alt="La Empresa" name="Image7" width="148" height="70" border="0" id="Image7" onMouseOver="MM_swapImage('Image7','','../imagenes/laempresa2.jpg',1)" onMouseOut="MM_swapImgRestore()"></a><a href="../servicios/servicios.php"><img src="../imagenes/servicios1.jpg" alt="Servicios Brcmedia.com" name="Image8" width="148" height="70" border="0" id="Image8" onMouseOver="MM_swapImage('Image8','','../imagenes/servicios2.jpg',1)" onMouseOut="MM_swapImgRestore()"></a><a href="loading.php"><img src="../imagenes/productos2.jpg" alt="Galería de productos de Brcmedia.com" name="Image9" width="148" height="70" border="0" id="Image9" onMouseOver="MM_swapImage('Image9','','../imagenes/productos2.jpg',1)" onMouseOut="MM_swapImgRestore()"></a><a href="../productos/loading.php"></a><a href="../contacto/contacto.php"><img src="../imagenes/contacto1.jpg" alt="Contacto Brcmedia" name="Image10" width="147" height="70" border="0" id="Image10" onMouseOver="MM_swapImage('Image10','','../imagenes/contacto2.jpg',1)" onMouseOut="MM_swapImgRestore()"></a><img src="../imagenes/despuesdecontacto.jpg" alt="Grupos musicales solistas artistas conciertos música" width="280" height="70"></td>
      </tr>
    </table>
    <table class="tablacentro" width="975" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="708" align="center" valign="top">&nbsp;<br>
            <table width="627" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td><p><img src="../imagenes/titproductos.jpg" alt="Galería de productos Brcmedia.com" width="627" height="31"></p></td>
              </tr>
            </table>
          <table width="627" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td><p><img src="../imagenes/separacion.gif" alt="Brcmedia empresas servicios productos" width="627" height="12"></p></td>
              </tr>
            </table>
          <table width="627" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td><p>Texto de presentación de los productos aquí. Texto de presentación de los productos aquí. Texto de presentación de los productos aquí. Texto de presentación de los productos aquí. Texto de presentación de los productos aquí. Texto de presentación de los productos aquí. </p>
                </td>
              </tr>
            </table>
            
          
            
          
          &nbsp;
          &nbsp;
          <table width="620" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td><p align="right">
                  <?php if($total >= 10){
	
			if ($brc == 1){
			echo "<strong>Pagina 1</strong>  /  ";			
			}else {
			echo "<a class='brcmedia' href='galeria.php?directorio=$directorio&nombreproducto=$nombreproducto&limit=$limit&total=$total&totalpaginas=$totalpaginas&brc=1'>Pagina 1</a>  /  ";
			}
			for ($i=2;$i<=$paginas;$i++) {
			if ($brc == $i){
			echo "  <strong>$i</strong>  /  ";
			}else {
			echo "  <a class='brcmedia' href='galeria.php?directorio=$directorio&nombreproducto=$nombreproducto&limit=$limit&total=$total&totalpaginas=$totalpaginas&brc=$i'>$i</a>  /  ";
			}
		} 
			if ($brc == $totalpaginas){
			echo "  <strong>Pagina  $totalpaginas</strong>";
			}else {
			echo "<a class='brcmedia' href='galeria.php?directorio=$directorio&nombreproducto=$nombreproducto&limit=$limit&total=$total&totalpaginas=$totalpaginas&brc=$totalpaginas'>Pagina  $totalpaginas</a>";
		}
	}
?>
              </p></td>
            </tr>
          </table>
          <table width="627" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><p><img src="../imagenes/separacion.gif" alt="Brcmedia empresas servicios productos" width="627" height="12"></p></td>
            </tr>
          </table>  
          <br>
          <table width="630" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="210" align="center" valign="top"><?php include($producto1); ?></td>
              <td width="210" align="center" valign="top"><?php include($producto2); ?></td>
              <td width="210" align="center" valign="top"><?php include($producto3); ?></td>
            </tr>
            <tr>
              <td width="210" align="center" valign="top">&nbsp;</td>
              <td width="210" align="center" valign="top">&nbsp;</td>
              <td width="210" align="center" valign="top">&nbsp;</td>
            </tr>
            <tr>
              <td width="210" align="center" valign="top"><?php include($producto4); ?></td>
              <td width="210" align="center" valign="top"><?php include($producto5); ?></td>
              <td width="210" align="center" valign="top"><?php include($producto6); ?></td>
            </tr>
            <tr>
              <td width="210" align="center" valign="top">&nbsp;</td>
              <td width="210" align="center" valign="top">&nbsp;</td>
              <td width="210" align="center" valign="top">&nbsp;</td>
            </tr>
            <tr>
              <td width="210" align="center" valign="top"><?php include($producto7); ?></td>
              <td width="210" align="center" valign="top"><?php include($producto8); ?></td>
              <td width="210" align="center" valign="top"><?php include($producto9); ?></td>
            </tr>
          </table>
            
          <br>
          <table width="627" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><p><img src="../imagenes/separacion.gif" alt="Brcmedia empresas servicios productos" width="627" height="12"></p></td>
            </tr>
          </table>
          <table width="620" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td><p align="right">
                  <?php if($total >= 10){
	
			if ($brc == 1){
			echo "<strong>Pagina 1</strong>  /  ";			
			}else {
			echo "<a class='brcmedia' href='galeria.php?directorio=$directorio&nombreproducto=$nombreproducto&limit=$limit&total=$total&totalpaginas=$totalpaginas&brc=1'>Pagina 1</a>  /  ";
			}
			for ($i=2;$i<=$paginas;$i++) {
			if ($brc == $i){
			echo "  <strong>$i</strong>  /  ";
			}else {
			echo "  <a class='brcmedia' href='galeria.php?directorio=$directorio&nombreproducto=$nombreproducto&limit=$limit&total=$total&totalpaginas=$totalpaginas&brc=$i'>$i</a>  /  ";
			}
		} 
			if ($brc == $totalpaginas){
			echo "  <strong>Pagina  $totalpaginas</strong>";
			}else {
			echo "<a class='brcmedia' href='galeria.php?directorio=$directorio&nombreproducto=$nombreproducto&limit=$limit&total=$total&totalpaginas=$totalpaginas&brc=$totalpaginas'>Pagina  $totalpaginas</a>";
		}
	}
?>
              </p></td>
            </tr>
          </table>
          <p></p>
          <p><br>
          </p>
          <table width="627" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td><p><img src="../imagenes/separacion.gif" alt="Brcmedia empresas servicios productos" width="627" height="12"></p></td>
                  </tr>
          </table>
           
          
          
           
                                  &nbsp;
                             <table width="627" border="0" align="center" cellpadding="4" cellspacing="0">
                               <tr>
                                 <td align="center"><p align="center">
                                     <?php include($piedepagina); ?>
                                 </p></td>
                               </tr>
                             </table>
            
          <br>
                             <table width="627" border="0" align="center" cellpadding="0" cellspacing="0">
                               <tr>
                                 <td><p><img src="../imagenes/separacion.gif" alt="Brcmedia empresas servicios productos" width="627" height="12"></p></td>
                               </tr>
                             </table>
          <p></p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p><br>
                           </p></td>
        <td width="267" valign="top">&nbsp;<br>
          <table width="256" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td><p><strong>Productos</strong><br>
              </p></td>
            </tr>
          </table>
          <table width="256" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><img src="../imagenes/separacion3.gif" alt="Brcmedia empresas servicios productos" width="254" height="12"></td>
            </tr>
          </table>
            
          <br>
          <table width="256" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><p><img src="../imagenes/flecha2.jpg" alt="brcmedia empresas servicios productos" width="16" height="10"> Trabajos de diseño web<br>
                      <img src="../imagenes/flecha2.jpg" alt="brcmedia empresas servicios productos" width="16" height="10"> Trabajos en programación<br>
                      <img src="../imagenes/flecha2.jpg" alt="brcmedia empresas servicios productos" width="16" height="10"> Trabajos web<br>
                      <img src="../imagenes/flecha2.jpg" alt="brcmedia empresas servicios productos" width="16" height="10"> Trabajos en diseño gráfico<br>
                      <img src="../imagenes/flecha2.jpg" alt="brcmedia empresas servicios productos" width="16" height="10"> Trabajos en papel<br>
                      <img src="../imagenes/flecha2.jpg" alt="brcmedia empresas servicios productos" width="16" height="10"> Carteles<br>
                      <img src="../imagenes/flecha2.jpg" alt="brcmedia empresas servicios productos" width="16" height="10"> Láminas decorativas<br>
                      <img src="../imagenes/flecha2.jpg" alt="brcmedia empresas servicios productos" width="16" height="10"> Pósters y murales<br>
                      <img src="../imagenes/flecha2.jpg" alt="brcmedia empresas servicios productos" width="16" height="10"> Diseño de camisetas<br>
                      <img src="../imagenes/flecha2.jpg" alt="brcmedia empresas servicios productos" width="16" height="10"> Diseño industrial<br>
                      <img src="../imagenes/flecha2.jpg" alt="brcmedia empresas servicios productos" width="16" height="10"> Galerías fotográficas<br>
                      <img src="../imagenes/flecha2.jpg" alt="brcmedia empresas servicios productos" width="16" height="10"> Trabajos de diseño web<br>
                      <img src="../imagenes/flecha2.jpg" alt="brcmedia empresas servicios productos" width="16" height="10"> Trabajos en programación<br>
                      <img src="../imagenes/flecha2.jpg" alt="brcmedia empresas servicios productos" width="16" height="10"> Trabajos web<br>
                      <img src="../imagenes/flecha2.jpg" alt="brcmedia empresas servicios productos" width="16" height="10"> Trabajos en diseño gráfico<br>
                      <img src="../imagenes/flecha2.jpg" alt="brcmedia empresas servicios productos" width="16" height="10"> Trabajos en papel<br>
                      <img src="../imagenes/flecha2.jpg" alt="brcmedia empresas servicios productos" width="16" height="10"> Carteles<br>
                      <img src="../imagenes/flecha2.jpg" alt="brcmedia empresas servicios productos" width="16" height="10"> Láminas decorativas<br>
                      <img src="../imagenes/flecha2.jpg" alt="brcmedia empresas servicios productos" width="16" height="10"> Pósters y murales<br>
                      <img src="../imagenes/flecha2.jpg" alt="brcmedia empresas servicios productos" width="16" height="10"> Diseño de camisetas<br>
                      <img src="../imagenes/flecha2.jpg" alt="brcmedia empresas servicios productos" width="16" height="10"> Diseño industrial<br>
                      <img src="../imagenes/flecha2.jpg" alt="brcmedia empresas servicios productos" width="16" height="10"> Galerías fotográficas<br>
                      <img src="../imagenes/flecha2.jpg" alt="brcmedia empresas servicios productos" width="16" height="10"> Trabajos de diseño web<br>
                      <img src="../imagenes/flecha2.jpg" alt="brcmedia empresas servicios productos" width="16" height="10"> Trabajos en programación<br>
                      <img src="../imagenes/flecha2.jpg" alt="brcmedia empresas servicios productos" width="16" height="10"> Trabajos web<br>
                      <img src="../imagenes/flecha2.jpg" alt="brcmedia empresas servicios productos" width="16" height="10"> Trabajos en diseño gráfico<br>
                      <img src="../imagenes/flecha2.jpg" alt="brcmedia empresas servicios productos" width="16" height="10"> Trabajos en papel<br>
                      <img src="../imagenes/flecha2.jpg" alt="brcmedia empresas servicios productos" width="16" height="10"> Carteles<br>
                      <img src="../imagenes/flecha2.jpg" alt="brcmedia empresas servicios productos" width="16" height="10"> Láminas decorativas<br>
                      <img src="../imagenes/flecha2.jpg" alt="brcmedia empresas servicios productos" width="16" height="10"> Pósters y murales<br>
                      <img src="../imagenes/flecha2.jpg" alt="brcmedia empresas servicios productos" width="16" height="10"> Diseño de camisetas<br>
                      <img src="../imagenes/flecha2.jpg" alt="brcmedia empresas servicios productos" width="16" height="10"> Diseño industrial<br>
                      <img src="../imagenes/flecha2.jpg" alt="brcmedia empresas servicios productos" width="16" height="10"> Galerías fotográficas</p>
                  <p>&nbsp;</p></td>
            </tr>
          </table></td>
      </tr>
    </table>
    <table class="tablacentro3" width="975" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="708" align="center" valign="top"><br>
            <table width="627" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td><p align="right"><a href="http://www.brcmedia.com"><img src="../imagenes/logopeqinf.jpg" alt="Plantillas flash php html xml css diseño de paginas web a medida brcmedia" width="96" height="35" border="0"></a></p></td>
              </tr>
            </table>
             
        </td>
        <td width="267" valign="top">&nbsp;</td>
      </tr>
    </table>
    </div>
</div>
</body>
</html>