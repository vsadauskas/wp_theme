<!-- Setup post data -->
<?php
$id = get_field("vs_fps_why_awesome");
$section_slug = $id[0]->post_name;
$section_ID = $id[0]->ID;   
$post_data = get_post($section_ID);
global $post;
$post = $post_data;
setup_postdata($post);
$duom = get_field('vp_as_reasons');
$ilgis = count($duom);
?>

<!-- why this awesome sekcija -->
<div id="about" class="awesome">
    <div class="awesomeinner">
        <h2><?php the_title(); ?></h2>
       <?php the_content(); 
       
       if ($duom){
       ?>
        <div class="reasons"> 
        <?php for($i=0; $i<$ilgis; $i++){?>
            <div class="reason">
                <span class="icon-<?php echo($duom[$i]['vp_as_reason_icon']); ?>"></span>
                <h5><?php echo($duom[$i]['vp_as_reason_title']); ?></h5>
                <p><?php echo($duom[$i]['vp_as_reason_text']); ?></p>
            </div>
        <?php }
         ?>
        </div>
        <?php }
        ?>
    </div>
</div>
<?php
wp_reset_postdata();
?>