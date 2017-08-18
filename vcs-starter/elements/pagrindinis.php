


<div class="pagrindinis">
    <?php  $bg =  get_the_post_thumbnail_url(); ?>
    <?php if($bg):?>
    <style>
           .pagrindinis{
               background-image: url( <?php echo($bg); ?> );
           }
        </style>
    <?php endif; ?>

    <div class="pagrindinio_vidus">
        <div class="tekstine">   
                <img src="<?php the_field("vs_ms_logo", "option"); ?>">
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?> 
                <?php $field = get_field('vp_hps_subtitle_first'); 
                if ($field):
                ?>
                <a href="#" class="downbut"><?php echo($field); ?></a>
                <?php endif ?>
        </div>
        <div class="forma">
                  
           <div class="formos_virsus">
               <h2>Try your <span class="orange">free</span> trial today</h2>  
           </div>
            <form>
                <div class="inp">
                <input type="text" name="firstname" placeholder="  Name"><br>
                <input type="email" name="email" placeholder="  Email"><br>
                <input type="password" name="pass" placeholder="  Password"><br>
                </div>
                <input type="submit" name="bttn" value="Get started">          
            </form>
        </div>
    </div>
</div>






