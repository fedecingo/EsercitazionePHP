<!DOCTYPE html>
<html>
<head>
<title>Lettura Dati</title>
<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 80%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>

</head>
<body>
<div class="jumbotron text-center">
<h1 style="color:Blue">Leggi dati PHP</h1>

<div class="pure-menu pure-menu-horizontal">
    <ul class="pure-menu-list">
        <li class="pure-menu-item"><a href="http://www.divini5g.com/cingolani" class="pure-menu-link">Home</a></li>
        <li class="pure-menu-item pure-menu-disabled"><a href="http://www.divini5g.com/cingolani/leggi.php" class="pure-menu-link">LEGGI DATI</a></li>
        <li class="pure-menu-item"><a href="http://www.divini5g.com/cingolani/inserisci.php" class="pure-menu-link">Inserisci Dati</a></li>
    </ul>
</div>

<table>
  <tr>
    <th>Cognome</th>
    <th>Nome</th>
    <th>Email</th>
	<th></th>
	<th></th>
  </tr>

<?php
$host = "sql.divini5g.com";
$user = "divini5g07622";
$pass = "gucci";
$nome = "divini5g07622";
$tab_nome = "cingolani";

mysql_connect($host,$user,$pass) or die("Impossibile collegarsi al server");
@mysql_select_db("$nome") or die("Impossibile connettersi al database $nome");

$sqlquery = "SELECT * FROM $tab_nome";
$result = mysql_query($sqlquery);
$number = mysql_num_rows($result);
while ($row= mysql_fetch_array($result))
{
	$cod = $row['cod'];
	echo "<tr>";
	echo "<td>";
	echo $row['cognome'];
	echo "</td>";
	echo "<td>";
	echo $row['nome'];
	echo "</td>";
	echo "<td>";
	echo $row['email'] ;
	echo "</td>";
	echo "<td>";
	echo "<a href='/cingolani/modifica.php?ute=$cod' class='btn btn-info' role='button'>Modifica</a> ";
	echo "</td>" ;
	echo "<td>";
	echo "<a href='/cingolani/delete.php?ute=$cod' class='btn btn-danger' role='button'>Elimina</a> ";
	echo "</td>" ;
	echo "</tr>";
}
mysql_close();
?>
</table>
</div>
</body>
</html>