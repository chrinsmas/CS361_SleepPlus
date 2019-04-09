<html>
    <head>
        <title>White Noise</title>
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Allerta" />
    </head>
    <body>
        <h1 class="title">Background Noise</h1>
        <div class="content">
            <form method="post" action="whitenoise_result.php">
                <fieldset>
                    <legend>Set up Background Noise</legend>
                    On/Off<br />
                    <select name="on_off">
                        <option value="1">On</option>
                        <option value="0">Off</option>
                    </select><br />

                    Hours:
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
                    <br />

                    Sounds:
                    <select name="sounds">
                        <option value="1">River</option>
                        <option value="2">Ocean</option>
                        <option value="3">Rain Forest</option>
                        <option value="4">Fan</option>
                        <option value="5">Thunder Storm</option>
                    </select><br />
                    <br />

                     Daily/Weekly/Monthly:
                    <select name="options">
                        <option value="1">Daily</option>
                        <option value="2">Weekdays</option>
                        <option value="3">Weekends</option>
                        <option value="4">Monthly</option>
                    </select><br />
                </fieldset>
    		    <button type="submit" class="button">Submit</button>
    	    </form>
	    </div>
	   <br />
        </form>
	   <br />
        <div class="content">
        <fieldset>
        <legend>White Noise Options</legend>
        <br />

             <form action="https://youtu.be/mg4kDY_hy6o">
                    <button type="submit" class="button">River</button>
             <form action="https://youtu.be/7F-F8-qHmq0">
                    <button type="submit" class="button">Ocean</button>
            </form>
              <form action="https://youtu.be/8myYyMg1fFE">
                    <button type="submit" class="button">Rain Forest</button>
            </form>
            <form action="https://youtu.be/f79bKZAznjM">
                    <button type="submit" class="button">Fan</button>
            </form>
            <form action="https://youtu.be/nDq6TstdEi8">
                    <button type="submit" class="button">Thunder Storm</button>
            </form>
        </fieldset>
        </div>
    </body>
</html>
    
