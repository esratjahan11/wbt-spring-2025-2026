<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$length = 10;
$width = 5;

$area = $length * $width;
$perimeter = 2 * ($length + $width);

echo "Length: $length <br>";
echo "Width: $width <br>";
echo "Area: $area <br>";
echo "Perimeter: $perimeter <br>";
?>


<?php
$amount = 1000; 

$vat = $amount * 0.15; 
$total = $amount + $vat;

echo "Amount: $amount <br>";
echo "VAT (15%): $vat <br>";
echo "Total Amount (with VAT): $total <br>";
?>


<?php
$number = 7; // you can change this value

if ($number % 2 == 0) {
    echo "$number is Even";
} else {
    echo "$number is Odd";
}
?>

<?php
$a = 10;
$b = 25;
$c = 15;

if ($a >= $b && $a >= $c) {
    echo "$a is the largest number";
} elseif ($b >= $a && $b >= $c) {
    echo "$b is the largest number";
} else {
    echo "$c is the largest number";
}
?>
echo "<br>";

<?php
for ($i = 10; $i <= 100; $i++) {
    if ($i % 2 != 0) {
        echo $i . "<br>";
    }
}
?>



<?php
$numbers = array(10, 20, 30, 40, 50);
$search = 40;
$found = false;

for ($i = 0; $i < count($numbers); $i++)
    {
    if ($numbers[$i] == $search)
        {
        $found = true;
        echo "Element is found at index: " . $i;
        break;
        }
    }

if ($found == false)
    {
    echo "Element is not found";
    }
?>



<?php
for ($i = 1; $i <= 3; $i++) 
    {
    for ($j = 1; $j <= $i; $j++)
        {
        echo "* ";
        }
    echo "<br>";
    }
?>

<?php
for ($i = 3; $i >= 1; $i--)
    {
    for ($j = 1; $j <= $i; $j++)
        {
        echo $j . " ";
        }
    echo "<br>";
    }
?>


<?php
$char = 'A';

for ($i = 1; $i <= 3; $i++)
    {
    for ($j = 1; $j <= $i; $j++)
        {
        echo $char . " ";
        $char++;
        }
    echo "<br>";
    }
?>



</body>
</html>