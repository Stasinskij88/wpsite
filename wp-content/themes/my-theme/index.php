<?php get_header(); ?>

 <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="page-header"> 
                <?php if(wp_title('', false))
                { wp_title('', true); 
                }else{ echo 'Останні публікації'; 
                } 
                ?> 
                </h1>
                
               
               <?php if ( have_posts() ) : ?> 
               <?php while ( have_posts() ) : the_post(); ?> 
               <h2>
                <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?></a> 
                </h2> 
                <p class="lead"> by 
                <?php the_author_link(); ?> 
                </p> 
                <p> 
                <span class="glyphicon glyphicon-time"></span>&nbsp; 
                Posted on 
                <?php the_time( get_option( 'date_format' ) ); ?>
                &nbsp;&nbsp; 
                <span class="glyphicon glyphicon-folder-open"></span>&nbsp;&nbsp; 
                <?php the_category(', '); ?> 
                </p> <hr> <img class="img-responsive" 
                src="http://placehold.it/900x300" 
                alt=""> <hr> <?php the_excerpt(); ?> 
                <a class="btn btn-primary" 
                href="<?php the_permalink(); ?>"> 
                Read More 
                <span class="glyphicon glyphicon-chevron-right"></span> 
                </a> 
                <hr>
                
                <!-- Пагінація -->
               <?php endwhile; ?> 
               <?php endif; ?>
               <?php if ( $wp_query->max_num_pages > 1 ) : ?> 
               <ul class="pager"> 
                <li class="previous"><?php next_posts_link('Older'); ?></li> 
                <li class="next"><?php previous_posts_link('Newer'); ?></li> 
                </ul> <?php endif; ?>
                
                
                <!-- Pager -->
                <ul class="pager">
                    <li class="previous">
                        <a href="#">&larr; Older</a>
                    </li>
                    <li class="next">
                        <a href="#">Newer &rarr;</a>
                    </li>
                </ul>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Blog Search</h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Side Widget Well</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>

            </div>
<?php get_footer(); ?>
