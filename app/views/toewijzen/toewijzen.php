<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= URLROOT; ?>/css/style.css">
    <title>Toewijzen</title>
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
            Naam: <?= $data['fullName']; ?>
        </h3>
        <h3>
            Datum in dienst: <?= $data['did']; ?>
        </h3>
        <h3>
            Aantal sterren: <?= $data['TotalStars']; ?>
        </h3>

        <div class="card">
            <div class="ruimte">
                <table>
                    <thead>
                        <?= $data['th']; ?>
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