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


