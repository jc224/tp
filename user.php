<!DOCTYPE html>
<?php  include "connexion.php" ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <?php include "nav.php" ?>
    
    <?php 
    
        if (!empty($_POST)) {
           
          if (isset($_POST["username"],$_POST["email"],$_POST["pass"])
            && !empty($_POST["username"]) && !empty($_POST["email"]) && !empty($_POST["pass"])
          ) 
          
          {
            echo "bie";
            $username = strip_tags(htmlspecialchars($_POST["username"]));
            $email = strip_tags(htmlspecialchars($_POST["email"]));
            $pass = strip_tags(htmlspecialchars($_POST["pass"]));
            
            //on verifie si le'addresse email est correct
          } else {
              echo "echec";
          }
          
        }
     
    
    ?>

    <form method="POST">
        Username : <input type="text" name="username"><br><br>
        emai : <input type="mail" name="email"><br><br>
        password : <input type="text" name="pass"><br><br>
        <input type="submit" name="valider" value="valide">
    </form>
</body>
</html>