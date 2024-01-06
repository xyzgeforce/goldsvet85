<?php

#Função get para receber os parametros
$file = $_GET['file'];
$text = $_GET['text'];

$out ="";

if (strstr($text, '|')) {
$valore=explode("|",$text,-1);

foreach ($valore as $valor) {
   $out.= $valor.PHP_EOL;
}


$texto = $out;
}else{
   $texto = $text; 
}
#Identificação do cabeçalho para o Navegador 
 header("Content-Type: application/force-download");
 header("Content-type: application/octet-stream;");
 header("Content-disposition: attachment; filename=" . $file );
 header("Pragma: no-cache");
 header("Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0");
 header("Expires: 0");
    	

#Gerando o arquivo texto em dinamicamente
$_file  = fopen($file,'w-');
fwrite($_file,$texto);
fclose($_file);
readfile($file);
flush();
exit;
?>