<?php

# GET DATABASE --------------------------------------------------------------------------------------------------- 

# BANNERS
// $qBanners = $db->get_results("SELECT * FROM ".$tables['BANNERS']." WHERE status=1 ORDER BY ordem ASC");

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


<section class="section-block-2">
    <div class="video-container ">
        <div id="video-container"  data-video="F6l6tqezC50" class="video-container-iframe"> </div>
        <button id="bt-play">
            <i class="fa fa-play"></i>
        </button>
        <img src="<?=IMG.'aram-main-video-tb.jpg'?>" class="cover-aram" alt="aram video">
    </div>
    <div class="wrap">
        <div class="columns is-centered is-mobile">
            <div class="column is-6-desktop is-8-tablet is-10-mobile has-text-centered">
                <hr class="mt0 waypoint animation_scale">
                <p class="mt40 mb40">
                    CASAS<br class="is-hidden-tablet">
                    ENVOLTAS<br class="is-hidden-tablet">
                    POR <br>
                    NATUREZA <br class="is-hidden-tablet">
                    COM O MÁXIMO <br>
                    DE PRIVACIDADE.
                </p>
                <hr class="mb10 waypoint animation_scale">
            </div>
        </div>

    </div>
</section>


<section class="section-intro" id="empreendimento">
	<div class="wrap is-relative mt0-mobile">

		<picture>
			<source srcset="<?=IMG?>img-intro-mobile.webp" media="(max-width: 578px)">
			<source srcset="<?=IMG?>img-intro.webp" media="(min-width: 579px)">
			<img src="<?=IMG?>img-intro.webp" alt="" class="waypoint animation_bottom">
		</picture>


		<div class="mt60 has-text-right pr5 waypoint animation_left">
			<p>CONDOMÍNIO FECHADO <span class="font-secondary">INFRAESTRUTURA DE GUARITA</span></p>
			<hr>
			<p>APENAS 6 RESIDÊNCIAS <span class="font-secondary is-block-mobile">4 A 6 SUÍTES / 4 E 5 VAGAS</span></p>
			<hr>
			<p>637,08m<sup>2</sup> a 1169,48m<sup>2</sup> <span class="font-secondary is-block-mobile">PRIVATIVOS</span></p>
			<hr>
			<p>ARQUITETURA E INTERIORES ASSINADOS <span class="font-secondary">STUDIO ARTHUR CASAS</span></p>
			<hr>
			<p>PAISAGISMO PLANEJADO <span class="font-secondary is-block-mobile">JUNDU PAISAGISMO</span></p>
		</div>

	</div>
</section>













<section class="section-block-2">
    <div class="video-container ">
        <div id="video-container"  data-video="F6l6tqezC50" class="video-container-iframe"> </div>
        <button id="bt-play">
            <i class="fa fa-play"></i>
        </button>
        <img src="<?=IMG.'aram-main-video-tb.jpg'?>" class="cover-aram" alt="aram video">
    </div>
	<div class="wrap">
 		<div class="columns is-centered is-mobile">
 			<div class="column is-6-desktop is-8-tablet is-10-mobile has-text-centered">
				<hr class="mt0 waypoint animation_scale">
			 	<p class="mt40 mb40"> 
					CASAS<br class="is-hidden-tablet"> 
					ENVOLTAS<br class="is-hidden-tablet"> 
					POR <br>
					NATUREZA <br class="is-hidden-tablet">
					COM O MÁXIMO <br>
					DE PRIVACIDADE.
				</p>
				<hr class="mb10 waypoint animation_scale">
 			</div>
		</div>

	</div>
</section>












