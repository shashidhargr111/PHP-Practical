<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
	
	$file = "example.txt";

	if($handle = fopen($file, 'r')){

	echo $contents= fread($handle,5);//filesize($file)


		fclose($handle);

	}else{


		echo "the files could not be written";

	}

	

	

?>

</body>
</html>

