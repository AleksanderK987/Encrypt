<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Encryption/Decryption</title>
        <script src="js/javascript.js"> </script>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="wrapper">
            <div class="encryptContainer">
                <h1>Encryption</h1>
                <form id="formEncrypt">
                    <br>Generate key: <br></br>
                    Length of key: <span id="keyLength">5</span><br></br>
                    <input type="range" id="keyLengthRange" class="slider" name="keyLengthRange" min="5" max="15" value="8" oninput="updateKeyLength(this.value)"><br></br>
                    <button type="button" class="generateButton" onclick="generateKey()"><b>Generate</b></button><br></br>
                    <input type="text" id="encryptKey" name="encryptKey" placeholder="Or type.." required onkeypress="return event.charCode != 32"  pattern="[a-zA-Z]+"><br></br>
                    Message:<br></br>
                    <textarea id="message" name="message" placeholder="Type.."></textarea><br></br>
                    <button type="button" class="encryptButton" onclick="encrypt()"><b>Encrypt</b></button></br>
                </form>
            </div>
            <div class="decryptContainer">
                <h1>Decryption</h1>
                <form id="formDecrypt">
                    <br>Key: <br></br>
                    <input type="text" id="decryptKey" name="decryptKey" placeholder="Type.." required><br></br>
                    Message:<br></br>
                    <textarea id="message" name="message" placeholder="Type.."></textarea><br></br>
                    <button type="button" class="decryptButton" onclick="decrypt()"><b>Decrypt</b></button></br>
                </form>            
            </div>
        </div>
    </body>
</html>