<h2>single.php</h2>

<?php

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(  );

?>

<h2><?php the_title();?></h2>
<span><?php the_time('d.m.Y');?></span>
<?php the_content()?>

<?php
    }
}

?>