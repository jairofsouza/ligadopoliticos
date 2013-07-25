<?php	
	
	function getProperty($string){

		$dados = fopen("application.properties","r");
		
		while (!feof($dados)) {

			$linha = fgets($dados, 4096);

			$pos = stripos($linha, $string);
			

			if($pos !== false) {
				
				$db= trim(str_replace($string,"",$linha));
				
			}
		
		}
			
		fclose($dados);
		

		return $db;	
	}

?>
