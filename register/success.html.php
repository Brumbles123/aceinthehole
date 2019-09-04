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
            First Name: <?php echo $myFName; ?> <br>
            Last Name: <?php echo $myLName; ?> <br>
            Age: <?php echo $myAge; ?><br>
            I am: <?php echo $myGender; ?><br>
            Address: <?php echo $myAddress; ?><br>
            Email: <?php echo $myEmail; ?> <br>
            Phone: <?php echo $myPhone; ?> <br>
            Emergency Contact Name: <?php echo $myERName; ?><br>
            Emergency Contact Phone Number: <?php echo $myERNumber; ?><br>
            I am a: <?php echo $myStatus; ?><br>
            Event: <?php echo $mySaturday; ?><?php echo $mySunday; ?> <br>
            T-Shirt Size: <?php echo $mySize; ?> <br>
            Special Accommodations: <?php echo $myNeeds; ?> <br>
        </p>
        
    </main>
    <?php include '../includes/footer.inc.html.php'; ?>
</div>
