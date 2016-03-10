<?php
# Clock Angle Problem algorithm
# Brenden Ellingboe - ellingboe.b@gmail.com

require_once "Clock.class.php";

// Get new clock instance
// I use the factory concept just as a way to further encapsulate the object
$clock = Clock::factory();

// Get the time string
$time = $clock->getTimeString();

// Get the angle of the current time
$angle = $clock->currentAngle();
?>

<table>
    <tr>
        <th>Time</th>
        <td><?php echo $time; ?></td>
    </tr>
    <tr>
        <th>Angle</th>
        <td><?php echo $angle; ?>&deg;</td>
    </tr>
</table>