<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Conversion</title>
    <style>

        *{padding:0;margin:0;box-sizing:border-box;}
        body{font-family:'verdana'; font-size:16px; line-height:1.4; background:#81ecec;
            background-image: url(https://wallpaperaccess.com/full/967686.jpg);
            /* background-image: linear-gradient(0deg, #D9AFD9 0%, #97D9E1 100%); */
            background-size:cover;
            width:100vw;
            background-repeat:no-repeat;
            background-position:center center;
        }
        .container{max-width:1140px; margin-left: auto;margin-right: auto;}
        .wrap{display: flex; flex-direction:column;
            align-items: center; height:100vh;justify-content:center; flex-direction:column;}
        .result{
            margin-top:10px;  
            height:60px;
            width:450px;
            text-align:center;
            border-radius:5px;
            backdrop-filter: brightness(160%); 
            display: flex;
            text-align:center;
            justify-content: center;
            align-items: center;
            color:#000;
            font-size:16px;
            font-weight:600;
        }
        .form{
            width:450px;
            height:auto;
            border-radius:5px;
            padding:40px;
            backdrop-filter:brightness(160%);
        }
        form{display: flex;
         flex-direction:column;
         justify-content: center;
         align-items: center;}
        input[type="number"],input[type="submit"]{
        display:block;
        background:rgba(0,0,0,0.4);
        border-radius:3px;
        color:#fff;
        border:none;
        outline:none;
        padding:15px;
        margin:20px 0;
        width:300px;
        font-size:15px;
        }
        input::placeholder{color:#fff;}
        label{font-size:15px;color:#000;font-weight:600;}
        h2{margin-top:15px;}
    </style>
</head>
<body>

<div class="container">
   <div class="wrap">
            <div class="form">

                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                    <h2>Temperature Convertor</h2>
                    <input type="number" name="num" id="num" placeholder="input your temperature">
                    <div class="radio">
                        <label>Convert To : </label>
                        <input type="radio" name="temp" id="cel" value="cel" required>
                        <label for="cel">Celsius</label>
                        <input type="radio" name="temp" id="fah" value="fah" required>
                        <label for="fah">Fahrenheit</label>
                        <input type="submit" value="Convert Now" name="convert">
                    </div> 
                </form>
            </div>
        <div class="result">
            <?php 
                    if(isset($_POST['convert'])){

                        $value = $_POST['num'];
                        $action = $_POST['temp'];

                        if($action == "cel"){
                            $result = ($value - 32) * 5/9 ;
                            echo $value . '<sup><small>f</small></sup>' . ' = ' . $result .'<sup><small>c</small></sup>';
                        }elseif($action == "fah"){
                            $result = $value * 9 / 5 + 32;
                            echo $value . '<sup><small>c</small></sup>' . ' = ' . $result .'<sup><small>f</small></sup>';
                        }

                    }
            ?>
        </div>


    </div>
</div>




</body>
</html>