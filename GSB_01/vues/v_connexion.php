﻿	<div id="sousContenu">
		<form method="POST" action="index.php?uc=connexion&action=valideConnexion">
			<div class="corpsForm">
				<p>
					<label for="nom">Login*</label>
					<input id="login" type="text" name="login"  size="15" maxlength="45">
				</p>
				<p>
					<label for="mdp">Mot de passe*</label>
					<input id="mdp"  type="password"  name="mdp" size="15" maxlength="45">
				</p>
			</div>
			<div class="piedForm">
				<p>
					<input type="submit" value="Valider" class="bouton" name="valider">
					<input type="reset" value="Annuler" class="bouton" name="annuler"> 
				</p>
			</form>
		</form>
	</div>
</div>