<!-- 
Creare un array contenente qualche alunno di un’ipotetica classe.
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici (senza, materia, solo numeri). Creare una funzione che calcoli la media voto di un alunno.
Stampare Nome, Cognome e la media dei voti di ogni alunno.
 -->

 <?php 
    $students = [
        ["nome" => "Mario", "cognome" => "Peppi", "voti" => [3, 6, 4]],
        ["nome" => "Gianluca", "cognome" => "Rosini", "voti" => [8, 7, 6]],
        ["nome" => "Antonio", "cognome" => "Mauriello", "voti" => [3, 9, 4]],
        ["nome" => "Lucia", "cognome" => "Perilli", "voti" => [7, 9, 9]],
    ];

    function average($student) {
        $sum = 0;
        foreach ($student["voti"] as $voto) {
            $sum += $voto;
        }
        $result = $sum / count($student["voti"]);
        return $result;
    }

 ?>

<ul>
    <?php foreach ($students as $student)  { ?>

        <?php $average = average($student); ?>
    
        <li><?=$student['nome']?> <?=$student['cognome']?> Media : <?=$average?></li>

    <?php } ?>
</ul>