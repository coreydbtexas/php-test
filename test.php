<?php

$mulitple3 = 'Fizz';
$mulitple5 = 'Buzz';

for ($i=1; $i<=100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0)
        print_r($i.'=>'.$mulitple3.$mulitple5.PHP_EOL);
    elseif ($i % 3 == 0) 
        print_r($i.'=>'.$mulitple3.PHP_EOL);
    elseif ($i % 5 == 0)
        print_r($i.'=>'.$mulitple5.PHP_EOL);
}
