<?php
$j = 1;
while ($j <= 100) {
    if ($j % 15 === 0){
        echo('FizzBuzz,<pre>');
    }elseif ($j % 5 === 0){
        echo('Buzz,<pre>');
    }elseif ($j % 3 === 0){
        echo('Fizz,<pre>');
    }else {
        echo("$j,<pre>");
    }
    $j++;
}

for ($i = 1; $i <= 100; $i++){
    if ($i % 15 === 0){
        echo('FizzBuzz,<pre>');
    }elseif ($i % 5 === 0){
        echo('Buzz,<pre>');
    }elseif ($i % 3 === 0){
        echo('Fizz,<pre>');
    }else {
        echo("$i,<pre>");
    }
}