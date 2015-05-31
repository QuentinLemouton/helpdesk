<form method="post" action="tickets/update">
<fieldset>
<legend>Ajouter/modifier un ticket</legend>
<div class="alert alert-info">Ticket : <?php echo $ticket->toString()?></div>
<div class="form-group">
	<select name="idCategorie" class="form-control">
	<?php echo $listCat;?>
	</select>
	<select name="type" class="form-control">
	<option value="1">Demande</option>
	<option value="2">Incident</option>

	</select>
	<input type="hidden" name="id" value="<?php echo $ticket->getId()?>">
	<input type="text" name="titre" value="<?php echo $ticket->getTitre()?>" placeholder="Entrez un titre" class="form-control">
	<textarea name="contenu" class="form-control"> <?php echo $ticket->getDescription() ?> </textarea>

	<p> <b>Utilisateur:</b> <br> <input type="text" size="60px" disabled value="<?php echo Auth::getUser()?>"></p>
	<p> <b> Date : </b> <br><input type="text" size="60px" disabled value="<?php echo date("D M j Y G:i:s "); ;?>"></p>


</div>
<div class="form-group">
	<input type="submit" value="Valider" class="btn btn-default">
	<a class="btn btn-default" href="<?php echo $config["siteUrl"]?>Tickets">Annuler</a>
</div>
</fieldset>
</form>