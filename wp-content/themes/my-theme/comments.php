<!--Виведення кількості коментарів-->
<?php if ( have_comments() ) : 
?> 
<h4> <?php printf( _n( 'One Comment', '%1$s Comments', 
get_comments_number() ), 
number_format_i18n( get_comments_number() ) ); 
?> 
</h4> 
<?php else: 
?> 
<h4>No comments
</h4> 
<?php endif; 
?>
<!--Виведення списку коментарів-->
<?php foreach ($comments as $comment) { ?> 
    <div class="row"> 
        <div class="col-xs-12"> 
            <div class="media comment-<?php comment_ID(); ?>"> 
                <div class="media-left"> 
                    <a href="<?php comment_author_url(); ?>"> 
                        <?php echo get_avatar( $comment->comment_author_email, $size = '40'); ?> 
                    </a> 
                </div> 
                <div class="media-body"> 
                    <span class="comment-author"><a href="<?php comment_author_url(); ?>"> 
                    <?php comment_author(); ?> </a></span> 
                    <span class="comment-date">on <?php comment_date(); ?></span> 
                    <p><?php echo $comment->comment_content; ?>
                    </p> 
                </div> 
            </div> 
        </div> 
    </div> 
<?php } ?>

<?php if ( ! comments_open() ) : ?> 
<h4>Comments are closed.</h4> 
<?php else: ?>
<div class="row"> 
    <div class="col-xs-12"> 
        <h4>Leave a Comment</h4> 
        <a name="comments"></a> 
        <form action="<?php bloginfo('url'); ?>/wp-comments-post.php" method="post" id="commentform"> 
            <input type='hidden' name='comment_post_ID' value='<?php echo $post->ID; ?>' id='comment_post_ID' /> 
                <div class="form-group"> <label>Name / Alias (required)</label> 
            <input type="text" value="Name" name="author" class="form-control" 
            onfocus="if(this.value == this.defaultValue) this.value = ''"> 
                </div> 
            <div class="form-group"> 
                <label>Email Address (required, not shown)</label> 
                <input type="text" value="Email" name="email" class="form-control" onfocus="if(this.value == this.defaultValue) this.value = ''"> 
            </div> 
            <div class="form-group"> <label>Website (optional)</label> 
                <input type="text" value="" name="url" class="form-control"> 
            </div> 
            <div class="form-group"> 
                <textarea rows="7" cols="60" name="comment" class="form-control"></textarea> 
            </div> 
            <div class="form-group"> 
                <input type="submit" class="btn btn-primary" value="Add Your Comment" /> 
            </div> 
        </form> 
            </div> 
            </div>
<?php endif; ?>