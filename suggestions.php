<html>
    <head>
        <title>Sleep++ Suggestions</title>
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Allerta" />
    </head>
    <body>
        <?php
        $suggestions = array();
        $counter = 0;

        $feet = $_POST['feet'];
        $inches = $_POST['inches'];
        $weight = $_POST['weight'];
        $cardiovascular = $_POST['cardiovascular'];
        $hypertension = $_POST['hypertension'];
        $depression = $_POST['depression'];
        $anxiety = $_POST['anxiety'];
        $electronics = $_POST['electronics'];
        $exercise = $_POST['exercise'];
        $sleep = $_POST['sleep'];
        $dinner = $_POST['dinner'];

        if ($inches == 0) {
            $inches = 1; //for administration/editing
        }
        //BMI Suggestion
        //feet to inches
        $inches = $inches + $feet * 12;

        //BMI lbs and inches
        $BMI = (($weight * 703)/($inches * $inches));

        if($BMI < 18.5)
        {
            $suggestions[$counter] = "Eat foods with higher fat content.";
            $counter = $counter + 1;

        }
        else if($BMI >= 24.9)
        {
            $suggestions[$counter] = "Eat foods with lower fat content.";
            $counter = $counter + 1;
        }

        //Cardiovascular Suggestion
        if ($cardiovascular == "yes")
        {
            $suggestions[$counter] = "Decrease your sodium intake.";
            $counter = $counter + 1;
        }

        //Hypertension Suggestion
        if ($hypertension == "yes")
        {
            $suggestions[$counter] = "Exercise regularly.";
            $counter = $counter + 1;
        }

        //Depression Suggestion
        if($depression == "yes")
        {
            $suggestions[$counter] = "Reach out to your family and friends for support and comforting.";
            $counter = $counter + 1;
        }

        //Anxiety suggestion
        if($anxiety == "yes")
        {
            $suggestions[$counter] = "Try to avoid alcohol and reduce caffeine intake.";
            $counter = $counter + 1;
        }

        //Electronics suggestion
        if($electronics == "yes")
        {
            $suggestions[$counter] = "Turn off your electronic devices an hour before bed.";
            $counter = $counter + 1;
        }

        //Dinner suggestion
        if($dinner == "yes")
        {
            $suggestions[$counter] = "Do not eat at least 1 hour before bed.";
            $counter = $counter + 1;
        }

        //Exercise suggestion
        if($exercise < 3)
        {
            $suggestions[$counter] = "Increase your excercise to 3 or more hours per week.";
            $counter = $counter + 1;
        }

        //Sleep suggestion
        if($sleep < 8)
        {
            $suggestions[$counter] = "Sleep a minimum of 8 hours a night.";
            $counter = $counter + 1;
        }

        //Everything was normal
        if($BMI >= 18.5 && $BMI < 24.9 && $cardiovascular == "no" && $hypertension == "no" && $depression == "no" && $anxiety == "no" && $electronics == "no" && $dinner == "no" && $exercise >= 3 && $sleep >= 8)
        {
            $suggestions[$counter] = "It seems like you get 8 or more hours of sleep per day.   Keep up with your good sleep habits.   Please visit us again if you are having trouble sleeping.";
            $counter = $counter + 1;
        }

        ?>

        <h1 class="title">Based on your survey results, the following suggestions have been generated</h3>
        <div class ="content">
            <ul>
              <?php foreach($suggestions as $suggestion) { ?>
              <li><?php echo $suggestion; ?></li>
              <?php } ?>
            </ul>
             <form action="home.php">
                <button type="submit" class="button">Return Home</button>
            </form>
             <form action="progress.php">
                 <button type="submit" class="button">See Sleep Goals</button>
             </form>
        </div>
    </body>
</html>
