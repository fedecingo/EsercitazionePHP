<!DOCTYPE html>
<html>
<head>
<title>Inserimento Dati</title>
<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<div class="jumbotron text-center">
<h1 style="color:Blue">Inserisci dati PHP</h1>

<div class="pure-menu pure-menu-horizontal">
    <ul class="pure-menu-list">
        <li class="pure-menu-item"><a href="http://www.divini5g.com/cingolani" class="pure-menu-link">Home</a></li>
        <li class="pure-menu-item"><a href="http://www.divini5g.com/cingolani/leggi.php" class="pure-menu-link">Leggi Dati</a></li>
        <li class="pure-menu-item pure-menu-disabled"><a href="#" class="pure-menu-link">INSERISCI DATI</a></li>
    </ul>
</div>
<br>

<form action="aggiungi.php" method="post">
  <div class="form-group">
    <label for="cognome">Cognome:</label>
    <input type="text" name="cognome" class="form-control" id="cognome" aria-describedby="emailHelp" placeholder="Inserisci Cognome" value="<?php echo $cognome;?>">
  </div>
  <div class="form-group">
    <label for="nome">Nome:</label>
    <input type="text" name="nome" class="form-control" id="nome" placeholder="Inserisci Nome" value="<?php echo $nome;?>">
  </div>
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" name="email" class="form-control" id="email" placeholder="Inserisci Email" value="<?php echo $email;?>">
  </div>
	<input type="submit" name="invio" value="Registra" class="btn btn-success" role="button"/> 
	<input type="reset" name="cancella" value="Annulla"class="btn btn-info" href="http://www.divini5g.com/cingolani" role="button"/>
 </div>
</form>
</div>
</body>
</html>