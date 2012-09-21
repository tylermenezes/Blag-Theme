<?php
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>
<div id="container">
<div id="entries">
<h3>It's All Good</h3>
<h1 style="display:inline; font-size:3.3em;">The Archives</h1>
<h3> Archives by Month</h3>		
  <ul>
    <?php wp_get_archives('type=monthly&show_post_count=1'); ?>
  </ul>
<h3> Archives by Category</h3>	
  <ul>	
 <?php wp_list_cats('sort_column=name&hierarchical=0&show_count=1'); ?>
 </ul>
</div><!--end entries-->
<?php get_sidebar(); ?>

<?php get_footer(); ?>