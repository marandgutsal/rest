<?php

/**
 * Sample PHP code for youtube.videos.update
 * See instructions for running these code samples locally:
 * https://developers.google.com/explorer-help/code-samples#php
 */

    //echo "<<<<zzzzzz>>>>";
    //echo json_encode("<<<<zzzzzz>>>>");


    $car = [
        "name" => "BMW",
        "color" => "white",
        "doors" => 5,
        "price" => "19000",
    ];

    $encoded_data = json_encode($car);

    echo $encoded_data;

?>