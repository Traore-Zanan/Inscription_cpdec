<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="./style/css/style.css">
    <link rel="stylesheet" href="style/bootstrap/bootstrap.min.css">
</head>
<body class="body">
    
      <img src="asset/logo/logoInphb.gif" alt="Logo INPHB">
    
        <section>
            <div class="form-box bg-opacity-25">
              <div class="form-vaue">
                <form action="" method="post" class="bg-opacity-25">
                  <h2>IDENTIFICATION</h2>
                  <div class="inputbox">
                    <input type="text" name="nom" >
                    <label for="nom">Nom</label>
                  </div>
                  <div class="inputbox">
                    <input type="text" name="prenom" >
                    <label for="prenom">Prenom</label>
                  </div>
                  <div class="inputbox">
                    <input type="date" name="naissance" >
                    <label for="naissance">Date de naissance</label>
                  </div>
                  <div class="inputbox">
                    <input type="text" name="lieu" >
                    <label for="lieu">Lieu de naissance</label>
                  </div>
                  <div class="inputbox">
                    <input type="text" name="nationalite" >
                    <label for="nationalite">Nationalite</label>
                  </div>
                  <div class="inputbox">
                    <input type="text" name="contact" >
                    <label for="contact">Contact</label>
                  </div>
                  <div class="inputbox">
                    <input type="email" name="email" >
                    <label for="email">Email</label>
                  </div>
                  <div class="inputbox">
                    <input type="text" name="etablissement" >
                    <label for="etablissement">Etablissement</label>
                  </div>
                  <div class="inputbox">
                 
                    <select name="serie">
                        <option >A1</option>
                        <option>A2</option>
                        <option>C</option>
                        <option>D</option>
                     </select>
                     <label for="serie">Série du BAC</label>
                  </div>
                  <div class="inputbox">
                    <input type="text" name="nomParent" >
                    <label for="nomParent">Nom parent</label>
                  </div>
                  <div class="inputbox">
                    <input type="text" name="prenomParent" >
                    <label for="prenomParent">Prenom parent</label>
                  </div>
                  <div class="inputbox">
                    <input type="text" name="contactParent" >
                    <label for="contactParent">Contact parent</label>
                  </div>
                  <div class="inputbox">
                    <input type="email" name="emailParent" >
                    <label for="emailParent">Email Parent</label>
                  </div>
                  <div class="inputbox">
                    <input type="text" name="adresse">
                    <label for="etablissement">Adresse parent</label>
                  </div>
                  <button name="suivant"  class="connexion">Suivant</button>              
                </form>

                <?php
                  if(isset($_POST["suivant"])){
                        header("location:releveNote.php");
                    }
                ?>
              </div>
            </div>
          </section>

</body>
</html>