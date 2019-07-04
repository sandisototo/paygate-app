<?php
    global $docRoot;
    echo <<<HTML
            <html>
                <head>
                    <title>Hello World Example</title>
                    <link rel="stylesheet" href="assets/css/master.css" type="text/css" />
                    <script type="text/javascript" src="assets/lib/jquery.min.js"></script>
                </head>
                <body>
                    <div class="instructions">
                        <h1>Instructions</h1>
                        <ul>
                        	<li>You are required to answer 6 questions</li>
                        	<li>You are provided with a way to run each question</li>
                        	<li>{$docRoot}index.php?q=?</li>
                        	<li>Replace the question mark(?) with a question number (1-6 / 99)</li>
                        	<li>Each question has a set of instructions</li>
                        	<li>You are provided with an example question and answer</li>
                        	<li>For question 1-5, you are provided an answer template</li>
                        	<li>For each answer template there is way to run it</li>
                        	<li>Each question exposes a <b><i>getData()</i></b> method</li>
                        	<li>The above method will provide you with data to work with when answering each question</li>
                        	<li>Each question also exposes a <b><i>getInstructions()</i></b> method</li>
                        	<li>Some questions will expose other methods as per question instructions</li>
                        	<li>Question 6 does not have an answer template, you are required to provide a way to call your answer</li>
                        	<li>Ideally start with questions 6 as most of your evaluation will be based upon</li>
                        	<li>=============================================</li>
                        	<li><b>Good luck, may the odds be in your favor...</b></li>
                        </ul>
                    </div>
                </body>
            </html>
HTML;
?>