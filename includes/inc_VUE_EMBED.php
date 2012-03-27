<?php
/* http://drupal.org/node/1463822
 * Inclus la vue , ajoute une differenciation de variable
 * Si vide affiche le texte vide de la vue 
 * $viewname_fl3 = 'NOM_De_LA_VUE';
 * $viewdisplay_fl3 = $view->set_display('DISPLAY_CHOISI');
 * Si besoin d'argument, utiliser la ligne dédiée $args et l'ajouter comme ceci $view->preview($viewdisplay_fl3, $args)
 * Modifer les classes , le texte vide selon besoin
 * Le texte vide peut être réglé dans Views UI directment avec $emptyTextVue
 */

?>


    <?php

$viewname_fl3 = 'Formations_lycee';
$view = views_get_view ($viewname_fl3);
$viewdisplay_fl3 = $view->set_display('block_3');
//$args_ldj1 = $view->set_arguments(array($node->nid));

$emptyTextVue = $view->display_handler->get_option('empty');
$emptyText = $view->display_handler->set_option('empty','<div class="ma-classe">TEXTE VIDE A MODIFIER.</div>');

//Exécution de le vue
$view->pre_execute();
$view->execute();

if (!empty($view->result)) {
  // S'il y a un resultat on récupère le titre (ajoute tag h3, et le contenu)
  $output = '<div id="MODIFIER"><h3 class="classe-h3">'.$view->get_title().'</h3>' .$view->preview($viewdisplay_fl3).'</div>';

  //Affiche la vue si contenu
print $output;
}
//sinon affiche texte vide
elseif (empty($view->result)) {
    //Formatage du texte vide,ajout du titre de la vue
     $outputEmpty = '<div id="MODIFIER"><h3 class="classe-h3">'.$view->get_title().'</h3>'.$emptyText.'</div>';
     $outputEmpty = '<div id="MODIFIER"><h3 class="classe-h3">'.$view->get_title().'</h3>'.$emptyTextVue.'</div>';
    // drupal_set_message('$EmptyTextVue : '.$emptyTextVue.'status');
     //Affichage du texte vide
  print $outputEmpty;
}


?>
