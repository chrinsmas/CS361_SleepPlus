<html>
    <head>
        <title>Sleep Tracker</title>
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Allerta" />
    </head>
    <body>
        <h1 class="title">Your Sleep Tracker</h1>
        <div class="content">
            <form method="post" action="sleeptracker_result.php">
                <fieldset>
                    <legend>Enter Sleep Data</legend>
                    Day:<br />
                    <select name="day">
                        <option value="Monday">Monday</option>
                        <option value="Tuesday">Tuesday</option>
                        <option value="Wednesday">Wednesday</option>
                        <option value="Thursday">Thursday</option>
                        <option value="Friday">Friday</option>
                        <option value="Saturday">Saturday</option>
                        <option value="Sunday">Sunday</option>
                        <option value="Weekdays">Mon-Fri</option>
                    </select><br />

                    Hours:<br />
                    <select name="hours">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select><br />

                    Quality:<br />
                    <select name="quality">
                        <option value="uninterrupted">Uninterrupted</option>
                        <option value="interrupted">Interrupted</option>
                        <option value="restless">Restless</option>
                        <option value="dream">Dream</option>
                    </select><br />
                    <br />

                </fieldset>
    		    <button type="submit" class="button">Save</button>
    	    </form>
	    </div>
	   <br />
    </body>
</html>
