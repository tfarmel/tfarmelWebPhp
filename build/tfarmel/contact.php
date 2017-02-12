<?php include './global/header.php'; 
	include('fonctions.inc');

	if(isset($_POST['soumettre'])){
		$nom = trim($_POST['nom']);

	}elseif(isset($_POST['annuler'])){
		// retour à la page d'accueil
		header('location : index.php');
	}else{
		header('location : index.php');
	}
?>
<div class="container">
	<div class="row">
		<h2>Contacter moi</h2><br/>
		<form action="contact.php" method="POST">
			<fieldset>
				<legend>Contacter moi</legend>
				Votre nom : <br/>
				<input type="text" name="nom" value="" size="30" maxlength="30"><br/><br/>
				Votre adresse email : <br/>
				<input type="text" name="email" value="" size="30" maxlength="30"><br/><br/>
				Votre téléphone (facultatif)<br/>
				<input type="text" name="phone" value="" size="30" maxlength="30"><br/><br/>
				Message<br/>
				<textarea name="message" rows="5" cols="50"></textarea><br/>
				<input type="checkbox" name="feedback"> Recevoir une copie de cet email. <br/><br/>
				<input type="submit" name="soumettre" value="Envoyer">
				<input type="submit" name="annuler" value="Annuler">
			</fieldset>
		</form>
	</div>
</div>
<?php include 'global/footer.php'; ?>