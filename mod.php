<!DOCTYPE html>
<head>
<title>Esito Modifica</title>
<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>


<body>
<div class="jumbotron text-center">
	<div class="pure-menu pure-menu-horizontal">
		<ul class="pure-menu-list">
			<li class="pure-menu-item"><a href="http://www.divini5g.com/cingolani" class="pure-menu-link">Home</a></li>
			<li class="pure-menu-item"><a href="http://www.divini5g.com/cingolani/leggi.php" class="pure-menu-link">Leggi Dati</a></li>
			<li class="pure-menu-item"><a href="http://www.divini5g.com/cingolani/inserisci.php" class="pure-menu-link">Inserisci Dati</a></li>
		</ul>
	</div>
	<br>
			  
<?php
$host = "sql.divini5g.com"; // Host name 
$username = "divini5g07622"; // Mysql username 
$password = "gucci"; // Mysql password 
$db_name = "divini5g07622"; // Database name
$tab_nome = "cingolani"; 

//Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect to server :  " .mysql_error());
mysql_select_db("$db_name")or die("cannot select DB"  .mysql_error());

$cognome = $_POST["cognome"];
$nome = $_POST["nome"];
$email = $_POST["email"];
$ute = $_POST["ute"];

$sql = "UPDATE $tab_nome $sql SET cognome = '$cognome', nome = '$nome', email = '$email' WHERE cod = $ute";

if (mysql_query($sql)) {
	echo "Il record è stato modificato correttamente.";
}else {
echo "Errore nell'inserimento: " .mysql_error();}
?>
</div>
  </body>

</html>
