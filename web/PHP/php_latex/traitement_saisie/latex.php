<?php
//echo "fichier Latex";
header('Content-Type: application/x-latex');
header('Content-Disposition: attachment; filename="test_latex.tex"');
session_start();
$retour = $_SESSION['saisie_modify'];
?>
\documentclass{article}
\begin{document}
test sur le traitement des saisies entre html php et latex \newline
<?php echo $retour; ?>\newline
\end{document}
