<!DOCTYPE html>
<html>
<head>
    <meta charset = "UTF-8">
    <title>Document</title>
</head>

<body>
    <h1>This is my first PHP file</h1>
    <?php 
    echo strrev(".dlrow olleH");//Reverse string​
    echo "<br> ";
    echo str_repeat("Hip", 2);//Repeat string​
    echo "<br> ";
    echo strtoupper("hooray!");//String to uppercase
    echo "<br> ";
    function sum($a, $b) {
        return $a + $b ;
    }
    echo "The sum of this function is " .sum(5,6). "<br>" ;
    ?>
</body>
</html>