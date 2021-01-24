<?php
const DATAFILE = 'includes/inscriptions.csv';
function tsar($note) {
    $result = '';
    for ($i = 1;$i <= $note;$i++){
      $result.='<i class="fas fa-star"></i>';
    }
    return($result);
}
function ajout($nom, $prenom, $email, $tel, $text) {
  $datetime = date("Y-m-d H:i:s");
  // Création d'une tableau avec les données
  $data = [$datetime, $nom, $prenom, $email, $tel, $text];
  // Ouverture du fichier en mode ajout
  $file = fopen(DATAFILE, 'a');
  // Écriture d'une ligne dans le fichier CSV
  fputcsv($file, $data);
  // Fermeture du fichier
  fclose($file);
}
function securisation($champ) {
  // Supprimer les espaces autour de la chaîne de caractères
  $champ = trim($champ);
  $champ = strip_tags($champ);
  $champ = htmlspecialchars($champ);
  return $champ;
}
?>