<link rel="stylesheet" href="style.css" />
<?php

require('connectionBD.php');


function afficherProduits($bd){
	
	
	$query='SELECT  *  FROM produits';
	$req=$bd->prepare($query);
	
	if($req->execute()){
		echo'
		<table>		<tr> 
		<td> Nom du Produit </td> 
		<td> Référence </td> 
		<td> Prix </td> 
		<td> Ajouter au Panier ? </td>
		</tr>';
		while($rep=$req->fetch(PDO::FETCH_ASSOC))
		{
			echo '<tr> 
			<td> ' .$rep['Nom_du_Produit']. '</td> 
			<td> ' .$rep['Référence']. '</td>
			<td> ' .$rep['Prix']. '</td>
			<td> <input type="checkbox" name='.$rep['Référence'].' value=false> </td>  </tr>';
				
			
		}
		
		echo '</table>';
	} 
	
}
/*
function check() {
	//1.checked=true;
	if (isset($_POST['1']))
{
    echo $_POST['1']; // Affiche : "on"
}
else
{
    echo 'Vous n\'avez pas coché la case.';
}

}

function ajoutPanier(var num){
	$query='INSERT * INTO panier FROM produits where (id=num) ';
	$req=$bd->prepare($query);
	if($req->execute()){
		"INSERT INTO table
    (champ1, champ2)
    VALUES
    (:champ1, :champ2)";
	}	
	
}
*/


function debug($variable) {
	echo '<pre>' . print_r($variable, true) . '</pre>';
}