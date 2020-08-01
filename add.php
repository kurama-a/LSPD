<html>
    <?php require "./widget/header.php"; ?>
        <?php
session_start();

if (isset($_SESSION['id'])) {
    echo '
        <body>
            <div class="navbar navbar-inverse set-radius-zero" >
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.php">
                            <img src="https://i.imgur.com/BQoTEoz.png" width=180 height=70/>
                        </a>
                    </div>
                    <div class="right-div">
                        <a href="logout.php" class="btn btn-danger pull-right">Deconnectez moi</a>
                    </div>
                </div>
            </div>
            <!-- LOGO HEADER END-->
            <section class="menu-section">
                <div class="container">
                    <div class="row ">
                        <div class="col-md-12">
                            <div class="navbar-collapse collapse ">
                                <ul id="menu-top" class="nav navbar-nav navbar-left">
                                    <li>
                                        <a href="index.php" class="menu-top-active"> Menu</a>
                                    </li>
                                    <li>
                                        <a href="add_criminal.php">Ajouter un criminel</a>
                                    </li>
                                    <li>
                                        <a href="casier_judiciaire.php">Casier Judiciaire</a>
                                    </li>                                                              
                                </ul> 
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- MENU SECTION END-->
            
            
            
            <div class="content-wrapper">
                <div class="container">
                    <div class="row pad-botm">
                        <div class="col-md-12">
                            <h4 class="header-line">Casier judiciaires</h4>
                        </div>
                    </div>
                    <!-- Advanced Tables -->
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">           
                                            <div class="panel-body">
                                                <div class="w3-container">  
                                                   
                                                    <thead>
                                                        <tr>
                                                            <th>id</th>
                                                            <th>Prénom et Nom</th>
                                                            <th>Permis</th>                    
                                                        </tr>                                            
                                                    </thead>	                        		
                                                 </div>    
                                                    <tbody>                     
					
				

';
    include("config.php");
    // Get contents of the lspd table
    $reponse = $bdd->query('SELECT * FROM casier');

    // Display each entry one by one
    while ($data = $reponse->fetch()) {
?>
                                               <tr class="odd gradeX">
                                                    <form action='delete_entry.php' method='post'>
<td>
    <?php
        echo $data['id'];
?>
</td>
<td>
    <?php
        echo $data['nom'];
?>
</td>
<td>
    <?php
        echo $data['permis'];
        
?>
</td>
                                                
<?php
    }
    $reponse->closeCursor(); // Complete query
    echo '

                                        </tbody>     
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--End Advanced Tables -->
                        </div>
                    </div>
                    <!-- /. ROW  -->
                </div>
                <!-- /. ROW  -->
            </div>
            <!-- /. ROW  -->
            <!-- End  Hover Rows  -->
        </div>
        <div class="col-md-6">
            <!--    Context Classes  -->
            <!--  end  Context Classes  -->
        </div>
    </div>    
    ';
    require "./widget/footer.php";
    

} else {
    header("Location: login.php");
}

?> </html>


