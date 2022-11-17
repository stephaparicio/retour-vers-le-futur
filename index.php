<?php

$presentTime = new DateTime();
$destinationTime = new DateTime('2003-04-07 08:15');

$difference = $presentTime->diff($destinationTime, true);


$presentTime = $presentTime->format('Y-M-d H:i');
$destinationTime = $destinationTime->format('Y-M-d H:i');

echo "Destination Time: " . $destinationTime . PHP_EOL;
echo "Present Time: " . $presentTime . PHP_EOL;
echo "Gap between dates: " . $difference->y . "years, " . $difference->m . "months, " . $difference->d . "days, " . $difference->h . "hours and " . $difference->i . " minutes." . PHP_EOL;
