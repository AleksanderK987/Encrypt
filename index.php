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
                <form id="form">
                    <br>Key: <br></br>
                    <input type="text" id="key" name="key" placeholder="Type.." required><br><br>
                    Message:<br></br>
                    <textarea id="message" name="message" placeholder="Type.."></textarea><br></br>
                    <button type="button" class="encryptButton" onClick="encrypt()">Encrypt</button></br>
                </form>
            </div>
            <div class="decryptContainer">
                <h1>Decryption</h1>
                <form id="form">
                    <br>Key: <br></br>
                    <input type="text" id="key" name="key" placeholder="Type.." required><br><br>
                    Message:<br></br>
                    <textarea id="message" name="message" placeholder="Type.."></textarea><br></br>
                    <button type="button" class="decryptButton" onClick="decrypt()">Decrypt</button></br>
                </form>
            </div>
        </div>
    </body>
</html>