<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://cdn.jsdelivr.net/npm/vue@2.7.8/dist/vue.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <?php include __DIR__ . '/../db/dischi.php'; ?>

    <title>Dischi PHP Versione 1</title>
</head>

<body>
    <div id='app' class="container p-3 sfondo">


        <ul >
            <li class="row g-5">
                <?php foreach ($dischi as $gruppo) {
                ?><ul class="col_">
                        <li>
                            <img class="card-img-top" src="<?= $gruppo['poster'] ?>" alt="">
                            <div class="card-body text-center">
                                <h4>
                                    <?= $gruppo['title'] ?>
                                </h4 class="card-title ">
                                <p class="card-text"><?= $gruppo['author'] ?></p>
                                <p class="card-text"><?= $gruppo['year'] ?></p>
                            </div>
                        </li>
                    </ul><?php
                        } ?>

            </li>
        </ul>


    </div>

    <script src="../js/myscript.js"></script>
</body>

</html>