<section class="section-home-contato bg-root color-gray-light" id="contato">
	<div class="wrap is-relative">


		<div class="columns is-vcentered is-mobile is-multiline">

			<div class="column is-5-tablet is-12-mobile">
				<h2 class="color-gray-light waypoint animation_left">ENTRAR EM CONTATO</h2>

				<p class="mt40 has-text-weight-light waypoint animation_left">
					O Aram é um empreendimento exclusivo para quem valoriza sofisticação e
					excelência. Preencha o formulário ao lado e nossa equipe entrará
					em contato para apresentar todos os detalhes desse projeto único.
				</p>
			</div>



			<div class="column is-3 is-hidden-mobile"></div>


			<div class="column is-4-tablet is-12-mobile pl0 pl10-mobile waypoint animation_right mt30-mobile">


				<div style="width:100%;height:500px;" data-fillout-id="6uDa5pTHx4us" data-fillout-embed-type="standard" data-fillout-inherit-parameters data-fillout-dynamic-resize></div><script src="https://server.fillout.com/embed/v1/"></script>






				<!-- <form id="form-contato" action="" method="post">

					<div class="columns is-mobile is-multiline">
						<div class="column is-12">
							<input type="text" name="nome" class="input" placeholder="Nome" required />
						</div>
						<div class="column is-6">
							<input type="email" name="email" class="input" placeholder="E-Mail" required />
						</div>
						<div class="column is-6">
							<input type="text" name="telefone" class="input telefone" placeholder="WhatsApp" required />
						</div>

						<div class="column is-12">
							<textarea name="mensagem" rows="3" placeholder="Mensagem"></textarea>
						</div>

						<div class="column is-12 has-text-right">
							<button class="btn button mt20 mb0" type="submit" name="submit"><span>Enviar <?=$ic?></span></button>
						</div>
					</div>

				</form> -->


			</div>
		</div>


	</div>
</section>














<section class="section-conceito" id="detalhes">
	<div class="wrap wide">


		<h2 class="is-hidden-tablet mb80">CONCEITO</h2>


		<div class="slide-galeria owl-carousel owl-theme">

			<div class="item" style="width:367px">
				<h2 class="mb100 is-hidden-mobile">CONCEITO</h2>

				<picture>
					<source srcset="<?=IMG?>slide-conceito/1.webp" media="(max-width: 578px)">
					<source srcset="<?=IMG?>slide-conceito/1.webp" media="(min-width: 579px)">
					<img class="is-block" src="<?=IMG?>slide-conceito/1.webp" alt="<?=($rs->legenda?$rs->legenda:EMPRESA); ?>">
				</picture>

				<p>Presenciar a sinergia da arquitetura que se molda no esplendor da natureza.</p>
			</div>


			<div class="item" style="width: 1089px">
				<picture>
					<source srcset="<?=IMG?>slide-conceito/2-mobile.webp" media="(max-width: 578px)">
					<source srcset="<?=IMG?>slide-conceito/2.webp" media="(min-width: 579px)">
					<img class="is-block" src="<?=IMG?>slide-conceito/2.webp" alt="<?=($rs->legenda?$rs->legenda:EMPRESA); ?>">
				</picture>

				<p>As casas estão posicionadas dentro de bolsões verdes, estrategicamente planejados para gerar a sensação de imersão na natureza. O paisagismo complementar garante a privacidade entre os moradores do condomínio.</p>
			</div>


			<div class="item" style="width: 1089px">
				<picture>
					<source srcset="<?=IMG?>slide-conceito/3-mobile.webp" media="(max-width: 578px)">
					<source srcset="<?=IMG?>slide-conceito/3.webp" media="(min-width: 579px)">
					<img class="is-block" src="<?=IMG?>slide-conceito/3.webp" alt="<?=($rs->legenda?$rs->legenda:EMPRESA); ?>">
				</picture>

				<p>Viver a exclusividade e ter privacidade para curtir seus melhores momentos.</p>
			</div>

		</div>

	</div>
</section>











<div class="slider-container is-relative bg-primary">
	<div class="slider is-relative" data-slide-timeout="11">
		<picture>
			<source srcset="<?=IMG?>slide-moviment/slide-01-mobile.webp" media="(max-width: 578px)">
			<source srcset="<?=IMG?>slide-moviment/slide-01.webp" media="(min-width: 579px)">
			<img src="<?=IMG?>slide-moviment/slide-01.webp" alt="Suíte Master" class="slide active fx-zoom">
		</picture>

		<picture>
			<source srcset="<?=IMG?>slide-moviment/slide-02-mobile.webp" media="(max-width: 578px)">
			<source srcset="<?=IMG?>slide-moviment/slide-02.webp" media="(min-width: 579px)">
			<img src="<?=IMG?>slide-moviment/slide-02.webp" alt="Living" class="slide fx-to-left">
		</picture>

		<picture>
			<source srcset="<?=IMG?>slide-moviment/slide-03-mobile.webp" media="(max-width: 578px)">
			<source srcset="<?=IMG?>slide-moviment/slide-03.webp" media="(min-width: 579px)">
			<img src="<?=IMG?>slide-moviment/slide-03.webp" alt="Área Externa" class="slide fx-to-bottom">
		</picture>
	</div>

	<div class="subtitles">
		<div class="subtitle waypoint animation_bottom">Suíte Master</div>
		<div class="subtitle waypoint animation_bottom">Living</div>
		<div class="subtitle waypoint animation_bottom">Área Externa | Garagem</div>
	</div>

	<span class="prev" id="prev">
		<img src="<?=IMG?>icons/arrow-left.svg" alt="seta">
	</span>
	<span class="next" id="next">
		<img src="<?=IMG?>icons/arrow-right.svg" alt="seta">
	</span>
