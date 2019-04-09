<html>
    <head>
        <title>Alarm</title>
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Allerta" />
    </head>
    <body>
        <h1 class="title">Alarm</h1>
        <div class="content">
            <form method="post" action="alarm_result.php">
                <fieldset>
                    <legend>Enter Sleep Data</legend>

                    On/Off<br />
                    <select name="on_off">
                        <option value="1">On</option>
                        <option value="0">Off</option>
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

                    Minutes:<br />
                    <select name="minutes">
                        <option value="00">00</option>
                        <option value="05">05</option>
                        <option value="10">10</option>
                        <option value="15">15</option>
                        <option value="20">20</option>
                        <option value="25">25</option>
                        <option value="30">30</option>
                        <option value="35">35</option>
                        <option value="40">40</option>
                        <option value="45">45</option>
                        <option value="50">50</option>
                        <option value="55">55</option>
                    </select><br />

                    AM/PM<br />
                    <select name="am_pm">
                        <option value="AM">AM</option>
                        <option value="PM">PM</option>
                    </select><br />

                   Set:
                    <select name="set">
                        <option value="daily">Daily</option>
                        <option value="weekdays">Weekdays</option>
                        <option value="weekends">Weekends</option>
                    </select><br />

                    </fieldset>
    		    <button type="submit" class="button">Save</button>
    	    </form>
	    </div>
	   <br />
    </body>
</html>
