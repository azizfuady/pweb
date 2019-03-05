<?php

/*	$nama= "praktikum pemweb";
	print $nama;
	echo $nama;

	$x = "5";
	$y = $x;
	print $y;

	$arrayname = array("maryam","chulis");
	print_r($arrayname);
	echo $arrayname[0];
	echo $arrayname[1];

	for ($i=0; $i<2; $i++){
		echo $arrayname[$i];
	}

	$mahasiswa = array(
		"nama"=> "maryam",
		"nim"=> "16650036",
		"kampus"=> "uin"
	);

	foreach ($mahasiswa as $key => $value){
		echo $mahasiswa[$key];
	}
*/

	$kampus = array(
		array(
			"nama"=> "maryam",
			"nim"=> "16650036",
			"kampus"=> "uin"
		),
		array(
			"nama"=> "husni",
			"nim"=> "16650055",
			"kampus"=> "ukdw"
		)
	);

/*	print_r($kampus); 
	echo $kampus[0]["nama"];
	echo $kampus[1]["nim"];

	for($i=0; $i<2; $i++){
		foreach($kampus[$i] as $key => $value){
			echo $kampus[$i][$key]."<br>";
			echo $value. "<br>";
		}
	}
*/
	$nama = "";
	if(empty($nama) || $nama == "" || $nama === ""){
		echo "kosong";
	}
	else{
		echo "ada";
	}

	$suhu = 30;
	if ($suhu < 20){echo "dingin";}
	else if ($suhu <40){echo "biasa";}
	else if ($suhu <80){echo "panas";}
	else {echo "panas sekali";}

?>