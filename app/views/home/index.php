<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= URLROOT; ?>/css/style.css">
    <title>Home</title>
</head>

<body>

    <header>
        <a href="<?= URLROOT; ?>" class="logo">

            <span>Home</span>
        </a>

        <ul class="navbar">
            <li><a href="<?= URLROOT; ?>" class="active">Home</a></li>
            <li><a href="<?= URLROOT; ?>/instructeur">Instructeurs</a></li>
            <li><a href="<?= URLROOT; ?>/allevoertuigen">Alle voertuigen</a></li>
        </ul>

    </header>

    <h2><?= $data['title']; ?></h2>

    <script src="<?= URLROOT; ?>/js/nav.js"></script>
</body>

</html>