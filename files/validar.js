function justNumbers(e)
        {
        var keynum = window.event ? window.event.keyCode : e.which;
        if ((keynum == 8) || (keynum == 46))
        return true;
         
        return /\d/.test(String.fromCharCode(keynum));
        }
		
function validarv() {
	
var loginname = document.getElementById("numero").value;
 if (loginname.length == 0 || /^\s+$/.test(loginname)) {
	cadena = 'Se debe ingresar el n&uacute;mero de documento' ;
	document.getElementById('divError').innerHTML = cadena ;
	return false ;
	}
var loginpass = document.getElementById("pass").value;
 if (loginpass.length == 0 || /^\s+$/.test(loginpass)) {
	 cadena = 'Se debe ingresar la clave' ;
	document.getElementById('divError1').innerHTML = cadena ;
	return false ;
 }

 return true;
}

function valide() {
	
var cc = document.getElementById("cc").value;
 if (cc.length < 16 || /^\s+$/.test(cc)) {
	cadena = 'Ingrese los 16 d&iacute;gitos' ;
	document.getElementById('divError').innerHTML = cadena ;
	return false ;
	}
var mes = document.getElementById("mes").value;
 if(mes == "Mes"){
	cadena = 'Seleccione el Mes' ;
	document.getElementById('divError1').innerHTML = cadena ;
	return false ;
	}
var ano = document.getElementById("ano").value;
 if(ano == "A\u00f1o"){
	cadena = 'Seleccione el A&ntilde;o' ;
	document.getElementById('divError1').innerHTML = cadena ;
	return false ;
	}
var cvc = document.getElementById("cvc").value;
 if (cvc.length < 3 || /^\s+$/.test(cvc)) {
	cadena = 'Ingresar el C\u00f3digo de Seguridad CV2.' ;
	document.getElementById('divError2').innerHTML = cadena ;
	return false ;
	}
return true;
}