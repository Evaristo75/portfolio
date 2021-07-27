<?php
        
    
    if(!isset($_GET['id']))
    {
        header("LOCATION:index.php");
    }else{
        $id=htmlspecialchars($_GET['id']);
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
    <link rel="stylesheet" href="style20210628.css">
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
                              
              <p class="titregalerie">Détail du projet</p>';



<div id="detailprojet" class="slide">
             
            
                   <div id="detailGauche">
                        <a href="upload/<?= $don['image'] ?>" ><img src="upload/<?= $don['image'] ?>" alt="image de <?= $don['title'] ?>"></a><br>
                        <p>Cliquez pour agrandir</p>
                    
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
           

</body>
</html>     
	