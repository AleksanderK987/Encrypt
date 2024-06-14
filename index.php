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
                <h1>Szyfrowanie</h1>
                <form id="form">
                    Klucz: 
                    <input type="text" id="key" name="key" placeholder="Type.." required><sup> *</sup><br><br>
                    Wiadomość:<br></br>
                    <textarea id="message" name="message" placeholder="Type.."></textarea><sup> *</sup><br></br>
                    <sup>* - wymagane</sup><br></br>
                    <button type="button" onClick="encrypt()">Encrypt</button>
                </form>
            </div>
            <div class="decryptContainer">
                <h1>Deszyfrowanie</h1>
                <form id="form">
                    Klucz: 
                    <input type="text" id="key" name="key" placeholder="Type.." required><sup> *</sup><br><br>
                    Wiadomość:<br></br>
                    <textarea id="message" name="message" placeholder="Type.."></textarea><sup> *</sup><br></br>
                    <sup>* - wymagane</sup><br></br>
                    <button type="button" onClick="decrypt()">Decrypt</button>
                </form>
            </div>
        </div>
    </body>
</html>