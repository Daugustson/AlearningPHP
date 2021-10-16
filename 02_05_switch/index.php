<?php
$total = 6;
switch ( $total ): 
    case 1:
    case 2:
    case 3:
        echo '<p>$total is less than 5</p>';
        break;
    default: 
        echo '<p>$total is 5 or more</p>';
endswitch;

$turtle = 'Mike';
$bandana = '';
switch( $turtle ) {
    case 'Leo':
        $bandana = 'blue';
        break;
    case 'Raph':
        $bandana = 'red';
        break;
    case 'Mike':
        $bandana = 'orange';
        break;
    case 'Don':
        $bandana = 'purple';
        break;
    default: 
        echo '<p>No one listed with color</p>';

}

echo "<p>$bandana</p>";
echo "<br>";

$x = 0;

/*$result = match($x) {
    1 => '$x is 1',
    2 => '$x is 2',
    default => '$x is nether 1 nor 2',
};*/

//echo $result;

