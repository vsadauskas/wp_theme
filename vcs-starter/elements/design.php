<!-- Setup post data -->
<?php
$id = get_field("vs_fps_stylish_design");
$section_slug = $id[0]->post_name;
$section_ID = $id[0]->ID;   
$post_data = get_post($section_ID);
global $post;
$post = $post_data;
setup_postdata($post);
$pic = get_the_post_thumbnail_url($section_ID); #išsitraukiam thumbnaila
#var_dump($pic); exit;
?>

<!-- stilingas dizainas -->
<div class="design">
   <?php if($pic):?>
    <style>
        .design{
            background-image: url(<?php echo $pic ?>);
        }
    </style>
    <?php endif; ?>
    <div class="designinner">
        <h2><?php the_title();?></h2>
        <?php the_content();
        $field = get_field('vp_ds_buton_text'); 
                if ($field):
                ?>
        <a href="#" class="down2" ><?php echo($field); ?></a>
            <?php endif; ?>
    </div>
</div>

<!-- Reset post data -->
<?php
wp_reset_postdata();
?>