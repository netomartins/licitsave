<?php
	
	copy($_FILES['file-input']['tmp_name'], 'uploads/'.$_FILES['file-input']['name']);
	echo 'uploads/'.$_FILES['file-input']['name'];
?>