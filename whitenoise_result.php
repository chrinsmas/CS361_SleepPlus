<html>
    <head>
        <title>White Noise Request Recieved</title>
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Allerta" />
    </head>
    <body>
        <?php
        $results = array();
        $counter = 0;

        $on_off = $_POST['on_off'];
        $hours = $_POST['hours'];
        $sounds = $_POST['sounds'];
        $options = $_POST['options'];

        //On and Off the setting
        if ($on_off == 0){
            $results[$counter] = "You turned off White Noise.";
            $counter = $counter + 1;
        }
        /*
        if ($on_off == 1){
            $results[$counter] = "You turned on White Noise.";
            $counter = $counter + 1;
        }
        */

        //Set white noise play hours per day
        if($hours > 0 && $on_off == 1)
        {
            $results[$counter] = "You turned on white noise for $hours hours.";
            $counter = $counter + 1;
        }

        //Set white noise sounds
        if($sounds == 1 && $on_off == 1)
        {
            $results[$counter] = "You selected River sound.";
            $counter = $counter + 1;
        }
        if($sounds == 2 && $on_off == 1)
        {
            $results[$counter] = "You selected Ocean sound.";
            $counter = $counter + 1;
        }
        if($sounds == 3 && $on_off == 1)
        {
            $results[$counter] = "You selected Rain Forest sound.";
            $counter = $counter + 1;
        }
        if($sounds == 4 && $on_off == 1)
        {
            $results[$counter] = "You selected Fan sound.";
            $counter = $counter + 1;
        }
        if($sounds == 5 && $on_off == 1)
        {
            $results[$counter] = "You selected Thunder Storm sound.";
            $counter = $counter + 1;
        }

        //Set white noise options
        if ($options == 1 && $on_off == 1){
            $results[$counter] = "White Noise will play daily.";
            $counter = $counter + 1;
        }
        if ($options == 2 && $on_off == 1){
            $results[$counter] = "White Noise will play on weekdays.";
            $counter = $counter + 1;
        }
        if ($options == 3 && $on_off == 1){
            $results[$counter] = "White Noise will play on weekends.";
            $counter = $counter + 1;
        }
        if ($options == 4 && $on_off == 1){
            $results[$counter] = "White Noise will play monthly.";
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
