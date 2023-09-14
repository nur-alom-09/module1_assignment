<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>
<body>
    <div class="container">
        <h2>SIMPLE CALCULATOR</h2>
        <form method="post" action="">
            <input type="number" name="num1" Placeholder= "Enter Your First Number" required>&nbsp;&nbsp;
            <input type="number" name="num2" Placeholder= "Enter Your Second Number" required>&nbsp;&nbsp;
            <select name="operation">
                <option value="add">Plus</option>
                <option value="subtract">Minus</option>
                <option value="multilpy">Multiplication</option>
                <option value="divide">Divition</option>
                <option value="binary">Binary Convirsion</option>
                <option value="octal">Octal Convirsion</option>
                <option value="hexadecimal">Hecxadecimal Convirsion</option>
            </select><br><br><br>
            <button type="submit">Calculate</button>
        </form>
        <div id="result">
            
        
            <?php
            if($_SERVER["REQUEST_METHOD"] == "POST") {
                $num1 = $_POST["num1"];
                $num2 = $_POST["num2"];
                $operation = $_POST ["operation"];



                switch($operation){
                    case "add":
                        $result = $num1 + $num2;
                        echo "<h1>Result: $result</h1>";
                        break;

                    case "subtract":
                        $result = $num1 - $num2;
                        echo "Result: $result";
                        break;


                    case "multiply":
                        $result = $num1 * $num2;
                        echo "Result: $result";
                        break;


                    case "divide":
                        if($num2 != 0){
                            $result = $num1 /$num2;
                            echo "Result: $result";
                        } else {
                            echo "infinity";
                        }
                        break;
                    

                    case "binary":
                        echo "Binary:" .decbin($num1);
                        break;

                    case "octal":
                        echo "Octal:" .decoct($num1);
                        break;

                    case "hexadecimal":
                        echo "Hexadecimal:" .dechex($num1);
                        break;
                }
            
                
            }
            ?>
        </div>
    </div>

</body>
</html>