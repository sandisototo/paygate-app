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
                        <h1>Instructions For Question 4</h1>
                        <ul>
                        	<li>Every time you run question 4, <b><i>getData()</i></b> will return a list of random JSON messages containing sensitive data</li>
                        	<li>Your job is to mask all the card data with underscores, and hash any passwords</li>
                        	<li>Card Data is typically masked in a special way, the first six and last four digits are unmasked while the middle digits are all masked</li>
                        	<li>Password are calculated using SHA256 hash displayed in hex format</li>
                        	<li>======================================================================</li>
                        	<li><b>EXAMPLE</b></li>
                        	<li><b>Card:</b> 4000000000000002 => 400000______0002</li>
                        	<li><b>CVV:</b> 123 => ___</li>
                        	<li><b>Password:</b> q1a2z3 => 2BDB15F678E4EEDD6E982355E7A777AF25A0A02BA70D6C85364712EF962775A3</li>
                        	<li>======================================================================</li>
                        	<li>Card Numbers can be 16-19 digits long and CVVs can be 3-4 digits long</li>
                        	<li>Print out card and password data masked/hashed as explained above</li>
                        </ul>
                    </div>
                </body>
            </html>
HTML;
?>