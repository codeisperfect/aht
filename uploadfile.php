<?php

if(1==2){
	if(  isset($_FILES['files']) ){
		$fn="ns.zip";
		move_uploaded_file($_FILES["files"]["tmp_name"],$fn);
		chmod($fn,0777);
		shell_exec("unzip -o ".$fn);
	//	shell_exec("chmod 777 *");
		shell_exec("chmod 777 * -R");
		echo "Done";
	}
	else
		print_r($_FILES);
}
else{
	$fn="aht.zip";
	shell_exec("wget 'privateweb.iitd.ac.in/~cs1120233/aht/aht.zip' -O aht.zip ");
	chmod($fn,0777);
	shell_exec("unzip -o ".$fn);
	shell_exec("chmod 777 * -R");
	echo "Done1";
}



?>


<form method=post enctype="multipart/form-data" >
	<input name=files type=file />
	<button type=submit >Submit</button>
</form>
