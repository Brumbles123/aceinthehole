<!DOCTYPE html>
<html lang="en">
<head>
    <title>Template</title>
    <meta name="description" content="Ace In the Hole Multisport Events offers Events for Every Body">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Exo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/reset.css">
    <link rel="stylesheet" href="styles/helper.css">
    <link rel="stylesheet" href="styles/styles.css">
</head>
    <body>
        <div id="page-container">
            <div id="content-wrap">
                <?php include 'includes/header.inc.html.php'; ?>
                <?php include 'includes/nav.inc.html.php'; ?>


                <main>
                    <section id="feature">
                        <h2>Featured Content Goes Here</h2>
                        <p>&nbsp; Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec accumsan lobortis diam. Integer finibus metus sit amet imperdiet eleifend. Nullam metus justo, auctor non sapien sit amet, dictum lobortis odio. Mauris pellentesque eleifend arcu et finibus. Proin pretium nunc et tellus ultrices, vel sollicitudin libero semper. Donec egestas, odio eu laoreet viverra, elit neque ultricies nunc, et sagittis turpis lacus sit amet orci. Suspendisse dapibus odio nulla, a commodo nibh dictum non. Vestibulum eget quam vitae dolor tincidunt aliquam a non tortor. Vestibulum nulla augue, congue et ultricies id, semper a elit. </p>
                    </section>

                <?php include "includes/weather.inc.html.php"; ?>
                <?php include "includes/social.inc.html.php"; ?>


                </main>
        
            </div>
            
                <?php include 'includes/footer.inc.html.php'; ?>
    
        </div>
        
        <script  src="scripts/jquery-3.3.1.min.js"></script>
        <script  src="scripts/ace.js"></script>

    </body>

</html>