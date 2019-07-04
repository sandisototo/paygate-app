<?php
echo <<<HTML
            <html>
                <head>
                    <title>Hello World Example</title>
                    <link rel="stylesheet" href="assets/css/master.css" type="text/css" />
                    <script type="text/javascript" src="assets/lib/jquery.min.js"></script>
                </head>
                <body>
                    <div class="instructions">
                        <h1>Instructions For Question 1</h1>
                        <ul>
                        	<li>Every time you run the question 1, <b><i>getData()</i></b> will return a list of random objects</li>
                        	<li>Loop through all the objects</li>
                        	<li>If an object is a whole number and divisible by 4, print "Divisible" next to that object</li>
                        	<li>If an object is a float/double amount, print "Amount" next to that object and format to two decimal places</li>
                        	<li>If an object is a date, print "Date" next to that object and format "Y-m-d"</li>
                        	<li>Last object of this list is always a date string in "Y-m-d" format</li>
                        	<li>Construct a date object from the last object, print "Date Construct" next to this object and format the date with hours, minutes, and milliseconds</li>
                        	<li>Print "no" to all other objects</li>
                        </ul>
                    </div>
                </body>
            </html>
HTML;
?>