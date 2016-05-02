<?php
$dir = "noticias/noticias";
$dh  = opendir($dir);
while (false !== ($nombre_archivo = readdir($dh))) {
   $archivos[] = $nombre_archivo;
}
$total_archivos = count($archivos);
$totalnoticias = $total_archivos-2; 
?> 
<?php
$noticia = "noticias/noticias/noticia".$totalnoticias.".php"; 
?>
<?php
$min = 1; 
$max = 3; 
$bannerNumber = rand($min, $max); 
$banner = "bannerdeportada/banner".$bannerNumber.".php"; 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Plantillas flash php html xml diseño de páginas web brcmedia.com</title>

<link rel="shortcut icon" href="favicon.ico">
<link href="css_scripts/02.css" rel="stylesheet" rev="stylesheet" type="text/css">

<meta name="DC.Title" content="Plantillas flash php html xml diseño de páginas web brcmedia.com">
<meta name="DC.Creator" content="Martin Brocos">
<meta name="DC.Language" scheme="RFC1766" content="Spanish">

<meta name="title" content="Plantillas flash php html xml diseño de páginas web brcmedia.com">
<meta name="description" content="Diseño de páginas web y plantillas flash php html xml css">
<meta name="keywords" content="Diseñador web freelance flash plantillas templates gratis descargar php diseño páginas">
<meta name="Author" content="Martin Brocos">
<meta name="Copyright" content="Copyright (c) 2009 by Martin Brocos, All Right Reserved">
<meta name="revisit-after" content="15 days">
<meta name="ROBOTS" content="ALL">

<meta http-equiv="title" content="Plantillas flash php html xml diseño de páginas web brcmedia.com">
<meta http-equiv="keywords" content="plantillas gratis musica fotografos tiendas moda joyas vídeo bodas vino muebles inmobiliarias">
<meta http-equiv="description" content="Plantillas web realizadas en flash, php, html, css. Gestionables con sólo conocimientos a nivel de usuario. Plantillas web en castellano muy económicas. Diseño de páginas web flash html php a medida">
<meta http-equiv="DC.Description" content="Plantillas web realizadas en flash, php, html, css. Gestionables con sólo conocimientos a nivel de usuario. Plantillas web en castellano muy económicas. Diseño de páginas web flash html php a medida">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script src="css_scripts/brcmediarun.js" type="text/javascript"></script>
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
<script src="../../../Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>
<body onLoad="MM_preloadImages('imagenes/laempresa2.jpg','imagenes/servicios2.jpg','imagenes/productos2.jpg','imagenes/contacto2.jpg','imagenes/inicio2.jpg')">
<table width="975" border="0" align="center" cellpadding="4" cellspacing="0" bgcolor="#000000">
  <tr>
    <td width="700"><img src="imagenes/mapaweb.gif" alt="Mapa de la web brcmedia.com" width="19" height="15"> <a href="mapaweb.html" class="mbrocos" title="Mapa de la web brcmedia.com">Mapa Web</a> /&nbsp;<a class="mbrocos" href="avisolegal/avisolegal.php" title="Aviso Legal de BRCmedia">Aviso Legal </a>/ <strong>&copy;</strong> mart&iacute;n brocos. Telf: <font color="#FFFFFF">977 11 09 93</font> / M&oacute;vil: <font color="#FFFFFF">636 84 25 10</font></td>
    <td width="275"><div align="right"><a href="#" title="Versión en castellano"><img src="imagenes/es.jpg" alt="español" width="16" height="11" border="0"></a>&nbsp;<a href="#" title="English version"><img src="imagenes/gb.jpg" alt="english" width="16" height="11" border="0"></a>&nbsp;<a href="#" title="Versión en alemán"><img src="imagenes/de.jpg" alt="alemán" width="16" height="11" border="0"></a>&nbsp;<a href="#" title="Versión en francés"><img src="imagenes/fr.jpg" alt="francés" width="16" height="11" border="0"></a>&nbsp;<a href="#" title="Versión en italiano"><img src="imagenes/it.jpg" alt="italiano" width="16" height="11" border="0"></a>&nbsp;<a href="#" title="Versión en portugués"><img src="imagenes/pt.jpg" alt="portugués" width="16" height="11" border="0"></a>&nbsp;<a href="#" title="Versión en ruso"><img src="imagenes/ru.jpg" alt="ruso" width="16" height="11" border="0"></a>&nbsp;<a href="#" title="Versión en danés"><img src="imagenes/dk.jpg" alt="danés" width="16" height="11" border="0"></a>&nbsp;<a href="#" title="Versión en finlandés"><img src="imagenes/fi.jpg" alt="finlandés" width="16" height="11" border="0"></a></div></td>
  </tr>
