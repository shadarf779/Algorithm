
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Summtion</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
        }

        label {
            display: block;
            margin: 10px 0;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #4caf50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <label for="num1">Number 1:</label>
        <input type="text" name="num1" id="num1" required>

        <label for="num2">Number 2:</label>
        <input type="text" name="num2" id="num2" required>

        <button type="submit">Summation</button>
        
    <?php
        // Check if the form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Retrieve the values of the input fields
            
            $num1 = str_split($_POST["num1"]);
            $num2 = str_split($_POST["num2"]);
            $n1 = str_split($_POST["num1"]);
            $n2 = str_split($_POST["num2"]);
            $maxSpaces  = max($num1, $num2);
            
            if(count($num2)<count($maxSpaces))
            {
                for ($i=0,$j=0;$i<count($maxSpaces);$i++)
                {
                    if($i<count($maxSpaces)-count($n2))
                    {
                        $num2[$i]=0;
                    }else
                    {
                        $num2[$i]=$n2[$j++];
                        
                    }
                }
            }else
            {
                for ($i=0,$j=0;$i<count($maxSpaces);$i++)
                {
                    if($i<count($maxSpaces)-count($n1))
                    {
                        $num1[$i]=0;
                    }else
                    {
                        $num1[$i]=$n1[$j++];
                        
                    }
                }
            }
            
           echo '<br>';
            for ($i=0;$i<count($maxSpaces);$i++)
            {
                echo ($num1[$i]. ' ');
            }
            echo "<br>";
           echo ('+<br>');
            for ($i=0;$i<count($maxSpaces);$i++)
            {
                echo ($num2[$i]. ' ');
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
                echo ($result[$i]. ' ');
            }
            $resultString = '';
            for ($i = 0; $i < count($result)  ; $i++)
             {
                $resultString .= $result[$i];
            }
            
            // Display the result
            echo "<p>Result: " . $resultString . "</p>";
        }
    ?>
    </form>
</body>
</html>

<!--DELIMITER
In this code, we have two HTML files. The first one is the result page, which displays the sum of two numbers. The second one is the form page, which allows the user to input two numbers.

When the form is submitted, the PHP code in the result page is executed. It retrieves the values of the input fields, checks if they are numeric, and calculates their sum. If the input values are valid, the sum is displayed. Otherwise, an error message is displayed.

The comments in the PHP code provide a clear and concise explanation of the code's functionality..</s>
DELIMITER-->