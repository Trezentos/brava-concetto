<?php

# GET DATABASE --------------------------------------------------------------------------------------------------- 

# BANNERS
$qBanners = $db->get_results("SELECT * FROM ".$tables['BANNERS']." WHERE status=1 ORDER BY ordem ASC");

# GALERIA ONDA
$qGaleria1 = $db->get_results("SELECT * FROM {$tables['GALERIA_IMG']} WHERE ativo=1 AND id_galeria=1 ORDER BY ordem ASC");

# GALERIA BRISA
$qGaleria2 = $db->get_results("SELECT * FROM {$tables['GALERIA_IMG']} WHERE ativo=1 AND id_galeria=2 ORDER BY ordem ASC");

# OBRAS - GALERIA
$qObras = $db->get_results("SELECT * FROM {$tables['EMPREENDIMENTOS_IMG']} WHERE ativo=1 AND categoria='obras' ORDER BY ordem ASC");

# CASAS
$qCasas = $db->get_results("SELECT * FROM {$tables['CASAS']} WHERE status=1 ORDER BY ordem ASC");



# -----------------------------------------------------------------------------------------------------------------




$ic = '<svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
		<path d="M1 0.5L8 7.5L1 14.5" stroke="white"/>
	   </svg>';


# ADD JS + CSS EXTRA
if( !IS_LIGHTHOUSE )
{
	add_style([
		'css/owl.carousel.min.css', 
		'css/owl.theme.default.min.css', 
		'css/jquery.fancybox.min.css',
        'css/swiper-bundle.min.css'
	]);



	add_javascript([
		'owl.carousel.min.js',
		'jquery.fancybox.min.js',
		'jquery.maskedinput.js',
		'jquery.cycle2.min.js',
		'slide-custom.js',
        'animations.js',
        'videoconfig.js',
        'swiper-bundle.min.js',
        'galeria-slide.js',
        'side-form.js',
        'assinaturas.js',
    ]);
}
get_header();


?>


<!--<section class="section-banner">-->
<!--    <div class="video-container ">-->
<!--        <div id="video-container"  data-video="F6l6tqezC50" class="video-container-iframe"> </div>-->
<!--        <button id="bt-play">-->
<!--            <img src="--><?php //=IMG.'icons/play.svg'?><!--" class="" alt="">-->
<!--        </button>-->
<!--        <img src="--><?php //=IMG.'brava-concetto-hero.webp'?><!--" class="cover-aram" alt="aram video">-->
<!--    </div>-->
<!--</section>-->

<?php if(true): ?>


<div
        class="cycle-slideshow main-banners"
        data-cycle-slides=".li"
        data-cycle-timeout="700000"
        data-cycle-pause-on-hover="false"
        data-cycle-log="false"
        data-cycle-speed="1000"
        data-cycle-pager-template="<?= $MOBILE ? '' : '<div class=&quot;pager-button&quot;><span></span></div>' ?>"
>

    <?php foreach ($qBanners as $banner): ?>
        <div
                class="li"
                style="background-image: url('<?= HTTP_UPLOADS_IMG . ($MOBILE ? $banner->imagem_mobile : $banner->imagem) ?>')"
        >
        </div>
    <?php endforeach; ?>

    <div class="cycle-pager"></div>
</div>



