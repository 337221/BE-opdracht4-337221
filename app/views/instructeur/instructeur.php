<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= URLROOT; ?>/css/style.css">
    <title>Instructeurs</title>
</head>

<body>

    <header>
        <a href="<?= URLROOT; ?>" class="logo">

            <span>Home</span>
        </a>

        <ul class="navbar">
            <li><a href="<?= URLROOT; ?>">Home</a></li>
            <li><a href="<?= URLROOT; ?>/instructeur" class="active">Instructeurs</a></li>
            <li><a href="<?= URLROOT; ?>/allevoertuigen">Alle voertuigen</a></li>
        </ul>

    </header>

    <div class="container">
        <div class="circle"></div>
        <div class="circle"></div>
        <h1>
            <?= $data['title']; ?>
        </h1>
        <h3>
            Aantal instructeurs: <?= $data['TotalInstr']; ?>
        </h3>
        <div class="card">
            <div class="ruimte">
                <table>
                    <thead>
                        <th>Voornaam</th>
                        <th>Tussenvoegsel</th>
                        <th>Achternaam</th>
                        <th>Mobiel</th>
                        <th>Datum in dienst</th>
                        <th>Aantal sterren</th>
                        <th>Voertuigen</th>
                        <th>Ziekte/Verlof</th>
                        <th>Verwijderen</th>
                    </thead>
                    <tbody>
                        <?= $data['rows']; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="<?= URLROOT; ?>/js/nav.js"></script>

</body>

</html>