</div>











<section class="section-block-3" id="casas">
	<div class="wrap">
 		
 		<div class="columns is-centered is-multiline mt100 mt20-mobile mb20">

			<?php foreach($qCasas AS $rs){ ?>

			<div class="column is-4 has-text-centered waypoint animation_bottom mb80 mb40-mobile">
				<a href="#galeria<?=($rs->id < 4 ? '1' : '2'); ?>" class="smooth-scroll-link" data-smooth-time-link="2500">
					<div class="num m-auto mb10 waypoint animation_scale"><?=$rs->id?></div>
					<h3 class="mb10"><?=$rs->titulo?></h3>
					<h4><?=$rs->subtitulo?></h4>

					<p class="mt20"><?=nl2br($rs->texto); ?></p>

					<?php if( $rs->vendido ){ ?>
					<p class="tag mt15"><?=$rs->vendido; ?></p>
					<?php } ?>
				</a>
 			</div>

			<?php } ?>
 		
		</div>

	</div>
</section>












<section class="section-map-houses is-relative pt0 pb0">

	<picture>
		<source srcset="<?=IMG?>bg-mapa-casas-mobile.webp" media="(max-width: 578px)">
		<source srcset="<?=IMG?>bg-mapa-casas.webp" media="(min-width: 579px)">
		<img src="<?=IMG?>bg-mapa-casas.webp" alt="localização das casas" class="is-block">
	</picture>

	<a href="#plantas1" class="point p1 smooth-scroll-link" data-smooth-time-link="3000"> 1 <p>Casa Flora</p> </a>
	<a href="#plantas1" class="point p2 smooth-scroll-link" data-smooth-time-link="3000"> 2 <p>Casa Aurora</p> </a>
	<a href="#plantas1" class="point p3 smooth-scroll-link" data-smooth-time-link="3000"> 3 <p>Casa Onda</p> </a>
	<a href="#plantas2" class="point p4 smooth-scroll-link" data-smooth-time-link="3500"> 4 <p>Casa Brisa</p> </a>
	<a href="#plantas2" class="point p5 smooth-scroll-link" data-smooth-time-link="3500"> 5 <p>Casa Serena</p> </a>
	<a href="#plantas2" class="point p6 smooth-scroll-link" data-smooth-time-link="3500"> 6 <p>Casa Areia</p> </a>
	
</section>












<section class="section-assinado bg-root">
	<div class="wrap">

		<div class="columns is-multiline is-mobile mt80 mt0-mobile mb0 is-align-items-flex-end color-gray-light">
			<div class="column is-8-tablet is-12-mobile waypoint animation_left">
				<h2 class="color-gray-light">6 RESIDÊNCIAS EM CONDOMÍNIO FECHADO</h2>
				<p class="mt130 has-text-weight-light">A 260 METROS DO MAR E CERCADO PELA NATUREZA.</p>
			</div>

			<div class="column is-4-tablet is-12-mobile waypoint animation_right_d2 pl80 pl30-tablet pl10-mobile mt30-mobile">
				<small class="has-text-weight-light">Arquitetura e interiores assinados</small>
				<br>
				<img src="<?=IMG?>/studio-arthur-casas.svg" alt="logo arthur casas" class="mt10">
			</div>
		</div>

	</div>
</section>










