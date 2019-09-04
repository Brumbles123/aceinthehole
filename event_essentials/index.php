<?php

include '../includes/db.inc.html.php';

try
{
    $sql = 'SELECT * FROM essentials WHERE id=1';
    $result = $pdo->query($sql);
}
catch (PDOException $e)
{
    $error = 'Error fetching content: ' . $e->getMessage();
    include '../includes/error.html.php';
    exit();
}

while ($row = $result->fetch())
{
    $event_essentials[] = array(
        'statement' => $row['statement'],
        'response' => $row['response']
    );
}

include 'event_essentials.html.php';
