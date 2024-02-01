<!-- ARRAY UTILIZADO PARA ARMAZENAR VARIOS VALORES EM UMA VARIÁVEL -->

<!-- MODOS DIFERENTES DE PERCORRER UM ARRAY -->

<?php
echo "<h1> Primeira Forma  </h1>";
$ingredientes = array(
    'feijao',
    'carne',
    'fuba',
    'cuscuz'

);
// forma atual de passar array
$ingredientes = [
    'feijao',
    'carne',
    'fuba',
    'cuscuz'

];

print_r($ingredientes);
?>



<!-- FORMA SEGUNDA -->


<?php
echo "<h1>Segunda forma </h1>";

$numerosPC = [10, 15, 20, 8, 10];

echo "Numero do Primeiro computador :" . $numerosPC[0] . "<br/>";

echo "Numero do Segundo computador :" . $numerosPC[1] . "<br/>"


?>