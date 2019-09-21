<?php

$Cities = array(
    "Japan" => "Tokyo",
    "Mexico" => "Mexico City",
    "USA" => "New York City",
    "India" => "Mumbai",
    "Korea" => "Seoul",
    "China" => "Shanghai",
    "Nigeria" => "Lagos",
    "Argentina" => "Buenos Aires",
    "Egypt" => "Cairo",
    "UK" => "London",
);

$countries = array(
    "Tokyo" => "Japan",
    "Mexico City" => "Mexico",
    "New York City" => "USA",
    "Mumbai" => "India",
    "Seoul" => "Korea",
    "Shanghai" => "China",
    "Lagos" => "Nigeria",
    "Buenos Aires" => "Argentina",
    "Cairo" => "Egypt",
    "London" => "UK",
);

$points = 0;
$i = 0;
$a = count($countries);

foreach ($countries as $question => $Country) {
    $i++;

    if ($i === $a) {

        echo "Je hebt " . $points . " van de " . count($countries) . " goed geraden!";

    } else {

        $City = $Cities[$Country];

        echo "Welke hoofdstad heeft " . $Country . "?\n";
        $awnser = readline();

        if ($awnser == $City) {
            echo "\n Correct! \n";
            $points++;
        }
    }
}
