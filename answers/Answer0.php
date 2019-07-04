<?php
    include_once('lib/Question0.php');
    include_once('lib/BaseAnswer.php');

    class Answer0 extends BaseAnswer {
        public function answer() {
            $q0 = new Question0();
            $q0->getInstructions();
            $hello = $q0->getData();
            echo <<<HTML
            <html>
                <head>
                    <title>Hello World Example</title>
                    <link rel="stylesheet" href="assets/css/master.css" type="text/css" />
                    <script type="text/javascript" src="assets/lib/jquery.min.js"></script>
                    <script type="text/javascript" src="assets/js/master.js"></script>
                </head>
                <body>
                    <div class="example">
                        <input id="exampleData" type="hidden" value="{$hello}" />
                        {$hello}
                    </div>
                </body>
            </html>
HTML;
        }
    }