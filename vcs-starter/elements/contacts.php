<!-- Setup post data -->
<?php
$id = get_field("vs_fps_contact_us");
$section_slug = $id[0]->post_name;
$section_ID = $id[0]->ID;   
$post_data = get_post($section_ID);
global $post;
$post = $post_data;
setup_postdata($post);
?>


<!-- kontaktu forma  -->
<div id="contact" class="contact"> 
    <div class="contactinner">
        <h2><?php the_title();?></h2>
         <?php the_content(); ?>

        <?php $form = get_field('vp_cp_form');
        $form_ID = $form->ID;
        $form_title = $form->post_title;        
        ?>        
        <?php echo do_shortcode("[contact-form-7 id='$form_ID' title='$form_title']"); ?>
    </div>
</div>

<!-- Reset post data -->
<?php
wp_reset_postdata();
?>
