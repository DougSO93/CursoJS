<?php
$nome = $_GET['nm_digitado']?($_GET['nm_digitado']):'Nome inválido';
$sexo = $_GET ['sexo'];
$formacao = $_GET['formacao'];

print($nome);
print($sexo);
if($formacao == 1){
    $formacao = 'Ensino médio';
}elseif($formacao == 2){
    $formacao = 'Ensino Fundamental';
}else{
    $formacao = 'Bacharelado';
}
print($formacao);

?>