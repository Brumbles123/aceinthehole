<?php

include '../includes/db.inc.html.php';

$faqs = [];

try
{
    $sql = 'SELECT * FROM faq';
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
    $faqs[] = array(
        'question' => $row['question'],
        'answer' => $row['answer']
    );
}

include 'faq.html.php';