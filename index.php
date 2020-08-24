<?php require_once('header.php'); 

// if(have_posts()):
//     while(have_posts()): 
//         the_post();
        
//         the_content();
//     endwhile;
// endif;

?>

<script>

$(document).scroll(function(){

    var winheight = $(window).height();

    var docheight = $(document).height();

    var scrollTop = $(window).scrollTop();

    var trackLength = docheight - winheight;
    var pctScrolled = Math.floor(scrollTop/trackLength * 100); // gets percentage scrolled (ie: 80 NaN if tracklength == 0)
    // console.log(pctScrolled);

    if (pctScrolled < 90){
        $('#float-wpp').fadeIn(); 
    }else{
        $('#float-wpp').fadeOut();
    }

});

</script>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script>

function jump(h){
    var url = location.href;               //Save down the URL without hash.
    location.href = "#"+h;                 //Go to the target element.
    history.replaceState(null,null,url);   //Don't like hashes. Changing it back.
}

</script>

<div class="container">
        
        <div class="container-fluid">
            
            <nav class="navbar navbar-expand-lg navbar-light py-1 px-md-1 shift">
                <a class="navbar-brand animate__animated animate__bounce" href=""><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Bootstrap_logo.svg/512px-Bootstrap_logo.svg.png" width="45" height="45" class="d-inline-block align-top navbar-logo" alt="logo" loading="lazy"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-principal">
                      <li class="nav-item active">
                        <a class="nav-link" href="">Home<span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#" onclick="$('html,body').animate({scrollTop: $('#servicos').offset().top-70},'slow');return false;">Serviços</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#" onclick="$('html,body').animate({scrollTop: $('#sobre').offset().top-30},'slow');return false;">Sobre</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="" onclick="$('html,body').animate({scrollTop: $('#contato').offset().top},'slow');return false;">Contato</a>
                      </li>
                    </ul>

                </div>

            </nav>

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
      <img src="https://4.bp.blogspot.com/-qAtFQobL7G0/XIJdNxW4aQI/AAAAAAAAG1s/YwlbQmhEp8QGAsKxLqO-bbPOFHjElbqcQCEwYBhgL/s1600/4K%2BLandscape%2BWallpaper%2B54.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://4.bp.blogspot.com/-qAtFQobL7G0/XIJdNxW4aQI/AAAAAAAAG1s/YwlbQmhEp8QGAsKxLqO-bbPOFHjElbqcQCEwYBhgL/s1600/4K%2BLandscape%2BWallpaper%2B54.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://4.bp.blogspot.com/-qAtFQobL7G0/XIJdNxW4aQI/AAAAAAAAG1s/YwlbQmhEp8QGAsKxLqO-bbPOFHjElbqcQCEwYBhgL/s1600/4K%2BLandscape%2BWallpaper%2B54.jpg" class="d-block w-100" alt="...">
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

<div class="container-fluid pt-5 pb-5 fundo-servicos">

    <div class="row titulo-servicos">
        <div class="col-md-12" id="servicos">
            <h1 class="text-center">Serviços</h1>
            <p class="text-center subtitulo">Conheça os Serviços e Especilidades Que <br> Temos a Oferecer Para Sua Empresa.</p>
        </div>
    </div>

    <div class="row p-4 box-texto">

        <?php
            $args = ['post_type' => 'servicos' ];
            $loop = new WP_Query($args);

            if($loop->have_posts()){
                while($loop->have_posts()){
                    $loop->the_post();
        ?>
                <div class="col-md-3 text-center servico-card">

                    <div class="servico-img hvr-grow hvr-mouse-on">
                            <?= the_post_thumbnail([100, 100]); ?>
                    </div>

                    <span class="servico-titulo"><p><?= the_title(); ?></p></span>
  
                </div>

        <?php
                } //end while
            } //end if
        ?>

    </div>
</div>


    <div class="container-fluid mb-3 mt-5">
        
        <div class="row" id="id1"><div class="col" ><h2 class="text-center">Clientes</h2></div></div>    
    
        <div class="row mb-3 d-flex justify-content-center apresentation">
        
                <div class="card hvr-grow hvr-mouse-on" style="width: 22.5rem;">
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

                <div class="card hvr-grow hvr-mouse-on" style="width: 22.5rem;">
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

                <div class="card hvr-grow hvr-mouse-on" style="width: 22.5rem;">
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

                <div class="card hvr-grow hvr-mouse-on" style="width: 22.5rem;">
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

    <div class="row p-5 mt-5 mb-4 bg-light" id="sobre">
        <div class="col-md-6">
            <div class="container">
                <div class="d-flex flex-row-reverse">
                    <img src="https://assets.justinmind.com/wp-content/uploads/2018/11/Lorem-Ipsum-alternatives.png" class="img-fluid img-teste" width="500px" alt="">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card border-none bg-light" style="width: 35rem; margin-left: -25px;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="card-title">Sobre Nós</h2>
                            <p class="card-text">Some quick example text quick example quick text. 
                                <br> Some quick example text quick example.
                                <br> Some quick example text quick.
                            </p>
                            <button type="button" class="btn btn-outline-primary">Example Explore Expertise</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 text-center">
            <h4>Some quick example text quick example.</h4>
            <p>Some quick example text quick example. <br> Some quick example text. <br> Some quick. <br> </p>
        </div>
    </div>

</div>

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

<a href="https://api.whatsapp.com/" class="float-wpp" id="float-wpp" target="_blank">
    <i class="fa fa-whatsapp my-float-wpp"></i>
</a>

<style>

</style>

<?php require_once('footer.php'); ?>