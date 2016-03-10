# clock-angle-php

    A simple PHP implementation of the clock angle problem (angle between the 2 hands)

## Algorithm [H=hour, M=minute]

    A =  abs((0.5 * (((H%12) * 60) + M)) - 6 * M);
    return (A > 180) ? (180 - A%180) : A