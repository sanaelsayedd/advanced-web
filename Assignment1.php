<?php
// Name:Sana Elsayed Okasha
//ID:230100333

//Exercise 1:

$x=10;
$y=7;

echo "$x + $y =".($x+$y)."<br>";
echo "$x - $y =".($x-$y)."<br>";
echo "$x * $y =".($x*$y)."<br>";
echo "$x / $y =".($x/$y)."<br>";
echo "$x % $y =".($x%$y)."<br>";
echo"<hr>";
//Exercise 2:

if(date('F',time())==='August'){
    echo "It's August,So it's really hot."."<br>";
 }else{
    echo "Not August,So at least not in the peak of the heat"."<br>";
 }
echo"<hr>";

//Exercise 3:

for($i = 1;$i<=12;$i++){
    echo "$i*$i=".($i*$i)."<br>";
    
}
echo"<hr>";


//Exercise 4:
// for($i = 1;$i<=7;$i++){
//     for($j = 1;$j<=7;$j++){
//         echo "$i*$j=".($i*$j)."<br>";
    
//     }
// }


?>
<html>
<head>
    <title>Multiplication Table</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
        }
        td {
            border: 1px solid black;
            text-align: center;
            padding: 8px;
        }
    </style>
</head>
<body>
<h2>Multiplication Table</h2>
<table>
    <?php
    for ($i = 1; $i <= 7; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= 7; $j++) {
            echo "<td>" . ($i * $j) . "</td>";
        }
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
