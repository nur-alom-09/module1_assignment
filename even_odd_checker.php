<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even & Odd Cheak</title>
</head>
<body>
    <form method="post" action="">
    <h2>Even & Odd Cheaker</h2><br><br>
    Input Number :
    <input type="number" name="number1" placeholder="Enter Your Number Here"><br>
    <button type="submit"> Cheak </button> 
    </form>

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $number1 = $_POST['number1'];
            $remainder = $number1 % 2;
            
            if($remainder == 0){
                echo "$number1 is Even";
            }else{
                echo "$number1 is Odd";
            }
            
        }
    ?>
</body>
</html>