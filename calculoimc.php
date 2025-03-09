<?php
function calculoImc($peso, $altura)
{
    return $peso / ($altura * $altura);
}

$massa = calculoImc(82, 1.71);
$massa = number_format($massa, 2, '.', '');

$medida = [
    [
        'max' => 18.5,
        'msg' => 'Magreza'
    ],
    [
        'min' => 18.51,
        'max' => 24.9,
        'msg' => 'Saudável'
    ],
    [
        'min' => 25.0,
        'max' => 29.9,
        'msg' => 'Sobrepeso'
    ],
    [
        'min' => 30.0,
        'max' => 34.9,
        'msg' => 'Obesidade Grau I'
    ],
    [
        'min' => 35.0,
        'max' => 39.9,
        'msg' => 'Obesidade Grau II'
    ],
    [
        'max' => 39.9,
        'msg' => 'Obesidade Grau III'
    ],
];

for ($i = 0; $i < sizeof($medida); $i++) {

    if ($massa >= $medida[$i]['max']) {
        $msg = $medida[$i]['msg'];
    } elseif ($massa >= $medida[$i]['min'] && $massa <= $medida[$i]['max']) {
        $msg = $medida[$i]['msg'];
        break;
    } elseif ($massa <= $medida[$i]['max']) {
        $msg = $medida[$i]['msg'];
        break;
    }

}
;

echo "Atenção, seu IMC é $massa, e você está classificado como $msg.";

?>