<div class="section-galeria pt0" id="galeria1">
	<div class="slide-casas owl-carousel owl-theme">
		
		<?php foreach ($qGaleria1 as $rs) { $IMG_WEBP = altera_ext_webp(HTTP_UPLOADS_IMG.( $MOBILE ? "tb-" : "md-" ).$rs->arquivo); ?>
			
		<div class="item">
			<a data-fancybox="gallery-123" data-caption='<?=($rs->legenda?$rs->legenda:EMPRESA); ?>'  href="<?=HTTP_UPLOADS_IMG.'lg-'.$rs->arquivo; ?>" title="<?=($rs->legenda?$rs->legenda:EMPRESA); ?>">

				<div class="legenda is-uppercase waypoint animation_left"><?=$rs->legenda?></div>

				<picture>
					<source srcset="<?=$IMG_WEBP?>" type="image/webp">
					<source srcset="<?=HTTP_UPLOADS_IMG.( $MOBILE ? "tb-" : "md-" ).$rs->arquivo;?>" type="image/jpeg">
					<img class="is-block" src="<?=$IMG_WEBP?>" alt="<?=($rs->legenda?$rs->legenda:EMPRESA); ?>">
				</picture>
			</a>
		</div>

		<?php } ?>

	</div>
</div>









<section class="section-plantas" id="plantas1">
	<div class="wrap wide mb80 mb20-tablet mb10-mobile pl0-mobile pr0-mobile">

		<h2 class="mt40 mt30-mobile has-text-centered waypoint animation_bottom">CASAS FLORA,<br class="is-hidden-tablet"> AURORA E ONDA</h2>

		<div 
			class="plantas-slide cycle-slideshow waypoint animation_bottom mt140 mt100-tablet mt70-mobile" 
			data-cycle-slides=".li" 
			data-cycle-timeout="0" 
			data-cycle-log="false" 
			data-cycle-pager="#plantas-nav"
			data-cycle-pause-on-hover="true"
    		data-cycle-pager-template=""
			data-cycle-reverse="true"
			data-cycle-starting-slide="2"
    	>


			
			<div class="li">
				<div class="columns is-multiline is-mobile">
					<div class="column is-12">
						<div class="box-img">
							<a href="<?=IMG?>plantas/01-lg.webp" data-fancybox="planta" data-caption="ROOFTOP">
								<picture>
									<source srcset="<?=IMG?>plantas/01-mobile.webp" media="(max-width: 578px)">
									<source srcset="<?=IMG?>plantas/01.webp" media="(min-width: 579px)">
									<img src="<?=IMG?>plantas/01.webp" alt="planta">
								</picture>
							</a>
						</div>
					</div>

					<div class="column is-1 is-hidden-touch is-hidden-desktop-only"></div>
					<div class="column is-3-tablet is-12-mobile leg pl40-mobile waypoint animation_left">ROOFTOP</div>
				</div>
			</div>


			<div class="li">
				<div class="columns is-multiline is-mobile">
					<div class="column is-12">
						<div class="box-img">
							<a href="<?=IMG?>plantas/02-lg.webp" data-fancybox="planta" data-caption="PAVIMENTO SUPERIOR">
								<picture>
									<source srcset="<?=IMG?>plantas/02-mobile.webp" media="(max-width: 578px)">
									<source srcset="<?=IMG?>plantas/02.webp" media="(min-width: 579px)">
									<img src="<?=IMG?>plantas/02.webp" alt="planta">
								</picture>
							</a>
						</div>
					</div>

					<div class="column is-1 is-hidden-touch is-hidden-desktop-only"></div>
					<div class="column is-narrow-tablet is-6-mobile pl0 pl40-mobile leg">PAVIMENTO SUPERIOR</div>
				</div>
			</div>


			<div class="li">
				<div class="columns is-multiline is-mobile">
					<div class="column is-12">
						<div class="box-img">
							<a href="<?=IMG?>plantas/03-lg.webp" data-fancybox="planta" data-caption="TÉRREO">
								<picture>
									<source srcset="<?=IMG?>plantas/03-mobile.webp" media="(max-width: 578px)">
									<source srcset="<?=IMG?>plantas/03.webp" media="(min-width: 579px)">
									<img src="<?=IMG?>plantas/03.webp" alt="planta">
								</picture>
							</a>
						</div>
					</div>

					<div class="column is-1 is-hidden-touch is-hidden-desktop-only"></div>
					<div class="column is-3-tablet is-12-mobile leg pl40-mobile">TÉRREO</div>
				</div>
			</div>

		</div>



		<div class="plantas-nav mr110 mr0-tablet mr0-mobile is-relative waypoint animation_bottom" id="plantas-nav">
			<a><span>ROOFTOP</span></a>
			<a><span>PAVIMENTO SUPERIOR</span></a>
			<a><span>TÉRREO</span></a>
		</div>


	</div>
