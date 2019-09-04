<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ace In the Hole Multisport Events Weekend | Contact</title>
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

        <section id="feature">
    <main>

        <h2>Questions? We'd love to hear from you!</h2>

        <form method="post" action="index.php" id="contact">
            <input type="text" name="honeypot" id="honeypot" value="" alt="if you fill this field out then your email will not be sent"/>
            <label for="myName">Name:</label>
            <input type="text" name="myName" id="myName"><br>
            <label for="myEmail">E-mail:</label>
            <input type="text" name="myEmail" id="myEmail"><br>
            <label for="myStatus">I am a(n):</label><br>
            <input type="radio" name="myStatus" id="mystatus" value="Athlete"> Athlete<br>
            <input type="radio" name="myStatus" id="mystatus" value="Volunteer"> Volunteer<br>
            <input type="radio" name="myStatus" id="mystatus" value="Interested Party"> Interested Party<br>
            <label for="myQuestion">Question or Comment:</label><br>
            <textarea form="inquiryForm" rows="10" cols="35" name="myQuestion" id="myQuestion"></textarea><br>
            <input id="mySubmit" type="submit" value="Submit">
        </form>
        </section>

        <?php include "../includes/weather.inc.html.php"; ?>
        <?php include "../includes/social.inc.html.php"; ?>

    </main>

    </div>
</div>


        <?php include '../includes/footer.inc.html.php'; ?>
        <script  src="../scripts/jquery-3.3.1.min.js"></script>

</body>
</html>
