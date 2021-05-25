<?php

// Indexable Array
$newColor2 = 'yellow';
$newColor = 'pink';
$colors = array( 'red', 'blue', 'green' );

print_r( $colors );

echo '<p>' . $colors[2] . '</p>';

$colors[] = $newColor;
print_r( $colors );
echo '<br>';
$colors[] = $newColor2;

print_r( $colors );

// Associative Arrays
$home_towns = array( 
    'Joe' => 'Middletown, NY',
    'Erin' => 'West Chester, PA',
    'Dave' => 'Exton, PA',
    'Brian' => 'Grand Rapids, MI',
);

echo '<pre>';
print_r( $home_towns );
echo '</pre>';

echo '<p> Where do you live. <br>I live in '. $home_towns['Brian'] . '</p>';

echo '<br>';
$home_towns1 = array(
  'Petter' => 'Los Alamos, NM',
  'Jake' => 'Albuqueruque, NM',  
);
$home_towns[] = $home_towns1;
//print_r( $home_towns );
echo '<br>';
echo '<br>';

$home_towns5 = $home_towns;
                  
                  
print_r( $home_towns5 );


$key1 = array_search('Los Alamos, NM',array_column( $home_towns1, 'Petter' ));

echo $key1;
print_r( $key1 );



$userdb=Array
(
    (0) => Array
        (
            'uid' => '100',
            'name' => 'Sandra Shush',
            'url' => 'urlof100'
        ),

    (1) => Array
        (
             'uid' => '5465',
             'name' => 'Stefanie Mcmohn',
            'pic_square' => 'urlof100'
        ),

    (2) => Array
        (
             'uid' => '40489',
            'name' => 'Michael',
            'pic_square' => 'urlof40489'
        )
);

//simply u can use this

$key = array_search(5465, array_column($userdb, 'uid'));
echo '<br>';
echo '<br>';
echo $key;
?>
