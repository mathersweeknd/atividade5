//1

<?php
for ($i = 0; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        echo $i . "\n";
    }
}
?>

//2

<?php
echo "Digite um número inteiro positivo: ";
$handle = fopen("php://stdin", "r");
$number = intval(fgets($handle));

for ($i = 0; $i <= $number; $i++) {
    if ($i % 2 == 0) {
        echo $i . "\n";
    }
}
?>

//3

<?php
echo "Digite uma palavra: ";
$handle = fopen("php://stdin", "r");
$word = trim(fgets($handle));

for ($i = 0; $i < strlen($word); $i++) {
    echo $word[$i] . "\n";
}
?>

//4

<?php
echo "Digite um número inteiro positivo: ";
$handle = fopen("php://stdin", "r");
$number = intval(fgets($handle));

$soma = 0;
for ($i = 1; $i <= $number; $i++) {
    $soma += $i;
}

echo "A soma dos números de 1 até $number é $soma\n";
?>

//5

<?php
echo "Digite um número inteiro: ";
$handle = fopen("php://stdin", "r");
$number = intval(fgets($handle));

$isPrime = true;
if ($number <= 1) {
    $isPrime = false;
} else {
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            $isPrime = false;
            break;
        }
    }
}

if ($isPrime) {
    echo "$number é um número primo\n";
} else {
    echo "$number não é um número primo\n";
}
?>

//6

<?php
echo "Digite uma sequência de números inteiros separados por espaços: ";
$handle = fopen("php://stdin", "r");
$input = fgets($handle);
$numbers = explode(" ", trim($input));

$max = intval($numbers[0]);
foreach ($numbers as $number) {
    if (intval($number) > $max) {
        $max = intval($number);
    }
}

echo "O maior número é $max\n";
?>

/7

<?php
for ($i = 5; $i <= 10; $i++) {
    echo "Tabuada do $i:\n";
    for ($j = 1; $j <= 10; $j++) {
        echo "$i x $j = " . ($i * $j) . "\n";
    }
    echo "\n";
}
?>

//8

<?php
echo "Digite um número inteiro positivo: ";
$handle = fopen("php://stdin", "r");
$number = intval(fgets($handle));

echo "Os divisores de $number são:\n";
for ($i = 1; $i <= $number; $i++) {
    if ($number % $i == 0) {
        echo $i . "\n";
    }
}
?>

//9

<?php
function isPrime($num) {
    if ($num <= 1) return false;
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) return false;
    }
    return true;
}

for ($i = 1; $i <= 100; $i++) {
    if (isPrime($i)) {
        echo $i . "\n";
    }
}
?>

//10

<?php
$soma = 0;
for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        $soma += $i;
    }
}

echo "A soma dos números pares entre 1 e 100 é $soma\n";
?>