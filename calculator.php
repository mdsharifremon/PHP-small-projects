<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculator</title>
    <style>
        *{padding: 0;margin: 0;box-sizing:border-box;}
        a,input['submit']{text-decoration:none;cursor:pointer;}
        body{font-family:'verdana';font-size:16px; color:#727272;}
        .container{display:flex;justify-content: center;align-items: center;height:100vh;}
        .box{width:500px; height:350px;background:aqua;border-radius:5px;align-items:center;padding:30px 15px;
        flex-direction:column;justify-content:center; align-items:center; text-align:center;}
        h2{font-size:30px; margin-bottom:20px;}
        .form{}
        form{display:flex;flex-direction:column;justify-content: center;align-items: center;}
        input,select{display:block;outline:none;padding:6px 15px;border:none;margin:5px 0;
                     width:300px;border-radius:3px;}
        input[type="submit"]{background:teal;color:#fff;text-transform:uppercase;padding:10px 0; font-size:14px;
                             font-weight:bold;}

        .result{margin-top:35px;font-size:18px;text-align:center;color:#000;}
    </style>
</head>
<body>
    <div class="container">
        <div class="box">
            <h2>Calculator - PHP</h2>
            <div class="form">
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                    <input type="number" name="first" id="first" placeholder="first number">
                    <input type="number" name="second" id="second" placeholder="second number">
                    <select name="cal" id="cal">
                        <option value="add">Addition</option>
                        <option value="sub">Substruction</option>
                        <option value="mul">Multiply</option>
                        <option value="div">Division</option>
                        <option value="mod">Modulus</option>
                    </select>
                    <input type="submit" value="result" name="result">
                </form>
            </div>
            <div class="result">
                
                <span> 
                <?php
                        if(isset($_POST['result'])){

                            $first = $_POST['first'];
                            $second = $_POST['second'];
                            $action = $_POST['cal'];

                            switch($action){
                                case "add":
                                    echo 'Addition : ' . $first + $second;
                                    break;
                                case "sub":
                                    echo 'Substruction : ' . $first - $second;
                                    break;
                                case "mul":
                                    echo 'Multiplication : ' .  $first * $second;
                                    break;
                                case 'div':
                                    echo 'Division : ' . $first / $second;
                                    break; 
                                case "mod":
                                    echo 'Modulus : ' . $first % $second;
                                    break;
                                default: echo 'select a action';
                            };
                        };
                ?>
                </span>
            </div>
        </div>
    </div>
    
</body>
</html>