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

<!--- Check Palindrome Word -------------->
        <h2>Check Your Palindrome Word</h2>
        <form action="palindrome.php" method="post">
            <input type="text" name="word" id="word" placeholder="Input a word to check....">
            <input type="submit" value="submit" name='submit'>
        </form>
<!----- Palindrome Word ------->

<!-------- Area of Circle ------>
        <h2>Area of Circle</h2>
        <form action="circle.php" method="post">
            <input type="number" name="base" id="base" placeholder="Input a base to check....">
            <input type="submit" value="result" name='circle'>
        </form>

<!------ Area of Circle -------> 

<!------ Area of Triangle ------>
            <h2>Area of Triangle</h2>
                    <form action="triangle.php" method="post">
                        <input type="number" name="height" id="height" placeholder="Input a height">
                        <input type="number" name="width" id="width" placeholder="Input a width">
                        <input type="submit" value="result" name='triangle'>
                    </form>

<!------ Area of Triangle ------>



<!------ Area of Triangle ------>

<!------ Area of Triangle ------>








    </div>
</div>
    
</body>
</html>