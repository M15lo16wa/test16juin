<?php
$prenom=$_REQUEST['prenom'];
$nom=$_REQUEST['nom'];

//connexion à la base de données
$conn=mysqli_connect("127.0.0.1","bouki","passer","premier");
//preparation de la requete
$sql="iupdate test set prenom='$prenom' where nom='$nom'";
//execution de la requete
$result=mysqli_query($conn,$sql);
//affichage du message pour informer l'utilisateur
echo"mise à jour reussie";
?>
