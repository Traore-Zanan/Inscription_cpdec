<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="style/css/styl.css">
    <link rel="stylesheet" href="style/bootstrap/bootstrap.min.css">
</head>
<body class="body">
    
<img src="asset/logo/logoInphb.gif" alt="Logo INPHB">
        <section>
            <div class="form-box">
              <div class="form-vaue">
                <form action="" method="post">
                  <h2>RELEVE DE NOTES</h2>
                  <h3>Moyennes annuelles</h3>
                  <div class="row">
                    <div class="inputbox col-3 ">
                      <label for="français">Français</label>
                      <input type="text" name="français" >
                    </div>
                    <div class="inputbox col-3">
                      <label for="anglais">Anglais</label>
                      <input type="text" name="anglais" >
                    </div>
                    <div class="inputbox col-3">
                      <label for="maths">Mathématiques</label>
                      <input type="text" name="maths" >
                    </div>
                  </div>
                  
                  <h3>Notes BAC</h3>
                  <div class="row">
                    <div class="inputbox col-3">
                      <label for="français">Français</label>
                      <input type="text" name="français" >
                    </div>
                    <div class="inputbox col-3">
                      <label for="anglais">Anglais</label>
                      <input type="text" name="anglais" >
                    </div>
                    <div class="inputbox col-3">
                      <label for="maths">Mathématiques</label>
                      <input type="text" name="maths" >
                    </div>
                  </div>
                  <h3>Moyenne generale annuelle</h3>
                  <div class="row">
                    <div class="inputbox col-3">
                      <label for="français">Français</label>
                      <input type="text" name="français" >
                    </div>
                    <div class="inputbox col-3">
                      <label for="anglais">Anglais</label>
                      <input type="text" name="anglais" >
                    </div>
                    <div class="inputbox col-3">
                      <label for="maths">Mathématiques</label>
                      <input type="text" name="maths" >
                    </div>
                  </div>
                  <h2>CHOIX DE VOS UE</h2>


                  <div class="inputbox">
                    <select name="ue">
                        <option >Fondamentaux du droit</option>
                        <option>Comptabilité</option>
                     </select>
                  </div>
                  <h2>FICHIER (bulletin de notes)</h2>
                <div class="inputbox">
                  <label for="">choisissez une option</label>
                  <select id="choix" onchange="afficherChamps()">
                    <option value="">...</option>
                    <option value="semestre">semestre</option>
                    <option value="trimestre">trimestre</option>
                  </select>
                </div>
                <div id="champsDynamiques1" style="display: none;">
                  <div class="inputbox">
                    <label for="champ1">1er semestre :</label>
                    <input type="file" id="champ1" name="semestre1">
                  </div>
                  <div class="inputbox">
                    <label for="champ2">2ème semestre :</label>
                    <input type="file" id="champ2" name="semestre2">
                  </div>
                </div> 
                <div class="row" id="champsDynamiques2" style="display: none;">
                  <div class="inputbox">
                    <label for="champ1">1er trimestre :</label>
                    <input type="file" id="champ1" name="trimestre1">
                  </div>
                  <div class="inputbox">
                    <label for="champ2">2ème trimestre :</label>
                    <input type="file" id="champ2" name="trimestre2">
                  </div>
                  <div class="inputbox">
                    <label for="champ2">3ème trimestre :</label>
                    <input type="file" id="champ2" name="trimestre3">
                  </div>
                </div> 
                <script>
                  function afficherChamps() {
                  var choix = document.getElementById("choix").value;
                  var champsDynamiques = document.getElementById("champsDynamiques");

                  if (choix === "semestre") {
                    champsDynamiques1.style.display = "block";
                    champsDynamiques2.style.display = "none";
                  } 
                  else if (choix === "trimestre") {
                    champsDynamiques2.style.display = "block";
                    champsDynamiques1.style.display = "none";
                  }
                  else{
                    champsDynamiques2.style.display = "none";
                    champsDynamiques1.style.display = "none";
                  }
                }
                </script>
                  <button name="suivant" class="connexion">Envoyer</button>
                </form>
                
              </div>
          
          </section>
    </div>

</body>
</html>