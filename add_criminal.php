<html>
		<?php require "./widget/header.php"; ?>		
		

		<body>
			
		<?php require "./widget/menu.php"; ?>
				

			<div class="panel panel-info">
				<div class="panel-heading">
					<p></p>
					<p></p>Ajouter un criminel
					<p></p>
					<p></p>
				</div>
				<div class="panel-body">
					<form action="add_criminal_post.php" method="post">
						<p>
							<div class="form-group">
								<label for="nom">Nom et Prénom</label> :
								<p class="help-block">ex : John Cena</p>
								<input type="text" name="nom" id="nom" class="form-control" required />
								<br />
							</div>
							<form>
								<div class="form-group">
								<label for="idfile">Photo de la piéce d'identité</label>
								<input type="file" class="form-control-file" id="idfile">
								</div>
							</form>
							<form>
								<div class="form-group">
								<label for="permis">Photo du permis de conduire</label>
								<input type="file" class="form-control-file" id="permis">
								</div>
							</form>
							<form>
								<div class="form-group">
								<label for="weapons">Photo du PPA</label>
								<input type="file" class="form-control-file" id="weapons">
								</div>
							</form>
							<form>
								<div class="form-group">
								<label for="picture">Photo du suspect</label>
								<input type="file" class="form-control-file" id="picture">
								</div>
							</form>	
							<div class="form-group">
								<label for="nom">Délits</label> :
								<p class="help-block">Cocher les cases correspondantes</p>								
								<br />
							</div>												
							<button type="submit" class="btn btn-primary">Envoyer</button>
						</p>
					</form>					
				</div>				
							
					
			</body>
			
			<?php require "./widget/footer.php"; ?>
			
		</html>