</section>












<section class="section-area-construida" id="area-construida-1">
	<div class="wrap">

		<p class="tit has-text-weight-light mb10 waypoint animation_left">ÁREA EDIFICADA TOTAL</p>
		<h2 class="waypoint animation_left_d1">507,11 m²</h2>


		<div class="columns is-mobile is-multiline mt180 mt100-tablet mt70-mobile is-centered">
			<div class="column is-5-tablet is-12-mobile waypoint animation_left">

				<div class="is-relative">
					<div class="mark m1 is-active"></div>
					<div class="mark m2"></div>
					<div class="mark m3"></div>

					<a href="#plantas2" class="smooth-scroll-link">
						<img class="mark img m4 is-clickable" src="<?=IMG?>mark-2.svg" alt="marcador">
					</a>

					<a href="#plantas2" class="smooth-scroll-link">
						<img class="mark img m5 is-clickable" src="<?=IMG?>mark-2.svg" alt="marcador">
					</a>

					<a href="#plantas2" class="smooth-scroll-link">
						<img class="mark img m6 is-clickable" src="<?=IMG?>mark-6.svg" alt="marcador">
					</a>

					<img src="<?=IMG?>marcacao-casas-1.webp" alt="planta">
				</div>

			</div>

			<div class="column is-7 mt40 mt0-mobile waypoint animation_right_d1">

				<div class="columns">
					<div class="column is-4 item pr50 pr30-tablet pr10-mobile is-clickable mb10-mobile is-active" data-item="1">
						<div class="num mr30 mr10-tablet ml15-mobile has-text-centered is-inline-block">1</div> <span>Flora</span>
						<hr>
						<p>Área privativa total</p>
						<span class="has-text-weight-light">650,12 m²</span>
					</div>

					<div class="column is-4 item pr50 pr30-tablet pr10-mobile is-clickable mb10-mobile" data-item="2">
						<div class="num mr30 mr10-tablet ml15-mobile has-text-centered is-inline-block">2</div> <span>Aurora</span>
						<hr>
						<p>Área privativa total</p>
						<span class="has-text-weight-light">637,08 m²</span>
					</div>

					<div class="column is-4 item pr50 pr30-tablet pr10-mobile is-clickable" data-item="3">
						<div class="num mr30 mr10-tablet ml15-mobile has-text-centered is-inline-block">3</div> <span>Onda</span>
						<hr>
						<p>Área privativa total</p>
						<span class="has-text-weight-light">638,63 m²</span>
					</div>
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








<div class="section-galeria pt0" id="galeria2">
	<div class="slide-casas owl-carousel owl-theme">
		
		<?php foreach ($qGaleria2 as $rs) { $IMG_WEBP = altera_ext_webp(HTTP_UPLOADS_IMG.( $MOBILE ? "tb-" : "md-" ).$rs->arquivo); ?>
			
		<div class="item">
			<a data-fancybox="gallery-456" data-caption='<?=($rs->legenda?$rs->legenda:EMPRESA); ?>'  href="<?=HTTP_UPLOADS_IMG.'lg-'.$rs->arquivo; ?>" title="<?=($rs->legenda?$rs->legenda:EMPRESA); ?>">

				<div class="legenda is-uppercase waypoint animation_left"><?=$rs->legenda?></div>

				<picture>
					<source srcset="<?=$IMG_WEBP?>" type="image/webp">
					<source srcset="<?=HTTP_UPLOADS_IMG.( $MOBILE ? "tb-" : "md-" ).$rs->arquivo;?>" type="image/jpeg">
					<img class="is-block" src="<?=$IMG_WEBP?>" alt="<?=($rs->legenda?$rs->legenda:EMPRESA); ?>">
				</picture>
			</a>
		</div>

		<?php } ?>

	</div>
