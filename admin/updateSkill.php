<?php
    session_start();
    // si la session n'existe pas, redirection vers formulaire
    if(!isset($_SESSION['login']))
    {
        header("LOCATION:index.php");
    }

      // tester si il y a le get id dans l'URL
      if(!isset($_GET['id']))
      {
          header("LOCATION:works.php");
      }
      require "../connexion.php";
  
      // récup les données qui corresponde à l'id
      $id = htmlspecialchars($_GET['id']);
  
  
      $req = $bdd->prepare("SELECT * FROM skills WHERE id=?");
      $req->execute([$id]);
      // tester s'il existe dans la bdd
      if(!$don = $req->fetch())
      {
          $req->closeCursor();
          header("LOCATION:skills.php");
      }
      $req->closeCursor();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Administration</title>
</head>
<body>
<div class="container-fluid">
    <h1>Administration de Portfolio</h1>
    <h3>Bonjour <?php echo $_SESSION['login'] ?></h3>
    <a href="dashboard.php?deco=ok" class="btn btn-danger my-1">Déconnexion</a>
    <div class="row">
        <div class="col-4">
            <a href="skills.php" class="btn btn-secondary my-1">Retour</a><br>
        </div>
    </div>
</div>
<div class="container">
    <h1 class="mb-3">Modifier <?= $don['title'] ?></h1>
      <form action="treatmentUpdateSkill.php?id=<?= $don['id'] ?>" method="POST" enctype="multipart/form-data">
        <?php
            if(isset($_GET['error']))
            {
                echo "<div class='alert alert-danger'>Veuillez remplir le formulaire correctement (code erreur : ".$_GET['error']." )</div>";
            }

            if(isset($_GET['fileerror']))
            {
                echo "<div class='alert alert-danger'>Le fichier envoyé a eu problème (code erreur : ".$_GET['imgerror']." )</div>";
            }

            if(isset($_GET['upload']))
            {
                echo "<div class='alert alert-danger'>Le transfert du fichier a eu problème</div>";
            }

        ?>
        <div class="form-group mb-3">
            <label for="title">Titre: </label>
            <input type="text" id="title" name="title" class="form-control" placeholder="Titre de la compétence" value="<?= $don['title'] ?>" required>
        </div>
       
        <div class="col-12">
            <img src="../upload/logo/<?= $don['logo'] ?>" class="img-demo" alt="image de <?= $don['title'] ?>">
        </div>
        <div class="input-group mb-3">
            <input type="file" class="form-control" id="inputGroupFile03" name="logo">
            <label class="input-group-text" for="inputGroupFile03">image</label>
        </div>
        <div class="form-group">
            <input type="submit" value="Modifier" class="btn btn-warning">
        </div>
      </form>
</div>

</body>
</html>