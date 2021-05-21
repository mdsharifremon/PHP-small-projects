<?php 

$head = 0;
$tail = 0;

for($i = 1; $i <= 100; $i++){
$rand = mt_rand(1,2);

    if($rand == 1){
        $head++;
    }else{
        $tail++; 
    };
}

echo 'head is ' . $head . ' & tail is ' . $tail . '<br>';

if($head > $tail){
    echo ' HEAD!, Yes!!! I Win !!!!';
}elseif($head == $tail){
    echo 'tie! No One Wins! Try Again';
}
else{
    echo ' TAIL!' . 'Your Win';
}
?>