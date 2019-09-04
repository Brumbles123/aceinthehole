<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ace In the Hole Multisport Events Weekend | Events</title>
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
                <h2>Start Times</h2>
                <table id="start">
                    <tr>
                        <th id="day">Day</th>
                        <th id="event">Event</th>
                        <th id="time">Time</th>
                    </tr>
                    <?php foreach($start_times as $start_time): ?>
                    <!-- Added if statement to check if the entry is null,
                          this fixes an issue where it was displaying a null value at the start. -->
                    <?php if(htmlspecialchars($start_time['day'], ENT_QUOTES, 'UTF-8') == null) continue; ?>
                    <tr>
                        <td headers="day"><?php echo htmlspecialchars($start_time['day'], ENT_QUOTES, 'UTF-8'); ?></td>
                        <td headers="event"><?php echo htmlspecialchars($start_time['event'], ENT_QUOTES, 'UTF-8'); ?></td>
                        <td headers="time"><?php echo htmlspecialchars($start_time['time'], ENT_QUOTES, 'UTF-8'); ?></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
                <br>

                <h2>Course Details</h2>

                <ul>
                    <li>Water Temperature is expected to be between 62-66 degrees. The temperature will be taken on Friday and the morning of the race. Wetsuits are recommended.</li>
                    <li><span>Long Course</span></li>
                    <li>Long Course Swim - 1.2mi - Participants will make two counter-clockwise loops. Large buoys will mark the turn points. Kayakers will be positioned on the water to support the swimmers. Medical support will be present on the beach.</li>
                    <li>Long Course Bike - 58 Miles: A scenic point-to-point course that travels over gently rolling hills prior to three hard climbs. The bike course will be marked with large directional signage and there will be course marshals at key intersections to help direct you. </li>
                    <li>Long Course Run - 13.1mi- A mostly flat loop course on widely paved bike paths that traverse through and around this beautiful and scenic destination resort (two hills total with a minimal elevation gain).</li>
                    <li><span>Olympic Course</span></li>
                    <li>Olympic Swim - 1,500 meters - Participants will make two counter-clockwise loops. Large buoys will mark the turn points. Kayakers will be positioned on the water to support the swimmers. Medical support will be present on the beach.</li>
                    <li>Olympic Bike - 28mi - A scenic point-to-point course that travels over gently rolling hills. The bike course will be marked with large directional signage and course marshals will be present at key intersections. </li>
                    <li>Olympic Run - 10K - A mostly flat loop course on widely paved bike paths that traverse through and around this beautiful and scenic destination resort (one hill total with a minimal elevation gain).Sprint: Course will offer a 1-loop 1/2 mile swim, the exact same 28 mile Bike Course as the Olympic distance and a 5km run.</li>
                    <li><span>Try-A-Tri</span> - This novice race is designed for the first time triathlete, those new to the sport, our Junior Triathletes. The swim is a shorter, more manageable 1/4 mile distance, (instead of the standard 1/2-mile Sprint distance swim), 10 mile bike ride (vs 12 miles and it's a 2 loop course making it very spectator friendly!) and a flat 2 mile run (vs 3 mile sprint course).</li>
                    <li><span>Half Marathon Course</span> - Half-Marathon (13.1-miles): Half-Marathon event starts and finishes in the Athletes Village to the cheers of the enthusiastic crowd. Once finished, runners can enjoy the finish line festivities, including the Sports & Fitness Expo and live entertainment. Post-race refreshments will be provided and the Awards Ceremony for the Half-Marathon will begin once the results have been certified</li>
                    <li><span>10k COURSE</span> - The 10K event starts and finishes in the Athletes Village. The paths are approximately 6 ft wide, perfectly paved and wind around through the forest. Each course has only two small hills with a minimal elevation gain to navigate and a fast downhill to flat finish to the roaring cheers of the crowd.</li>
                    <li><span>Splash n' Dash</span> - Kids event for participants ages 4 to 15. This is a 100 yard swim and a 50 yard dash. It is free if an adult registers for an event otherwise it is $25.</li>
                </ul>
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