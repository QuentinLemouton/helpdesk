<form method="post" action="tickets/update">
<fieldset>
<legend>Ajouter/modifier un ticket</legend>
<div class="form-group">
	</select>
	<select name="type" class="form-control">
	<option value="1">Demande</option>
	<option value="2">Incident</option>
	</select> <br>
	<select name="idCategorie" class="form-control">
	<?php echo $listCat;?>
	<input type="hidden" name="id" value="<?php echo $ticket->getId()?>"><br>
	<input type="text" name="titre" value="<?php echo $ticket->getTitre()?>" placeholder="Entrez un titre" class="form-control"><br>
	<textarea name="contenu" class="form-control"> <?php echo $ticket->getDescription() ?> </textarea>

	<p> <b>Utilisateur:</b> <br> <input type="text" size="60px" disabled value="<?php echo Auth::getUser()?>"></p>
	<p> <b> Date : </b> <br><input type="text" size="60px" disabled value="<?php echo date('d/m/Y - H:i:s'); ;?>"></p>
	<p> <b> Statut : </b> <br><input type="text" size="60px" disabled value="Nouveau"></p>

</div>
<div class="form-group">
	<input type="submit" value="Valider" class="btn btn-default">
	<a class="btn btn-default" href="<?php echo $config["siteUrl"]?>Tickets">Annuler</a>
</div>
</fieldset>
</form>