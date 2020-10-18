<?php
	$host = "localhost";
	$dbUser = "obaidullah";
	$dbPwd = "obaidullah123";
	$dbName = "youtubeuserdata";
	 $connect = mysqli_connect($host,$dbUser,$dbPwd,$dbName);
	 if($connect=false){
	 	echo "Data connection errr";
	}else{
		echo "No";
	}
	?>