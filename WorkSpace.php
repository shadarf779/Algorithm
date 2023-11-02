<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BigO</title>
</head>
<body>
    <?php

        $n=128;
        $count=0;
        for($i=1;$i<=$n;$i*=2)
        {
            $j=$i;
            echo($i."<hr>");
            while($j>1)
            {
                echo($j++."<br>");
                $j=(int)($j/2);
            }
        }
    ?>
</body>
</html>