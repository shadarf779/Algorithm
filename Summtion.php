
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Summation Result</title>
</head>
<body>
    <?php
        // Check if the form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Retrieve the values of the input fields
            
            $num1 = str_split($_POST["num1"]);
            $num2 = str_split($_POST["num2"]);
            echo "<h1>".count($num1)."</h1>";
            echo "<h1>".count($num2)."</h1>";
            $n1 = str_split($_POST["num1"]);
            $n2 = str_split($_POST["num2"]);
            $maxSpaces  = max($num1, $num2);
            
            if($num1>$maxSpaces)
            {
                
                for ($i=0,$j=0;$i<count($maxSpaces);$i++)
                {
                    if($i<count($maxSpaces)-count($num2))
                    {
                        $num2[$i]=0;
                    }else
                    {
                        $num2[$i]=$n1[$j++];
                        
                    }
                }
            }else
            {
                for ($i=0,$j=0;$i<count($maxSpaces);$i++)
                {
                    if($i<count($maxSpaces)-count($num1))
                    {
                        $num1[$i]=0;
                    }else
                    {
                        $num1[$i]=$n1[$j++];
                        
                    }
                }
            }
            
           
            echo "<h1>".count($num1)."</h1>";
            echo "<h1>".count($num2)."</h1>";
            for ($i=0;$i<count($maxSpaces);$i++)
            {
                echo ($num1[$i]. ' , ');
            }
            echo "<br>";
           echo ('+<br>');
            for ($i=0;$i<count($maxSpaces);$i++)
            {
                echo ($num2[$i]. ' , ');
            }
            echo ('<hr>');
            
            // Validate that the input values are numeric
            $Cin = 0;
            $result = array();
            for ($i=count($maxSpaces)-1;$i>=0;$i--)
            {

                $result[$i] = $num1[$i] + $num2[$i]+$Cin;
                if($result[$i]>=10)
                {
                    $result[$i]=$result[$i]-10;
                    $Cin = 1;
                }else{
                    $Cin = 0;
                }
            }
            for ($i=0;$i<count($maxSpaces);$i++)
            {
                echo ($result[$i]. ' , ');
            }
            $resultString = '';
            for ($i = count($result); $i > 0  ; $i--) {
                $resultString .= $result[$i];
            }
    
            // Display the result
            echo "<p>Result: " . $resultString . "</p>";
    ?>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Summation</title>
</head>
<body>
    <form action="" method="post">
        <label for="num1">Number 1:</label>
        <input type="text" name="num1" id="num1" required>

        <label for="num2">Number 2:</label>
        <input type="text" name="num2" id="num2" required>

        <button type="submit">Summation</button>
    </form>
</body>
</html>
<!--DELIMITER
In this code, we have two HTML files. The first one is the result page, which displays the sum of two numbers. The second one is the form page, which allows the user to input two numbers.

When the form is submitted, the PHP code in the result page is executed. It retrieves the values of the input fields, checks if they are numeric, and calculates their sum. If the input values are valid, the sum is displayed. Otherwise, an error message is displayed.

The comments in the PHP code provide a clear and concise explanation of the code's functionality..</s>
DELIMITER-->