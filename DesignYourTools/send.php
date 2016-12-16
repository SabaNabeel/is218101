<?php

//Tried to learn how create your own tool 

include "code/bootstrap.php";
$mailer = new Mailer();
echo "this mail has been sent to following people: \r\n" . "<br>";
$mailer->addRecipient('sabafnu@gmail.com');
$mailer->addRecipient('knightninja@mailinator.com');
$mailer->addRecipient('Sabafnu@mailinator.com');
$mailer->send('This message has been sent to 3 recipients');

?>