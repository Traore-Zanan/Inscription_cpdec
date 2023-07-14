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
    
        <section>
            <div class="form-box">
              <div class="form-vaue">
                <form action="" method="post">
                  <h2>Identification</h2>
                  <div class="inputbox">
                    <input type="text" name="nom" required>
                    <label for="nom">Nom</label>
                  </div>
                  <div class="inputbox">
                    <input type="text" name="prenom" required>
                    <label for="prenom">Prenom</label>
                  </div>
                  <div class="inputbox">
                    <input type="date" name="naissance" required>
                    <label for="naissance">Date de naissance</label>
                  </div>
                  <div class="inputbox">
                    <input type="text" name="lieu" required>
                    <label for="lieu">Lieu de naissance</label>
                  </div>
                  <div class="inputbox">
                    <input type="text" name="nationalite" required>
                    <label for="nationalite">Nationalite</label>
                  </div>
                  <div class="inputbox">
                    <input type="text" name="contact" required>
                    <label for="contact">Contact</label>
                  </div>
                  <div class="inputbox">
                    <input type="email" name="email" required>
                    <label for="email">Email</label>
                  </div>
                  <div class="inputbox">
                    <input type="text" name="etablissement" required>
                    <label for="etablissement">Etablissement</label>
                  </div>
                  <div class="inputbox">
                    <select name="serie">
                        <option >A1</option>
                        <option>A2</option>
                        <option>C</option>
                        <option>D</option>
                     </select>
                  </div>
                  <div class="inputbox">
                    <input type="text" name="nomParent" required>
                    <label for="nomParent">Nom parent</label>
                  </div>
                  <div class="inputbox">
                    <input type="text" name="prenomParent" required>
                    <label for="prenomParent">Prenom parent</label>
                  </div>
                  <div class="inputbox">
                    <input type="text" name="contactParent" required>
                    <label for="contactParent">Contact parent</label>
                  </div>
                  <div class="inputbox">
                    <input type="email" name="emailParent" required>
                    <label for="emailParent">Email Parent</label>
                  </div>
                  <div class="inputbox">
                    <input type="text" name="adresse">
                    <label for="etablissement">Adresse parent</label>
                  </div>
                  <button name="connexion"  class="connexion"><a href="releveNote.php">Suivant</a></button>                </form>

              </div>
            </div>
          </section>

</body>
</html>