</div>







<!-- <div class="casa-brisa is-relative">
	<div class="wrap wide pt10">
		<div class="columns is-mobile mt60">
			<div class="column is-6 pl40 pl10-mobile">
				<h2 class="font-primary waypoint animation_left_d2">CASA BRISA</h2>
			</div>
			<div class="column is-6 pr40 pr10-mobile has-text-right">
				<img src="<?=IMG?>aram-logo-light.svg" alt="logo aram" class="waypoint animation_right_d2">
			</div>
		</div>
	</div>
</div> -->






















<section class="section-plantas" id="plantas2">
	<div class="wrap wide mt50 mt20-mobile mb40 mb0-mobile pl0-mobile pr0-mobile">

		<h2 class="has-text-centered waypoint animation_bottom">CASAS BRISA, <br class="is-hidden-tablet"> SERENA E AREIA</h2>

		<div 
			class="plantas-slide cycle-slideshow mt140 mt100-tablet mt60-mobile waypoint animation_bottom" 
			data-cycle-slides=".li" 
			data-cycle-timeout="0" 
			data-cycle-log="false" 
			data-cycle-pager="#plantas-nav2"
			data-cycle-pause-on-hover="true"
    		data-cycle-pager-template=""
    		data-cycle-reverse="true"
			data-cycle-starting-slide="2"
    	>

			<div class="li">
				<div class="columns is-multiline is-mobile">
					<div class="column is-12">
						<div class="box-img">
							<a href="<?=IMG?>plantas/brisa-01-lg.webp" data-fancybox="planta-brisa" data-caption="ROOFTOP">
								<picture>
									<source srcset="<?=IMG?>plantas/brisa-01-mobile.webp" media="(max-width: 578px)">
									<source srcset="<?=IMG?>plantas/brisa-01.webp" media="(min-width: 579px)">
									<img src="<?=IMG?>plantas/brisa-01.webp" alt="planta">
								</picture>
							</a>
						</div>
					</div>

					<div class="column is-1 is-hidden-touch is-hidden-desktop-only"></div>
					<div class="column is-3-tablet is-12-mobile leg pl40-mobile waypoint animation_left">ROOFTOP</div>
				</div>
			</div>


			<div class="li">
				<div class="columns is-multiline is-mobile">
					<div class="column is-12">
						<div class="box-img">
							<a href="<?=IMG?>/plantas/brisa-02-lg.webp" data-fancybox="planta-brisa" data-caption="PAVIMENTO SUPERIOR">
								<picture>
									<source srcset="<?=IMG?>plantas/brisa-02-mobile.webp" media="(max-width: 578px)">
									<source srcset="<?=IMG?>plantas/brisa-02.webp" media="(min-width: 579px)">
									<img src="<?=IMG?>plantas/brisa-02.webp" alt="planta">
								</picture>
							</a>
						</div>
					</div>

					<div class="column is-1 is-hidden-touch is-hidden-desktop-only"></div>
					<div class="column is-narrow-tablet is-6-mobile pl0 leg pl40-mobile">PAVIMENTO SUPERIOR</div>
				</div>
			</div>


			<div class="li">
				<div class="columns is-multiline is-mobile">
					<div class="column is-12">
						<div class="box-img">
							<a href="<?=IMG?>/plantas/brisa-03-lg.webp" data-fancybox="planta-brisa" data-caption="TÉRREO">
								<picture>
									<source srcset="<?=IMG?>plantas/brisa-03-mobile.webp" media="(max-width: 578px)">
									<source srcset="<?=IMG?>plantas/brisa-03.webp" media="(min-width: 579px)">
									<img src="<?=IMG?>plantas/brisa-03.webp" alt="planta">
								</picture>
							</a>
						</div>
					</div>

					<div class="column is-1 is-hidden-touch is-hidden-desktop-only"></div>
					<div class="column is-3-tablet is-12-mobile leg pl40-mobile">TÉRREO</div>
				</div>
			</div>

		</div>



		<div class="plantas-nav mr110 mr0-tablet mr0-mobile is-relative waypoint animation_bottom" id="plantas-nav2">
			<a><span>ROOFTOP</span></a>
			<a><span>PAVIMENTO SUPERIOR</span></a>
			<a><span>TÉRREO</span></a>
		</div>


	</div>
