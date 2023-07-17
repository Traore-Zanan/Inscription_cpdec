

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creez votre compte</title>
    <link rel="stylesheet" href="./style/css/styl.css">
    <link rel="stylesheet" href="style/bootstrap/bootstrap.min.css">
  </head>
<body class="body" >
   
  <img src="asset/logo/logoInphb.gif" alt="Logo INPHB">


  <section>
    <div class="form-box">
      <div class="form-vaue">
        <form action=""  method="POST">
          <h2>IDENTIFICATION</h2>
          <div class="inputbox">
            <label for="nom">Nom</label>
            <input type="text" name="nom">
          </div>
          <div class="inputbox">
            <label for="prenom">Prenom</label>
            <input type="text" name="prenom" >
          </div>
          <div class="inputbox">
            <label for="date">Date de naissance</label>
            <input type="date" name="date" >
          </div>
          <div class="inputbox">
            <label for="lieu">Lieu de naissance</label>
            <input type="text"  name="lieu">
          </div>
          <div class="inputbox">
            <label for="nationalite">Nationalite</label>
            <input type="text" name="nationalite" >
          </div>
          <div class="inputbox">
            <label for="contact">Contact</label>
            <input type="text" name="contact">
          </div>
          <div class="inputbox">
            <label for="email">Email</label>
            <input type="email" name="email" >
          </div>
          <div class="inputbox">
            <label for="etablissement">Etablissement</label>
            <input type="text" name="etablissement" >
          </div>
          <div class="inputbox">
            <label for="serie">Série du BAC</label>
            <select name="serie">
                <option >A1</option>
                <option>A2</option>
                <option>C</option>
                <option>D</option>
            </select>
          </div>
          <div class="inputbox">
            <label for="nomParent">Nom parent</label>
            <input type="text" name="nomParent" >
          </div>
          <div class="inputbox">
            <label for="prenomParent">Prenom parent</label>
            <input type="text" name="prenomParent" >
          </div>
          <div class="inputbox">
            <label for="contactParent">Contact parent</label>
            <input type="text" name="contactParent" >
          </div>
          <div class="inputbox">
            <label for="emailParent">Email parent</label>
            <input type="email" name="emailParent" >
          </div>
          <div class="inputbox">
            <label for="adresse">Adresse</label>
            <input type="text" name="adresse" >
          </div>
          <button name="suivant" class="connexion">Suivant</button>
          <?php
          if(isset($_POST["suivant"])){
            extract($_POST);
            if(!empty($nom) && !empty($prenom) && !empty($date) && !empty($lieu) && !empty($nationalite) && !empty($prenom) && !empty($contact) && !empty($email) && !empty($etablissement) && !empty($serie) && !empty($nomParent) && !empty($prenomParent) && !empty($contactParent) && !empty($adresse)){       
                  session_start();
                  $_SESSION['nom'] =$nom;
                  $_SESSION['prenom'] =$prenom;
                  $_SESSION['date'] =$date;
                  $_SESSION['lieu'] =$lieu;
                  $_SESSION['nationalite'] =$nationalite;
                  $_SESSION['contact'] =$contact;
                  $_SESSION['email'] =$email;
                  $_SESSION['etablissement'] =$etablissement;
                  $_SESSION['serie'] =$serie;
                  $_SESSION['nomParent'] =$nomParent;
                  $_SESSION['prenomParent'] =$prenomParent;
                  $_SESSION['contactParent'] =$contactParent;
                  $_SESSION['emailParent'] =$emailParent;
                  $_SESSION['adresse'] =$adresse;
                  
                  header("location:releveNote.php");
                    }
                  }
                ?>
        </form>
      </div>
    </div>
  </section>
</body>
</html>