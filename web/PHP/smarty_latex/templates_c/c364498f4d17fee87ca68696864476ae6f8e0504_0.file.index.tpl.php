<?php
/* Smarty version 3.1.30, created on 2017-09-22 16:07:39
  from "/var/www/html/02-smarty_latex/templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59c5192b985b33_00039839',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c364498f4d17fee87ca68696864476ae6f8e0504' => 
    array (
      0 => '/var/www/html/02-smarty_latex/templates/index.tpl',
      1 => 1506088819,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59c5192b985b33_00039839 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
  <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style/style.css">
  <head>
  <body>
    <h1> Formulaire générateur de fichier latex</h1>
    <form action="traitement_vers_latex.php" method="post" >
      <label>Nom    :</label><input type="text" name="nom"><br>
      <label>Prénom :</label><input type="text" name="prenom"><br>
      <label>mdp    :</label><input type="text" name="mdp"><br>
      <input type="submit" value="valider"/>
    </form>
  </body>
</html>
<?php }
}
