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
                        <h1>Instructions For Example Question</h1>
                        <ul>
                        	<li>Every time you run the example question, <b><i>getData()</i></b> will return a message</li>
                        	<li>Print out the message returned by <b><i>getData()</i></b></li>
                        	<li>Also alert the message using javascript after the browser window has loaded</li>
                        </ul>
                    </div>
                </body>
            </html>
HTML;
?>