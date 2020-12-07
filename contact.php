<?php
echo '<pre>';
print_r($_POST)
echo '<pre>';

$message_sent =false; //asumir siempre que el mensaje no se envia hasta que se cumpla lo siguiente

if(isset($_POST ['email']) && $userEmail = $_POST ['email'] != ''){
	
	if(filter_var($_POST ['email'], FILTER_VALIDATE_EMAIL) ){

		// submit de form
	$userNombre = $_POST ['nombre'];
	$userApellido = $_POST ['apellido'];
	$userEmail = $_POST ['email'];
	$userTelefono = $_POST ['telefono'];
	$userMember = $_POST ['member'];
	$messageSubject = $_POST ['consulta'];
	$message = $_POST ['explicacion'];

	$to = "celinaowenph@gmail.com"
	$body = "";

	$body .= "De: ".$userNombre.$userApellido "\r\n";
	$body .= "Email: ".$userEmail "\r\n";
	$body .= "Telefono: ".$userTelefono "\r\n";
	$body .= "Miembro: ".$userMember "\r\n";
	$body .= "Consulta: ".$message "\r\n";

	mail($to,$messageSubject,$body);

	$message_sent =true;

	}
	else{
		$invalid_class_name = "form-invalid";
	}

	$string = 'One of your posts about inequalities mentioned that when x < y and y < z then x < z.';
 
	// Output: One of your posts about inequalities mentioned that when x 
	echo filter_var($string, FILTER_SANITIZE_STRING);
	 
	// Output: One of your posts about inequalities mentioned that when x &lt; y and y &lt; z then x &lt; z.
	echo htmlspecialchars($string);

}

?>

<?php
	if($message_sent):

	?>

	<h3>Gracias por contactarte, nos comunicaremos pronto!</h3>
	?>