<?php endif; ?>
<section class="section-intro is-relative" id="apresentação">
        <?php include TEMPLATE.'includes/side-form.php' ?>

    <div class="wrap">

        <div class="content">
            <div class="left">
                <div class="image-container waypoint animation_left_d1 mt50-mobile">
                    <img src="<?=IMG.'brava-concetto-design.jpg'?>" class="" alt="">
                </div>

                <div class="skills-block animation_bottom pl0-mobile">
                    <hr>

                    <h4 class="is-hidden-desktop">assinaturas</h4>

                    <div class="arquitetura-buttons">
                        <p class="waypoint animation_left_d1 btn-ass is-active">arquitetura</p>

                        <div class="is-hidden-desktop skill-block-mobile">
                            <p class="waypoint animation_right_d1 mt145 mt70-mobile pr20-mobile pl20-mobile has-text-centered-mobile">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id dui et tortor finibus laoreet. Vivamus cursus est vitae purus elementum ultricies. Aliquam erat volutpat. Suspendisse sollicitudin tempor arcu, et congue metus placerat vel. Maecenas enim ex, feugiat ac viverra vel, volutpat in urna.
                            </p>

                            <img src="<?=IMG.'debora-aguia-brava-concetto.jpg'?>" class="waypoint animation_bottom" alt="">

                            <hr>

                            <div class="debora-text animation_left">
                                <strong class="font-secondary">Débora Aguiar</strong><br>
                                arquiteta e urbanista
                            </div>
                        </div>

                        <hr class="waypoint animation_elastic_d1">
                        <p class="waypoint animation_left color-root btn-ass">paisagismo</p>

                        <hr class="waypoint animation_elastic_d1">
                        <p class="waypoint animation_left_d1 color-root btn-ass">interiores</p>

                        <hr class="waypoint animation_elastic_d1">
                        <p class="waypoint animation_left_d2 color-root btn-ass">luminotécnico</p>
                    </div>
                </div>
            </div>

            <div class="right">
                <div class="text-container pl125 pl0-mobile pl80-notebook">

                    <p class="waypoint animation_right_d1 mt145 mt70-mobile pr20-mobile pl20-mobile has-text-centered-mobile">
                        Entre o ritmo do mar e o silêncio do design, <br class="is-hidden-mobile">
                        surge um novo conceito de viver. <br class="is-hidden-mobile">
                        Leve, atemporal e essencial - como tudo o que permanece. <br class="is-hidden-mobile">
                        Aqui, morar é ser envolvido pela beleza plena.
                    </p>
                </div>


                <div class="text-container pl125 pl80-notebook pt105 mt125 is-hidden-mobile">
                    <img src="<?=IMG.'paper-background.png'?>" class="paper-background waypoint animation_bottom_d1" alt="">

                    <h2 class=" animation_bottom_d2 font-secondary">
                        assinaturas
                    </h2>
                    <br><br>
                    <p class="mt5  animation_bottom_d2">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id dui et tortor finibus laoreet. Vivamus cursus est vitae purus elementum ultricies. Aliquam erat volutpat. Suspendisse sollicitudin tempor arcu, et congue metus placerat vel. Maecenas enim ex, feugiat ac viverra vel, volutpat in urna.
                    </p>
                </div>

                <div class="image-container pl125 pl80-notebook mt85 is-hidden-mobile">
                    <div class="assinaturas-images waypoint animation_bottom ">
                        <img src="<?=IMG.'debora-aguia-brava-concetto.jpg'?>" class="is-active" alt="">
                        <img src="<?=IMG.'ana_holzer.jpg'?>" class="" alt="">
                        <img src="<?=IMG.'frederico_carstens.jpg'?>" class="" alt="">
                        <img src="<?=IMG.'antonio_jose_goncalves.jpg'?>" class="" alt="">
                    </div>

                    <div class="debora-text animation_left">
                        <strong class="font-secondary">Débora Aguiar</strong><br>
                        arquiteta e urbanista
                    </div>

                    <hr class="waypoint animation_elastic_d1">
                </div>
            </div>
        </div>

    </div>
</section>






<section class="section-video is-hidden">
    <div class="wrap">
        <div class="video-container ">
            <div id="video-container"  data-video="LGrn-3UpPEY" class="video-container-iframe"> </div>
            <button id="bt-play">
                <img src="<?=IMG.'icons/play.svg'?>" class="" alt="">
            </button>
            <img src="<?=IMG.'brava-concetto-hero.webp'?>" class="cover-aram" alt="aram video" />
        </div>
    </div>
