<div class="container-fluid pt-5 pb-5 fundo-servicos">

    <div class="row titulo-servicos">
        <div class="col-md-12" id="servicos">
            <h1 class="text-center">Serviços</h1>
            <p class="text-center subtitulo">A constante busca por inovação é o combustível do nosso trabalho, criamos com paixão para alcançarmos resultados cada vez melhores. Queremos que sua marca seja reconhecida e se torne referência para as pessoas.</p>
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

                    <span class="servico-titulo"><p class="titulo-sweep hvr-grow hvr-mouse-on"><?= the_title(); ?></p></span>
  
                </div>

        <?php
                } //end while
            } //end if
        ?>

    </div>
</div>