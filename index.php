<?php require_once('header.php'); 

// if(have_posts()):
//     while(have_posts()): 
//         the_post();
        
//         the_content();
//     endwhile;
// endif;

?>

<div class="bg-primary p-5">
    <div class="justify-content-start">
        <h4 class="display-5">
            <nav class="navbar navbar-expand-lg navbar-light bg-primary">
                    <ul class="navbar-nav ml-4">
                        <li class="nav-item">
                            <a class="navbar-brand" href="#">
                                <img src="https://getbootstrap.com/docs/4.5/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">   
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Home <span class="sr-only">(current)</span>
                                <div class="d-flex justify-content-center stroke"></div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Features
                                <div class="d-flex justify-content-center stroke"></div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Pricing
                                <div class="d-flex justify-content-center stroke"></div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="" tabindex="-1" aria-disabled="true">Disabled
                                <div class="d-flex justify-content-center stroke"></div>
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>

                    </ul>
            </nav>
        </h1>
        <!-- <p class="lead">pies the entire horizontal space of its parent.</p> -->
    </div>
</div>

<div class="container mt-2">
    <div class="row d-flex justify-content-center">
        <?php 
            $args = array( 'post_type' => 'clientes' );
            $loop = new WP_Query( $args );

            if ( $loop->have_posts() ) { 
                while ( $loop->have_posts() ) {
                    $loop->the_post();
                    
        ?>

        <div class="clientes-card card" style="margin: 0px 15px 10px 0px;">
        <?= '<div class="card-img-top border-5" style="background: url('.the_post_thumbnail().')"></div>' ?>
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