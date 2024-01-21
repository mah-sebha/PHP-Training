<?php
// numeric index, auto assigned key
$arr1 = array(10, 'abc', 30);
// numeric index, key explicitly set
$arr2 = array(1 => 10, 2 => 'abc', 3 => 30 );
// associative
$arr3 = array('name' => 'foo', 'age' => 20);
// short syntax
$arr4 = ['name' => 'foo', 'age' => 20];

print_r($arr1);
print_r($arr2);
print_r($arr3);
print_r($arr4);

