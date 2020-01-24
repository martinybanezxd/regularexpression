<?php
	$targetDir = "";
	$fileName = basename($_FILES['file']['name']);
	$targetFilePath = $targetDir.$fileName;
	$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

	if(isset($_POST['submit']) && !empty($_FILES['file']['name'])){
		$allowTypes = array ('jpeg','png','gif','pdf','jpg');

		if (in_array($fileType, $allowTypes)){
			if (move_uploaded_file($_FILES['file']['tmp_name'],$targetFilePath)){
				echo "Successfully uploaded!";
			}
			elseif($_FILES['file']['size'] < 1033414){
 				echo " Size must not exceed 1mb above.";
				}
			elseif($_FILES['file']['size'] > 1033414){
 				echo "";
				}

			else{
				echo "File is not acceptable.";
			}

		}
		
	}
?>