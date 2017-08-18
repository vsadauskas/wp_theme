<?php
$id = get_field("vs_fps_sublist_section");
$section_slug = $id[0]->post_name;
$section_ID = $id[0]->ID;   
$post_data = get_post($section_ID);
global $post;
$post = $post_data;
setup_postdata($post);

$pic = get_the_post_thumbnail_url($section_ID); #išsitraukiam thumbnaila
$mas = get_field('vp_ss_sublists'); #issitraukiam lauku masyvą
#var_dump($mas[1]); exit;
?>



<!-- sublistu sekcija -->
<div class="sublists">
    <div class="sublistsinner">
      <?php if($pic): ?>
      <div class="sf1">
        <img src="<?php echo($pic);?>">
        </div>
        <?php endif; ?>
        <div class="sf2">
        <h6><?php the_title(); ?></h6>
        <?php the_content(); 
        
        $i=0;
        foreach($mas as $indx){ ?> 
         <div class="sublistitem"> 
                    <div class="sublistitem1">
                        <span class="icon-cloud-<?php echo($mas[$i]['vp_ss_sublists_icon']);?>"></span>
                    </div>
                    <div class="sublistitem2">
                        <h3 class="bullet"><?php echo($mas[$i]['vp_ss_sublists_name']);?></h3>
                        <p class="bullet"><?php echo($mas[$i]['vp_ss_sublists_text']); ?></p>
                    </div>
            </div>
        <?php
        $i++;
        }?>

        </div>
    </div>
</div>
<?php
wp_reset_postdata();
?>