


<header>
    <div class="headerdiv">
        <a href="<?php echo home_url();?>" id="pic" class="navpic"><img src="<?php the_field("vs_ms_logo", "option"); ?>" width="80px" style="float:left" alt="logo" ></a>     
        <?php custom_nav('primary-navigation', 'navigacija'); ?>
        
        
        <!-- <?php wp_nav_menu( array(

            'container' => 'div',
            'menu_class' => 'navigacija',
            'menu_id' => 'manonavig',
            'theme_location' => 'primary-navigation',
            'menu' => 'primary-navigation'

)); ?>         -->
        <!-- <div class="navigacija" id="manonavig">
            <a href="#features">Features</a>
            <a href="#about">About</a>
            <a href="#pricing">Pricing</a>
            <a href="#reviews">Reviews</a>
            <a href="#contact">Contact</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
         </div> -->
    </div>
</header>
