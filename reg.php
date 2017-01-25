<?

		$fp = fopen("./reg_log.txt","a"); 
		$c = mktime(); 
		$a = getenv("REMOTE_ADDR"); 
		$b = getenv("REMOTE_HOST"); 

		if ($a != "211.109.26.202" && $a != "143.248.133.182") {
			fwrite($fp,date('Y',$c)."/".date('m',$c)."/".date('d',$c)." ".date('H',$c).":".date('i',$c).":".date('s',$c)." "); 
			fwrite($fp,$a." ".$b."\n"); 
		}

		fclose($fp);  
?>
		<head>
		<base target="reg">
		</head>

<body bgcolor=white></body>