</section>










<section class="section-area-construida" id="area-construida-2">
	<div class="wrap">

		<p class="tit has-text-weight-light mb10 waypoint animation_left">ÁREA EDIFICADA TOTAL</p>
		<h2 class="waypoint animation_left_d1">702,47 m²</h2>


		<div class="columns is-mobile is-multiline mt180 mt100-tablet mt70-mobile is-centered">
			<div class="column is-5-tablet is-12-mobile waypoint animation_left">

				<div class="is-relative">
					<a href="#plantas1" class="smooth-scroll-link">
						<div class="mark m1 is-clickable"></div>
					</a>

					<a href="#plantas1" class="smooth-scroll-link">
						<div class="mark m2 is-clickable"></div>
					</a>

					<a href="#plantas1" class="smooth-scroll-link">
						<div class="mark m3 is-clickable"></div>
					</a>

					<img class="mark img m4 is-active" src="<?=IMG?>mark-2.svg" alt="marcador">
					<img class="mark img m5" src="<?=IMG?>mark-2.svg" alt="marcador">
					<img class="mark img m6" src="<?=IMG?>mark-6.svg" alt="marcador">

					<img src="<?=IMG?>marcacao-casas-1.webp" alt="planta">
				</div>

			</div>

			<div class="column is-7 mt40 mt0-mobile waypoint animation_right_d1">

				<div class="columns">

					<div class="column is-4 item pr50 pr30-tablet pr10-mobile is-clickable mb10-mobile is-active" data-item="4">
						<div class="num mr30 ml15-mobile has-text-centered is-inline-block">4</div> <span>Brisa</span>
						<hr>
						<p>Área privativa total</p>
						<span class="has-text-weight-light">1.168,48 m²</span>
					</div>

					<div class="column is-4 item pr50 pr30-tablet pr10-mobile is-clickable mb10-mobile" data-item="5">
						<div class="num mr30 ml15-mobile has-text-centered is-inline-block">5</div> <span>Serena</span>
						<hr>
						<p>Área privativa total</p>
						<span class="has-text-weight-light">1.159,51 m²</span>
					</div>

					<div class="column is-4 item pr50 pr30-tablet pr10-mobile is-clickable" data-item="6">
						<div class="num mr30 mr10-tablet ml15-mobile has-text-centered is-inline-block">6</div> <span>Areia</span>
						<hr>
						<p>Área privativa total</p>
						<span class="has-text-weight-light">1.166,73 m²</span>
					</div>
				</div>

			</div>
		</div>


	</div>
</section>





























<section class="section-studio bg-root color-gray-light" id="equipe-tecnica">
	<div class="wrap">


		<div class="columns is-multiline is-mobile mt150 mt60-tablet mt0-mobile">
			
			<div class="column is-1"></div>

			<div class="column is-5-widescreen is-4-desktop is-5-tablet is-12-mobile pl20 pl20-mobile pr0 pr15-mobile has-text-right has-text-left-mobile">
				<small class="has-text-weight-light arq is-block mt5">ARQUITETURA</small>
				<img src="<?=IMG?>/studio-arthur-casas.svg" alt="logo arthur casas" class="mt25 mt10-tablet">

				<img src="<?php echo IMG?>arthur-casas.webp" alt="arthur casas" loading="lazy" class="mt30 is-hidden-tablet">

				<p class="has-text-weight-light mt40 mt30-mobile">
					Arthur Casas é um arquiteto brasileiro de renome com mais de 200 projetos em todo o mundo, conhecido por sua arquitetura autoral que integra interior e exterior com harmonia. Inspirado pela brasilidade e pela natureza, seus projetos utilizam materiais naturais e cores claras para criar ambientes refinados e tranquilos.
				</p>
			</div>

			<!-- DESKTOP -->
			<div class="column is-6-widescreen is-5-desktop is-4-tablet is-12-mobile pl60 is-hidden-mobile">
				<img src="<?php echo IMG?>arthur-casas.webp" alt="arthur casas" loading="lazy">
			</div>
			<!-- /DESKTOP -->
		</div>





		<div class="columns is-multiline is-mobile mt150 mt50-tablet mt20-mobile mb80 mb30-tablet mb0-mobile">

			<div class="column is-6-tablet pr0 has-text-right is-hidden-mobile">
				<img src="<?php echo IMG?>jundu-paisagismo.webp" alt="jundu paisagismo" loading="lazy">
			</div>

			<div class="column is-5-tablet is-12-mobile pl60 pl20-mobile pr30 pr20-tablet pr15-mobile mt40-mobile">
				<small class="has-text-weight-light is-block">PAISAGISMO</small>
				<img src="<?=IMG?>/jundu-logo.svg" alt="logo jundu paisagismo" class="mt25 mt10-tablet">


				<img class="is-hidden-tablet mt30" src="<?php echo IMG?>jundu-paisagismo.webp" alt="jundu paisagismo" loading="lazy">


				<p class="has-text-weight-light mt40 mt30-mobile">
					A Jundu Paisagismo, fundada por Airton Santos em 1985, é especializada em criar projetos que harmonizam arquitetura e natureza, utilizando plantas nativas para valorizar o entorno.<br>
					Com uma abordagem sensível e experiente, a empresa transforma espaços em ambientes funcionais e esteticamente integrados, destacando-se no paisagismo tropical.
				</p>
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



