<?php
    require "connexion.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Evaristo Portfolio</title>
	<link rel="icon" type="image/png" href="img/logo2.png" />
	<link rel="stylesheet" href="style.css">
	<script type="text/javascript">
      window.addEventListener('load',()=>{
	    
		const navGroup = document.querySelectorAll('nav ul li')
        const toutmenu = document.querySelector('#toutmenu')
		
		
		toutmenu.style.color='white';
		toutmenu.style.backgroundColor='#CC0033';
		dataID = 'tout';

	    navis = toutmenu
	    navGroup.forEach(navi => {            
			navi.addEventListener('click', (e) =>{
				
				
	/* recupère le click */

				var dataID2 = e.target.getAttribute('data-id');
				var dataID = dataID2.substring(1);
				console.log('dataID : ' + dataID);
                
			
				
				if (navi != navis) {
					
                    navi.style.backgroundColor='#cc0033';
				    navi.style.color='white';
					if (navis != '') {
					      navis.style.removeProperty('background-color');
					      navis.style.removeProperty('color');
					}
				
				}
				
				const target = document.querySelector(navi.dataset.id)
				const galGroup = document.querySelectorAll(".gal-group")
				galGroup.forEach(group => {
					group.classList.remove('gal-open')
				})
				target.classList.toggle('gal-open')
				
                navis = navi
			
			})

      })
	  
	  
	  const ensavoirplus = document.querySelector('#arrow')
      const menuToggle = document.querySelector('#menu-toggle') 
      const links = document.querySelectorAll("#menu-toggle ul li a")
	  const croix = document.querySelector('#cross')
	  const fermer = document.querySelector('#fermer')
      croix.addEventListener('click',()=>{ 
            
            menuToggle.classList.toggle('open')
      })
      
	  ensavoirplus.addEventListener('click',()=>{
		   texte.classList.toggle('open')
	  })

	  fermer.addEventListener('click',()=>{
		  texte.classList.remove('open')
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
			    <li><a href="#accueil">Accueil</a></li>
                <li><a href="#apropos">À propos</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#contact">Contact</a></li>
                
                
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

<div id="accueil" class="slide">
	
		<div id="logo">
			<svg version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				viewBox="0 0 354 354" style="enable-background:new 0 0 354 354;" xml:space="preserve">
				<path style="fill:#121821" d="M59.76,189.16H39.12V271h20.64V189.16z M130.346,194.44c-13.08-5.64-21.24-6.36-27.72-6.36
					c-20.52,0-30.96,10.8-30.96,23.28c0,17.28,14.88,23.04,26.64,27.12c10.8,3.72,15.48,5.4,15.48,10.8c0,7.32-9.6,7.44-12.24,7.44
					c-12,0-21.36-5.76-28.44-10.2v17.64c2.04,1.44,15.12,7.92,28.92,7.92c12.24,0,32.04-5.28,32.04-24.24
					c0-15.84-12.24-22.08-22.56-25.8c-11.76-4.2-19.8-7.08-19.8-12c0-0.84,0.36-6.72,12.36-6.72c10.44,0,20.64,5.16,26.28,7.92
					L130.346,194.44L130.346,194.44z M219.334,189.16h-79.92v15.36h29.64V271h20.76v-66.48h29.52V189.16z"/>
				<path style="fill:#121821" d="M95.48,160H55.76v-19.68h37.08v-15.36H55.76V108.4h38.88V93.16H35.12V175h60.36V160z M176.218,93.16
					h-21.96l-20.52,46.68l-21.6-46.68H89.937l39.6,82.92h8.88L176.218,93.16z M209.82,93.16h-23.64l-33,81.84h21.6l6.12-16.2h36.6
					l6.72,16.2h21.96L209.82,93.16z M211.5,144.52h-25.2l12-31.68L211.5,144.52z M243.69,93.16V175h20.64v-33.36h3
					c5.76,0,9.84,0,15.36,10.32c1.68,3.24,8.76,19.44,10.56,23.04h22.44l-2.76-5.88c-2.16-4.68-5.64-12.36-7.92-17.04
					c-1.8-4.2-5.88-12.48-11.76-15.36c3.48-1.68,14.04-6.48,14.04-20.16c0-9.72-6.36-16.44-10.68-19.32c-6.6-4.08-14.04-4.08-21.48-4.08
					L243.69,93.16L243.69,93.16z M274.65,108.04c2.28,0,11.4,0,11.4,9.36c0,3.36-1.44,6.36-4.44,7.92c-2.16,1.2-3.48,1.2-8.76,1.44
					h-8.52v-18.72H274.65z"/>
				<rect x="5" y="5" style="fill:none;stroke:#121821;stroke-width:10;" width="344" height="344"/>
				<path style="fill:#CC1236;" d="M277.354,186.04c-2.343,0.631-5.521,1.073-8.603,1.78c-1.559,0.352-3.089,0.685-4.482,1.148
					l-2.075,0.589c-0.625,0.211-1.183,0.459-1.698,0.661c-3.83,1.241-7.359,3.286-10.353,5.998c-3.18,2.787-5.993,5.97-8.371,9.471
					l-0.263-0.307c-0.55,0.605-1.115,1.236-1.642,1.923c-0.527,0.688-0.977,1.454-1.447,2.227c-0.946,1.606-1.768,3.282-2.46,5.014
					c-1.278,3.502-2.157,7.136-2.619,10.831l0.575-0.309c0.265-1.151,0.528-2.638,1.066-1.614c-0.358,1.347-0.845,2.656-1.454,3.91
					l0.676,1.243c-0.263,0.467-0.782,0.491-1.217,0.738c-0.436,0.247-0.824,0.749-0.504,2.161c0.965,0.824,0.57,2.36,0.494,3.794
					c-0.077,1.434-0.116,2.678,1.028,2.567c-0.601,0.663-0.369,1.55-0.085,2.501c0.283,0.951,0.736,1.787,0.992,2.476l0.669-1.187
					c0.105,1.385,0.136,2.776,0.092,4.166c-0.017,1.012,0.193,2.014,0.614,2.931c1.87,3.68,4.387,6.987,7.431,9.762
					c-0.31,1.478-2.636-3.086-1.949-0.377c1.691,1.147,3.306,2.404,4.834,3.762c1.681,1.317,3.322,2.857,5.228,4.178
					c3.69,2.91,8.089,4.783,12.75,5.428c-0.252-0.142-0.94-0.529-0.368-0.524c0.862,0.611,1.889,0.945,2.947,0.958
					c1.325,0.087,2.645,0.244,3.953,0.47c-0.19-0.406-1.217-0.686-2.363-0.91l-3.059-0.757c0.611-0.869,0.74-0.726,1.211-0.355
					c0.415,0.348,0.903,0.6,1.427,0.738c0.525,0.138,1.074,0.158,1.609,0.059c-0.238-0.134-0.701-0.395-0.665-0.551
					c3.519-0.214,1.303,1.368,4.079,1.051c-0.517-0.176-1.02-0.389-1.506-0.638c2.645,0.102,0.879-0.26,3.807-0.755
					c-0.397,1.077,1.142,1.839,1.961,1.809c0.294-0.521,3.259-0.555,2.723-1.49c0.677,0.256,1.4,0.367,2.125,0.327
					c0.724-0.039,1.433-0.229,2.083-0.557c1.241-0.704,2.694-0.924,4.08-0.62c0.547-0.693,0.109-0.782-0.463-0.788
					c-0.572-0.005-1.327-0.027-1.388-0.413c3.052-1.796,1.421,0.572,2.793,0.396c2.169-1.549,4.521-2.823,7-3.791l-0.31-0.719
					c0.821-0.321,1.617-0.701,2.384-1.136l2.465-1.529c1.124-0.897,2.383-1.606,3.729-2.101c0.064-1.722-1.609,0.166-3.224,1.7
					c-0.689-0.107,0.628-1.95,1.459-2.589c-0.388,0.379-0.86,0.166-1.013,0.871c-0.609-0.343,0.779-1.197,0.993-1.762
					c1.348-1.279,1.156-1.001,0.886-0.397c-0.271,0.604-0.845,1.282-0.157,0.896c0.787-1.209,3.023-3.94,1.337-3.361
					c0.937-1.23,1.247-1.284,1.596-1.192c0.35,0.091,0.622,0.35,1.215-0.177c-0.681,0.61-1.212,1.371-1.548,2.222
					c-0.119,0.374-0.313,0.72-0.571,1.017c-0.257,0.296-0.572,0.537-0.924,0.707c-0.106,0.714,0.26,0.745,0.991,0.313
					c1.534-2.072,4.837-5.89,3.865-6.332c0.423-0.254,0.813-0.544,1.222-0.806l-0.105-1.483l0.422-0.378
					c-0.814,0.402-1.574,0.908-2.26,1.505c-0.627,0.545-1.365,0.945-2.161,1.173c-0.538-0.128,0.538-1.262,0.804-2.044l1.077-0.149
					c0.204-0.294,0.334-0.632,0.379-0.987c0.045-0.355,0.004-0.714-0.121-1.048c-0.187-0.866-0.031-1.775,0.435-2.533
					c0.393,2.086,2.8-2.308,4.004-4.196c-1.38-2.624-1.541-0.112-2.808-2.286c0.183-1.005,0.333-2.292,0.438-3.622
					c0.025-1.338,0.192-2.67,0.497-3.974c-0.122,2.937,0.207,2.261,0.73,1.395c0.523-0.865,1.083-1.921,1.277,0.58
					c0.156-1.002,0.141-2.021-0.044-3.014c1.546-0.887,1.264,1.591,2.42,0.098l-1.073-0.447c0.421-0.747,0.82-1.454,1.278-2.268
					c0.477-1.057,0.735-2.198,0.758-3.354c-0.441-0.392-0.796-0.871-1.045-1.408c-0.249-0.536-0.387-1.119-0.404-1.712
					c0.618-0.601,1.004-0.946,0.119-3.766c-1.844-2.358-2.02-0.716-1.988,1.517c0.036,1.183-0.008,2.368-0.134,3.546
					c0.023,0.846-0.253,1.675-0.779,2.34c0.111,1.37-0.057,2.752-0.494,4.059c-0.438,1.307-1.135,2.514-2.049,3.545
					c-0.801,0.966-1.538,1.984-2.206,3.047c-0.406,0.626-0.773,1.277-1.098,1.948c-0.195,0.347-0.399,0.707-0.517,1.133
					s-0.443,0.788-0.584,1.253c0.149,0.664,0.298,0.925,0.367,1.297c0.105,0.679,0.043,1.374-0.182,2.025
					c0.494,1.07,1.157,0.389,1.85-0.715c0.515-1.229,1.171-2.393,1.955-3.47c0.1,0.379,0.124,0.774,0.069,1.163
					c-0.054,0.389-0.186,0.764-0.387,1.102l1.349-0.506c-0.633,4.215-2.309,1.653-3.068,5.164l0.031-0.827
					c-0.121,0.674-0.282,1.341-0.481,1.997l0.392-0.324c-0.491,1.148,0.096,1.901-1.178,3.451l0.051-1.73
					c-0.011,1.225-1.273,0.865-1.806,2.306c0.064-0.949-0.257-1.429-0.049-1.892c-1.605,1.61-2.722,3.16-4.041,4.509
					c-3.528,5.238-8.968,8.873-15.129,10.111c0.261,0.05,0.527,0.076,0.793,0.078c-0.35,0.262-0.767,0.418-1.202,0.447
					c-0.434,0.03-0.867-0.067-1.246-0.28l-1.639,0.219l-1.657,0.033c-0.561,0.159-1.089,0.354-1.634,0.486l-1.632,0.329
					c-1.236,0.217-2.493,0.276-3.742,0.176c-0.133-0.568,0.055-0.778,0.451-0.801c-1.002,0.139-1.654,0.369-0.636,0.943
					c-1.819,0.135-2.564-0.584-3.846-0.691c1.015-0.254,2.075-0.589,2.992-0.793c-1.179-0.506-1.233,0.765-2.853,0.238
					c-1.305-0.067-1.076,0.238-0.539,0.646s1.415,0.798,1.186,1.266c-0.368-0.054-0.732-0.13-1.091-0.228
					c0.329,0.467,0.696,0.867,1.022,1.279c-1.011-0.201-1.96-0.633-2.774-1.264c-0.567-0.425-1.078-0.92-1.522-1.474
					c0.513,0.281,1.043,0.527,1.589,0.738c0.434-0.617-0.266-0.765-1.125-0.88s-1.907-0.39-2.161-0.867l0.247-0.036
					c-2.482-0.731,0.351,0.83-1.417,0.502l-2.486-2.175l0.072,0.955c-1.235-0.311-2.362-0.947-3.267-1.842
					c-0.588-0.472-1.128-1.092-1.699-1.625s-1.15-1.053-1.653-1.583c-0.714-0.634-1.487-1.199-2.308-1.687
					c-0.921-0.573-1.789-1.227-2.594-1.955c0.092,0.456,0.543,1.203,0.154,1.212c-0.887-0.992-2.674-3.265-1.326-2.998
					c-0.578-0.317-1.137-0.667-1.674-1.049c-0.33-0.445-0.546-0.965-0.628-1.515l-0.048,0.642c-0.496-0.549-0.964-1.124-1.4-1.722
					c0.181-0.073,0.141-0.993,0.74-0.075c-0.099-0.662-0.337-1.294-0.699-1.853c-0.345-0.664-0.737-1.302-1.172-1.909
					c-0.481-0.685-0.892-1.417-1.226-2.186c-0.419-0.838-0.68-1.749-0.77-2.685l0.702,1.012c-1.163-2.08,0.172-2.594-0.705-4.934
					l-0.542,0.591c-0.309-1.051-0.329-2.168-0.06-3.234c0.211-1.024,0.542-1.734,0.835-1.481c-1.771-0.26,0.549-0.974-0.895-2.123
					c0.556-0.337,1.097-0.647,1.651-0.95c-0.334-1.138-0.354-2.31-1.287-1.675c0.448-0.714,0.781-1.493,0.988-2.309
					c0.099-0.334,0.13-0.684,0.091-1.03c-0.039-0.345-0.147-0.678-0.318-0.98c-0.065-0.441,0.845-2.055-0.116-1.525
					c1.543-4.036,2.188-1.562,3.828-5.121l-0.923-0.714c0.864-1.268,1.619-2.607,2.257-4.003c0.361-0.64,0.659-1.387,0.904-2.005
					l0.992-1.761l0.887,0.499c0.406-0.72,0.26-0.802,0.107-0.994s-0.231-0.518,0.66-1.387c0.394-0.112,0.849-0.084,0.959,0.154
					c2.489-1.973,5.272-3.538,8.244-4.637c0.051,0.187-0.309,0.547-0.429,0.76c0.707-0.357,1.585-0.864,2.549-1.429l2.648-1.76
					c4.61,0.295,10.294,1.002,15.495,1.701c4.383-1.591,8.42-2.815,10.012-5.206c-0.693-1.711-1.896-3.163-3.444-4.157
					c-1.2-0.859-2.464-1.624-3.782-2.29c-0.752-0.336-1.538-0.673-2.378-1.006C279.132,186.572,278.253,186.271,277.354,186.04z"/>
			</svg>
				<div id="baseline">
					<p class="design">GRAPHIC DESIGNER</p>
					<p class="photo">Photographe</p>
				</div>
		</div>
		
		<div id="sociaux">
		<a href="https://www.facebook.com/evaristo.gaeta/"><div id="fb" class="post"></div></a>
		<a href="https://www.instagram.com/evaristogaeta/?hl=fr"><div id="insta" class="post"></div></a>
		<a href="https://www.linkedin.com/in/cugino-evaristo-gaeta-7ab8b419/"><div id="linkedin" class="post"></div></a>
		<a href="https://twitter.com/rouximus"><div id="twiter" class="post"></div></a>
		</div>
	
</div>


<div id="apropos" class="slide">
	<p class="title">A PROPOS</p>
	<p id="accroche">La vie est un état d'esprit</p>
          <div class="wrapper">
			<div id="presg">
				
			</div>
			<div id="presd">
                   
			        <div id="texte">
                         <p id="fermer">X</p>
				         <p id="pres">
				        	A presque 45 ans j’ai décidé d’entamer des études en <b>infographie</b> afin de développer ma créativité et de m’épanouir pleinement.
					       Je suis <b>informaticien</b> de formation déjà tout petit je m’intéressais aux ordinateurs. 
                           Mon premier ordinateur était pourvu d’un lecteur cassette et d’un écran monochrome dingue hein !
                           J’aime les <b>choses simples de la vie</b> et j’aime les partager avec mes proches. Un repas entre amis, des ballades, se remémorer des bons moments font parties de ma philosophie de vie.
                           Petit fils d’immigré, mes grands parents ont quitté leur campagne italienne pour une meilleure vie.
                           Je me passionne pour le <b>Japon</b> et de son art culinaire. <b>La photographie</b> et la <b>musique</b> font parties de mes autres passions. La musique est un vecteur d’émotion qui me procure une certaine sensibilité.  
                         </p>
				    </div>
			        <p id="moi">Je suis <b>Evaristo</b>, j'aime le "<b>beau</b>", l'<b>épuré</b>. Je suis en perpétuel réflexion <b>artistique</b> afin d'embellir vos projets, vos rêves en y ajoutant ma patte, mes <b>influences</b>, mon univers...</p>
				    <p id="arrow"></p>
                   
                    <div id="competences">
					<p id="skills">
                         COMPÉTENCES
                    </p>
					<div class="skills">
                         <?php
						             
                                $req = $bdd->query("SELECT * FROM skills");
                                while($don = $req->fetch())
                                {
                                    
                                        
                                    echo '<div class="galimg" style="background-image: url(upload/logo/'.$don['logo'].'"><div class="content"><p>'.$don['title'].'</p></div></div>';
									
									
								}	
									                                
                                $req->closeCursor();
                         ?>
						 
                    </div>
					</div>

		    </div>
          </div>
</div>

    <div id="portfolio" class="slide">
              
               <p class="port">
                  PORT
			   </p>
			   <p class="folio">
                  FOLIO
				</p>
				<div class="wrapper2">		
                    <nav>
                       <ul>
					       <li id="toutmenu" data-id='#tout'>Tout</li>
                           <li data-id='#pao'>PAO</li>
						   <li data-id='#wd'>Web Design</li>
						   <li data-id='#illu'>Illustrator</li>
						   <li data-id='#photo'>Photographies</li>
						   <li data-id='#anim'>Animation</li>

						</ul>

					</nav>
                    
                    

                    <div id="gal-container">
				    
					<div id="tout" class="gal-group gal-open">
                        
						
                        <?php

						/* permet de compter le nombre de travaux ($count) */
						        
							    
							    $count = $bdd->query("SELECT count(*) as total from works");
								$donnees = $count->fetch();
								$count->closeCursor();
                                $count = $donnees['total'];
								 
                                $req = $bdd->query("SELECT * FROM works order by year desc limit 6");
                                while($don = $req->fetch())
                                {
                                    
                                       
                                    echo '<div class="galerie" style="background-image: url(upload/'.$don['image'].'">';
									echo '<div class="fond"><a href="detail.php?id='.$don["id"].'&category='.$don["category"].'">';
									echo '<img src="logo/arrow"></a></div></div>';
									
								}	
									                                
                                $req->closeCursor();
						        

							    
								if ($count > 6) {
			                         echo '<div id="tout2">';
									 echo '<p><a href="galerie.php?suite=tout">EN VOIR PLUS</a></p>';
								     echo '</div>';
								}
			
								

						  ?>

						
                    </div>
                    <div id="pao" class="gal-group">
                        
                           <?php

                             $count = $bdd->query("SELECT count(*) as total from works where category = 'pao'");
                             $donnees = $count->fetch();
                             $count->closeCursor();
                             $count = $donnees['total'];

                        
                            $req = $bdd->query("SELECT * FROM works where category ='pao' order by year desc limit 6");
                            while($don = $req->fetch())
                            {
	
								echo '<div class="galerie" style="background-image: url(upload/'.$don['image'].'">';
								echo '<div class="fond"><a href="detail.php?id='.$don["id"].'&category='.$don["category"].'">';
								echo '<img src="logo/arrow"></a></div></div>';
	
                            }	
									
                            $req->closeCursor();
							
							if ($count > 6) {
								echo '<div id="tout2">';
								echo '<a href="galerie.php?suite=pao">VOIR +</br><img src="logo/arrow.png"></a>';
								echo '</div>';
						   }
	   		   

                            ?>

						
                    </div>
                    <div id="wd" class="gal-group">
					<?php
                         $count = $bdd->query("SELECT count(*) as total from works where category = 'webdesign'");
						 $donnees = $count->fetch();
						 $count->closeCursor();
						 $count = $donnees['total'];
                       $req = $bdd->query("SELECT * FROM works where category ='webdesign' order by year desc limit 6");
                       while($don = $req->fetch())
                        {

							echo '<div class="galerie" style="background-image: url(upload/'.$don['image'].'">';
							echo '<div class="fond"><a href="detail.php?id='.$don["id"].'&category='.$don["category"].'">';
							echo '<img src="logo/arrow"></a></div></div>';

                        }	
		
                        $req->closeCursor();
						if ($count > 6) {
							echo '<div id="tout2">';
							echo '<a href="galerie.php?suite=wd">VOIR +</br><img src="logo/arrow.png"></a>';
							echo '</div>';
					    }
   

                    ?>

						
                    </div>
                    <div id="illu" class="gal-group">
					<?php
                         $count = $bdd->query("SELECT count(*) as total from works where category = 'illustrator'");
						 $donnees = $count->fetch();
						 $count->closeCursor();
						 $count = $donnees['total'];
                       $req = $bdd->query("SELECT * FROM works where category ='illustrator' order by year desc limit 6");
                       while($don = $req->fetch())
                       {

						echo '<div class="galerie" style="background-image: url(upload/'.$don['image'].'">';
						echo '<div class="fond"><a href="detail.php?id='.$don["id"].'&category='.$don["category"].'">';
						echo '<img src="logo/arrow"></a></div></div>';

                       }	

                       $req->closeCursor();
					   if ($count > 6) {
						echo '<div id="tout2">';
						echo '<a href="galerie.php?suite=illu">VOIR +</br><img src="logo/arrow.png"></a>';
						echo '</div>';
				       }


                     ?>
						
                    </div>
                    <div id="photo" class="gal-group">
					<?php
                           $count = $bdd->query("SELECT count(*) as total from works where category = 'photographies'");
						   $donnees = $count->fetch();
						   $count->closeCursor();
						   $count = $donnees['total'];
                         $req = $bdd->query("SELECT * FROM works where category ='photographies' order by year desc limit 6");
                         while($don = $req->fetch())
                         {
							echo '<div class="galerie" style="background-image: url(upload/'.$don['image'].'">';
							echo '<div class="fond"><a href="detail.php?id='.$don["id"].'&category='.$don["category"].'">';
							echo '<img src="logo/arrow"></a></div></div>';

                         }	

                         $req->closeCursor();
						 if ($count > 6) {
							echo '<div id="tout2">';
							echo '<a href="galerie.php?suite=photo">VOIR +</br><img src="logo/arrow.png"></a>';
							echo '</div>';
					    }
   

                    ?>
						
                    </div>
                    <div id="anim" class="gal-group">
					<?php
                          $count = $bdd->query("SELECT count(*) as total from works where category = 'animation'");
						  $donnees = $count->fetch();
						  $count->closeCursor();
						  $count = $donnees['total'];
                        $req = $bdd->query("SELECT * FROM works where category ='animation' order by year desc limit 6");
                        while($don = $req->fetch())
                        {
							echo '<div class="galerie" style="background-image: url(upload/'.$don['image'].'">';
							echo '<div class="fond"><a href="detail.php?id='.$don["id"].'&category='.$don["category"].'">';
							echo '<img src="logo/arrow"></a></div></div>';
                        }	

                        $req->closeCursor();
						if ($count > 6) {
							echo '<div id="tout2">';
							echo '<a href="galerie.php?suite=anim">VOIR +</br><img src="logo/arrow.png"></a>';
							echo '</div>';
						}
   

                    ?>
						
                    </div>
                    

					
				</div>

									
                </div>
			
    </div>

    <div id="contact" class="slide">

	      <p id="contactbg">CONTACT</p>
          <div class="wrapper">
          <div id="contactg">
                    <p class="question">Vous avez une question ? N'hésitez pas à prendre contact avec moi.</p>
                    <div id="coordonnees">
					    <div id="email">
                             <img src="logo/mail.png">
							 <p><u><a href="mailto:info@evaristo.be">info@evaristo.be</a></u></p>
					    </div>

					    <div id="phone">
						     <img src="logo/smartphone.png">
							 <p>+32 475 20 47 64</p>
					    </div>

					    <div id="localite">
						     <img src="logo/map-marker.png">
                             <p>Soignies, Belgique</p>
					    </div>
					</div>
		  </div>
          <!-- <div id="separ"></div> -->
		  <div id="contactd">
		  <form action="admin/treatmentAddMessage.php" method="POST">
                <p><label for="nom">Nom</label></p>
				<p><input type="text" id="nom" name="nom" placeholder="Votre nom"></p>
                <p><label for="mail">Email</label></p>
				<p><input type="email" id="mail" name="email" placeholder="Votre email"></p>
                <p><label for="mess">Message</label></p>
                <p><textarea rows="10" name="message" id="mess" placeholder="Votre message"></textarea></p>
                <p><input type="submit" value="ENVOYER"></p>
            </form>
			</div>
			<?php
                            if(isset($_GET['success']))
                            {
                                echo '<div class="success">' ;
                                echo '<p>Message envoyé</p>'; 
                                echo '</div >' ;
                            }
                            if(isset($_GET['error']))
                            {
                                echo '<div class="unsuccess">' ;
                                echo '<p>Erreur lors de l\'envoi du message ! !</p>'; 
                                echo '</div >' ;
                            }
                            
            ?>
		

          </div>
		
		  <div id="conteneurb">
             <p id="graphicb">GRAPHIC DESIGNER</p>
             <div id="logogalerieb">
           
             </div>
             <p id="photogb">Photographe</p>
          </div>
					</div>
    

    <footer>
	<nav>
                       <ul>
					       <li><a href="#accueil">ACCUEIL</a></li>
						   <li>|</li>
                           <li><a href="#apropos">A PROPOS</a></li>
						   <li>|</li>  
						   <li><a href="#portfolio">PORTFOLIO</a></li>
						   <li>|</li>  
						   <li><a href="#contact">CONTACT</a></li>
						 
						</ul>

	</nav>

	<div id="follow">
          <p>Suivez moi</p>
		  <div id="sociauxf">
		     <a href="https://www.facebook.com/evaristo.gaeta/"><div id="fbf" class="postf"></div></a>
		    <a href="https://www.instagram.com/evaristogaeta/?hl=fr"> <div id="instaf" class="postf"></div></a>
		    <a href="https://www.linkedin.com/in/cugino-evaristo-gaeta-7ab8b419/"><div id="linkedinf" class="postf"></div></a>
		    <a href="https://twitter.com/rouximus"> <div id="twiterf" class="postf"></div></a>
		  </div>

	</div>

	<div id="disclaimer">
         <p>Les images non libres de droits utilisées dans ce portfolio ont été utilisées dans le cadre scolaire et non à but commercial.</p>
	</div>

	<div id="copyright">
         <p><b>Copyright &copy; 2021, EPSE</b></p>
	</div>


    </footer>


</body>
</html>