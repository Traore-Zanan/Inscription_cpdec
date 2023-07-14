<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="style/css/style.css">
    <link rel="stylesheet" href="style/bootstrap/bootstrap.min.css">
</head>
<body class="body">
    
<img src="asset/logo/logoInphb.gif" alt="Logo INPHB">
        <section>
            <div class="form-box">
              <div class="form-vaue">
                <form action="" method="post">
                  <h1>RELEVE DE NOTES</h1>
                  <h3>Moyennes annuelles</h3>
                  <div class="inputbox">
                    <input type="text" name="français" >
                    <label for="français">Fraçais</label>
                  </div>
                  <div class="inputbox">
                    <input type="text" name="anglais" >
                    <label for="anglais">Anglais</label>
                  </div>
                  <div class="inputbox">
                    <input type="text" name="maths" >
                    <label for="maths">Mathématiques</label>
                  </div>
                  <h3>Notes BAC</h3>
                  <div class="inputbox">
                    <input type="text" name="français" >
                    <label for="français">Fraçais</label>
                  </div>
                  <div class="inputbox">
                    <input type="text" name="anglais" >
                    <label for="anglais">Anglais</label>
                  </div>
                  <div class="inputbox">
                    <input type="text" name="maths" >
                    <label for="maths">Mathématiques</label>
                  </div>
                  <h3>Autres</h3>
                  <div class="inputbox">
                    <input type="text" name="moyenneGenerale" >
                    <label for="moyenneGenerale">Moyenne generale annuelle</label>
                  </div>
                  <div class="inputbox">
                    <input type="text" name="MoyenneBac" >
                    <label for="MoyenneBac">Moyenne BAC</label>
                  </div>
                  <div class="inputbox">
                    <input type="text" name="pointBac" >
                    <label for="pointBac">Point BAC</label>
                  </div>
                  <button name="suivant"  class="connexion">Suivant</button>
                </form>
                <?php
                  if(isset($_POST["suivant"])){
                        header("location:fichierUE.php");
                    }
                ?>
              </div>
          
          </section>
    </div>

</body>
</html>