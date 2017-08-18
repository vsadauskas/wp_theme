<!-- Setup post data -->
<?php
$id = get_field("vs_fps_customers_saying");
$section_slug = $id[0]->post_name;
$section_ID = $id[0]->ID;   
$post_data = get_post($section_ID);
global $post;
$post = $post_data;
setup_postdata($post);
?>


<!-- klientu atsiliepimai -->
<div id="reviews" class="customers">
    <div class="customersinner">
        <h2><?php the_title(); ?></h2>
        <!-- cia turi buti bruksnys -->
        <?php the_content(); ?>
        <?php $laukai = get_field('vp_cs_customers_reviews');
        
        #var_dump($laukai[0]['vp_cs_customers_pic']['url']); exit;
        
        
        ?>
        <div class="atsiliepimai">
            
        <?php 
        $i=0;
        foreach($laukai as $ind){ ?>
            <div class="atsiliepimas">
                <p class="buble"><?php echo($laukai[$i]['vp_cs_customers_review']);?></p>
                <div class="arrow-down"></div>
                <img class="galva" src="<?php echo($laukai[$i]['vp_cs_customers_pic']['url']);?>">
                <h4 class="name" ><?php echo($laukai[$i]['vp_cs_customers_name']);?></h4>
                <p class="position"><?php echo($laukai[$i]['vp_cs_customers_position']);?></p>
            </div>
            <?php $i++; 
        } ?>
        </div>
    </div>
</div> 

<!-- Reset post data -->
<?php
wp_reset_postdata();
?>