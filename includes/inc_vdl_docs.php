<?php
/*
 * Inclus la vue , ajoute une differenciation de variable
 * Si vide affiche le texte vide de la vue 
 * $viewname_fl3 = 'NOM_De_LA_VUE';
 * $viewdisplay_fl3 = $view->set_display('DISPLAY_CHOISI');
 * Si besoin d'argument, utiliser la ligne dédiée $args et l'ajouter comme ceci $view->preview($viewdisplay_fl3, $args)
 */

?>


    <?php

$viewname_ld3 = 'Liste_docs';
$view = views_get_view ($viewname_ld3);
$viewdisplay_ld3 = $view->set_display('block_3');
$args_ld3 = $view->set_arguments(array($node->nid));

//$emptyTextVue = $view->set_display('block_2')->display_options['empty'];
$emptyText = $view->display_handler->set_option('empty','<div class="ma-classe">Pas de documents</div>');

//Exécution de le vue
$view->pre_execute();
$view->execute();

if (!empty($view->result)) {
  // S'il y a un resultat on récupère le titre (ajoute tag h3, et le contenu)
  $output = '<div id="vdl-docs"><h3 class="classe-h3">'.$view->get_title().'</h3>' .$view->preview($viewdisplay_ld3,$args_ld3).'</div>';

  //Affiche la vue si contenu
print $output;
}
//sinon affiche texte vide
elseif (empty($view->result)) {
    //Formatage du texte vide,ajout du titre de la vue
     $outputEmpty = '<div id="vdl-docs"><h3 class="titre">'.$view->get_title().'</h3>'.$emptyText.'</div>';
    // drupal_set_message('$EmptyTextVue : '.$emptyTextVue,'status');
     //Affichage du texte vide
  print $outputEmpty;
}
?>
