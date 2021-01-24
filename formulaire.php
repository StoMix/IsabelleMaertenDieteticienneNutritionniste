<?php
require ('Includes/functions.php');
$message = '';
if (!empty($_POST)) {
    $nom = securisation($_POST ["nom"]);
    $prenom = securisation($_POST ["prenom"]);
    $email  = securisation($_POST ["email"]);
    $tel  = securisation($_POST ["tel"]);
    $text  = securisation($_POST ["text"]);
    echo'<p>Nom = '.$nom.' ,prénom = '.$prenom.', email= '.$email.'</p>';
    $nom = mb_strtoupper($nom);
    $prenom = ucfirst($prenom);
    $email = mb_strtolower($email);
    if($nom != '' && $prenom != ''&& $email != '' && $tel != '' && $text != '') {
       ajout($nom, $prenom, $email, $tel, $text);
    }
else {
    $message = 'Veuillez entrer tous les champs obligatoires';
    }
}
?>
 
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les formulaires d'inscription</title>
    <link rel="stylesheet" href="mecontacter.css">
    <link rel="stylesheet" href="navstyle.css">
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans+Semi+Condensed:wght@200;500&display=swap" rel="stylesheet">
 
</head>
<body>
<header>
        <nav>
            <div><a href="index.php"><img src="img/obtion.png" alt="logo" width="450" height="150" class="logo"></a></div>
         <div><a href="index.php"> Accueil</a></div>
         <div><a href="mesmethodes.php"> Mon approche</a></div>
         <div><a href="https://forms.gle/nPhw4rViK9bU2sdp9" target="_blank"> Où en êtes-vous ?</a></div>
         <div><a href="tarifs.php">Tarifs</a></div>
         <div><a href="formulaire.php"> Prise de rendez-vous</a></div>
         </nav>
    </header>
<img src="img/fondform.png" alt="fondform" width="100%" height="500" class="hautdepagefraise">
<main>
<?php
    if ($message != '') {
        echo '<p class="message">'.$message.'</p>';
    }
?>
<div class="formulaire">
    <form action="formulaire.php" method="post" class="contact"> 
    <fieldset>
        <legend>Formulaire de contact</legend>
        <br>
        <div class="formulaire">
        <div class="form-row">
        <div><label for="nom">Nom *</label></div>
        <div><input type="text" name="nom"  required></div>
</div>
       <div class="form-row">
       <div><label for="prenom">Prenom *</label></div>
            <div> <input type="text" name="prenom" required></div>
</div>

       <div class="form-row">
       <div><label for="email">Email *</label></div>
       <div><input type="email" name="email" required></div>
</div>
<div class="form-row">
       <div><label for="tel">Numéro de téléphone *</label></div>
       <div><input type=tel name="tel" required></div>
</div>
</div>
<br>

<div class="form-row">
       <div><label for="text">Message *</label></div>
       <div><textarea name="text" cols="37" rows="7" required="" style="margin: 0px; width: 679px; height: 198px;"></textarea></div>
</div>
        <button type="submit"><a href="index.php" onclick="alert('Message envoyé')" class="Nocolor">Envoyer</a></button>
    </fieldset>
</form>
</div>



<form action="formulaire.php" method="post" class="adresse">
<fieldset>
<legend class="contact">Adresse</legend>
<p>
<span class="green">TELEPHONE : <a href="tel:+33619189773">06 19 18 97 73</a></span><br>
<span class="green">MAIL : <a href="mailto:isab.maerten@gmail.com">isab.maerten@gmail.com</a></span><br>
<h3>Cabinet de Lille :</h3>
<ul>
  <li>117 avenue de Dunkerque</li>  
  <li> 59000 Lille</li> 
  <li> 4<sup>ème</sup> étage</li> 
  <li> Métro Ligne 2 arret bois blanc</li> 
</ul>
</p>
<div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
		<div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div><script>(function () {
        var setting = {"height":403,"width":700,"zoom":18,"queryString":"117 Avenue de Dunkerque, Lille, France","place_id":"ChIJpxMHxGbVwkcRVkW0_5rUI2c","satellite":false,"centerCoord":[50.634179597471544,3.0306568578583315],"cid":"0x6723d49affb44556","lang":"fr","cityUrl":"/france/lille-18116","cityAnchorText":"Carte de Lille, Nord-Pas-de-Calais, France","id":"map-9cd199b9cc5410cd3b1ad21cab2e54d3","embed_id":"347476"};
        var d = document;
        var s = d.createElement('script');
        s.src = 'https://1map.com/js/script-for-user.js?embed_id=347476';
        s.async = true;
        s.onload = function (e) {
          window.OneMap.initMap(setting)
        };
        var to = d.getElementsByTagName('script')[0];
        to.parentNode.insertBefore(s, to);
      })();</script><a href="https://1map.com/fr/map-embed">1 Map</a></div>
</fieldset>
</form>
</main>
<img src="img/bulle.png" alt="bulle" width="400" class="bulle" onmouseover="this.src='img/bullehover.png'" onmouseout="this.src='img/bulle.png'" class="bulle">
<footer>
<a href="#Top" class="bouttonremonter"><img src="img/remonter.png" alt="remonter" height="35" width="35" class="remonter"></a>
<p>&copy; 2021 - Isabelle Maerten - Diététicienne-Nutritionniste (59000) - Lille <br>
<br>
<a href="tel:+33619189773" class="footera">06.19.18.97.73</a> <br>
<br>
<a href="mailto:isab.maerten@gmail.com" class="footera">isab.maerten@gmail.com</a> <br>
</p>
<div class="signature"><p>Fait par: Maerten Paul, Nenonene Théo, Cazier Esteban</p></div>
</footer>
</body>
</html>