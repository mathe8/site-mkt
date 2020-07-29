<?php require_once('header.php'); 

if(have_posts()):
    while(have_posts()): 
        the_post();
        
        the_content();
    endwhile;
endif;

?>




<div class="container ">
    <div class="row d-flex justify-content-center">
        <?php 
            $args = array( 'post_type' => 'clientes' );
            $loop = new WP_Query( $args );

            if ( $loop->have_posts() ) { 
                while ( $loop->have_posts() ) {
                    $loop->the_post();
        ?>

        <div class="clientes-card card col-md-3  " style="margin: 0px 15px 10px 0px;">
            <figure>
                <?=the_post_thumbnail(array(253, 189));?>
            </figure>
            <div class="card-body">
                <h5 class="card-title"><?= the_title(); ?></h5>
                <p class="card-text"><?= the_content(); ?></p>
            </div>
        </div>


        <?php
                } // end while
            } // end if
            
        ?>
    </div>
</div>

<?php require_once('footer.php'); ?>