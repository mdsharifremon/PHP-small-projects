<?php 
    if(isset($_POST['triangle'])){  
                $height = $_POST['height'];
                $width = $_POST['width'];
                $result = 1/2 * ($height * $width);
                echo 'Result : ' . $result;
    }
?>