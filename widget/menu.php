<!-- Logos de l'entête-->
<div class="navbar navbar-inverse set-radius-zero" >
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="page.php">
                            <img src="assets/img/lspd_icon.png" width=80 height=80/>
                        </a>
                    </div>
                    <div class="right-div">
                        <a href="logout.php" class="btn btn-danger pull-right">Deconnexion</a>
					</div>  
					<div class="right-div">
                        <?php
                            session_start();
                            echo $_SESSION['pseudo'];
						?>
					</div>                  
                </div>
            </div>
            <!-- Menu-->
            <section class="menu-section">
                <div class="container">
                    <div class="row ">
                        <div class="col-md-12">
                            <div class="navbar-collapse collapse ">
                                <ul id="menu-top" class="nav navbar-nav navbar-left">
                                    <li>
                                        <a href="page.php" class="menu-top-active"> Menu</a>
									</li>
									                                                                                           
                                </ul> 
                            </div>
                        </div>
                    </div>
                </div>
            </section>