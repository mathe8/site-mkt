<div class="container-fluid mt-4 mb-5">
    <div class="row d-flex justify-content-center">
        <?php 
            $args = array( 'post_type' => 'clientes' );
            $loop = new WP_Query( $args );

            if ( $loop->have_posts() ) { 
                while ( $loop->have_posts() ) {
                    $loop->the_post();
                    
        ?>

        <div class="clientes-card card hvr-grow hvr-mouse-on" style="margin: 0px 15px 10px 0px;">
        <?= '<div class="card-img-top border-5" style="background: url('.the_post_thumbnail([300,224]).')"></div>' ?>
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