<!doctype html>
<html>
    <head>
        <title>Sending Array to AJAX request using jQuery and PHP</title>
        <link href="style.css" type="text/css" rel="stylesheet">
        <script src="jquery-1.12.0.min.js" type="text/javascript"></script>
        <script src="script.js" type="text/javascript"></script>

    </head>
    <body>
        <div class="container">
            <div class="content">
                <h1>Enter Details</h1>
                <div class="element">
                    <input type="text" id="txt_name" placeholder="Name">
                </div>

                <div class="element">
                    <input type="email" id="txt_email" placeholder="email">
                </div>

                <div class="element">
                    <div>Languages you now?</div>
                    <input type="checkbox" name="prolang" value="JavaScript"> JavaScript <br/>
                    <input type="checkbox" name="prolang" value="jQuery"> jQuery <br/>
                    <input type="checkbox" name="prolang" value="AngularJS"> AngularJS <br/>
                    <input type="checkbox" name="prolang" value="NodeJS"> NodeJS <br/>
                    <input type="checkbox" name="prolang" value="TypeScript"> TypeScript <br/>
                </div>

                <div class="element">
                    <input type="button" value="Submit" id="submit">
                </div>
            </div>
<?php var_dump($keys_json); ?>
            <div class="details">
                Name : <span id="name"></span><br/>
                Email : <span id="email"></span><br/>
                Languages : <span id="lang"></span><br/>
                jQuery : <span id="foundjquery"></span>
            </div>
        </div>
    </body>
</html>