<!-- 
    Creare una funzione che restituisce un array con 15 numeri casuali,
    tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta.
    Stampare i numeri in pagina.
 -->

 <?php
    $random_numbers = [];

    while( count($random_numbers) < 15 ){
        $random = mt_rand();
        $random_numbers[$random] = $random;
    }
    
    foreach ($random_numbers as $random_number) {
        echo $random_number . ' ';
    }
 ?>