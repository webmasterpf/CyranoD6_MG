<?php
global $theme_path;
include ($theme_path.'/includes/inc_header.php');
?>

 <!-- ______________________ CONTENU _______________________ -->
    
	<div id="mainPage">
	
      <div id="contentHome">
   

          <?php if ($content_top): ?>
            <div id="content-top">
              <?php print $content_top; ?>
            </div> <!-- /#content-top -->
          <?php endif; ?>

          <?php if ($breadcrumb || $title || $mission || $messages || $help || $tabs): ?>
            <div id="content-header">

              

              <?php if ($title): ?>
                <h1 class="title"><?php print $title; ?></h1>
              <?php endif; ?>

              <?php if ($mission): ?>
                <div id="mission"><?php print $mission; ?></div>
              <?php endif; ?>

              <?php print $messages; ?>

              <?php print $help; ?> 

              <?php if ($tabs): ?>
                <div class="tabs"><?php print $tabs; ?></div>
              <?php endif; ?>

            </div> <!-- /#content-header -->
          <?php endif; ?>

          <div id="content-area">
            <?php print $content; ?>
          </div> <!-- /#content-area -->

          <?php print $feed_icons; ?>

         

          </div><!-- /content-inner /content -->
		  
		  
	  
	  
	   <!-- ______________________ EDITO DROITE _______________________ -->
      
	  
	  <div id="contentEdito">
       
		
		  <?php if ($edito): ?>
        <div id="textEdito">
		
          <?php print $edito; ?>
        </div><!-- /#textEdito -->
        <?php endif; ?>
		
      </div><!-- /#contentEdito -->
	  
   
	<br clear="all"/>
	
    <?php if ($content_bottom_home): ?>
    <div id="content-bottom-home">
      <?php print $content_bottom_home; ?>
    </div><!-- /#content-bottom -->
    <?php endif; ?>
	 <!-- ______________________ CONTENU BAS _______________________ -->
<?php if ($content_bottom): ?>
            <div id="content-bottom">
              <?php print $content_bottom; ?>
            </div><!-- /#content-bottom -->
          <?php endif; ?>
	
	 </div> <!-- /mainPage -->
        <?php
global $theme_path;
include ($theme_path.'/includes/inc_footer.php');
?>