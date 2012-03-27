<?php global $theme_path; include ($theme_path.'/includes/inc_header.php'); ?>
<!-- ______________________ LAYOUT HOMEPAGE VERTICAL G_______________________ -->
 <!-- ______________________ CONTENU _______________________ -->
    
	<div id="mainPage">
	 

          <?php if ($content_top): ?>
            <div id="content-top">
              <?php print $content_top; ?>
            </div> <!-- /#content-top -->
          <?php endif; ?>

   <!-- ______________________ ZONE DIAPO _______________________ -->
			
              <?php if ($DiapoHP): ?>
                 <div id="HPDiapo"><?php print $DiapoHP; ?></div>
              <?php endif; ?>
              
            
         
		 
<!-- ______________________ PARTIE DROITE _______________________ -->
      
	<div id="HPDroite">
	 
        <?php if ($PartieDroite1): ?>
     <div id="HPDroite1"><?php print $PartieDroite1; ?></div>
        <?php endif; ?>
		
     <?php if ($PartieDroite2): ?>
     <div id="HPDroite2"><?php print $PartieDroite2; ?></div>
        <?php endif; ?>

     <?php if ($PartieDroite3): ?>
     <div id="HPDroite3"><?php print $PartieDroite3; ?></div>
        <?php endif; ?>
	  
   </div><!-- /Partie Droite -->
	<br clear="all"/>
	<!-- ______________________ CONTENU BAS _______________________ -->
    <?php if ($content_bottom_home): ?>
    <div id="content-bottom-home">
      <?php print $content_bottom_home; ?>
        <?php print $feed_icons; ?>
         <?php endif; ?>

         <!-- ______________________ CONTENU BAS _______________________ -->
<?php if ($content_bottom): ?>
            <div id="content-bottom">
              <?php print $content_bottom; ?>
            </div><!-- /#content-bottom -->
          <?php endif; ?>
         
    </div><!-- /#content-bottom -->
   
	
	
	 </div> <!-- /mainPage -->
     <?php
global $theme_path;
include ($theme_path.'/includes/inc_footer.php');
?>
