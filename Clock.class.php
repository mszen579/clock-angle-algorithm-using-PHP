<?php
# Clock Angle Problem algorithm
# Brenden Ellingboe - ellingboe.b@gmail.com
#
# Clock class

class Clock {
    
    protected static $hour;
    protected static $minute;
    
    public function __construct() {
        self::$hour = date("g");
        self::$minute = date("i");
    }
    
    // Get the angle based on the current hour / minute
    public function currentAngle() {
        $h = self::$hour;
        $m = self::$minute;
        
        return $this->angle($h, $m);
    }

    // Core angle logic
    protected function angle($h, $m) {
        $angle = abs((0.5 * ((($h % 12) * 60) + $m)) - 6 * $m);
        return ($angle > 180) ? (180 - $angle % 180) : $angle;
    }
    
    // I prefer the factory method, "Class::factory();" vs just "new Class;"
    public static function factory() {
        return new self;
    }
    
    // Build a user-friendly time string
    public function getTimeString() {
        $h = self::$hour;
        $m = self::$minute;
        
        $time_strong = $h . ":" . $m;
        return $time_strong;
    }
    
}