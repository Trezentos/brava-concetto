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
]);


get_header_gestor();
get_barra_header();
?>

<form name="form" id="form" action="" method="post" enctype="multipart/form-data" role="form">
	<div id="buttons">
		<div class="pull-left">
			<?php
			btn_save();
            if ($q) btn_delete_form_item($_GET['id_pai'], $id);
			?>
		</div>
		<div class="pull-right">
			<?php
            btn_add_item($_GET['id_pai'], SELF_PAG);
            btn_back_item($_GET['id_pai'], $__PAGE_PARENT__);
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

        <div class="row">
            <div class="form-group col-md-6">
                <?php get_input_text('metragem', 'Metragem', $q->metragem) ?>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <label>Descrição *</label>
                <textarea name="descricao" class="tinymce-basic"><?=stripslashes( ($q ? $q->descricao : $_POST['descricao']) ); ?></textarea>
            </div>
        </div>

		<hr>

        <div class="well orm-group col-md-6">
            <?php
            $imgUpload = new ImageUploadComponent('arquivo', 'Imagem Planta', $q->arquivo, $_GET['id_pai']);
            $imgUpload->setObs('A imagem deve ter 760x540px.');
            $imgUpload->render();
            ?>
        </div>



		<input type="hidden" name="id" 	   value="<?php echo ($id?$id:false); ?>" />
		<input type="hidden" name="action" value="<?php echo ($id?'alterar':'adicionar'); ?>" />
	</fieldset>
</form>

<?php get_footer_gestor(); ?>