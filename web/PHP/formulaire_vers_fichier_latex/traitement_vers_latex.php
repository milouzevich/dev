<?php
header('Content-Type: application/x-latex');
header('Content-Disposition: attachment; filename="test_latex.tex"');
?>
<?php
// les 2 headers permettent de créer le futur fichier .tex
// le 2ème header demandera l'enregistrement du fichier dans le système de fichier.

// récupération des données provenant du formulaire
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$mdp = $_POST['mdp'];
$r="\n";

// Mise en forme du fichier latex à venir

echo '\documentclass{report}'.$r;
echo '\begin{document}'.$r;
echo 'Les données provenant du formulaire sont les suivant\newline'.$r;
echo 'nom :'.$nom.'\newline prenom : '.$prenom.'\newline mdp : '.$mdp.''.$r;
echo '\end{document}'.$r;

// une fois enregistré, on peut ouvrir le fichier avec texstudio faire des éventuelles modifications.
// Il ne reste plus qu'à compiler le fichier .tex pour obtenir un pdf.


?>
