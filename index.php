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
                            <a class="nav-link" href="#id1">Home <span class="sr-only">(current)</span>
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


<div id="carouselIndicators" class="carousel slide" data-ride="carousel" style="">
  <ol class="carousel-indicators">
    <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselIndicators" data-slide-to="1"></li>
    <li data-target="#carouselIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://www.dashcontroles.com.br/wp-content/uploads/2018/06/wallpaper-gamer.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://www.dashcontroles.com.br/wp-content/uploads/2018/06/wallpaper-gamer.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://www.dashcontroles.com.br/wp-content/uploads/2018/06/wallpaper-gamer.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container-fluid mt-2">
    <div class="row p-3 box-texto">

        <?php
            $args = ['post_type' => 'servicos' ];
            $loop = new WP_Query($args);

            if($loop->have_posts()){
                while($loop->have_posts()){
                    $loop->the_post();
        ?>

            <div class="card card-servicos container-fluid">
                <h5 class="card-header text-center"><?= the_title() ?></h5>
                <div class="card-body">
                    <div class="row">
                    <div class="col-md-6">
                        <h3 class="card-title"><?= the_title() .' :'?></h3>
                        <p class="card-text">
                        <?= the_content() ?>
                        </p>
                    </div>
                    <div class="col-md-6 card-imagem">
                        <?= '<div style="background: url('.the_post_thumbnail().')"></div>' ?>
                        <!-- <img src="" class="img-fluid mx-auto d-block" alt=""> -->
                    </div>
                    </div>
                </div>
            </div>

        <?php
                } //end while
            } //end if
        ?>

    </div>
</div>

    <div class="container-fluid mb-3">
        
        <div class="row" id="id1"><div class="col" ><h2 class="text-center">Apresentação</h2></div></div>    
    
        <div class="row mb-3 d-flex justify-content-center apresentation">
        
                <div class="card" style="width: 22.5rem;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <h5><img src="https://image.flaticon.com/icons/svg/15/15659.svg" alt=""></h5>
                            </div>
                            <div class="col">
                                <h5 class="card-title">Sobre Nós</h5>
                                <p class="card-text">Some quick example text <br> quick example. </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card" style="width: 22.5rem;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <h5><img src="https://image.flaticon.com/icons/svg/15/15659.svg" alt=""></h5>
                            </div>
                            <div class="col">
                                <h5 class="card-title">Sobre Nós</h5>
                                <p class="card-text">Some quick example text <br> quick example. </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card" style="width: 22.5rem;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <h5><img src="https://image.flaticon.com/icons/svg/15/15659.svg" alt=""></h5>
                            </div>
                            <div class="col">
                                <h5 class="card-title">Sobre Nós</h5>
                                <p class="card-text">Some quick example text <br> quick example. </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card" style="width: 22.5rem;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <h5><img src="https://image.flaticon.com/icons/svg/15/15659.svg" alt=""></h5>
                            </div>
                            <div class="col">
                                <h5 class="card-title">Sobre Nós</h5>
                                <p class="card-text">Some quick example text <br> quick example. </p>
                            </div>
                        </div>
                    </div>
                </div>

    </div>

    <div class="row mt-5 mb-4">
        <div class="col-md-6">
            <div class="container">
                <div class="d-flex flex-row-reverse">
                    <img src="https://assets.justinmind.com/wp-content/uploads/2018/11/Lorem-Ipsum-alternatives.png" class="img-fluid img-teste" width="500px" alt="">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card border-none" style="width: 35rem; margin-left: -25px;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="card-title">Sobre Nós</h2>
                            <p class="card-text">Some quick example text quick example quick text. 
                                <br> Some quick example text quick example.
                                <br> Some quick example text quick.
                            </p>
                            <button type="button" class="btn btn-outline-primary">Example Explore Expertise >></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 mt-4 text-center">
            <h4>Some quick example text quick example.</h4>
            <p>Some quick example text quick example. <br> Some quick example text. <br> Some quick. <br> </p>
        </div>
    </div>

</div>

<div class="container-fluid mt-2 mb-3">
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