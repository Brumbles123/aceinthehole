<?php

include '../includes/db.inc.html.php';

$start_times = [];

try
{
    $sql = 'SELECT * FROM start_times ';
    $result = $pdo->query($sql);
}
catch (PDOException $e)
{
    $error = 'Error fetching content: ' . $e->getMessage();
    include 'includes/error.html.php';
    exit();
}

while ($row = $result->fetch())
{
    $start_times[] = array(
        'day' => $row['day'],
        'event' => $row['event'],
        'time' => $row['time']
    );
}

include 'events.html.php';