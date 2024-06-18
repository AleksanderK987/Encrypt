function updateKeyLength(value) {
    document.getElementById('keyLength').innerText = value;
}

document.addEventListener('DOMContentLoaded', function() {
    updateKeyLength(document.getElementById('keyLengthRange').value);
});

function generateKey() {
    const keyLength = document.getElementById('keyLengthRange').value;
    const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    let key = '';
    for (let i = 0; i < keyLength; i++ ){
        key+= characters.charAt(Math.floor(Math.random() * characters.length));
    }
    document.getElementById('encryptKey').value = key;
}

document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('encryptKey').addEventListener('keydown', function(event) {
        if (!/^[a-zA-Z]+$/.test(event.key) && event.key !== 'Backspace' && event.key !== 'Delete' && event.key !== 'ArrowLeft' && event.key !== 'ArrowRight') {
            event.preventDefault();
        }
    });
});

function encrypt(){
    var key=document.getElementById('encryptKey').value;
    var message=document.getElementById('message').value;
    var dane='key='+encodeURIComponent(key)+'&message='+encodeURIComponent(message);

    fetch('encrypt.php',{
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: dane
    })
    
    .then(response=>response.json())
    .then(data=>{
        //kod do wyswietlania tutaj
        document.getElementById('message').value=data[0];
    })
    .catch(error=>console.error('Error: ',error));
}

function decrypt() {
    var key = document.getElementById('decryptKey').value;
    var message = document.getElementById('decryptMessage').value;
    var dane = 'key=' + encodeURIComponent(key) + '&message=' + encodeURIComponent(message);

    fetch('decrypt.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: dane
    })
    .then(response => response.json())
    .then(data => {
        document.getElementById('decryptMessage').value = data[0];
    })
    .catch(error => console.error('Error: ', error));
}