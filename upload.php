<?php
	$file =  $_FILES['myfile'];
	$filename = $file['name'];
	echo $filename;
	//echo $file['type'];
	if($file['size']<500000){
		if($file['type'] == "image/jpeg"){
		   move_uploaded_file($file['tmp_name'],"uploads/images/".$file['name']);
		}
		elseif($file['type'] == "text/plain" || $file['type'] == "application/pdf" || $file['type'] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document" ){
			move_uploaded_file($file['tmp_name'],"/uploads/documents/".$file['name']);
		}
	}
	else{
		echo "File is too Large";
	}
?>