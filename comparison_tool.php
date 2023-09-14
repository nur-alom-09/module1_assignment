<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison Tool</title>
</head>
<body>
    <form method="post" action="">
    <h2>Comparison Tool</h2><br><br>
    Input Numbers :
    <input type="number" name="number_1" placeholder="Enter the Number">&nbsp; &nbsp;
    <input type="number" name="number_2" placeholder="Enter the Number"><br>
    <button type="submit"> Compare </button> 
    </form>

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $number_1 = $_POST['number_1'];
            $number_2 = $_POST['number_2'];

            $result = ($number_1 == $number_2) ? "Both are equal" : (($number_1 > $number_2) ? "$number_1  is greater than $number_2" :  "$number_1  is lesser than $number_2" );
        
            echo $result ;

        
        }
        
    ?>
</body>
</html>