</section>
    <?php

    $caracteristicas = [
        'Lorem ipsum dolor sit amet',
        'Lorem ipsum dolor sit amet',
        'Lorem ipsum dolor sit amet',
        'Lorem ipsum dolor sit amet',
        'Lorem ipsum dolor sit amet',
        'Lorem ipsum dolor sit amet',
        'Lorem ipsum dolor sit amet',
        'Lorem ipsum dolor sit amet',
    ];

    ?>
    <section class="section-caracteristicas pt60 pb0 "  id="detalhes">
        <div class="wrap">

            <div class="content">
                <div class="left">
                    <div class="image-container waypoint animation_left">
                        <img src="<?=IMG.'selo-gbc.png'?>" class="selo-gbc" alt="">
                        <img src="<?=IMG.'brava-concetto-fachada.jpg'?>" class="" alt="">
                    </div>
                </div>
                <div class="right ">

                    <div class="container-right pl13 pl60-notebook waypoint animation_left">
                        <div>
                            <h2 class="mt20 waypoint animation_left_d1 font-secondary">
                                singularidades
                            </h2>
                            <p>
                                Design, conforto e tecnologia em harmonia <br>
                                com a arte de viver bem
                            </p>
                        </div>



                        <p class="waypoint animation_left_d2">
                            Certificado pelo selo internacional GBC®, o Brava Concetto nasce do encontro entre tecnologia e natureza - um equilíbrio que se sente no ar, na luz, no silêncio.
                            <br><br>
                            Aqui, a água é purificada, o ar circula com conforto térmico e acústico, a umidade é controlada e a energia flui com inteligência.
                            <br><br>
                            Cada decisão construtiva reflete respeito ao ambiente e cuidado com o essencial: 
                            <br>
                            <span class="ml10">bem-estar de quem vive.</span>
                            <br><br>
                            Um luxo sutil, presente em cada respiração.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <section class="section-carousel pt0 pb0 is-relative pt80-mobile pb80-mobile pt100-notebook pb50-notebook pt100-tablet " id="galeria">
        <div class="wrap">
            <img src="<?=IMG.'paper-background-carousel.png'?>" class="paper-background waypoint animation_bottom_d1" alt="">

            <div class="title-container ">
                <div></div>
                <div class="content ">
                    <div class=" pl13">
                        <hr class="waypoint animation_elastic_d1">
                        <!--                    <h2 class="waypoint animation_bottom">área de lazer</h2>-->
                    </div>
                </div>
            </div>

            <div class="swiper slide-imoveis swiper-imoveis mt40 mb90 mb0-tablet mb10-mobile waypoint animation_bottom">
                <div class="swiper-wrapper">
                    <?php foreach ($qGaleria1 as $card): ?>
                        <div class="swiper-slide" data-title="<?= $card->legenda; ?>">
                            <a
                                    href="<?=  HTTP_UPLOADS_IMG.'lg-'.$card->arquivo; ?>"
                                    data-fancybox="galeria-1"
                                    data-caption="<?= $card->legenda; ?>"
                                    class=""
                            >
                                <h2><?= $card->legenda; ?></h2>
                                <figure class="image-container">
                                    <img
                                            src="<?= HTTP_UPLOADS_IMG.'tb-'.$card->arquivo;; ?>"
                                            alt="<?= 'Titulo: '.$card->legenda; ?>"
                                    >
                                    <img src="<?=IMG.'icons/expand.svg'?>" class="expand-icon" alt="">
                                </figure>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="swiper-scrollbar"></div>
            </div>

        </div>
    </section>



    <section class="section-plantas" id="plantas">
        <div class="wrap smaller">

            <div class="title-container mb70">
                <hr class="waypoint animation_left">
                <h2 class="has-text-centered waypoint animation_left_d1">
                    apartamentos
                </h2>
            </div>

            <?php include TEMPLATE.'includes/slide-component.php'; ?>
        </div>
    </section>


<section class="section-carousel second pt0 pb0 is-relative pt80-mobile pb80-mobile pt100-notebook pb50-notebook pt100-tablet ">
    <div class="wrap">



        <div class="swiper slide-imoveis swiper-imoveis mt40 mb90 mb0-tablet mb10-mobile waypoint animation_bottom">
            <hr class="waypoint animation_elastic_d1">
            <div class="swiper-wrapper">
                <?php foreach ($qGaleria2 as $card): ?>
                    <div class="swiper-slide" data-title="<?= $card->legenda; ?>">
                        <a
                                href="<?=  HTTP_UPLOADS_IMG.'lg-'.$card->arquivo; ?>"
                                data-fancybox="galeria-1"
                                data-caption="<?= $card->legenda; ?>"
                                class=""
                        >
                            <h2><?= $card->legenda; ?></h2>
                            <figure class="image-container">
                                <img
                                        src="<?= HTTP_UPLOADS_IMG.'tb-'.$card->arquivo;; ?>"
                                        alt="<?= 'Titulo: '.$card->legenda; ?>"
                                >
                                <img src="<?=IMG.'icons/expand.svg'?>" class="expand-icon" alt="">
                            </figure>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="swiper-scrollbar"></div>
        </div>

    </div>
