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
                        <h1>Instructions For Question 2</h1>
                        <ul>
                        	<li>Every time you run the question 2, <b><i>getData()</i></b> will return a list of ZAR amounts next to currencies to convert it to</li>
                        	<li>Loop through all the strings</li>
                        	<li>R100.50 to USD will be displayed as "ZAR 010050 -> USD"</li>
                        	<li>Note that all amounts are in cents and amounts less than 6 six digits are prepended with zeros. ie. ZAR R100.50 => 010050</li>
                        	<li>Question2 exposes a method called: getZARConversionRate('currency') to lookup the conversion rate for a particular currency</li>
                        	<li>Use getZARConversionRate("USD") to lookup the conversion rate for ZAR -> USD</li>
                        	<li>Convert all the amounts to the requested currencies and display the amount in decimal format: ie, "USD 12.69"</li>
                        	<li>=========================================================================================================================================</li>
                        	<li><b>BONUS</b></li>
                        	<li>Some currencies doesn't use two fraction digits, bonus points if you figure out the correct number of fraction digits when converting</li>
                        	<li>See if you can convert the USD to GBP given only the ZAR conversion rate</li>
                        </ul>
                    </div>
                </body>
            </html>
HTML;
?>