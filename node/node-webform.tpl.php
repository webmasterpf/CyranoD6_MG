<?php
/* 
 * Permet d'avoir un template spécial pour le webform
 * NODE-WEBFORM.TPL GENERIK si besoin possible faire theme pour webform selon node-webform-NID.tpl.php
 */

?>
<!-- NODE-WEBFORM.TPL GENERIK -->
<div class="node<?php if ($sticky) { print " sticky"; } ?><?php if (!$status) { print " node-unpublished"; } ?>">
   
     <!--______________COLONNE GAUCHE 1________________ -->
  
<div id="webform_col_G1">
     <?php if ($title): /*insertion du titre de la page et style differencié*/?>
     <h1 class="titre_pl"><?php print $title; ?></h1>

    <?php endif; ?>
      <br clear="all"/>
       <!-- Deco page-->
       
    <?php  print $node->field_image_deco_lycee[0]['view'] /*Image deco page lycee*/ ?>
</div>
<!--______________COLONNE GAUCHE 2________________ -->
<div id="webform_col_G2">
     <?php if ($submitted) { ?>
    <span class="submitted"><?php print $submitted?></span>
  <?php }; ?>

 

  <div class="content">
    <table>
    <tr>
    <td><?php print $node->content['body']['#value']; ?></td>
    </tr>
    <tr>
    <td><?php print $node->content['webform']['#value']; ?></td>
    </tr>
    </table>
  </div>

    <?php if ($links): ?>
    <div class="links">&raquo; <?php print $links; ?></div>
  <?php endif; ?>

     <?php if ($terms) { ?>
    <span class="taxonomy"><?php print $terms?></span>
  <?php }; ?>

</div>
<!--______________COLONNE GAUCHE 3________________ -->

<div id="webform_col_G3">
     <?php print $picture; ?>



    <div class="content">

        <br clear="all"/>
           <?php if ($node->field_vue_actus_lycee[0]['view']): ?>
        <div id="bloc-actu-lycee">
           <?php  print $node->field_vue_actus_lycee[0]['view'] /*Vue actus du lycée*/ ?>
        </div>
           <?php endif;?>
    </div>

    <?php if ($terms): ?>
      <div class="taxonomy"><?php //print $terms; ?></div>
    <?php endif;?>

   

</div>


   
  <?php if ($picture) { print $picture; }?>

  <?php if ($page == 0) { ?>
    <?php if ($title) { ?>
      <h2 class="title"><a href="<?php print $node_url?>"><?php print $title?></a></h2>
    <?php }; ?>
  <?php }; ?>

<div class="clear-block clear"></div>

</div><!-- /node -->