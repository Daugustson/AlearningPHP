<?php
$current = 1;
 $previous = 0;
 $next = null;
 $limit = 400;
 $sequence = '';

 while( $current <= $limit ) {
     $sequence .= $current . ', ';
     $next = $current + $previous;
     $previous = $current;
     $current = $next;
 }

 $sequence = trim( $sequence );
 $sequence = substr( $sequence, 0, strlen( $sequence)-1 );

 echo $sequence;
?>