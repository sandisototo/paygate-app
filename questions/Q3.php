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
                        <h1>Instructions For Question 3</h1>
                        <ul>
                        	<li>Every time you run question 3, PHP errors will be displayed</li>
                        	<li>Question 3's <b><i>getData()</i></b> method must be called 6 times. A loop is already provided for you</li>
                        	<li>PHP has different types of errors. Notices, Warnings, Fatal Errors, & Exceptions</li>
                        	<li>Please handle all errors occurring as a result of calling <b><i>getData()</i></b> such that no errors are displayed on screen</li>
                        	<li>Please handle Exceptions as non PHP Fatal Errors. Display a friendly message next to them</li>
                        	<li>For each and every error handled print out the message and the error type</li>
                        </ul>
                    </div>
                </body>
            </html>
HTML;
?>