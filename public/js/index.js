formUrl = document.getElementById('form_short_url');
spanUrl = document.getElementById('span_url');
shortURL = document.getElementById('short-url');
copyButton = document.getElementById('copy-button');

formUrl.addEventListener('submit', (e) => {
    e.preventDefault();
    const userId = document.getElementById('user_id').value;
    const url = document.getElementById('input_url').value;
    saveUrl(url,userId);
});

copyButton.addEventListener('click', () => {
    navigator.clipboard.writeText(shortURL.value).then(() => {
        alert('Texto copiado al portapapeles!');
    }).catch(err => {
        console.error('Error al copiar: ', err);
    });
});

async function saveUrl(url,user) {

    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    await fetch('/shortCreate',{
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': csrfToken
        },
        body: JSON.stringify({
            urlOrigin: url,
            user_id: user
        })
    }).then(response =>{
        return response.json();
    }).then(data => {
        switch (data.status){
            case 200:
                console.log(data);
                spanUrl.classList.remove('d-block');
                shortURL.value = shortURL.value + data.url;
                break;
            case 400:
                spanUrl.classList.add('d-block');
                console.log(data);
                break;
            default:
                console.log('Error desconocido');
                break;
        }

    }).catch(error => console.error(error))

}
