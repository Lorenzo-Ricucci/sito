
<?php 

$link = mysqli_connect($DB_host, $DB_user, $DB_password, $DB_name); 

if ($link == "") { 

    die ('Non riesco a connettermi: ' . mysqli_error()); 

} 
else {
    echo "Connessione riuscita";
}



$db_selected = mysqli_select_db($link, $DB_name);
echo $db_selected;

if ( $db_selected == "") { 

    die ("Errore nella selezione del database: " . mysqli_error()); 

} 

else{
    echo "Nessun errore";
}

?>



