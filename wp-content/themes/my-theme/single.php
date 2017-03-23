<?php get_header(); ?> 
<div class="col-md-8"> 
<h1 class="page-header"> 
<?php wp_title('', true); ?> </h1> 
<?php if ( have_posts() ) : ?> 
<?php while ( have_posts() ) : the_post(); ?> 
<h2> <a href="<?php the_permalink(); ?>">
<?php the_title(); ?></a> </h2> 
<p class="lead"> by <?php the_author_link(); ?> 
</p> 
<p> 
<span class="glyphicon glyphicon-time"></span> 
Posted on <?php the_time( get_option( 'date_format' ) ); ?>&nbsp;&nbsp; 
<span class="glyphicon glyphicon-folder-open"></span>&nbsp;&nbsp;
<?php the_category(', '); ?>&nbsp;&nbsp; 
</p> 
<hr> 
<img class="img-responsive" src="http://placehold.it/900x300" alt=""> 
<hr> 
<?php the_excerpt(); ?> 
<a class="btn btn-primary" 
href="<?php the_permalink(); ?>"> Read More <span class="glyphicon glyphicon-chevron-right"></span> 
</a> <hr> <?php endwhile; ?> 
<?php endif; ?> 
<?php comments_template( '', true ); ?> 
</div> <?php get_footer(); ?>