<?php
$id = get_field("vs_fps_picture_section");
$section_slug = $id[0]->post_name;
$section_ID = $id[0]->ID;   
$post_data = get_post($section_ID);
global $post;
$post = $post_data;
setup_postdata($post);

$pic = get_the_post_thumbnail_url($section_ID); #išsitraukiam thumbnaila
?>


<!-- paveiksliuku sekcija -->
<div class="pics">
    <div class="picsinner">
        <div class="p1">
            <h6 class="p6"><?php the_title(); ?></h6>
            <?php the_content(); ?>
        </div>
        <div class="p2">
            <?php if($pic): ?>
            <img src="<?php echo($pic);  ?>">
            <?php endif; ?>
        </div>
    </div>
</div>

<?php
wp_reset_postdata();
?>