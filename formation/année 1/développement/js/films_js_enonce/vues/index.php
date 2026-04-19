<!DOCTYPE html>
<html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Films</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
        <link rel="stylesheet" href="static/nouislider/nouislider.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
        </script>

        <script src="static/nouislider/nouislider.min.js" defer></script>
        <script src="static/index.js" defer></script>
    </head>

    <body>
        <div class="container">
            <h1> Films et API</h1>
            <p>Films sortis entre <span id="start">1921</span> et <span id="end">2019</span></p>
            <div id="slider"></div>
            <div class="row">
                <div class="col">
                    <h2>Titres</h2>
                    <ul id="listFilms" class="list-group">

                    </ul>
                </div>
                <div class="col ">
                    <div class="sticky-top">
                        <h2>Acteurs</h2>
                        <ul id="listActeurs" class="list-group">

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>