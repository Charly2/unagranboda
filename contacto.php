<?




$from = "char2296@hotmail.com";
$to = "infopara@unagranboda.com";
$subject = "Contacto de una Una Gran Boda";
$message ="";
$message.= "Mensaje: ".$_POST['message']." \n ";
$message.= "Email : ".$_POST['email']." \n ";
$message.= "Nombre : ".$_POST['name']." \n ";
$message.= "Telefono : ".$_POST['tele']." \n ";



$headers = "From:" . $from;
mail($to,$subject,$message, $headers);

header('Location: index');




?>