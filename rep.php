
<?php
try
{
$bdd = new PDO('mysql:host=localhost;dbname=trombinoscope;charset=utf8', 'root', '*****');
}
catch (Exeception $e)
{
die('Erreur : '.$e->getMessage());
}

$rep = $bdd->query('SELECT * FROM simploniens ORDER BY id DESC');

while ($donnees = $rep->fetch())
{
  echo "nom : ".$donnees['nom'].'<br />'. "prenom : ".$donnees['prenom'].'<br />'. "Url photo : ".$donnees['photo'].'<br />'. "Url cv : ".$donnees['cv'].'<br />'. "né(e) le : ".$donnees['date_de_naissance'].'<br />'. "Num tel. : ".$donnees['telephone'].'<br />'. "Email : ".$donnees['email'].'<br />'. "---------------------------------------------------------------".'<br />';
}

$rep->closeCursor();




?>
