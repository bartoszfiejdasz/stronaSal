<h2><?php  single_term_title( );?></h2>

<?php

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();

?>

<h3><?php the_title();?></h3>

<span><?php the_author();?></span>
<span><?php the_time('d.m.Y');?></span>


<?php
	}
	
}

?>