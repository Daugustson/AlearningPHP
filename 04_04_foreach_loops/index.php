<?php
$colors = array('red', 'blue', 'green', 'yellow', 'pink');

foreach( $colors as $color ) {
    echo "<p>$color</p>";
}

$home_towns = array( 
    'Dayn' => 'Los Alamos, NM',
    'Kristen' => 'Colorado Springs, Co',
    'Dan' => 'Exton, PA',
    'Mark' => 'Grand Rapids, MI',
);

foreach( $home_towns as $name => $town) {
    echo "<p>$name lives in $town </p>";
}

$brothers = array( 
        'Joe' => array( 
            'age' => 34,
            'job' => 'teacher',
            'state' => 'PA',
        ),
        'Phil' => array( 
            'age' => 33,
            'job' => 'photographer',
            'state' => 'NY',
        ),
        'Mike' => array( 
            'age' => 32,
            'job' => 'logistics',
            'state' => 'NY',
        ),
        'Rob' => array( 
            'age' => 29,
            'job' => 'manager',
            'state' => 'FL',
        ),
    );

$keys = array_keys($brothers);
for($i = 0; $i < count($brothers); $i++) {
    
    echo $keys[$i] . "{<br>";
    foreach($brothers[$keys[$i]] as $key => $value) {
        echo $key . ' : ' . $value . "<br>";
    }
    echo '<br>';
    }
    
    