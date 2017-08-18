<!-- Setup post data -->
<?php
$id = get_field("vs_fps_foot");
$section_slug = $id[0]->post_name;
$section_ID = $id[0]->ID;   
$post_data = get_post($section_ID);
global $post;
$post = $post_data;
setup_postdata($post);
?>


<!-- footeris -->
<footer>
    <div class="footer">
         <?php if( have_rows('vs_sl_social_links', 'option') ): ?>
        <div class="soc">
                <?php while ( have_rows('vs_sl_social_links', 'option') ) : the_row(); ?>
                <a href="<?php  the_sub_field('vs_sl_sl_url', 'option'); ?>"><div class="icon-<?php  the_sub_field('vs_sl_sl_icon', 'option'); ?>"></div></a>
                <?php endwhile; ?>
       </div>
       <?php endif; ?>
        <?php the_content(); ?> 
    </div>
</footer>

<!-- Reset post data -->
<?php
wp_reset_postdata();
?>