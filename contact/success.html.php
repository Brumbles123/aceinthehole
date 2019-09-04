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
<div id="wrapper">
    <?php include '../includes/header.inc.html.php'; ?>
    <?php include '../includes/nav.inc.html.php'; ?>
    <main>
        <h2>Thank you!</h2>
        <p>Our records show you submitted the following:<br>
            Name: <?php echo $myName; ?> <!-- print tour name from form submission here --><br>
            Email: <?php echo $myEmail; ?> <!-- print first name from form submission here --><br>
            I am a(n): <?php echo $myStatus; ?><br>
            Question: <?php echo $myQuestion; ?> <!-- print last name from form submission here --><br>

        </p>
    </main>
    <?php include '../includes/footer.inc.html.php'; ?>
</div>

<script  src="../scripts/jquery-3.3.1.min.js"></script>
<script  src="../scripts/ace.js"></script>

</body>
</html>