</table>
<table width="975" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><?php include($banner); ?></td>
  </tr>
</table>
<table width="975" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center"><a href="index.php"><img src="imagenes/inicio2.jpg" alt="Se encuentra en la página principal de Brcmedia.com" name="Image6" width="104" height="70" border="0" id="Image6" onMouseOver="MM_swapImage('Image6','','imagenes/inicio2.jpg',1)" onMouseOut="MM_swapImgRestore()"></a><a href="laempresa/laempresa.php"><img src="imagenes/laempresa1.jpg" alt="La empresa" name="Image7" width="148" height="70" border="0" id="Image7" onMouseOver="MM_swapImage('Image7','','imagenes/laempresa2.jpg',1)" onMouseOut="MM_swapImgRestore()"></a><a href="servicios/servicios.php"><img src="imagenes/servicios1.jpg" alt="Principales servicios de Brcmedia.com" name="Image8" width="148" height="70" border="0" id="Image8" onMouseOver="MM_swapImage('Image8','','imagenes/servicios2.jpg',1)" onMouseOut="MM_swapImgRestore()"></a><a href="productos/loading.php"><img src="imagenes/productos1.jpg" alt="Principales proyectos desarrollados por Brcmedia.com" name="Image9" width="148" height="70" border="0" id="Image9" onMouseOver="MM_swapImage('Image9','','imagenes/productos2.jpg',1)" onMouseOut="MM_swapImgRestore()"></a><a href="contacto/contacto.php"><img src="imagenes/contacto1.jpg" alt="Contacto Brcmedia" name="Image5" width="147" height="70" border="0" id="Image5" onMouseOver="MM_swapImage('Image5','','imagenes/contacto2.jpg',1)" onMouseOut="MM_swapImgRestore()"></a><img src="imagenes/despuesdecontacto.jpg" alt="Brcmedia empresas servicios productos" width="280" height="70"></td>
  </tr>
