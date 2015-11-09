
<meta charset="utf-8">

<?php
echo "Vos données sont bien enregistrées."?><br /><br /><br />
<?php
echo "Bienvenue ".$_POST['prenom'];
echo  " ".$_POST['nom'];?><br />
<?php

echo "Votre date de naissance : ".$_POST['date_de_naissance'];?><br />
<?php echo "Votre numéro de téléphone est le : ".$_POST['telephone'];?><br/ >
<?php echo "Votre e-mail: ".$_POST['email'];?><br />
<?php echo " le lien de votre photo : ".$_POST['photo'];?><br />
<?php echo "le lien de votre cv : ".$_POST['cv'];


try
{
$bdd = new PDO('mysql:host=localhost;dbname=trombinoscope;charset=utf8', 'root', 'jeremy');
}

catch (Exception $e)
{
 die('Erreur :'.$e->getMessage());
}


$demande = $bdd->prepare('INSERT INTO simploniens(nom,prenom,photo,cv,date_de_naissance,telephone,email)
VALUES (:nom, :prenom, :photo, :cv, :date_de_naissance, :telephone, :email)');
$demande->execute(array(

'nom' =>$_POST['nom'],
'prenom' =>$_POST['prenom'],
'photo' =>$_POST['photo'],
'cv' =>$_POST['cv'],
'date_de_naissance' =>$_POST['date_de_naissance'],
'telephone' =>$_POST['telephone'],
'email' =>$_POST['email']));
?>
