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
                        <h1>Instructions For Question 5</h1>
                        <ul>
                        	<li>Every time you run question 5, <b><i>getData()</i></b> will return a URL</li>
                        	<li>Do a http POST and GET to the given url</li>
                        	<li>For both the POST and GET pass in a parameter named "action" with a value of the http call, i.e "get"</li>
                        	<li>Print out the code and description that is coming back</li>
                        	<li>The code and description are comma separated, i.e "1234,test code"</li>
                        	<li>Filter the data such that the code is always an int, and the description a string</li>
                        	<li>Handle any errors that could typically be encountered</li>
                        	<li>The method you choose to use to do the http calls is completely up to you. <b>HINT:</b> Curl</li>
                        </ul>
                    </div>
                </body>
            </html>
HTML;
?>