<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Report</title>
</head>
<body>
    <form method="post" action="">
    <h2>Even & Odd Cheaker</h2><br><br>
    Input Temperature :
    <input type="number" name="temperature" placeholder="Enter the temperature"><br>
    <button type="submit"> Cheak </button> 
    </form>

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $temperature = $_POST['temperature'];
            
            if($temperature <= 26){
                echo "Temperature: It's Freezing";

            }else if($temperature >= 27 && $temperature <= 35){
                echo "Temperature: It's Cool";

            } else {
                echo "Temperature: It's Warm";
            }
        }
    ?>
</body>
</html>