<?php 
$filename = "images/logo.png"; 

$base64 = base64_encode(file_get_contents($filename));

$fileinfo = new finfo(FILEINFO_MIMI_TYPE);

$mimetype = $fileinfo->file($filename);
 echo "data:".$mimetype.";base64,".$base64;


/*			ESTATICO   */
// echo "data:image/png;base64,".$base64;

/*
if(file_exists($filename) ){
	$file=fopen($filename, "r");
	$headers = explode(",",fgets($file));

	$data = array();

	while($row = fgets($file)){

		$rowData=explode(",",$row);
		$linha=array();

		for ($i=0;$i<count($headers);$i++){
			$linha[$headers[$i]] = $rowData[$i];
		}

		array_push($data,$linha);

	}
	fclose($file);

echo 	json_encode($data);
}*/
?>