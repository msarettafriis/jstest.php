<!DOCTYPE html>
<html>
    <head>
        <title>Javascript or No?</title>
    </head>
    <body>
    <?php
        $blah = true;
        function js_echo($message, $id) {
            echo '<script>';
            echo "const $id = document.createElement('p');";
            echo "const message = document.createTextNode('$message');";
            echo "$id.appendChild(message);";
            echo "document.body.appendChild($id);";
            echo '</script>';
        }
        if ($blah) {
            $message = "There is Javascript!";
            js_echo($message, 'blah');
        }
        else {
            echo '<p>No Javascript here!</p>';
        }
    ?>
    </body>
</html>
