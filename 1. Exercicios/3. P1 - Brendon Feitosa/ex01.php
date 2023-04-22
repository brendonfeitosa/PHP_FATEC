<?php
$soma = 0;
$vetor = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20);
sort($vetor);
if ($vetor != null) {
    $menor = min($vetor);
    echo "O MENOR número do vetor é: $menor!<br /> <br />";
    $maior = max($vetor);
    echo "O MAIOR número do vetor é: $maior!<br /> <br />";
    foreach ($vetor as $vet) {
        if ($vet % 2 == 0) {
            $soma = $vet + $soma;
            $percentual = $soma * (20 / 100);
        }
    }
    echo "O percentual de números pares é de " . number_format($percentual, 2, ',', '.')."% <br /> <br />";
    $media = array_sum($vetor) / 20;
    echo "A média aritmética dos elementos é de ". number_format($media, 2, ',','.') . "<br /> <br />"; 
}

?>