<?php 
    if(isset($_POST['circle'])){
            $pi = 3.141;
            $rad = $_POST['base'];
            $result = $pi * ($rad * $rad);
            echo 'result is: ' . $result;
    }
?>