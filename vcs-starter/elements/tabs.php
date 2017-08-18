<?php
$id = get_field("vs_fps_tabs_section");
$section_slug = $id[0]->post_name;
$section_ID = $id[0]->ID;   
$post_data = get_post($section_ID);
global $post;
$post = $post_data;
setup_postdata($post);

$pic = get_the_post_thumbnail_url($section_ID); #išsitraukiam thumbnaila
$mygt = get_field("vp_ts_button_text"); #išsitraukiam mygtuko teksta
$tab = get_field('vp_ts_tabs_text');
?>

<!-- tab sekcija -->
<div id="features" class="tabsection">
    <div class="tabinner">
        <div class="tabai">
            <a href="#" class="tab1"><?php echo($tab[0]['vp_ts_tn_tabs_text']) ?></a>
            <a href="#" class="tab2"><?php echo($tab[1]['vp_ts_tn_tabs_text']) ?></a>
            <a href="#" class="tab3"><?php echo($tab[2]['vp_ts_tn_tabs_text']) ?></a>
        </div>
        <div class="ttekstas">
            <h6><?php the_title(); ?></h6>
            <?php the_content(); 
            if($mygt): ?>
            <a href="#" class="mygt"><?php echo $mygt ?></a>
            <?php endif; ?>
        </div>
        <div class="tpav">
        <?php if($pic): ?> 
        <img src="<?php echo $pic ?>">
        <?php endif; ?>
        </div>
    </div>
</div>
<?php
wp_reset_postdata();
?>