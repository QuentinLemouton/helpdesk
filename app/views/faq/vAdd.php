<form method="post" action="faqs/update">
<fieldset>
<legend>Ajouter/modifier un article</legend>
<div class="form-group">
	<select name="idCategorie" class="form-control">
	<?php echo $listCat;?>
	</select>
	<input type="hidden" name="id" value="<?php echo $article->getId()?>"> <br>
	<input type="text" name="titre" value="<?php echo $article->getTitre()?>" placeholder="Entrez un article" class="form-control"> <br>
	<textarea name="contenu" class="form-control"> <?php echo $article->getContenu() ?> </textarea><br>
	<p> <b>Utilisateur:</b> <br> <input type="text" size="60px" disabled value="<?php echo Auth::getUser()?>"></p>
	<p> <b> Date : </b> <br><input type="text" size="60px" disabled value="<?php echo date('d/m/Y - H:i:s'); ;?>"></p>
</div>
<div class="form-group">
	<input type="submit" value="Valider" class="btn btn-default">
	<a class="btn btn-default" href="<?php echo $config["siteUrl"]?>users">Annuler</a>
</div>
</fieldset>
</form>