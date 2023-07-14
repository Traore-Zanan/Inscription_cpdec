<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body class="body">
    
    <div class="container">
        <section>
            <div class="form-box">
              <div class="form-vaue">
                <form action="" method="post">
                  <h1>CHOIX DE VOS UE</h1>
                  <div class="inputbox">
                    <select name="ue">
                        <option >Fondamentaux du droit</option>
                        <option>Comptabilité</option>
                     </select>
                  </div>
                  <h1>FICHIER</h1>
                  <div class="row">
                    <div class="col-4"><button class="connexion" name="semestre">Semestre</button></div>
                    <div class="col-4"><button class="connexion" name="trimestre">Trimestre</button></div>
                       
                    
                  </div>
                  
                  

                </form>
                <?php




if(isset($_POST["semestre"])){
   
      header("location:semestre.php");
  }
  if(isset($_POST["trimestre"])){
   
    header("location:trimestre.php");
}
?>
              </div>
            </div>
          </section>
    </div>

</body>
</html>