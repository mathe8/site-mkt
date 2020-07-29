<?php require_once('header.php'); 

// if(have_posts()):
//     while(have_posts()): 
//         the_post();
        
//         the_content();
//     endwhile;
// endif;

?>

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Fluid jumbotron</h1>
        <p class="lead">pies the entire horizontal space of its parent.</p>
    </div>
</div>


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
        <?='<div class="card-img-top" style="background: url('.the_post_thumbnail().')"></div>'?>
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