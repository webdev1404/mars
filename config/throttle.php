<?php
/*
|--------------------------------------------------------------------------
| Throttle Options
|--------------------------------------------------------------------------

If enabled will allow you to throttle actions based on a key, such as an IP address or a user ID. 
This can be useful for preventing brute-force attacks, spamming, or other abusive behaviors.
*/

return [
    // bool If true, will enable the throttle functionality
    'throttle.enable' => true,

    // int The max number of attempts allowed within the block duration
    'throttle.max_attempts' => 10,

    // int The duration, in seconds, for which the key will be blocked after reaching the max attempts
    'throttle.block_duration' => 3600,
];
