<?php

$__TABLE__ 	 = 'PLANTAS_IMAGENS';
$__PAGE_PARENT__  = 'plantas.php';

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
		'descricao' 	=> $_POST['descricao'],
		'metragem' 	    => $_POST['metragem'],
        'planta_id'     => $_GET['id_pai'],
	];






	switch($_POST['action'])
	{

		case 'adicionar':
		
			if (empty($errors))
			{
				$insert = $db->insert($tables[$__TABLE__], $array_data);

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






	$extensao = "webp";

	if( $id )
	{
		require PHP.'classes/Class.imagem.php';

		
		# INSERT IMAGE
		$upload_temp = upload('arquivo',TEMP,MAX_SIZE);
		
		if($upload_temp[0] == 'true')
		{
			$fileName 	 = $upload_temp[1];
			$fileNewName = 'planta-brava-concetto'.$id.'-'.rand(0,999);

			$image = new Image(TEMP.$fileName);
			$image->setPathToTempFiles(TEMP);
			$image->resize(760, 540, "fit", "c", "c", 90, "webp");
			$image->save(ROOT_UPLOADS_IMG.$fileNewName, "", "webp");


            $imageLG = new Image(TEMP.$fileName);
            $imageLG->setPathToTempFiles(TEMP);
            $imageLG->resize(1520, 1080, "fit", "c", "c", 90, "webp");
            $imageLG->save(ROOT_UPLOADS_IMG."lg-".$fileNewName, "", "webp");

			
			$fileNewName = $fileNewName.'.'.$extensao;
			$db->update($tables[$__TABLE__], ['arquivo' => $fileNewName], ['id'=>$id]);

			@unlink(TEMP.$fileName);
		}


		# DELETE IMAGE AND INSERT NEXT
		$_GET["del_img"] = 0;
	}
}






# DELETE IMAGE
if( $_GET["del_img"] == "1" && $_GET["arquivo"] == "1" )
{
	deleteImg($id, $__TABLE__, "arquivo", ROOT_UPLOADS_IMG);

	$db->update($tables[$__TABLE__], ['arquivo' => NULL], ['id'=>$id]);
	
	$alertSuccess = true;
	$alertMessage = 'Imagem excluída com sucesso!';
}




# DELETE REG
if ($_REQUEST && isset($_REQUEST['delete']))
{
	deleteImg($id, $__TABLE__, "arquivo", ROOT_UPLOADS_IMG);

	$db->query("DELETE FROM ".$tables[$__TABLE__]." WHERE id='{$id}'");

	# REDIRECT
	header("Location: ".HTTP_GESTOR."form/".$__PAGE_PARENT__."?id=".$_GET['id_pai']."del=ok");
}





if($id) {
	$q = $db->get_row("SELECT * FROM ".$tables[$__TABLE__]." WHERE id='{$id}'");
	if( $q->video ){ $url = "https://www.youtube.com/watch?v=".$q->video; }
}

if($_GET['del']=='ok'){
	$alertSuccess  = true;
	$alertMessage = 'Registro excluído com sucesso!';
}