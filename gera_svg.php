<?php
/**
* @param resource $imagem Recebe a imagem svg
* @param string $cor_fundo Recebe a cor de cor_fundo
* @param string $cor_icone Recebe a cor de ícone
* @return resource Retorna a imagem gerada com as cores informadas. <br/>
* [USO] <br/>
* Na tag <img>, informe no atributo 'src' = caminho/gera_svg.php/imagem=../caminho/da/imagem.extensao&cor_fundo=cor&cor_icone=cor <br/>
* Cor -> Sem # e sempre HEXADECIMAL (ff0000, 000000, etc).
* */
header('Content-Type: image/svg+xml');
$imagem = file_get_contents($_GET['imagem']);
$cores = array();
foreach($_GET as $key =>$value){
  if($key!="imagem"){
    $cores[$key]=$value;
  }
}
foreach($cores as $key =>$value){
  $nova_imagem = str_replace("{".$key."}","#".$value,$imagem);
}
echo $nova_imagem;
?>
