<?php
$pg = $_SEO["permalink"];

$pages = [
    [
        'text' => 'início',
        'link' => '#inicio',
    ],
    [
        'text' => 'apresentação',
        'link' => '#apresentacao',
    ],
    [
        'text' => 'detalhes',
        'link' => '#detalhes',
    ],
    [
        'text' => 'galeria',
        'link' => '#galeria',
    ],
    [
        'text' => 'plantas',
        'link' => '#plantas',
    ],
    [
        'text' => 'localizacao',
        'link' => '#localização',
    ],
    [
        'text' => 'fale conosco',
        'link' => '#fale-conosco',
    ]
]

?>

			<footer class="bg-white is-relative has-text-right pt60 pb25">
				<div class="wrap">
                    <div class="content-footer">
                        <img src="<?=IMG.'brava-concetto-logo-escuro.svg'?>" class="" alt="">

                        <p class="mt45 mb45 address"><?=ENDERECO?></p>

                        <ul>
                            <?php foreach($pages as $page): ?>
                                <li>
                                    <a class="menu-item smooth-scroll-link" href="<?=$page['link']?>"><p><?=$page['text']?></p></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>

                        <div class="redes-container mt70">
                            <?php include TEMPLATE.'sections/redes-sociais.php' ?>
                        </div>

                        <img src="<?=IMG.'icons/clarus-logo.svg'?>" class="mt50 mb40" alt="">

                        <p>© 2025 Clarus - Todos os direitos reservados</p>
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