<?php
    
     if(isset($_POST['nom']))
     {
        $err=0;
        $name = htmlspecialchars($_POST['nom']);

       
        if(empty($_POST['email'])) 
        {
            $err=1;
        }else{
            $email = htmlspecialchars($_POST['email']);
        }
      
        
        if(empty($_POST['message'])) 
        {
            $err=2;
        }else{
            $message = $_POST['message'];
        }
        
      
        if($err===0)
        {
               
                require "../connexion.php";
                $insert = $bdd->prepare("INSERT INTO contact (nom,mail,message) VALUES(:nom,:email,:message)");
                $insert->execute([
                    ":nom" => $name,
                    ":email" => $email,
                    ":message" => $message
                    
                ]);
                $insert->closeCursor();
                 
                header("LOCATION:../index.php?success#contact");
        }else{
                header("LOCATION:../index.php?error=".$err."#contact");
                
        }   

    
        }else{

            $err=3;          
            header("LOCATION:../index.php?error=".$err);
        }
     
     
?>