</table>
<table class="tablacentro" width="975" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="708" align="center" valign="top">&nbsp;<br>
        <table width="627" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><p><img src="imagenes/titpresentacion.jpg" alt="Brcmedia empresas servicios productos" width="627" height="31"></p></td>
          </tr>
        </table>
      <table width="627" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><p><img src="imagenes/separacion.gif" alt="Brcmedia empresas servicios productos" width="627" height="12"></p></td>
          </tr>
        </table>
      <table width="627" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><p><strong>Texto con información de la sección </strong><br>
              Texto con información de la sección. Texto con información de la sección. Texto con información deTexto con información de la sección. Texto con información de la sección. Texto con información de</p>
                <p>Texto con información de la sección. Texto con información de la sección. Texto con información deTexto con información de la sección. Texto con información de la sección. Texto con información</p></td>
          </tr>
        </table>
       <br>
        <table width="627" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><p><img src="imagenes/separacion.gif" alt="Brcmedia empresas servicios productos" width="627" height="12"></p></td>
          </tr>
        </table>
       
       <br>
          <table width="624" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="200" valign="top"><table width="200" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td><p><a href="ofertas/ampliacion.php?oferta=oferta1"><img src="ofertas/info/oferta1/oferta1.jpg" alt="Oferta 1 Brcmedia.com" width="200" height="159" border="0"></a><br>
                      </p>
                        <p><strong>Oferta 1</strong><br>
                          Duración: <strong>365 días</strong><br>
                          Precio: <strong>159 euros</strong><br>
                          Capacidad: <strong>50 Gb</strong><br>
                          Transferencia: <strong>Sin límites</strong><br>
                          Duración: <strong>365 días</strong><br>
                          Precio: <strong>159 euros</strong></p></td>
                  </tr>
                </table>
                  <table width="200" border="0" align="center" cellpadding="4" cellspacing="0">
                    <tr>
                      <td width="170" align="right"><a href="ofertas/ampliacion.php?oferta=oferta1" class="brcmedia" title="Ver producto 3">Ver oferta 1</a></td>
                      <td width="30"><img src="imagenes/flecha.jpg" alt="Ver oferta brcmedia" width="16" height="10"></td>
                    </tr>
                </table></td>
              <td width="12" valign="top"><p><br>
                      <br>
                </p>
                  <p><br>
                </p></td>
              <td width="200" valign="top"><table width="200" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td><p><a href="ofertas/ampliacion.php?oferta=oferta2"><img src="ofertas/info/oferta2/oferta2.jpg" alt="Oferta 2 Brcmedia.com" width="200" height="159" border="0"></a><br>
                      </p>
                        <p><strong>Oferta 2</strong><br>
                          Duración: <strong>365 días</strong><br>
                          Precio: <strong>159 euros</strong><br>
                          Capacidad: <strong>50 Gb</strong><br>
                          Transferencia: <strong>Sin límites</strong><br>
                          Duración: <strong>365 días</strong><br>
                          Precio: <strong>159 euros</strong></p></td>
                  </tr>
                </table>
                  <table width="200" border="0" align="center" cellpadding="4" cellspacing="0">
                    <tr>
                      <td width="170" align="right"><a href="ofertas/ampliacion.php?oferta=oferta2" class="brcmedia" title="Ver producto 3">Ver oferta 2</a></td>
                      <td width="30"><img src="imagenes/flecha.jpg" alt="Ver oferta brcmedia" width="16" height="10"></td>
                    </tr>
                </table></td>
              <td width="12" valign="top"><p>&nbsp;</p>
                  <p>&nbsp;</p></td>
              <td width="200" valign="top"><table width="200" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td><p><a href="ofertas/ampliacion.php?oferta=oferta3"><img src="ofertas/info/oferta3/oferta3.jpg" alt="Oferta 3 Brcmedia.com" width="200" height="159" border="0"></a><br>
                      </p>
                        <p><strong>Oferta 3</strong><br>
                          Duración: <strong>365 días</strong><br>
                          Precio: <strong>159 euros</strong><br>
                          Capacidad: <strong>50 Gb</strong><br>
                          Transferencia: <strong>Sin límites</strong><br>
                          Duración: <strong>365 días</strong><br>
                          Precio: <strong>159 euros</strong></p></td>
                  </tr>
                </table>
                  <table width="200" border="0" align="center" cellpadding="4" cellspacing="0">
                    <tr>
                      <td width="170" align="right"><a href="ofertas/ampliacion.php?oferta=oferta3" class="brcmedia" title="Ver producto 3">Ver oferta 3</a></td>
                      <td width="30"><img src="imagenes/flecha.jpg" alt="Ver oferta brcmedia" width="16" height="10"></td>
                    </tr>
                </table></td>
            </tr>
          </table>
       
       <br>
          <table width="627" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><p><img src="imagenes/separacion.gif" alt="Brcmedia empresas servicios productos" width="627" height="12"></p></td>
            </tr>
          </table>
       
       <br>
          <table class="tablacentro2" width="627" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="332" align="left" valign="top"><table width="325" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td><p>
                        <script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','325','height','275','title','','src','galeriadevideos/info/videoportada/brcmedia','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','menu','false','wmode','transparent','movie','galeriadevideos/info/videoportada/brcmedia' ); //end AC code
                    </script>
                        <noscript>
                        <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="325" height="275" title="">
                          <param name="movie" value="galeriadevideos/info/videoportada/brcmedia.swf">
                          <param name="quality" value="high">
                          <param name="menu" value="false">
                          <param name="wmode" value="transparent">
                          <embed src="galeriadevideos/info/videoportada/brcmedia.swf" width="325" height="275" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" menu="false" wmode="transparent"></embed>
                        </object>
                        </noscript>
                    </p></td>
                  </tr>
                </table>
                  
              </td>
              <td width="295" valign="top"><table width="295" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td><img src="imagenes/titvideos.jpg" alt="Galería de vídeos brcmedia" width="295" height="31"></td>
                  </tr>
                </table>
                  <table width="295" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td><img src="imagenes/separacion2.gif" alt="Brcmedia empresas servicios productos" width="295" height="12"></td>
                    </tr>
                  </table>
                <table width="295" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td><p><strong>Texto con información de la sección </strong><br>
                        Texto con información de la sección. Texto con información de la sección. Texto con información deTexto con información de la sección. Texto con información de la sección. Texto con información de</p>
                          <p>Texto con información de la sección. Texto con información de la sección. Texto con información deTexto con información de la sección. Texto con información de la sección. Texto con información deTexto con información deTexto con información de la sección. Texto con información de la sección. Texto con información de</p></td>
                    </tr>
                </table>
                <table width="295" border="0" align="center" cellpadding="4" cellspacing="0">
                    <tr>
                      <td width="265" align="right"><a href="galeriadevideos/loading.php" class="brcmedia" title="Ver todos los vídeos"> Ver galería de vídeos</a></td>
                      <td width="30"><img src="imagenes/flecha.jpg" alt="Ver galeria de vídeos brcmedia" width="16" height="10"></td>
                    </tr>
                </table></td>
            </tr>
          </table>
         <br>
          <table width="627" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><p><img src="imagenes/separacion.gif" alt="Brcmedia empresas servicios productos" width="627" height="12"></p></td>
            </tr>
          </table>
      <p>&nbsp;</p></td>
    <td width="267" valign="top">&nbsp;
        <table width="256" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="imagenes/titnoticias.jpg" alt="Principales noticias de nuestra empresa brcmedia" width="254" height="31"></td>
          </tr>
        </table>
      <table width="256" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="imagenes/separacion3.gif" alt="Brcmedia empresas servicios productos" width="254" height="12"></td>
          </tr>
        </table>
      <table width="256" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><p>
              <?php include($noticia); ?>
            </p>
            </td>
          </tr>
        </table>
      <br>
        <table width="256" border="0" cellpadding="4" cellspacing="0">
          <tr>
            <td width="226" align="right"><a href="noticias/loading.php" class="brcenlaces" title="Ver producto 3">Ver más noticias</a></td>
            <td width="30"><img src="imagenes/flecha2.jpg" alt="Ver más noticias brcmedia.com" width="16" height="10"></td>
          </tr>
        </table>
       <br>
        <table width="256" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="imagenes/separacion3.gif" alt="Brcmedia empresas servicios productos" width="254" height="12"></td>
          </tr>
        </table>
       <br>
        <table width="256" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="imagenes/titlocalizacion.jpg" alt="Mapa de localización brcmedia.com" width="254" height="31"></td>
          </tr>
        </table>
      <table width="256" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="imagenes/separacion3.gif" alt="Brcmedia empresas servicios productos" width="254" height="12"></td>
          </tr>
        </table>
      <table width="256" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="20"><p><img src="imagenes/iconotelefono.gif" alt="Teléfono de contacto brcmedia.com" width="17" height="20"><br>
            </p></td>
            <td>Teléfono: <font color="#00A4D1">636 84 25 10</font></td>
        </tr>
          <tr>
            <td><img src="imagenes/iconomail.gif" alt="Correo electrónico de contacto brcmedia.com" width="17" height="20"></td>
            <td>Email: <a href="mailto:contacto@brcmedia.com" class="brcenlaces" title="Correo electrónico de contacto">contacto@brcmedia.com</a></td>
          </tr>
        </table>
      <table width="256" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><p>Persona 
              de contacto: Mart&iacute;n Brocos<br>
              Tel&eacute;fono de contacto: 977 11 09 93<br>
              Tel&eacute;fono m&oacute;vil: 636 
              84 25 10<br>
                  </font>Email: info 
              [arroba] brcmedia.com</p>
                <p><a href="localizacion/localizacion.php"><img src="imagenes/mapa.jpg" alt="Mapa de localización google maps brcmedia.com" width="254" height="93" border="0"></a></p></td>
          </tr>
        </table>
      <table width="256" border="0" cellpadding="4" cellspacing="0">
          <tr>
            <td width="226" align="right"><a href="localizacion/localizacion.php" class="brcenlaces" title="Ver producto 3">Ver mapa de localización</a></td>
            <td width="30"><img src="imagenes/flecha2.jpg" alt="Ver mapa de localización" width="16" height="10"></td>
          </tr>
        </table>
       <br>
        <table width="256" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="imagenes/separacion3.gif" alt="Brcmedia empresas servicios productos" width="254" height="12"></td>
          </tr>
        </table>
       <br>
        <table width="256" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="imagenes/titenlaces.jpg" alt="Enlaces patrocinados brcmedia.com" width="254" height="31"></td>
          </tr>
        </table>
      <table width="256" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="imagenes/separacion3.gif" alt="Brcmedia empresas servicios productos" width="254" height="12"></td>
          </tr>
      </table>
      <table width="256" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><strong>Enlaces patrocinados</strong>: <br>
                <a href="http://www.brcmedia.com" class="brcenlaces" title="plantillas flash php html xml css diseño web brcmedia.com"> www.brcmedia.com<br>
                </a><a href="http://www.brocosshirt.com" title="camisetas divertidas, diferentes, diseño de camisetas, camisetas originales y exclusivas" target="_blank" class="brcenlaces"> www.BrocosShirt.com<br>
                </a><a href="http://www.martinbrocos.com" title="Martín Brocos. Fotografía, pintura, cuadros, láminas, camisetas, diseño" target="_blank" class="brcenlaces"> www.MartínBrocos.com</a><br>
                <a href="http://www.brcmedia.com" class="brcenlaces" title="plantillas flash php html xml css diseño web brcmedia.com">www.brcmedia.com<br>
                </a><a href="http://www.brocosshirt.com" title="camisetas divertidas, diferentes, diseño de camisetas, camisetas originales y exclusivas" target="_blank" class="brcenlaces"> www.BrocosShirt.com<br>
                </a><a href="http://www.martinbrocos.com" title="Martín Brocos. Fotografía, pintura, cuadros, láminas, camisetas, diseño" target="_blank" class="brcenlaces"> www.MartínBrocos.com</a><br>
                <a href="http://www.brcmedia.com" class="brcenlaces" title="plantillas flash php html xml css diseño web brcmedia.com">www.brcmedia.com<br>
              </a><a href="http://www.brocosshirt.com" title="camisetas divertidas, diferentes, diseño de camisetas, camisetas originales y exclusivas" target="_blank" class="brcenlaces"> www.BrocosShirt.com</a></td>
          </tr>
      </table>
       <br>
        <table width="256" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="imagenes/separacion3.gif" alt="Brcmedia empresas servicios productos" width="254" height="12"></td>
          </tr>
      </table></td>
  </tr>
</table>
<table class="tablacentro3" width="975" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="708" align="center" valign="top"><br>
        <table width="627" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><p align="right"><a href="http://www.brcmedia.com"><img src="imagenes/logopeqinf.jpg" alt="Plantillas flash php html xml css diseño de paginas web a medida brcmedia" width="96" height="35" border="0"></a></p></td>
          </tr>
        </table>
      </td>
    <td width="267" valign="top">&nbsp;</td>
  </tr>
</table>
</body>
</html>