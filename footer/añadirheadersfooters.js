const footer = "footer/footer.php"

añadirFoot(footer);

function añadirFoot(url) {
    fetch(url)
        .then((response) => {
            return response.text()
        })
        .then((data) => {
            document.querySelector('#footer').innerHTML = data;
        })
}

