<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sequential Search</title>
</head>
<body>
    <?php
        $arr = [34, 52, 80, 75, 7, 4, 2, 9, 12, 14, 3, 1, 16, 10, 0, 54, 8];
        $arraySize = count($arr);
        $target = 8;
        $found = false;

        echo "ARRAY SIZE IS " . $arraySize . "<br>";
        echo "In Sequential Search Sort we need N to be Searched: " . $target . "<br>";
        print_r($arr);
        echo "<br>";

        for ($i = 0; $i < $arraySize; $i++) {
            if ($target == $arr[$i]) {
                $found = true;
                break;
            }
        }

        if ($found) {
            echo "Target Found";
        } else {
            echo "Target Not Found";
        }
    ?>
</body>
</html>
