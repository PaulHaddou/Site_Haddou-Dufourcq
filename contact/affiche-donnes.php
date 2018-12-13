<?php
$name = $_POST['name'] ;
$surname = $_POST['surname'] ;
$phone = $_POST['phone'] ;
$email = $_POST['email'] ;
$message = $_POST['message'] ;


echo( "Mme/M.: <b>".$name."".$surname"</b><br>\n" ) ;
echo( "Téléphone: <b>".$phone."</b><br>\n" ) ;
echo( "email: <b>".$email."</b><br>\n" ) ;
echo( "message: <b>".$message."</b><br>\n" ) ;
mail('paul.haddou@gmail.com', 'sujet', 'message');
?>
