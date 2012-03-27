<!--______________NODE TPL POUR PAGE.TPL BASIQUE________________ -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
  <div class="node-inner">
      <!--______________COLONNE 1________________ -->
      <div id="colonne-1" class="col1_layout_215_520_235">
    <?php if (!$page): ?>
      <h2 class="title"><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
    <?php endif; ?>
      
      <?php
              global $theme_path;
              include ($theme_path.'/includes/inc_region_col_G1.php');
              ?>
</div>
      
      <!--______________COLONNE 2________________ -->
      <div id="colonne-2" class="col2_layout_215_520_235">
    <?php print $picture; ?>

    <?php if ($submitted): ?>
      <span class="submitted"><?php print $submitted; ?></span>
    <?php endif; ?>

    <div class="content">
      <?php print $content; ?>
    </div>
      <?php
              global $theme_path;
              include ($theme_path.'/includes/inc_region_col_G2.php');
              ?>
      
</div>
      <!--______________COLONNE 3________________ -->
      <div id="colonne-3" class="col3_layout_215_520_235">
          <?php
              global $theme_path;
              include ($theme_path.'/includes/inc_region_col_G3.php');
              ?>
          
      </div>
    <?php if ($terms): ?>
      <div class="taxonomy"><?php print $terms; ?></div>
    <?php endif;?>

    <?php if ($links): ?> 
      <div class="links"> <?php print $links; ?></div>
    <?php endif; ?>

  </div> <!-- /node-inner -->
</div> <!-- /node-->