</section>

<section class="mapa" id="localizacao">
    <h3>Mais que uma localização, uma escolha de vida</h3>
    <p class="mb40"><?=ENDERECO?></p>

    <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3556.3246567314304!2d-48.6307507!3d-26.956616399999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94d8c98e659a248d%3A0xeccb1c0a4c66c221!2sAv.%20Carlos%20Drummond%20de%20Andrade%2C%20111%20-%20Praia%20dos%20Amores%2C%20Itaja%C3%AD%20-%20SC%2C%2088306-830!5e0!3m2!1spt-BR!2sbr!4v1764793267360!5m2!1spt-BR!2sbr"
                width="100%" height="840" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        <?php
            $distances = [
                [
                    'title' => 'Supermercado Tem Tem',
                    'distancia' => '5km',
                ],
                [
                    'title' => 'Hospital',
                    'distancia' => '3km',
                ],
                [
                    'title' => 'Brava Mall Shopping',
                    'distancia' => '2km',
                ],
                [
                    'title' => 'Escola Municipal',
                    'distancia' => '1,5km',
                ],
                [
                    'title' => 'Farmácia São João',
                    'distancia' => '1km',
                ],
                [
                    'title' => 'Balneário Camboriú',
                    'distancia' => '8km',
                ],
            ]
        ?>

        <div class="distances-block" id="fale-conosco">
            <?php foreach($distances as $distance): ?>
                <div>
                    <p><?=$distance['title']?></p>
                    <hr>
                    <p><?=$distance['distancia']?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>


    <div class="form-block">
        <p class="big">
            Fale conosco
        </p>

        <p class="bigger">
            Preencha o formulário e um de nossos consultores
            entrará em contato para esclarecer todas as suas dúvidas.
        </p>

        <form id="form-contato" class="form-contato" action="" method="post">

            <div class="row">
                <input type="text" name="nome" class="input" placeholder="Nome completo" required />

                <input type="text" name="telefone" class="input telefone" placeholder="Telefone / Whatsapp" required />

                <input type="email" name="email" class="input" placeholder="E-mail" required />
            </div>

            <textarea name="mensagem" class="input" placeholder="Mensagem" required></textarea>

            <div class="checkbox-group mt20">
                <label class="checkbox">
                    <input type="checkbox" class="checkbox" name="aceite_politica" required>
                    <span class="font-tertiary">Declaro que li e aceito os termos da <span>Política de Privacidade</span>.</span>
                </label>

                <label class="checkbox mt10">
                    <input type="checkbox" class="checkbox" name="aceite_contato" required>
                    <span class="font-tertiary">Estou de acordo em receber comunicações e ser acessado para possível atendimento.</span>
                </label>
            </div>

            <div class="mt20 button-container">
                <button class="btn" type="submit" name="submit">
                    <span class="loading-animation"></span>
                    <span class="font-secondary text">enviar</span>
                </button>
            </div>

        </form>
    </div>
</section>


<?php get_footer(); ?>

<script>
	/* serve para remover a classe fancybox de um item a mais que o slide cria, 
		deixando o fancybox com o numero certo de slides
	*/
	jQuery(document).ready(function($)
	{
		setInterval(function() {
			let slide = $('.cycle-sentinel').find('a');
			slide.attr('data-fancybox', "");

			let slide_casas = $('.slide-casas .owl-item.cloned').find('a');
			slide_casas.attr('data-fancybox', "");
		}, 100);
	});
</script>

<script src="https://www.youtube.com/iframe_api" id="youtube-iframe-api" >
</script>