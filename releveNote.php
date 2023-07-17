<?php
session_start();
//include "connexionDatabase.php";



// s'il clique sur s'inscire
if(isset($_POST["envoyer"])){
    extract($_POST);
  //verifier que touts les champs sont renseignés
    //if(!empty($françaisAA) && !empty($anlgaisAA) && !empty($mathsAA) && !empty($françaisNB) && !empty($anlgaisNB) && !empty($mathsNB) !empty($françaisMGA) && !empty($anlgaisMGA) && !empty($mathsMGA)){
    
    //if($MDPEtudiant==$confirmeMDP){
       // $resq = "INSERT INTO etudiant (nom_etudiant,prenom_etudiant,email_etudiant,MDP_etudiant,sexe,matricule) VALUES('$françaisAA','$anglaisAA','$mathsAA','$françaisNB','$anglaisNB','$mathsNB' '$françaisMGA','$anglaisMGA','$mathsMGA')";
        //$res = $idcnx->exec($resq);
       //if($res) { $msg="inscription reuissie";}     
      //}
    
//}
}


?>


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
                      <label for="françaisAA">Français</label>
                      <input type="text" name="françaisAA" value="<?php echo $_SESSION['nom']; ?>" >
                    </div>
                    <div class="inputbox col-3">
                      <label for="anglaisAA">Anglais</label>
                      <input type="text" name="anglaisAA" value="<?php echo $_SESSION['prenom'];    ?>" >
                    </div>
                    <div class="inputbox col-3">
                      <label for="mathsAA">Mathématiques</label>
                      <input type="text" name="mathsAA" value="<?php echo $_SESSION['nationalite'];    ?>">
                    </div>
                  </div>
                  
                  <h3>Notes BAC</h3>
                  <div class="row">
                    <div class="inputbox col-3">
                      <label for="françaisNB">Français</label>
                      <input type="text" name="françaisNB" >
                    </div>
                    <div class="inputbox col-3">
                      <label for="anglaisNB">Anglais</label>
                      <input type="text" name="anglaisNB" >
                    </div>
                    <div class="inputbox col-3">
                      <label for="mathsNB">Mathématiques</label>
                      <input type="text" name="mathsNB" >
                    </div>
                  </div>
                  <h3>Moyenne generale annuelle</h3>
                  <div class="row">
                    <div class="inputbox col-3">
                      <label for="françaisMGA">Français</label>
                      <input type="text" name="françaisMGA" >
                    </div>
                    <div class="inputbox col-3">
                      <label for="anglaisMGA">Anglais</label>
                      <input type="text" name="anglaisMGA" >
                    </div>
                    <div class="inputbox col-3">
                      <label for="mathsMGA">Mathématiques</label>
                      <input type="text" name="mathsMGA" >
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