<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculator</title>

</head>
<body>
    <div class="form">
        <form method ="post" action="">
            <input type="number" name ="number1" placeholder="Bangla">
            <input type="number" name ="number2" placeholder="English">
            <input type="number" name ="number3" placeholder="Mathematics"><br><br>
            <button type="submit">Creat Grade</button>
        </form>
        <div id="result">

            <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $number1 = $_POST["number1"];
                $number2 = $_POST["number2"];
                $number3 = $_POST["number3"];
                if($number1 <= 32 ){
                    echo "F";
                }else if($number2 <= 32 ){
                    echo "F";
                }else if($number3 <= 32 ){
                    echo "F";
                }else if((($number1+$number2+$number3)/3) >= 80){
                    echo "A+";
                
                }else if((($number1+$number2+$number3)/3) >=70 &&  (($number1+$number2+$number3)/3) <=79){
                    echo "A";
                
                }else if((($number1+$number2+$number3)/3) >=60 &&  (($number1+$number2+$number3)/3) <=69){
                    echo "A-";
                
                }else if((($number1+$number2+$number3)/3) >=50 &&  (($number1+$number2+$number3)/3) <=59){
                    echo "B";
                
                }else if((($number1+$number2+$number3)/3) >=40 &&  (($number1+$number2+$number3)/3) <=49){
                    echo "C";
                
                }else if((($number1+$number2+$number3)/3) >=33 &&  (($number1+$number2+$number3)/3) <=39){
                    echo "D";
                
                }else{
                    echo "F";
                }
            }
            ?>
        </div>
    </div>
</body>
</html>