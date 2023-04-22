<?php 
$vetor1 = array();
$vetor2 = array();
$vetor3 = array();
$vet4 = array();
$msgv1 = "<br /><br />VETOR 1 [";
$msgv2 = "<br /><br />VETOR 2 [";
$msgv3 = "<br /><br />VETOR 3 [";
$msgv4 = "<br /><br />VETOR 4 [";
for($i = 0; $i < 20; $i++){
    $criarvetor1 = rand(1, 100);
    $criarvetor2 = rand(1, 100);
    $criarvetor3 = rand(1, 100);
    array_push($vetor1, $criarvetor1);
    array_push($vetor2, $criarvetor2);
    array_push($vetor3, $criarvetor3);
    
    $msgv1 .= $vetor1[$i] . "\t";
    $msgv2 .= $vetor2[$i] . "\t";
    $msgv3 .= $vetor3[$i] . "\t";
    foreach ($vetor1 as $key => $vet1) {
        foreach ($vetor2 as $key => $vet2) {   
            foreach ($vetor3 as $key => $vet3) {
                if($vet1 == $vet2 && $vet2 == $vet3 && $vet3 == $vet1){
                    $num = $vet1;
                    array_push($vet4, $num);
                    $msgv4 .= $vet4[$key] . "\t";
                }
            }
        }
    }
}
$msgv1 .= "]";
$msgv2 .= "]";
$msgv3 .= "]";
$msgv4 .= "]";

echo $msgv1;
echo $msgv2;
echo $msgv3;
echo $msgv4;

?>