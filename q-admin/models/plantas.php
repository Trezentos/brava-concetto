<?php

$__TABLE__ 	 = 'PLANTAS';
$__TABLE_CHILDREN__  = 'PLANTAS_IMAGENS';


# HEADERS
$_header['titulo'] 	= 'Banners';
$_header['icon'] 	= 'picture-o';



# FOR LIST
$count = $db->get_var("SELECT COUNT(id) FROM ".$tables[$__TABLE__]);




# SET ID
if ($_POST['id']) {
	$id = $_POST['id'];
} else {
	$id = $_REQUEST['id'];
}

$id = $db->sanitize($id);






if($_POST && isset($_POST['submit']))
{

	# VALIDATION

	require PHP . "classes/Class.validacao.php";

	// $rules[] = "required,titulo,Título";

	$errors = validateFields($_POST, $rules);




	$info_video = video_image(trim($_POST['video']));
	$video_code = $info_video['codigo'];


	# PREPARE DATA

	$array_data = [
		'titulo' 	 	=> $_POST['titulo'],
		'status' 		=> $_POST['status'],
	];




	switch($_POST['action'])
	{

		case 'adicionar':
		
			if (empty($errors))
			{
				$insert = $db->insert($tables[$__TABLE__], $array_data);
				//$db->debug();

				if($insert) {
					$alertSuccess = true;
					$alertMessage = 'Registro salvo com sucesso!';
					$id  		  = $db->lastInserId();
				} else {
					$alertFail 	  = true;
					$alertMessage = 'Não foi possível salvar o registro!';
				}
			}

		break;





		case 'alterar':
		
			if (empty($errors))
			{
				$db->update($tables[$__TABLE__], $array_data, ['id'=>$_POST['id']]);

				$alertSuccess = true;
				$alertMessage = 'Registro salvo com sucesso!';
			}

		break;
	}


}



# DELETE REG
if ($_REQUEST && isset($_REQUEST['delete']))
{

	$db->query("DELETE FROM ".$tables[$__TABLE__]." WHERE id='{$id}'");

	# REDIRECT
	header("Location: ".HTTP_GESTOR."list/".SELF_PAG."?del=ok");
}


if( is_numeric($_GET["del_item_planta_imagem"]) )
{
    $db->query("DELETE FROM ".$tables[$__TABLE_CHILDREN__]." WHERE id='{$_GET["del_item_planta_imagem"]}'");

    $alertSuccess = true;
    $alertMessage = 'Registro excluído com sucesso!';
}





if($id) {
	$q = $db->get_row("SELECT * FROM ".$tables[$__TABLE__]." WHERE id='{$id}'");
    $qItensChildren = $db->get_results("SELECT * FROM ".$tables[$__TABLE_CHILDREN__]." WHERE planta_id='{$id}' ORDER BY ordem ASC");

	if( $q->video ){ $url = "https://www.youtube.com/watch?v=".$q->video; }
}

if($_GET['del']=='ok'){
	$alertSuccess  = true;
	$alertMessage = 'Registro excluído com sucesso!';
}