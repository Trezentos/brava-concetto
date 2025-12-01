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
		'css/jquery.fancybox.min.css'
	]);



	add_javascript([
		'owl.carousel.min.js',
		'jquery.maskedinput.js',
		'jquery.cycle2.min.js',
		'jquery.fancybox.min.js',
		'slide-custom.js',
        'videoconfig.js'
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
                <div class="image-container">
                    <img src="<?=IMG.'brava-concetto-design.jpg'?>" class="" alt="">
                </div>

                <div class="skills-block">
                    <hr>

                    <div>
                        <p><strong>arquitetura</strong></p>

                        <hr>
                        <p>paisagismo</p>

                        <hr>
                        <p>interiores</p>

                        <hr>
                        <p>luminotécnico</p>
                    </div>
                </div>
            </div>

            <div class="right">
                <div class="text-container pl125 pl80-notebook">
                    <h2>
                        frase conceito sobre <br>
                        o empreendimento
                    </h2>
                    <br><br><br>
                    <p class="mt5">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id dui et tortor finibus laoreet. Vivamus cursus est vitae purus elementum ultricies. Aliquam erat volutpat. Suspendisse sollicitudin tempor arcu, et congue metus placerat vel. Maecenas enim ex, feugiat ac viverra vel, volutpat in urna.
                    </p>
                </div>


                <div class="text-container pl125 pl80-notebook pt105 mt125">
                    <img src="<?=IMG.'paper-background.png'?>" class="paper-background" alt="">

                    <h2>
                        frase conceito texto <br>
                        arquitetos
                    </h2>
                    <br><br>
                    <p class="mt5">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id dui et tortor finibus laoreet. Vivamus cursus est vitae purus elementum ultricies. Aliquam erat volutpat. Suspendisse sollicitudin tempor arcu, et congue metus placerat vel. Maecenas enim ex, feugiat ac viverra vel, volutpat in urna.
                    </p>
                </div>
                
                <div class="image-container pl125 pl80-notebook mt85">
                    <img src="<?=IMG.'debora-aguia-brava-concetto.jpg'?>" class="" alt="">

                    <div>
                        <strong>Débora Águia</strong><br>
                        arquiteta e urbanista
                    </div>

                    <hr>
                </div>
            </div>
        </div>

	</div>
</section>






<section class="section-home-contato bg-root color-gray-light pt70 pb70" id="contato">
	<div class="wrap is-relative">

		<div class="columns is-vcentered is-mobile is-multiline">
			<div class="column is-5-tablet is-12-mobile">
				<h2 class="color-gray-light mb0 waypoint animation_left">ENTRAR EM CONTATO</h2>
			</div>

			<div class="column is-3 is-hidden-mobile"></div>

			<div class="column is-4-tablet is-12-mobile pl0 pl10-mobile waypoint animation_right mt20-mobile">
				<a href="#contato" class="btn button mt0 mb0 smooth-scroll-link"><span>Quero conhecer o Aram <?=$ic?></span></a>
			</div>
		</div>

	</div>
</section>


<section class="section-localizacao" id="localizacao">
	<div class="wrap">

		<div class="has-text-centered mt40">
			<img src="<?=IMG?>aram-logo-dark.svg" alt="aram logo">
			<p class="mt25 address">AVENIDA BALEIA AZUL, N° 270 | BAIRRO DA BALEIA | SÃO SEBASTIÃO | SP</p>
		</div>


		<iframe class="maps mt40 mt80-tablet mt60-mobile mb30 mb0-mobile" src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d14604.95720103543!2d-45.681386290468694!3d-23.77449146824651!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjPCsDQ2JzE2LjIiUyA0NcKwNDAnMjkuMCJX!5e0!3m2!1spt-BR!2sbr!4v1729711477914!5m2!1spt-BR!2sbr" width="100%" height="514" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>



		<h3 class="mt40 mt60-mobile waypoint animation_bottom">DISTÂNCIAS</h3>

		<div class="columns is-mobile is-multiline mt20 mt30-mobile waypoint animation_bottom proximidades">
			<div class="column is-narrow-tablet is-4-mobile mr30 mr0-mobile mr20-tablet">
				<div class="item">
					<p>42 km</p>
					<small>SÃO SEBASTIÃO<br>Centro</small>
				</div>
			</div>

			<div class="column is-narrow-tablet is-4-mobile mr30 mr0-mobile mr20-tablet ">
				<div class="item">
					<p>42 km</p>
					<small>BERTIOGA</small>
				</div>
			</div>

			<div class="column is-narrow-tablet is-4-mobile mr30 mr0-mobile mr20-tablet ">
				<div class="item">
					<p>116 km</p>
					<small>SANTOS</small>
				</div>
			</div>

			<div class="column is-narrow-tablet is-4-mobile mr30 mr0-mobile mr20-tablet ">
				<div class="item">
					<p>155 km</p>
					<small>SÃO JOSÉ<br>DOS CAMPOS</small>
				</div>
			</div>

			<div class="column is-narrow-tablet is-4-mobile mr30 mr0-mobile mr20-tablet">
				<div class="item">
					<p>165 km</p>
					<small>SÃO PAULO<br>Capital</small>
				</div>
			</div>

			<div class="column is-narrow-tablet is-4-mobile mr30 mr0-mobile mr20-tablet">
				<div class="item">
					<p>267 km</p>
					<small>CAMPINAS</small>
				</div>
			</div>

			<div class="column is-narrow-tablet is-4-mobile mr30 mr0-mobile mr20-tablet">
				<div class="item">
					<p>500 km</p>
					<small>RIO DE JANEIRO<br>Capital</small>
				</div>
			</div>

			<div class="column is-narrow-tablet is-4-mobile mr30 mr0-mobile mr20-tablet">
				<div class="item">
					<p>600 km</p>
					<small>CURITIBA</small>
				</div>
			</div>
			

			
		</div>
						
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


<section class="section-home-contato bg-root color-gray-light">
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