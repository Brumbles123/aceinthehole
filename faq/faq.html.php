<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ace In the Hole Multisport Events Weekend</title>
    <meta name="description" content="Ace In the Hole Multisport Events offers Events for Every Body">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Exo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles/reset.css">
    <link rel="stylesheet" href="../styles/helper.css">
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
<div id="page-container">
    <div id="content-wrap">
        <?php include '../includes/header.inc.html.php'; ?>
        <?php include '../includes/nav.inc.html.php'; ?>


        <main>
            <section id="feature">
                <h2>FAQs</h2>
                <table>
                    <tr>
                        <th id="question"></th>
                        <th id="answer"></th>
                    </tr>
                    <?php foreach($faqs as $faq): ?>
                        <!-- Added if statement to check if the entry is null,
                              this fixes an issue where it was displaying a null value at the start. -->
                        <?php if(htmlspecialchars($faq['question'], ENT_QUOTES, 'UTF-8') == null) continue; ?>
                        <tr>
                            <td headers="question" id="faq"><?php echo htmlspecialchars($faq['question'], ENT_QUOTES, 'UTF-8'); ?></td>
                            <td headers="answer"><?php echo htmlspecialchars($faq['answer'], ENT_QUOTES, 'UTF-8'); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </section>

            <?php include "../includes/weather.inc.html.php"; ?>
            <?php include "../includes/social.inc.html.php"; ?>


        </main>

    </div>
</div>

<?php include '../includes/footer.inc.html.php'; ?>


<script  src="../scripts/jquery-3.3.1.min.js"></script>

</body>