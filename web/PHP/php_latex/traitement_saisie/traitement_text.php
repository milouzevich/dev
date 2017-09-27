<?php
session_start();
include('modification_balise.php');
echo "Page traitement OK !<br>";
  $saisie = $_POST['saisie'];
  echo $saisie."<br>";
  test();
  $saisie_modify =  modify_for_latex($saisie);
  $_SESSION['saisie_modify'] = $saisie_modify;
  echo $saisie_modify;

  echo "<meta http-equiv=\"refresh\" content=\"10;url=latex.php\">"; // content sert à la temporisation du rafraichisement de la page.
  // Lien utilisé : formation.upyupy.fr/html-xhtml/balise-meta/
?>
