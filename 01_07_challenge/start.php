<?php 
$name= "Teresa"; // Heading 1
$city = "NYC";
$movie = "Star Wars"; //Italics
$friend = "George"; //Bold
$candy = "Sour Patch Kids";
?>



<?php

echo"<div style=text-align:center;><h1>Hello $name </h1></div>\n\n";

echo "<p>So glad you can join us in $city today! You will be <b>$friend's</b> guide as you do a range of actitivies.</p>\n\n";

echo "<p>You will end your day by seeing <i>$movie</i> at 7:00pm. Make sure to bring the money you’ve been provided. The movie ticket is \$12. $friend's favorite candy is $candy, so grab some of those too.</p>\n\n";

echo "<p>...and of-course, \"May the Force be with You!\"</p>";


?>