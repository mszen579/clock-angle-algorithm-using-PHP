<?php
# Clock Angle Problem algorithm


function AngleOfClock($hours, $minutes) { 
  $hours = $hours % 12;
  
      $hourMinPart = 0.5 * $minutes; 
      $hourHourPart = 30 * $hours; 
      $minAngle = 6 * $minutes; 
      $totalAngle = abs($hourMinPart + $hourHourPart - $minAngle); 
      
        if ($totalAngle<=180){
        echo $totalAngle .' ' .'degrees'; 
        }
        
        else{
        echo (360 - $totalAngle) .' ' .'degrees'; 
        } 
  
}

AngleOfClock(12, 15);
