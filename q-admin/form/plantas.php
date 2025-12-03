<?php 
require __DIR__ . '/../config.php';
require GESTOR_MODELS . SELF_PAG;
require_once GESTOR_CLASS . 'imageUploadComponent.php';


# HEADERS
$_header['titulo'] = ($id?'Editar':'Nova').' Planta - Home';


add_style([
	"css/lightbox.css",
]);

add_javascript([
	"jquery.tinymce.js",
	"script.textarea.js",
	"jquery.lightbox.min.js",
    "script.order.js",
]);


$queryChildren = $db->get_results("SELECT * FROM ".$tables[$__TABLE_CHILDREN__]." ORDER BY ordem ASC $navbar->limit");


get_header_gestor();
get_barra_header();


?>




<form name="form" id="form" action="" method="post" enctype="multipart/form-data" role="form">
	<div id="buttons">
		<div class="pull-left">
			<?php
                btn_save();
                if ($q) btn_delete_form($id);
			?>
		</div>
		<div class="pull-right">
			<?php
                btn_add();
                btn_back();
			?>
		</div>
	</div>

	<fieldset>
		<br>
		<div class="row">
			<div class="form-group col-md-6">
				<?php get_input_text('titulo', 'Título', $q->titulo) ?>
			</div> 


			<div class="form-group col-md-3">
				<?php get_checkbox_switch('status', 'Status', $q->status); ?>
			</div>
		</div>


		<input type="hidden" name="id" 	   value="<?php echo ($id?$id:false); ?>" />
		<input type="hidden" name="action" value="<?php echo ($id?'alterar':'adicionar'); ?>" />
	</fieldset>

    <hr>

    <h3>Plantas</h3>

    <div id="buttons">
        <?php btn_add_item($id, 'plantas-imagens.php'); ?>
    </div>

    <div class="table-responsive">
        <table class="table table-sort table-striped table-hover" data-table="<?=$__TABLE_CHILDREN__?>">
            <thead>
            <tr>
                <th class="pl-tb">Título</th>
                <th class="pl-tb">Metragem</th>
                <th>Imagem</th>
                <th>Status</th>
                <th class="actions text-center" data-sorter="false">Ações</th>
                <th class="order text-center" data-sorter="false">Ordenar</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($qItensChildren as $qPlantaImagem) { ?>
                <tr id="<?=$qPlantaImagem->id; ?>" class="ui-state-default">
                    <td class="pl-tb"><?=$qPlantaImagem->titulo; ?></td>
                    <td class="pl-tb"><?=$qPlantaImagem->metragem; ?></td>
                    <td><img src="<?=HTTP_UPLOADS_IMG.$qPlantaImagem->arquivo?>" width=100></td>
                    <td><?=get_status($qPlantaImagem->status); ?></td>
                    <td class="text-center">
                        <?php
                        btn_edit_item($id, $qPlantaImagem->id, 'plantas-imagens.php');
                        btn_delete_item($id, $qPlantaImagem->id, 'del_item_planta_imagem');
                        ?>
                    </td>
                    <?php btn_sort() ?>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>

</form>

<?php get_footer_gestor(); ?>