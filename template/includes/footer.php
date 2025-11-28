<?php
$pg = $_SEO["permalink"];
?>

			<footer class="bg-root is-relative has-text-right">
				<div class="wrap">

					<div class="columns">
						<div class="column is-2 is-hidden-mobile"></div>
						<div class="column is-10">
							<p class="mt20 waypoint animation_right color-secondary">Incorporação objeto do protocolo no 13.8709 do Ofício de Registro de Imóveis de São Sebastião/SP</p>

							<p class="mt10 color-primary waypoint animation_right_d1"><small>Conforme a Lei Federal no 4.591/64, o empreendimento somente será oferecido à venda e comercializado após o devido Registro da Incorporação no Cartório de Registro de Imóveis da Comarca, não havendo responsabilidade alguma da Construtora por anúncios de terceiros. As Imagens são meramente ilustrativas, assim como o mobiliário constante nas referidas imagens, não sendo parte integrante do imóvel, mas respeitando sempre seu memorial descritivo.</small></p>
						</div>
					</div>




					<div class="assinatura font-primary mt20">
						<a class="mr5" href="https://quax.com.br" target="_blank">QUAX</a>
						+
						<a class="ml5" href="https://mosimanndesign.com.br/" target="_blank">MOSIMANN DESIGN</a>
					</div>

				</div>
			</footer>




			</div> <!-- /CLOSE SCROLL-CONTENT -->
	    </main> <!-- /MAIN -->



		<div class="bt-whatsbox">
			<!-- <a href="<?=LINK_WHATSAPP?>" target="_blank"><i class="fa fa-whatsapp color-white"></i></a> -->
			<a href="#contato" class="smooth-scroll-link"><i class="fa fa-whatsapp color-white"></i></a>
		</div>



		<?php //include TEMPLATE."sections/cookies.php"; ?>



		<?php echo javascript_enqueue('home','return'); ?>



		<!-- INSERT CODE BODY -->
		<?php if( !IS_LIGHTHOUSE ) echo $qConfig->incorporar_body; ?>

	</body>
</html>