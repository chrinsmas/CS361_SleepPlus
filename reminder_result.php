<html>
    <head>
        <title>Reminder Request Recieved</title>
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Allerta" />
    </head>
    <body>
        <?php
        $results = array();
        $counter = 0;

        $reminderTo = $_POST['reminderTo'];
        $remindMe = $_POST['remindMe'];


        //Remind To
        if ($reminderTo == 1){
             $reminder = "Reminder to Turn Off Electronics ";
        }
         if ($reminderTo == 2){
             $reminder = "Reminder to not eat before bed ";
        }
         if ($reminderTo == 3){
             $reminder = "Reminder to call parents ";
        }
         if ($reminderTo == 4){
             $reminder = "Reminder to excercise ";

        }
         if ($reminderTo == 5){
             $reminder = "Reminder to reduce sodium intake ";

        }
         if ($reminderTo == 6){
            $reminder = "Reminder to avoid snacks with high fat content ";
        }


        //Remind Me
        if ($remindMe == "daily" || $remindMe == "monthly"){
            $result[$counter] = $reminder . "set up " . $remindMe;
            $counter = $counter + 1;
        }

        if ($remindMe == "weekdays" || $remindMe == "weekends"){
            $results[$counter] = $reminder. "will run on " . $remindMe;
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
