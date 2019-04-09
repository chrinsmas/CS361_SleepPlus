<html>
    <head>
        <title>Alarm Request Recieved</title>
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Allerta" />
    </head>
    <body>
        <?php
        $results = array();
        $counter = 0;

        $on_off = $_POST['on_off'];
        $hours = $_POST['hours'];
        $minutes = $_POST['minutes'];
        $am_pm = $_POST['am_pm'];
        $set = $_POST['set'];


        if($on_off > 0 && $set == "daily")
        {
            $results[$counter] = "Alarm set for " . $hours . ":" . $minutes . " " . $am_pm . " " . $set;
            $counter = $counter + 1;
        }
        else if($on_off > 0)
        {
            $results[$counter] = "Alarm set for " . $hours . ":" . $minutes . " " . $am_pm . " on " . $set;
            $counter = $counter + 1;
        }
        else
        {
            $results[$counter] = "Alarm was not turned on.";
            $counter = $counter + 1;
        }

        ?>

        <h1 class="title">Alarm Set!</h3>
        <div class ="content">
            <ul>
              <?php foreach($results as $result) { ?>
              <li><?php echo $result; ?></li>
              <?php } ?>
            </ul>
             <form action="home.php">
                <button type="submit" class="button">Return to Home</button>
            </form>

            <form action="features.php">
                <button type="submit" class="button">Return to Features</button>
            </form>
        </div>

    </body>
</html>
