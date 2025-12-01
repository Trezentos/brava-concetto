<?php
$menu_items = [
    ['href' => '#início',       'label' => 'início',        'time' => 3000],
    ['href' => '#apresentação', 'label' => 'apresentação',  'time' => 3000],
    ['href' => '#detalhes',     'label' => 'detalhes',      'time' => 5000],
    ['href' => '#galeria',      'label' => 'galeria',       'time' => 5000],
    ['href' => '#plantas',      'label' => 'plantas',       'time' => 5000],
    ['href' => '#localização',  'label' => 'localização',   'time' => 5000],
    ['href' => '#fale-conosco', 'label' => 'fale conosco',  'time' => 5000],
];
?>
<div class="menu waypoint animation_bottom ">

    <img class="bt-close-menu waypoint animation_scale" src="<?=IMG?>icons/close.svg" alt="Fechar">

    <div class="container-menu xhas-text-centered">
        <img src="<?=IMG.'brava-concetto-logo.svg'?>" class="waypoint animation_right_d1 animated main-logo" alt="">
        <ul class="waypoint animation_right_d1 animated font-secondary mt35">
            <?php foreach ($menu_items as $item): ?>
                <li>
                    <a href="<?= $item['href'] ?>" class="menu-item smooth-scroll-link pt20-notebook pb20-notebook" data-smooth-time-link="<?= $item['time'] ?>">
                        <?= $item['label'] ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
        <div class="redes-sociais-menu mt50 waypoint animation_bottom_d2 animated">
            <?php include TEMPLATE.'sections/redes-sociais.php' ?>
            <p><?=ENDERECO?></p>
        </div>
    </div>

</div>