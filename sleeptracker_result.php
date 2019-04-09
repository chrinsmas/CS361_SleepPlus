<html>
    <head>
        <title>Sleep Tracker Request Recieved</title>
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Allerta" />
    </head>
    <body>
        <?php
        $results = array();
        $counter = 0;

        $day = $_POST['day'];
        $hours = $_POST['hours'];
        $quality = $_POST['quality'];

        //Day and Hours
        if($hours == 1){
            $results[$counter] = "You had " . $hours . " hour of " . $quality . " sleep on " . $day;
            $counter = $counter + 1;
        }
        else if($hours > 1){
            $results[$counter] = "You had $hours hours of $quality sleep on $day";
            $counter = $counter + 1;
        }

        ?>

        <h1 class="title">Inputs received</h3>
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
