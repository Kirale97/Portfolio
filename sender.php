<?php

header('Content-Type: application/json');
$input_data = json_decode(file_get_contents('php://input'), true);
//$output_data = ['encoded' => md5($input_data['string'])];
$nome=$input_data['name'];
$email=$input_data['email'];
$messaggio=$input_data['message'];
/*
$nome=$_POST['name'];
$email=$_POST['email'];
$messaggio=$_POST['message'];
*/
/* creazione testo mail */

$testo_mail="Nuovo contatto dal sito:\r\n
Dati del richiedente\r\n
Nome:$nome\r\n
Email:$email\r\n
Messaggio:$messaggio";

/* creazione oggetto e testata mail */

$mail_headers = "From: $nome  <$email>\r\n";
$mail_headers .= "Reply-To: " .  $email . "\r\n";
$oggetto="Nuovo contatto dal sito";

//return json_encode(1);
/* invio mail */

if(mail('souleaterr@hotmail.it', $oggetto, $testo_mail, $mail_headers)){
     echo json_encode(0);
exit;

return;
}
     //    {echo 'la mail è stata spedita con successo';}
else  {
     echo json_encode(1);
exit;

return;
}
       //  {echo 'la mail non è stata inviata';}
    ?>