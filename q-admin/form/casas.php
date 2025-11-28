<?php 
require __DIR__ . '/../config.php';
require GESTOR_MODELS . SELF_PAG;
require_once GESTOR_CLASS . 'imageUploadComponent.php';


# HEADERS
$_header['titulo'] = ($id ? 'Editar' : 'Nova').' Casa';


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
			<div class="form-group col-md-5">
				<?php get_input_text('titulo', 'Título', $q->titulo, 'required'); ?>
			</div>

			<div class="form-group col-md-5">
				<?php get_input_text('subtitulo', 'Metragem', $q->subtitulo); ?>
			</div>

			<div class="form-group col-md-2">
				<?php get_checkbox_switch('status', 'Status', $q->status); ?>
			</div>

            <div class="form-group col-md-5">
				<?php get_input_textarea('texto', 'Texto', $q->texto, 'form-control input-sm'); ?>
			</div>

            <div class="form-group col-md-5">
				<?php get_input_text('vendido', 'Vendido', $q->vendido); ?>
			</div>
		</div>

		
		<hr>


		<input type="hidden" name="id" 	   value="<?php echo ($id?$id:false); ?>" />
		<input type="hidden" name="action" value="<?php echo ($id?'alterar':'adicionar'); ?>" />
	</fieldset>
</form>

<?php get_footer_gestor(); ?>