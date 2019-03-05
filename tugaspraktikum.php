<?php
	$organisasi = array(
		$keagamaan = array(
			"ketua"	=> "siti",
			"wakil"	=>"maryam",
			"anggota" => "husni"
		),

		$kebersihan = array(
			"ketua"	=> "aditya",
			"wakil"	=> "",
			"sekretaris" => "chulis"
		),

		$kemanusiaan = array(
			"ketua"	=> "pratama",
			"wakil"	=> "nugraha"
		)
	);

	foreach ($keagamaan as $key => $value){
		echo $keagamaan[$key];
	}

	foreach ($kebersihan as $key => $value){
		echo $kebersihan[$key];
	}

	foreach ($kemanusiaan as $key => $value){
		echo $kemanusiaan[$key];
	}
?> 