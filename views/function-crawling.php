<?php 
include("config.php");
// Microtime untun ED and JW
function microtime_float()
{
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
}


function tokenizer()
{
    $sql = "SELECT DISTINCT tweet, screen_name, id FROM  `twitter_timeline` WHERE `tweet`LIKE '%stikom surabaya%' OR tweet LIKE '%Institut Bisnis dan Informatika Stikom Surabaya%' ORDER BY tweet LIMIT  $page1,100";
    $query = mysqli_query($db, $sql);
    while ($timeline = mysqli_fetch_array($query)) {
        $token = strtok($timeline['tweet'], " ");
        echo $token;
    }
}


?>