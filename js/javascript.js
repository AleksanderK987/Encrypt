function updateKeyLength(value) {
    document.getElementById('keyLength').innerText = value;
}

document.addEventListener('DOMContentLoaded', function() {
    updateKeyLength(document.getElementById('keyLengthRange').value);
});

function generateKey() {
    const keyLength = document.getElementById('keyLengthRange').value;
    const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    let key = ' ';
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