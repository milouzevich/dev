<?php
header('Content-Type: application/x-latex');
header('Content-Disposition: attachment; filename="test_latex.tex"');
?>
\documentclass{article}
\begin{document}
nom : <?php echo $_POST['nom']; ?>\newline
prenom : <?php echo $_POST['prenom']; ?>\newline
mdp : <?php echo $_POST['mdp']; ?>\newline
\end{document}
