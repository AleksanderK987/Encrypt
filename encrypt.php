<?php
if (isset($_POST['key'])&& isset($_POST['message'])){
    $key=$_POST['key'];
    $message=$_POST['message'];

    $result=encode($key, $message);
    echo json_encode([$result]);
}

function encode($key, $message) {
    $encodedMessage = '';
    $key = strtoupper($key);
    $keyLength = strlen($key);

    for ($i = 0, $j = 0; $i < strlen($message); $i++) {
        $messageChar = strtoupper($message[$i]);

        // Encoding spaces as themselves
        if ($messageChar === ' ') {
            $encodedMessage .= ' ';
            continue;
        }

        // Ignoring non-letter characters
        if (!ctype_alpha($messageChar)) {
            $encodedMessage .= $messageChar;
            continue;
        }

        $keyChar = $key[$j % $keyLength];
        $messageCharCode = ord($messageChar) - ord('A');
        $keyCharCode = ord($keyChar) - ord('A');

        // Encoded character code
        $encodedCharCode = ($messageCharCode + $keyCharCode) % 26;

        // Converting back to character
        $encodedChar = chr($encodedCharCode + ord('A'));
        $encodedMessage .= $encodedChar;

        // Only increment j if letter was used
        $j++;
    }

    return $encodedMessage;
}





?>