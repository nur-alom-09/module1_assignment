<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
</head>
<body>
    <div class="container">
        <h2> Temperature Converter</h2><br><br>
        <h3>Type Your Temperature and select scale</h3>
        <form method = "post" action="">
            <input type="number" name="temperature" placeholder="Type Your Temperature">
            <input type="radio" name="units" value="C"> Celcious
            <input type="radio" name="units" value="F"> Farenheit <br><br>
            <button type="submit">Convert</button>
        </form>
        <div id= "result">

            <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $temperature = $_POST['temperature'];
                $units = $_POST['units'];
                if($units == "C"){
                    $result=$temperature*9/5+32;
                    echo "$temperature  degree celcius =" .$result . "degree Farenhei";
                }else{
                    $result = ($temperature - 32)*5/9;
                    echo "$temperature degree Farenheit =" .$result . "degree Celcious"; 
                }
            }
            ?>
        </div>
    </div>
    
</body>
</html>