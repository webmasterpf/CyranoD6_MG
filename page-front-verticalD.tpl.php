<?php
global $theme_path;
include ($theme_path.'/includes/inc_header.php');
?>
<!-- ______________________ LAYOUT HOMEPAGE VERTICAL D_______________________ -->
 <!-- ______________________ CONTENU _______________________ -->

	<div id="mainPage">


          <?php if ($content_top): ?>
            <div id="content-top">
              <?php print $content_top; ?>
            </div> <!-- /#content-top -->
          <?php endif; ?>

            <!-- ______________________ PARTIE GAUCHE _______________________ -->

	<div id="HPGauche">

        <?php if ($PartieGauche1): ?>
     <div id="HPGauche1"><?php print $PartieGauche1; ?></div>
        <?php endif; ?>

     <?php if ($PartieGauche2): ?>
     <div id="HPGauche2"><?php print $PartieGauche2; ?></div>
        <?php endif; ?>

     <?php if ($PartieGauche3): ?>
     <div id="HPGauche3"><?php print $PartieGauche3; ?></div>
        <?php endif; ?>

   </div><!-- /Partie Gauche -->

   <!-- ______________________ ZONE DIAPO DROITE_______________________ -->

              <?php if ($DiapoHP): ?>
                 <div id="HPDiapo"><?php print $DiapoHP; ?></div>
              <?php endif; ?>





	<br clear="all"/>
	<!-- ______________________ CONTENU BAS _______________________ -->
    <?php if ($content_bottom_home): ?>
    <div id="content-bottom-home">
      <?php print $content_bottom_home; ?>
        <?php //print $feed_icons; ?>
         <?php endif; ?>


    </div><!-- /#content-bottom -->



	 </div> <!-- /mainPage -->
    <?php
global $theme_path;
include ($theme_path.'/includes/inc_footer.php');
?>
