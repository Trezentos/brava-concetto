<?php

$qPlantas = $db->get_results("SELECT * FROM {$tables['PLANTAS']} WHERE status=1 ORDER BY ordem ASC");
$qPlantasImagens = $db->get_results("SELECT * FROM {$tables['PLANTAS_IMAGENS']} WHERE status=1 ORDER BY ordem ASC");



?>



<div class="plantas-nav" id="plantas-nav">
    <?php foreach ($qPlantas as $qPlanta): ?>
        <button class="btn">
            <span><?=$qPlanta->titulo?></span>
        </button>
    <?php endforeach; ?>
</div>

<div
        class="cycle-slideshow plantas-slide mt65"
        data-cycle-slides=".li"
        data-cycle-timeout="400000"
        data-cycle-pause-on-hover="false"
        data-cycle-log="false"
        data-cycle-speed="1000"
        data-cycle-pager="#plantas-nav"
        data-cycle-pager-template=""
>
    <?php foreach ($qPlantas as $qPlanta): ?>
        <div class="li">

            <div class="carrousel-1 owl-carousel owl-theme">
                <?php foreach ($qPlantasImagens as $qPlantasImagem): ?>
                    <?php
                        if ($qPlantasImagem->planta_id != $qPlanta->id) continue;
                        $hasBlock   = !empty($qPlantasImagem->metragem) | !empty($qPlantasImagem->descricao);
                    ?>
                    <a
                            href="<?= HTTP_UPLOADS_IMG.'lg-'.$qPlantasImagem->arquivo; ?>"
                            data-fancybox="<?=$qPlantasImagem->planta_id?>"
                            data-caption="<?=$qPlantasImagem->titulo?>"
                            class=""
                    >
                        <div class="item pt125 pb150" data-title="<?= htmlspecialchars($qPlantasImagem->titulo) ?>" style="<?= $hasBlock ? '': 'justify-content: center;' ?>">
                            <figure>
                                <img src="<?=HTTP_UPLOADS_IMG.$qPlantasImagem->arquivo?>" alt="<?=$qPlantasImagem->titulo?>">
                            </figure>
    
                            <div class="info-block  <?=$hasBlock ? '' : 'is-hidden'?>">
    
                                <?php if (!empty($qPlantasImagem->metragem)): ?>
                                    <div class="mb30">
                                        <img src="<?=IMG.'icons/metragem-carousel.svg'?>" alt="">
                                        <p><?= $qPlantasImagem->metragem ?></p>
                                    </div>
                                <?php endif; ?>
    
                                <?php if (!empty($qPlantasImagem->descricao)): ?>
                                    <p><?= $qPlantasImagem->descricao ?></p>
                                <?php endif; ?>
    
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>

        </div>
    <?php endforeach; ?>
</div>





