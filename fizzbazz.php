
<?php 
for($i = 1; $i <= 100; $i++){

    if ($i % 3 == 0 && $i % 5 == 0) {
    echo 'FIZZBAZZ ';
    }elseif($i % 3 == 0){
        echo 'fizz ';
    }elseif ($i % 5 == 0) {
        echo 'bazz ';
    }else{
        echo $i . '  ';
    };
}

?>