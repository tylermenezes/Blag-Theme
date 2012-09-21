<?php
/*
Template Name: Links
*/
?>

<?php get_header(); ?>
<div id="container">
<div id="entries">
<h1 style="display: block; font-size: 3.5em;"><?php the_title(); ?></h1>
<div class="post">
 <ul>
		 	<?php get_links_list(); ?>		
		 	</ul>
</div><!--end posts--> 
</div><!--end entries-->
<?php get_sidebar(); ?>
</div><!-- end container -->
<?php get_footer(); ?>