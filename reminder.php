<html>
    <head>
        <title>Reminders</title>
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Allerta" />
    </head>
    <body>
        <h1 class="title">Your Reminders</h1>
        <div class="content">
            <form method="post" action="reminder_result.php">
                <fieldset>
                    <legend>Set up Reminders</legend>
                     Remember to:<br />
                    <select name="reminderTo">
                        <option value="1">Turn off electronics</option>
                        <option value="2">Not eat before bed</option>
                        <option value="3">Call parents</option>
                        <option value="4">To excercise</option>
                        <option value="5">Reduce sodium intake</option>
                        <option value="6">Avoid snacks with high fat content</option>
                    </select><br />


                     Remind me:
                    <select name="remindMe">
                        <option value="daily">Daily</option>
                        <option value="weekdays">Weekdays</option>
                        <option value="weekends">Weekends</option>
                        <option value="monthly">Monthly</option>
                    </select><br />

                </fieldset>
                <button type="submit" class="button">Save</button>
            </form>
        </div>



    </body>
</html>
