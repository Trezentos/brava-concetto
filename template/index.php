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
		'jquery.maskedinput.js',
		'jquery.cycle2.min.js',
		'jquery.fancybox.min.js',
		'slide-custom.js',
        'animations.js',
        'videoconfig.js',
        'swiper-bundle.min.js',
        'galeria-slide.js',
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

<?php if(false): ?>



    <div
            class="cycle-slideshow main-banners"
            data-cycle-slides=".li"
            data-cycle-timeout="700000"
            data-cycle-pause-on-hover="false"
            data-cycle-log="false"
            data-cycle-speed="1000"
            data-cycle-pager-template="<div class='pager-button'><span></span></div>"
    >

        <?php foreach($qBanners as $banner): ?>
            <div class="li" style="background-image: url(<?=HTTP_UPLOADS_IMG.$banner->imagem?>)">
                <!--            <img src="--><?php //=HTTP_UPLOADS_IMG.$banner->imagem?><!--" alt="--><?php //=$banner->titulo?><!--">-->
            </div>
        <?php endforeach; ?>
        <div class="cycle-pager "></div>

    </div>








    <section class="section-intro" >
        <div class="wrap">

            <div class="content">
                <div class="left">
                    <div class="image-container waypoint animation_left_d1">
                        <img src="<?=IMG.'brava-concetto-design.jpg'?>" class="" alt="">
                    </div>

                    <div class="skills-block animation_bottom">
                        <hr>

                        <div>
                            <p class="waypoint animation_left_d1"><strong>arquitetura</strong></p>

                            <hr class="waypoint animation_elastic_d1">
                            <p class="waypoint animation_left">paisagismo</p>

                            <hr class="waypoint animation_elastic_d1">
                            <p class="waypoint animation_left_d1">interiores</p>

                            <hr class="waypoint animation_elastic_d1">
                            <p class="waypoint animation_left_d2">luminotécnico</p>
                        </div>
                    </div>
                </div>

                <div class="right">
                    <div class="text-container pl125 pl80-notebook">
                        <h2 class="waypoint animation_right_d1">
                            frase conceito sobre <br>
                            o empreendimento
                        </h2>
                        <br><br><br>
                        <p class="mt5 waypoint animation_right_d1">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id dui et tortor finibus laoreet. Vivamus cursus est vitae purus elementum ultricies. Aliquam erat volutpat. Suspendisse sollicitudin tempor arcu, et congue metus placerat vel. Maecenas enim ex, feugiat ac viverra vel, volutpat in urna.
                        </p>
                    </div>


                    <div class="text-container pl125 pl80-notebook pt105 mt125">
                        <img src="<?=IMG.'paper-background.png'?>" class="paper-background waypoint animation_bottom_d1" alt="">

                        <h2 class=" animation_bottom_d2">
                            frase conceito texto <br>
                            arquitetos
                        </h2>
                        <br><br>
                        <p class="mt5  animation_bottom_d2">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id dui et tortor finibus laoreet. Vivamus cursus est vitae purus elementum ultricies. Aliquam erat volutpat. Suspendisse sollicitudin tempor arcu, et congue metus placerat vel. Maecenas enim ex, feugiat ac viverra vel, volutpat in urna.
                        </p>
                    </div>

                    <div class="image-container pl125 pl80-notebook mt85">
                        <img src="<?=IMG.'debora-aguia-brava-concetto.jpg'?>" class=" animation_bottom" alt="">

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



<section class="section-video">
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
<section class="section-caracteristicas pt60 pb0"  id="localizacao">
	<div class="wrap">



        <div class="content">
            <div class="left">
                <div class="image-container waypoint animation_left">
                    <img src="<?=IMG.'brava-concetto-fachada.jpg'?>" class="" alt="">
                </div>
            </div>
            <div class="right ">

                <div class="container-right pl13 pl60-notebook ">
                    <img src="<?=IMG.'brava-concetto-logo-escuro.svg'?>" class="mt45 waypoint animation_left" alt="">

                    <div class="grid-caracteristicas mt95 waypoint animation_bottom_d2">
                        <?php foreach($caracteristicas as $item): ?>
                            <div>
                                <p><?=$item?></p>
                                <hr>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

            </div>
        </div>
	</div>
</section>


<section class="section-carousel pt0 pb0 is-relative pt80-mobile pb80-mobile pt100-notebook pb50-notebook pt100-tablet">
    <div class="wrap">
        <img src="<?=IMG.'paper-background-extended.webp'?>" class="paper-background waypoint animation_bottom_d1" alt="">

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
<?php endif; ?>


<section class="section-plantas">
    <div class="wrap">
        <div class="selo-container">
            <div class="image-container">
                <img src="<?=IMG.'selo-gbc.png'?>" class="" alt="">
            </div>

            <div class="text-container">
                <h2 class="mt20">selo de sustentabilidade</h2>
                <p>
                    Infraestrutura para recarga de veículos elétricos <br>
                    e soluções que ampliam o bem-estar.
                </p>

                <hr class="mt60">
            </div>
        </div>

        <h2 class="has-text-centered mt125">
            qual planta combina mais <br>
            com a sua familia
        </h2>
    </div>
</section>

<?php
$aEstagiosObra = [
	'escavacao'			 => 'ESCAVAÇÃO',
	'fundacao' 			 => 'FUNDAÇÃO',
	'estrutura' 		 => 'ESTRUTURA',
	'alvenaria' 		 => 'ALVENARIA',
	'acabamento_externo' => 'ACABAMENTO EXTERNO',
	'acabamento_interno' => 'ACABAMENTO INTERNO',
];
?>


<section class="section-home-contato bg-root color-gray-light mt500">
	<div class="wrap is-relative">

		<div class="columns is-vcentered is-mobile is-multiline xmt60 xmt60-mobile">

			<div class="column is-6 has-text-centered">
				<img src="<?=IMG?>angatu-logo-light.svg" alt="angatu logo" class="logo waypoint animation_left">
			</div>

			<div class="column is-5-tablet is-12-mobile">
				<h2 class="color-gray-light waypoint animation_left">
					EMPREENDIMENTOS<br>
					QUE INSPIRAM SONHOS
				</h2>

				<p class="mt40 has-text-weight-light waypoint animation_left">
					Para a Angatu, a qualidade é um objetivo e um compromisso. Cada empreendimento é concebido com meticulosa paixão, para isso são utilizadas tecnologia de ponta, sem nunca perder de vista a beleza natural que cerca seus empreendimentos.
					<br><br>
					Seu propósito é oferecer uma experiência única aos clientes, sendo eles pessoas que buscam muito mais que um simples local na praia ou em meio à natureza. Projetando cuidadosamente, para proporcionar momentos incríveis e memórias para a vida toda.
				</p>
			</div>

		</div>


	</div>
</section>


<div class="section-rodape"></div>


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