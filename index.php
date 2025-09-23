<!DOCTYPE html>
<html>
<head>
    <meta charset = "UTF-8">
    <title>Document</title>
</head>

<body>
    <h1>This is my first PHP file</h1>
    <?php 
    $name = "Mr A" ;
    $age = 55 ;
    $courses = array("JAVA", "C", "PHP") ;
    echo "Name: ". $name . " , age: " .$age. 
         "<br/>3rd course is: " .$courses[2] ;
    $x = 10 ;
    $y = 20 ;
    echo "<h2> Arimethic Operators</h2>" ;
    echo "x = " . $x . "<br/>";
    echo "y = " . $y . "<br/>";
    echo " x + y =  " . ($x + $y). "<br/>";
    echo " x - y = " . ($x - $y) . "<br/>" ;
    echo " x * y = " . ($x * $y) . "<br/>" ;
    echo " x / y = " . ($x / $y) . "<br/>" ;
    echo "x++ = " . ($x++). "<br/>" ;
    echo "y++ = " . (++$y). "<br/>" ;
    echo "<h2> Comparison Operators</h2>" ;
    echo " x == y  " . ($x == $y). "<br/>";
    echo " x !=y:  " . ($x != $y) . "<br/>" ;
    echo " x < y: " . ($x < $y) . "<br/>" ;
    echo " x > y: " . ($x > $y) . "<br/>" ;
    echo "x <= y:  " . ($x <= $y). "<br/>" ;
    echo "x >= y:  " . ($x >= $y). "<br/>" ;
    echo "<h2> Input variables</h2>" ;
    $a = $_GET["a"] ;
    $b = $_GET["b"] ;
    echo "a + b = " . ($a + $b). "<br>" ;
    echo "a == b: " . ($a == $b). "<br>" ;
    ?>

    <table border="1">
        <?php
        for ($i = 0 ; $i <= 5 ; $i++) {
            echo "
            <tr>
                <td>$i</td>
            </tr>" ;
            }
        ?>
    </table>
</body>
</html>