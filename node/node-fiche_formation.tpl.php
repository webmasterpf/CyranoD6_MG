<?php
/* Ce template permet la création d'un layout multicolonne pour le spages de base, en permettant la disposition facile
 * des champs CCK custom, si nécessaires pour une page de base.
*/?>
<!--______________NODE TPL POUR PAGE.TPL CUSTOM________________ -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
    <div class="node-inner">
        <!--______________COLONNE 1________________ -->
        <?php /* choix du layout selon nombre de colonne
         * .col1_layout_200_590_200{} .col1_layout_330_all{} .col1_layout_18_56_25{}
         * .col2_layout_200_590_200{} .col2_layout_330_all{} .col2_layout_18_56_25{}
         * .col3_layout_200_590_200{} .col3_layout_330_all{} .col3_layout_18_56_25{}
         * .col1_layout_215_535_235{} .col2_layout_215_535_235{} .col3_layout_215_535_235{}
         * .col2_layout_490_all{}  .col3_layout_490_all{}
         */?>
        <div id="colonne-2" class="col2_layout_490_all pageficheform_content_col1">
            <?php if ($title): /*copier le titre dans la colonne desirée*/?>
            <h1 class="titre_page"><?php print $title; ?></h1>
            <?php endif; ?>
            
            
              <?php if ($node->field_complement_ficheform[0]['view']): ?>
            <div id="complement-ficheform">
                    <?php  print $node->field_complement_ficheform[0]['view']  ?>
            </div>
            <?php endif;?>
            
             <div class="content">
                 <?php print $my_taxo_ficheform;?>
                 
                <?php   print $node->content['body']['#value'];/*déplacer le contenu dans la colonne désirée*/ ?>
            </div>
            
              
             <?php
              global $theme_path;
              include ($theme_path.'/includes/inc_ficheform_docs.php');
              ?>
            
             <?php
              global $theme_path;
              include ($theme_path.'/includes/inc_region_col_G1.php');
              ?>
        </div>
        <!--______________COLONNE 2________________ -->
         <!-- <pre> <?php //print_r($node); ?> </pre>-->   <!-- listage des variables du $content -->
        <div id="colonne-3" class="col3_layout_490_all pageficheform_content_col2">

            <?php print $picture; ?>

            <?php if ($submitted): ?>
            <span class="submitted"><?php print $submitted; ?></span>
            <?php endif; ?>


       <?php if ($node->field_deco_ficheform[0]['view']): ?>
            <div id="deco-ficheform">
                    <?php  print $node->field_deco_ficheform[0]['view']  ?>
            </div>
            <?php endif;?>


                   <?php if ($node->field_contenu_suite_ficheform[0]['view']): ?>
            <div id="nom-css">
                    <?php  print $node->field_contenu_suite_ficheform[0]['view']  ?>
            </div>
            <?php endif;?>
           

               <!--***********!!!!!!  EXEMPLE DE CHAMP CCK INCLUS AVEC CONDITION !!!!!!!!************ -->
            <?php if ($node->nom_du_champ[0]['view']): ?>
            <div id="nom-css">
                    <?php  print $node->nom_du_champ[0]['view']  ?>
            </div>
            <?php endif;?>
            
                <?php if ($terms): ?>
        <div class="taxonomy taxo-ficheform">Mots cl&eacute;s :<?php print $terms; ?></div>
        <?php endif;?>

        <?php if ($links): ?>
        <div class="links"> <?php //print $links; ?></div>
        <?php endif; ?>
            
        </div>
    

    </div> <!-- /node-inner -->
</div> <!-- /node-->