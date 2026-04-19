<!DOCTYPE html>
<html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Températures à RENNES</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
        <link rel="stylesheet" href="static/index.css">

        <script src='static/index.js' defer></script>
    </head>

    <body>
        <section class="section">
            <div class="container">
                <div class="content">
                    <h1>Températures à RENNES</h1>
                    <div>
                        <p> Marquer les températures supérieures à <span id="sliderVal"><?= $max ?></span>
                            <input type="range" id="slider" value="<?= $max ?>" min="<?= $min?>" max="<?= $max ?>"
                                step="0.1">
                        </p>

                    </div>

                    <table class="table is-hoverable is-striped">
                        <theader>
                            <tr>
                                <th>Mois</th>
                                <th>Température (°C)</th>
                            </tr>
                        </theader>

                        <tbody>
                            <?php foreach($temperatures as $index => $temp){
                                echo "<tr>
                                        <td>$mois[$index]</td>
                                        <td>$temp</td>
                                      </tr>";
                                } ?>
                        </tbody>

                    </table>
                </div>
            </div>
        </section>
    </body>

</html>