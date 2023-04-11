<?php

// A.

$alunos [0]['Nome'] = 'Maria';
$alunos [0]['Curso'] = 'ADS';
$alunos [0]['Media'] = 7;
$alunos [0]['Situacao'] = '';

$alunos [1]['Nome'] = 'João';
$alunos [1]['Curso'] = 'CD';
$alunos [1]['Media'] = 5;
$alunos [1]['Situacao'] = '';

$alunos [2]['Nome'] = 'José';
$alunos [2]['Curso'] = 'CD';
$alunos [2]['Media'] = 8;
$alunos [2]['Situacao'] = '';

$alunos [3]['Nome'] = 'Pedro';
$alunos [3]['Curso'] = 'ADS';
$alunos [3]['Media'] = 2;
$alunos [3]['Situacao'] = '';

$alunos [4]['Nome'] = 'Paulo';
$alunos [4]['Curso'] = 'ADS';
$alunos [4]['Media'] = 6;
$alunos [4]['Situacao'] = '';

// B.

foreach ($alunos as &$aluno) {

    if ($aluno['Media']<2) {
        $aluno['Situacao'] = 'RP';

    } elseif ($aluno['Media']>=2 && $aluno['Media']<6){
        $aluno['Situacao'] = 'EF';

    } elseif ($aluno['Media']>=6) {
        $aluno['Situacao'] = 'AP';
        
    }
}

// C.
//  I.
echo 'I.';
echo '<table border="1">';
foreach ($alunos as $aluno) {
    echo '<tr>';
    foreach($aluno as $prop) {
        echo '<td>'.$prop.'</td>';
    }
    echo '</tr>';
}
echo '</table> <br>';

//  II.

$counter['ap'] = 0;
$counter['ef'] = 0;
$counter['rp'] = 0;

foreach ($alunos as $aluno) {


    if ($aluno['Situacao']=='AP') {
        $counter['ap']++;

    } elseif ($aluno['Situacao']=='EF') {
        $counter['ef']++;

    } elseif ($aluno['Situacao']=='RP') {
        $counter['rp']++;
        
    }
}
echo 'II. <br>';
echo '<p> Alunos aprovados: '. $counter['ap']. '</p>';
echo '<p>Alunos em exame final: '. $counter['ef']. '</p>';
echo '<p>Alunos reprovados: '. $counter['rp']. '</p>';

?>