<section class="section-obras pt50 pt10-mobile pb30-mobile" id="obras">
	<div class="wrap">

		<hr class="bg-root mt0 ml-auto mr-auto waypoint animation_scale">



		<img class="is-block is-hidden-tablet mt70 mr-auto ml-auto" src="<?=IMG?>aram-logo-dark.svg" alt="aram logo" loading="lazy">

		<div class="columns mt150 mt80-mobile">
			<div class="column is-6">
				<h2 class="has-text-centered-mobile mb0-mobile">ESTÁGIO DE OBRAS</h2>
			</div>
			<div class="column is-6 has-text-right is-hidden-mobile">
				<img src="<?=IMG?>aram-logo-dark.svg" alt="aram logo" loading="lazy">
			</div>
		</div>




		<div class="columns is-mobile is-multiline mt30 mt0-mobile mb80 mb0-mobile">
			<div class="column is-8-desktop is-7-tablet is-12-mobile pr90 pr10-tablet pr10-mobile">

				<div class="slide-obras owl-carousel owl-theme">

					<?php if ($qObras) { ?>
						<?php foreach ($qObras as $rs) { $IMG_WEBP = altera_ext_webp(HTTP_UPLOADS_IMG.'tb-'.$rs->arquivo); ?>

					<div class="item">
						<a href="<?php echo HTTP_UPLOADS_IMG.'lg-'.$rs->arquivo; ?>" data-fancybox="gallery-obras" data-caption="<?=$rs->legenda?>">
							<picture>
								<source srcset="<?=$IMG_WEBP?>" type="image/webp">
								<source srcset="<?=HTTP_UPLOADS_IMG.($MOBILE?'tb-':'md-').$rs->arquivo;?>" type="image/jpeg">
								<img class="box-img" src="<?=$IMG_WEBP?>" alt="<?=$rs->titulo; ?>">
							</picture>

							<div class="legenda">teste<?=$rs->legenda?></div>
						</a>
					</div>
			
						<?php } ?>
					<?php } ?>
				</div>


				<p class="mt50 frase-total has-text-weight-light">
					TOTAL DA OBRA <span class="total-obra font-secondary"><?=$qConfig->total?></span>
					<span class="small is-block-mobile xhas-text-centered-mobile">ATUALIZAÇÃO <?=$qConfig->atualizacao_obras?></span>
				</p>

			</div>




			<div class="column is-4-desktop is-5-tablet is-12-mobile box-andamento pl30 pl10-mobile mt10 mt50-mobile">
				<?php foreach ($aEstagiosObra as $legenda => $valor) { ?>
				<div class="is-relative mb40">
					<div class="legenda"><?=$valor?></div>
					<div class="line waypoint animation_scale_d2" style="width: <?=only_number($qConfig->{$legenda})?>%;"></div>
					<hr>
					<div class="perc font-secondary"><?=only_number($qConfig->{$legenda})?>%</div>
				</div>
				<?php } ?>
			</div>

			
		</div>
						
	</div>
</section>






















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