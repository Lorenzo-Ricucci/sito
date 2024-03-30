
<?php



$pass1 = $_POST['pass1'];

$pass2 = $_POST['pass2'];

$mail = $_POST['mail'];





if ( $pass1 == "" || $pass2 == "" || $mail == "" ){

  echo '<h1>Uno o più campi obbligatori sono vuoti!</h1><br />'; 

  echo '<a href="#" onclick="history.go(-1);return false;"><h3>Torna indietro</h3></a>'; 

} elseif($pass1 != $pass2) {
   echo "Le password devono coincidere";
}

else{
  echo $pass1;
  echo $pass2;
  echo $mail;
}



require 'config.php';

require 'connect.php';

 if ($link != "" ){
$query = mysqli_query($link, "INSERT into utenti (mail, password) VALUES ('$mail', '$pass1')");
echo "Registrazione effettuata";
 }


?>





