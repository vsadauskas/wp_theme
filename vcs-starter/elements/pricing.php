<!-- Setup post data -->
<?php
$id = get_field("vs_fps_pricing_options");
$section_slug = $id[0]->post_name;
$section_ID = $id[0]->ID;   
$post_data = get_post($section_ID);
global $post;
$post = $post_data;
setup_postdata($post);
$duom = get_field('vp_ps_plans');
#$ilgis = count($duom);
$planai = get_field('vp_ps_ph');
#var_dump($planai[0]['vp_ps_ph_subtext']); exit;
#var_dump($duom[0]["vp_ps_plans_plan1"]); exit;

#funkcija skirta duomenu isvedimui list itemuose
function li_isvedimas($masyvas, $mas_link){
    $ilgis = count($masyvas);
        for ($i=0; $i < $ilgis; $i++) { ?>
        <li><?php echo($masyvas[$i][$mas_link]); ?></li>
        <?php
        } 
}
?>

<!-- kainu sekcija -->
<div id="pricing" class="pricing">
    <div class="pricinginner">
        <h2><?php the_title();?></h2>
        <?php the_content(); ?>
        <div class="options">
            <div class="basic">
                <ul>
                <li class="planas"><?php echo($planai[0]['vp_ps_ph_plan_name']); ?></li>
                <li class="kaina"><span class="dollar"><?php echo($planai[0]['vp_ps_ph_currency']); ?></span><span class="number"><?php echo($planai[0]['vp_ps_ph_value']);?></span><br><br> <span class="month"><?php echo($planai[0]['vp_ps_ph_subtext']);?></span> </li>
                <?php li_isvedimas($duom, 'vp_ps_plans_plan1'); ?>
                </ul>
             </div>
            <div class="prof">
                <ul>
                <li class="planas"><?php echo($planai[1]['vp_ps_ph_plan_name']); ?></li>
                <li class="kaina"><span class="dollar"><?php echo($planai[1]['vp_ps_ph_currency']); ?></span><span class="number"><?php echo($planai[1]['vp_ps_ph_value']);?></span><br><br>  <span class="month"><?php echo($planai[1]['vp_ps_ph_subtext']);?></span></li>
                <li class="popular"><?php the_field('vs_ps_highlighted_plan'); ?></li>
                <?php li_isvedimas($duom, 'vp_ps_plans_plan2'); ?>
                </ul>
            </div>
            <div class="enter">
                <ul>
                <li class="planas"><?php echo($planai[2]['vp_ps_ph_plan_name']); ?></li>
                <li class="kaina"><span class="dollar"><?php echo($planai[2]['vp_ps_ph_currency']); ?></span><span class="number"><?php echo($planai[2]['vp_ps_ph_value']);?> </span><br><br> <span class="month"><?php echo($planai[2]['vp_ps_ph_subtext']);?></span></li>
                <?php li_isvedimas($duom, 'vp_ps_plans_plan3'); ?>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php
wp_reset_postdata();
?>