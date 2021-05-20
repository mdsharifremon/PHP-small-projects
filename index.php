<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP Small Project</title>
</head>
<body>
    <div class="container">
<div class="box">
<?php 

$msg = 'result is';

if(isset($_POST['submit'])){

    $word = $_POST['word'];
    $rev = strrev($word);

    if($rev === $word){
        $msg =  $word . ' is a palindrome word.' . '<br>' .  ' WINNER! WINNER! CHICKEN DINNER!!!';
    }else{
        $msg = $word . ' is not a palindrome word!' . '<br>' . 'oops!!! Try again.';
    }
}

?>

        <h2>Find Your Palindrome Word</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <input type="text" name="word" id="word" placeholder="Input a word to check....">
            <input type="submit" value="submit" name='submit'>
        </form>

        <div class="result">
                <?php echo $msg; ?>
        </div>
    </div>
</div>
    
</body>
</html>