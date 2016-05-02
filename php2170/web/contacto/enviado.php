<?php
$piedepagina = "../piedepagina/menu.php"; 
?>
<?  
ini_set('display_errors','0');
include_once("class.phpmailer.php");
$nombre = $_REQUEST['nombre'];
/******************************************************
**
**   Flash Mx PHP Mail
**
** Por - Martín Brocos BRCmedia.com
*******************************************************/

// Correo electrónico de su empresa
$adminaddress = "contacto@brcmedia.com"; 

// Dirección de su web incluido http://www. 
$siteaddress ="http://www.brcmedia.com"; 

// Nombre de su empresa 
$sitename = "Brcmedia.com"; 

/*******************************************************/

$date = date("m/d/Y H:i:s");

if ($_SERVER['REMOTE_ADDR'] == "") 
	$ip = "no ip";
else 
	$ip = getHostByAddr($_SERVER['REMOTE_ADDR']);


if ($_POST['enviar'] != ""){  
	// Mail al administrador...
	$mail = new PHPMailer();
	$mail->From     = $adminaddress;
	$mail->FromName = $sitename;
	$mail->AddAddress($adminaddress);
	$mail->AddReplyTo($adminaddress);
	$mail->IsHTML(true);                               // send as HTML
	$mail->Subject  =  "Solicitud de información";
	$mail->Body  = 	"<font color=\"#333333\" size=\"2\" face=\"Arial, Helvetica, sans-serif\"><b>Solicitud de información:</b><br>
------------------------------<br>
Nombre: <font color=\"#FF0000\">".$_POST['nombre']."</font><br>
Empresa: <font color=\"#FF0000\">".$_POST['empresa']."</font><br>
CIF/NIF: <font color=\"#FF0000\">".$_POST['cifnif']."</font><br>
Dirección: <font color=\"#FF0000\">".$_POST['direccion']."</font><br>
Localidad: <font color=\"#FF0000\">".$_POST['localidad']."</font><br>
CP: <font color=\"#FF0000\">".$_POST['cp']."</font><br>
Provincia: <font color=\"#FF0000\">".$_POST['provincia']."</font><br>
País: <font color=\"#FF0000\">".$_POST['pais']."</font><br>
Teléfono: <font color=\"#FF0000\">".$_POST['telefono']."</font><br>
Email: <font color=\"#FF0000\">".$_POST['email']."</font><br>
Web: <font color=\"#FF0000\">".$_POST['url']."</font><br>
Comentarios:<br>".$_POST['comentarios']."<br>
<br>------------------------------<br>
<b>Otros datos del usuario:</b><br>
------------------------------<br>
Navegador: <font color=\"#FF0000\">".$_SERVER['HTTP_USER_AGENT']."</font><br>
Hostname: <font color=\"#FF0000\">".$ip."</font><br>
IP address: <font color=\"#FF0000\">".$_SERVER['REMOTE_ADDR']."</font><br>
Fecha/Hora: <font color=\"#FF0000\">".$date."</font></font><br><br>"; 
$mail->Send();
	
	// Mail al usuario...
    $mail = new PHPMailer();
	$mail->From     = $adminaddress;
	$mail->FromName = $sitename;
	$mail->AddAddress($_POST['email']);
	$mail->AddReplyTo($adminaddress);
	$mail->IsHTML(true);                               // send as HTML
	$mail->Subject  =  "Información ".$sitename;
	$mail->Body  =  "<font color=\"#333333\" size=\"2\" face=\"Arial, Helvetica, sans-serif\">Estimado/a <font color=\"#FF0000\">".$_POST['nombre']."</font>, hemos recibido su consulta en <font color=\"#FF0000\">".$sitename."</font><br><br>
Nos pondremos en contacto con usted a la mayor brevedad posible<br><br>
Reciba un cordial saludo,<br>
<font color=\"#FF0000\">".$sitename."</font><br>
<a href=\"mailto:info@brcmedia.com\">".$adminaddress."<br>
<a href=\"http://www.brcmedia.com\">".$siteaddress."</a><br><br></font>"; 
$mail->Send();
}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Contactar con brcmedia.com</title>
<link rel="shortcut icon" href="http://www.brcmedia.com/favicon.ico">
<meta name="description" content="Pagina de contacto de brcmedia.com">
<meta name="keywords" content="email php brcmedia.com">
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
    <td align="center"><a href="../index.php"><img src="../imagenes/inicio1.jpg" alt="Ir a la página principal de Brcmedia.com" name="Image6" width="104" height="70" border="0" id="Image6" onMouseOver="MM_swapImage('Image6','','../imagenes/inicio2.jpg',1)" onMouseOut="MM_swapImgRestore()"></a><a href="../laempresa/laempresa.php"><img src="../imagenes/laempresa1.jpg" alt="La Empresa" name="Image7" width="148" height="70" border="0" id="Image7" onMouseOver="MM_swapImage('Image7','','../imagenes/laempresa2.jpg',1)" onMouseOut="MM_swapImgRestore()"></a><a href="../servicios/servicios.php"><img src="../imagenes/servicios1.jpg" alt="Servicios Brcmedia.com" name="Image8" width="148" height="70" border="0" id="Image8" onMouseOver="MM_swapImage('Image8','','../imagenes/servicios2.jpg',1)" onMouseOut="MM_swapImgRestore()"></a><a href="../productos/loading.php"><img src="../imagenes/productos1.jpg" alt="Galería de productos de Brcmedia.com" name="Image9" width="148" height="70" border="0" id="Image9" onMouseOver="MM_swapImage('Image9','','../imagenes/productos2.jpg',1)" onMouseOut="MM_swapImgRestore()"></a><a href="contacto.php"><img src="../imagenes/contacto2.jpg" alt="Contacto Brcmedia" name="Image10" width="147" height="70" border="0" id="Image10" onMouseOver="MM_swapImage('Image10','','../imagenes/contacto2.jpg',1)" onMouseOut="MM_swapImgRestore()"></a><img src="../imagenes/despuesdecontacto.jpg" alt="Grupos musicales solistas artistas conciertos música" width="280" height="70"></td>
  </tr>
</table>
<table class="tablacentro" width="975" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="708" align="center" valign="top">&nbsp;<br>
        <table width="627" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><p><img src="../imagenes/titcontacto.jpg" alt="Formulario de contacto de Brcmedia.com" width="627" height="31"></p></td>
          </tr>
        </table>
      <table width="627" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><p><img src="../imagenes/separacion.gif" alt="Brcmedia empresas servicios productos" width="627" height="12"></p></td>
          </tr>
        </table>
      <table width="627" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td height="103"><p>Estimado/a: <font color="#FFFFFF"><strong><?php echo $nombre; ?></strong></font></p>
                <p>El 
                  formulario ha sido enviado correctamente. 
                  En breve nos pondremos en contacto con usted.</font></p>
                <p align="left"><font color="#FFFFFF"><strong>Muchas 
                  gracias</strong></font></p>
                <p>&nbsp;</p></td>
          </tr>
        </table>
        
        
      &nbsp;<br>
                <table width="627" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td><p><img src="../imagenes/separacion.gif" alt="Brcmedia empresas servicios productos" width="627" height="12"></p></td>
                  </tr>
                </table>
       
      
       
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
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p></td>
    <td width="267" valign="top">&nbsp;<br>
        <table width="256" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><p>&nbsp;</p>
                <p>&nbsp;</p></td>
          </tr>
        </table>
        
      <br></td>
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
</body>
</html>