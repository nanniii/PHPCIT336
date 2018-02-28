
<!DOCTYPE html>
<html>
<body>
<h1>This is Assignment 4 Part 1 on PHP!</h1>


<?php
    echo "This is part 1 of the Assignment:";
    $integerOne = 25;
    $integerTwo = 75;
    $result = $integerOne+$integerTwo;
    echo "<p>The result of ".$integerOne. "+".$integerTwo. "=".$result."</p>";
echo "<p>----------------------</p>";
    $string1 = "The quick brown ";
    $string2 = "fox jumped ";
    $string3 = "over the short fence";
    echo "<p>".$string1."</p>"."<p>".$string2."</p>"."<p>".$string3."</p>";
    echo $string1.$string2.$string3;
echo "<p>----------------------</p>";
    $time = date("h:i:sa");
    echo "The time is " . $time;
    
    if($time%2 === 0){
        echo "<p>EVEN</p>";
    }
    else{
        echo "<p>ODD</p>";

    }
    
   
echo "<p>----------------------</p>";

    
?>

</body>
</html>