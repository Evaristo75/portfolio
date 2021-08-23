<?php
        
    
    if(!isset($_GET['id']))
    {
        header("LOCATION:index.php");
    }else{
        $id=htmlspecialchars($_GET['id']);
    }

    if(isset($_GET['category']))
    {

        $categorie = ucfirst($_GET['category']);
    }

    require 'connexion.php';

    $req = $bdd->prepare('SELECT * FROM works WHERE id=?');
    $req->execute([$id]);
    if(!$don=$req->fetch())
    {
        $req->closeCursor();
        header("LOCATION:index.php");
    }

    $req->closeCursor();



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/lightbox.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/glightbox.css">
    <script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/lightbox.min.js"></script> 
	<script type="text/javascript">
      window.addEventListener('load',()=>{
	  
      const menuToggle = document.querySelector('#menu-toggle') 
      const croix = document.querySelector('#cross')
      const links = document.querySelectorAll("#menu-toggle ul li a")
	 
      croix.addEventListener('click',()=>{ 
            
            menuToggle.classList.toggle('open')
      })

      links.forEach(link => {
		     link.addEventListener('click',()=>{
                    menuToggle.classList.toggle('open')

			 })
	  })

      })
     </script>
  

<title>Detail</title>
</head>
<body>
     
       <div id="menu-toggle">
        <div id="menu">
		
            <ul>
			    <li><a href="index.php#accueil">Accueil</a></li>
                <li><a href="index.php#apropos">À propos</a></li>
                <li><a href="index.php#portfolio">Portfolio</a></li>
                <li><a href="index.php#contact">Contact</a></li>
                
                
            </ul>
        </div>
           <div id="hamburger">
               <span></span>
               <span></span>
               <span></span>
           </div>
           <div id="cross">
               <span></span>
               <span></span>
           </div>
        </div>

       
        <div id="conteneur">
             <p id="graphic">GRAPHIC DESIGNER</p>
             <div id="logogalerie">
           
             </div>
             <p id="photog">PHOTOGRAPHE</p>
        </div>
                              
              <p class="titregalerie">Détail du projet</p>
              <p class="categorie"><?= $categorie ?></p>


<div id="detailprojet">
    
                    <div id="detailGauche">

                    <?php                     
                        if (isset($_GET['category'])) {
	                        if ($_GET['category'] !== 'animation' ) {
				
				                echo '<a href="upload/'.$don['image'].'" ';
				                echo 'data-lightbox="image" data-title="'.$don['title'].'">';
				                echo '<img src="upload/'.$don['image'].'" alt="image de '.$don['title'].'"></a><br>';
				                echo '<p>Cliquez pour agrandir</p>';
							
			                } else
			
			                { 
				
				                echo '<a href="'. stristr($don['description'],'https://').'" class="gal">';
				                echo '<img src="upload/'.$don['image'].'" alt="image de '.$don['title'].'"></a><br>';
				                echo '<p>Cliquez pour visioner</p>';
							
			                }
	        
                        }
                    ?>
                    
                    </div>


                   <div id="detailDroite">
                     
                        <div class="fiche">Titre: <h3><?= $don['title'] ?></h3></div>
                        <div class="line"></div>
                        <div class="fiche"><b>Date: </b><br><p><?= $don['year'] ?></p></div>
                        <div class="line"></div>
                        <div class="fiche"><b>Description: </b><br><p><?= nl2br($don['description']) ?></p></div>
                    
                     

                   </div>
    </div> 
    
    <div id="back2">
        <a href="index.php#portfolio"> <img src="logo/arrow2.png"></a>
    </div>
        
    <script src="js/glightbox.js"></script>
    <script>
        var lightbox = GLightbox();
        var lightboxDescription = GLightbox({
            selector: '.gal',
        });
    </script>
</body>
</html>     
	