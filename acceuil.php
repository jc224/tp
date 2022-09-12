<!DOCTYPE html>
<?php  include "connexion.php" ?>

<html>
<head>
	<title>Connexion</title>
</head>
<body>
	<?php include "nav.php" ?>
	<?php 
		if (!empty($_POST)) {
			if (
				isset($_POST['titre'],$_POST['contenue']) &&
				!empty($_POST['titre']) && !empty($_POST['contenue'])
			) 

			{
				$titre = strip_tags(htmlspecialchars($_POST["titre"]));
				$contenue = strip_tags(htmlspecialchars($_POST["contenue"]));

				
				$sql = "INSERT INTO `article`(`Titre`, `contenue`) VALUES (:Titre,:contenue )";
				$requete = $db->prepare($sql);
				$requete->bindValue(":Titre",$titre,PDO::PARAM_STR);
				$requete->bindValue(":contenue",$contenue,PDO::PARAM_STR);
				if(!$requete->execute())
				{
					die("erreur  'executiion");
				}
			
				echo "article ajouter";
				
			} else {
				echo "pas de donner";
			}
			
		}
	 ?>
	<div>
		<form method="POST" >
			<label for="titre">Titre</label>
			<input type="text" name="titre" id='titre'><br><br>
			<label for="contenue">Contenue</label>
			<input type="textarea" name="contenue" id="contenue"><br><br>
			<input type="submit" name="valider" value="valider">
		</form>
	</div>
	<?php include "footer.php" ?>
</body>
</html>