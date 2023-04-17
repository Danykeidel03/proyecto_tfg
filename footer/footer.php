<style>
    html,
    body {
        margin-top: 0px;
        margin-left: 0px;
        margin-right: 0px;
        margin-bottom: 0px;
    }

    footer {
        background-color: #afafaf;
        width: 100%;
        height: 100px;
    }

    .parent {
        display: grid;
        grid-template-columns: repeat(6, 1fr);
        grid-template-rows: repeat(1, 1fr);
        grid-column-gap: 0px;
        grid-row-gap: 0px;
    }

    .div1 {
        grid-area: 1 / 1 / 2 / 2;
        margin-top: 20px;
        margin-left: 15px;
    }

    .div2 {
        grid-area: 1 / 2 / 2 / 3;
        margin-top: 20px;
        margin-left: 8px;
    }

    .div3 {
        grid-area: 1 / 3 / 2 / 4;
        margin-top: 20px;
        margin-left: 15px;
    }

    .div4 {
        grid-area: 1 / 6 / 2 / 7;
        margin-top: 20px;
        margin-left: 15px;
    }

    p {
        color: #7f0000;
        font-family: 'Bebas Neue', cursive;
        font-family: 'Cinzel', serif;
        font-family: 'Fjalla One', sans-serif;
        font-family: 'IBM Plex Mono', monospace;
        font-family: 'Open Sans', sans-serif;
        font-family: 'Ubuntu', sans-serif;
    }
</style>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Cinzel:wght@500&family=Fjalla+One&family=IBM+Plex+Mono:wght@500&family=Open+Sans&family=Ubuntu&display=swap" rel="stylesheet">
<footer>
    <div class="parent">
        <div class="div1">
            <p>INFORMACION</p>
        </div>
        <div class="div2">
            <p>Informacion</p>
        </div>
        <div class="div3">
            <p>Informacion</p>
        </div>
        <div class="div4">
            <p>Informacion</p>
        </div>
    </div>
</footer>