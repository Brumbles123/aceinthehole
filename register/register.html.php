<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ace In the Hole Multisport Events Weekend | Registration</title>
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

            <h2>Cost to Register</h2>
                <table id="cost">
                    <tr>
                        <th>Event</th>
                        <th>Price</th>
                    </tr>
                    <tr>
                        <td>Long Course</td>
                        <td>$240</td>
                    </tr>
                    <tr>
                        <td>Olympic</td>
                        <td>$110</td>
                    </tr>
                    <tr>
                        <td>10K</td>
                        <td>$50</td>
                    </tr>
                    <tr>
                        <td>Half Marathon</td>
                        <td>$75</td>
                    </tr>
                    <tr>
                        <td>Sprint</td>
                        <td>$90</td>
                    </tr>
                    <tr>
                        <td>Try-a-Tri</td>
                        <td>$65</td>
                    </tr>
                </table>

                <h2>Cost Includes</h2>
                    <p> Food & Beer Access to the weekend's live entertainment & Fitness Expo, Commemorative Finisher medal, Accurate Chip Timing for competitive races, Ace in the Hole Multisport Weekend Tech Shirt, and Post-event party & entertainment.</p>


                <h2>Packet Pickup</h2>
                <p>All packet pick up will occur at Why Worry Racing, 123 NW Everett, Portland OR. Packet pick up hours: Thursday 8-5, Friday 9-noon. No day of event packet pick up. </p>
                <br>
                <div id="source"><p>Required fields are marked with an asterisk (*).</p></div>

                <h2>Register Today!</h2>

            <article id="register">
                <form method="post" action="index.php">
                    <div id="columnOne">
                    <input type="text" name="honeypot" id="honeypot" value="" alt="if you fill this field out then your email will not be sent"/>
                    <label for="myfname">*First Name:</label>
                    <input type="text" name="myfname" id="myfname" required><br><br>
                    <label for="mylname">*Last Name:</label>
                    <input type="text" name="mylname" id="mylname" required><br><br>
                    <label for="myage">*My Age:</label>
                    <input type="number" name="myage" id="myage" required><br><br>
                    <label for="mygender">*I identify as:</label><br>
                    <input type="radio" name="mygender" id="mygender" value="Male">Male<br>
                    <input type="radio" name="mygender" id="mygender" value="Female">Female<br>
                    <input type="radio" name="mygender" id="mygender" value="Non-Binary">Non-Binary<br><br>
                    <label for="myaddress">*Address:</label>
                    <input type="text" name="myaddress" id="myaddress" required><br><br>
                    <label for="myphone">Phone:</label>
                    <input type="tel" name="myphone" id="myphone"><br><br>
                    <label for="myemail">*Email:</label>
                    <input type="email" name="myemail" id="myemail" required><br><br>
                    <label for="myername">*Emergency Contact Name:</label>
                    <input type="text" name="myername" id="myername" required><br><br>
                    <label for="myernumber">*Emergency Contact Number:</label>
                    <input type="tel" name="myernumber" id="myernumber" required><br><br>
                    <label for="mystatus">*I am a:</label><br>
                    <input type="radio" name="mystatus" id="mystatus" value="Athlete">Athlete<br>
                    <input type="radio" name="mystatus" id="mystatus" value="Volunteer">Volunteer<br><br>
                    </div>
                    <div id="columnTwo">
                    <label>*Event Choice</label><br>
                    <label for="mySaturday">Saturday Events</label><br>
                    <input type="radio" name="mysaturday" id="mysaturday" value="Long Course Triathlon 7:00 AM">Long Course Triathlon 7:00 AM<br>
                    <input type="radio" name="mysaturday" id="mysaturday" value="Olympic Triathlon 7:30 AM">Olympic Triathlon 7:30 AM<br>
                    <input type="radio" name="mysaturday" id="mysaturday" value="10K 7:15 AM">10K 7:15 AM<br>
                    <input type="radio" name="mysaturday" id="mysaturday" value="Half Marathon 7:15 AM">Half Marathon 7:15 AM<br><br>
                    <label for="mySunday">Sunday Events</label><br>
                    <input type="radio" name="mysunday" id="mysunday" value="Sprint Triathlon 8:00 AM">Sprint Triathlon 8:00 AM<br>
                    <input type="radio" name="mysunday" id="mysunday" value="Try-a-Tri 8:20 AM">Try-a-Tri 8:20 AM<br>
                    <input type="radio" name="mysunday" id="mysunday" value="Splash n Dash 12:00 PM">Splash n Dash 12:00 PM<br><br>
                    <label for="mysize">*T-Shirt Size:</label><br>
                    <input type="radio" name="mysize" id="mysize" value="XS-extra small">XS-extra small<br>
                    <input type="radio" name="mysize" id="mysize" value="Small">Small<br>
                    <input type="radio" name="mysize" id="mysize" value="Medium">Medium<br>
                    <input type="radio" name="mysize" id="mysize" value="Large">Large<br>
                    <input type="radio" name="mysize" id="mysize" value="XL-Extra large">XL-extra large<br>
                    <input type="radio" name="mysize" id="mysize" value="XXL-2XL">XXL-2XL<br>
                    <input type="radio" name="mysize" id="mysize" value="XXXL-3XL">XXXL-3XL<br>
                    <input type="radio" name="mysize" id="mysize" value="XXXXL-4XL">XXXXL-4XL<br><br>
                    <label for="myneeds">*Do you have any special Accommodations?</label><br>
                    <textarea name="myneeds" id="myneeds" rows="5" cols="35" required></textarea><br>
                    <input id="mysubmit" type="submit" value="Submit">
                    </div>
                </form>

            </article>
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