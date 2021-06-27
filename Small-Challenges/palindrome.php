
          
  <?php 
            
        if(isset($_POST['submit'])){
                $word = $_POST['word'];
                $rev = strrev($word);
                if($rev === $word){
                    $msg =  $word . ' is a palindrome word.' . '<br>' .  ' WINNER! WINNER! CHICKEN DINNER!!!';
                }else{
                    $msg = $word . ' is not a palindrome word!' . '<br>' . 'oops!!! Try again.';
                }
                echo $msg;
        }
    ?>
