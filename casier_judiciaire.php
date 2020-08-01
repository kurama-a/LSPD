<html>
		<?php require "./widget/header.php"; ?>
		
		
		
		<body>
			
		<?php require "./widget/menu.php"; ?>
		
		
			<div class="panel panel-info">
				<div class="panel-heading">
					<p></p>
					<p></p>Casier judiciaire
					<p></p>
					<p></p>
				</div>

			<div class="panel panel-default">
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
									<th><center>
										<label for="casier-search">Rechercher un Nom :</label>
										<input class="barre" type="search" id="casier-search" name="q"> 
										<button>Rechercher</button>
									</center></th>                                                                                                                                   
                                </tr>                                                                
                            </thead>
                        </table>
                    </div>
                </div>
            </div>


				<div class="panel-body">
					<div class="w3-container">  	
						<p>Prénom et Nom : 
											
										
  						<p>Photo d'identité : </p>							
 							<img src="" class="w3-round" alt="(Photo identité)" style="width:20%" >
						<p></p>					
						<p>Permis de conduire : </p>	
							<img src="" class="w3-round" alt="(Permis)" style="width:20%">
						<p></p>
						<p>Permis de port d'armes : </p>	
							<img src="" class="w3-round" alt="(PPA)" style="width:20%">
						<p></p>
						<p>Photo : </p>	
							<img src="" class="w3-round" alt="(Photo)" style="width:20%">
						<p></p>
							
						</p>						
					
					<p></p>					
					</div>
				</div>			
				
			
			</body>
			
			<?php require "./widget/footer.php"; ?>
			
		</html>