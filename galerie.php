<?php
    require "connexion.php";
    if (!isset($_GET['suite'])) {
        header("location:index.php");
    } else

          {
              $suite = htmlspecialchars($_GET['suite']);
             

          }



          if ($suite == 'tout') {
            $titre = 'Tous les projets';
            
           } else if ($suite == 'pao') {
            $titre = 'Projets : PAO';
            $category = 'pao';
            
           
            
             } else if ($suite == 'wd') {
                $titre = 'Projets : Webdesign';
                $category = 'webdesign';
           
            } else if ($suite == 'illu') {
                $titre = 'Projets : Illustrator';
                $category = 'illustrator';
                
           
            } else if ($suite == 'photo') {
                $titre = 'Projets : Photographies';
                $category = 'photographies';
                
           
            } else {
                $titre = 'Projets : Animation';
                $category = 'animation';
                
           
            }

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
  

<title>PortFolio</title>
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
             <?php
                  
                  echo '<p class="titregalerie">' . $titre . '</p>';

                  ?>
        
             
        


<div id="portfolio" class="slide">
              
              <p class="port">
                 PORT
              </p>
              <p class="folio">
                 FOLIO
               </p>
               <div class="wrapper2">		
                 
                
                   
                   

                   <div id="gal-container">
                   <div id="tout">
                       
                       
                       <?php
                               if (isset($category)) {
                                $req = $bdd->prepare("SELECT * FROM works where category=? order by year");
                                $req->execute([$category]);
                               }else{
                                $req = $bdd->query("SELECT * FROM works order by year");    
                               }
                                
                               
                               
                               while($don = $req->fetch())
                               {
                                   
                                echo '<div class="galerie" style="background-image: url(upload/'.$don['image'].'">';
                                echo '<div class="fond"><a href="detail.php?id='.$don["id"].'">';
                                echo '<img src="logo/arrow"></a></div></div>';
    
                                   
                               }	
                                                              
                               $req->closeCursor();
                            
                        ?>
                       
                       
                       
                   </div>
              
                   </div>
                   
                   
                   
               </div>
               <div id="back">
               <a href="index.php#portfolio"> <img src="logo/arrow2.png"></a>
               </div>
           
   </div>  
   </body>
</html>     
	