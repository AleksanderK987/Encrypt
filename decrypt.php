<?php
if (isset($_POST['key']) && isset($_POST['message'])) {
    $key = $_POST['key'];
    $message = $_POST['message'];

    $result = decode($key, $message);
    echo json_encode([$result]);
}

function decode($key, $message) {
    $decodedMessage = '';
    $key = strtoupper($key);
    $keyLength = strlen($key);

    for ($i = 0, $j = 0; $i < strlen($message); $i++) {
        $messageChar = strtoupper($message[$i]);

        // Decoding spaces as themselves
        if ($messageChar === ' ') {
            $decodedMessage .= ' ';
            continue;
        }

        // Ignoring non-letter characters
        if (!ctype_alpha($messageChar)) {
            $decodedMessage .= $messageChar;
            continue;
        }

        $keyChar = $key[$j % $keyLength];
        $messageCharCode = ord($messageChar) - ord('A');
        $keyCharCode = ord($keyChar) - ord('A');

        // Decoded character code
        $decodedCharCode = ($messageCharCode - $keyCharCode + 26) % 26;


        // Converting back to character
        $decodedChar = chr($decodedCharCode + ord('A'));
        $decodedMessage .= $decodedChar;

        // Only increment j if letter was used
        $j++;
    }

    return $decodedMessage;
}
?>