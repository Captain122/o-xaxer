<html>
    <head>
        <title>mobile online-xaxer</title>
        <meta name="description" content="օնլայն խաղեր ,խաղացեք անվճար ու երկար,գոնկա,Mobile games,flash,html5 խաղերը online-xaxer.xyz կայքում">
        <meta name="keywords" content="xaxer,onlayn xaxer,browser games, օնլայն" />
        <link rel="shortcut icon" href="/img/xax.ico" type="image/x-icon">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <meta>
    </head>
    <body>
    <nav class="navbar navbar-dark bg-primary">
        <a class="navbar-brand" href="#">online-xaxer.xyz</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="btn btn-warning" style="color:white;" href="/pages/gonkaner.php">գոնկաներ</a>
                </li>
                <li class="nav-item active">
                    <a class="btn btn-secondary" style="color:white;" href="/pages/zombiner.php">զոմբիներ</a>
                </li>
                <li class="nav-item active">
                    <a class="btn btn-success" style="color:white;" href="/pages/krakoci.php">կրակոցիներ</a>
                </li>
                <li class="nav-item active">
                    <a class="btn btn-danger" style="color:white;" href="/pages/sexani.php">սեղանի խաղեր</a>
                </li>
                <li class="nav-item active">
                    <a class="btn btn-warning" style="color:white;" href="../pages/arkadaner.php">արկադաներ</a>
                </li>
                <li class="nav-item active">
                    <a class="btn btn-info" style="color:white;" href="../pages/sport.php">սպորտ</a>
                </li>
                <li class="nav-item active">
                    <a class="btn btn-warning" style="color:white;" href="../pages/axjikneri.php">աղջիկների</a>
                </li>
                <li class="nav-item active">
                    <a class="btn btn-secondary" style="color:white;" href="../pages/casino.php">Casino</a>
                </li>
                <li class="nav-item active">
                    <a class="btn btn-success" style="color:white;" href="../pages/kriv.php">ակտիվ կռիվներ</a>
                </li>
                <li class="nav-item active">
                    <a class="btn btn-secondary" style="color:white;" href="../pages/strategy.php">ստրատեգիաներ</a>
                </li>
                <li class="nav-item active">
                    <a  class="btn btn-danger" target="_blank" style="color:white;" href="flash.php">FLASH խաղերի բաժին</a>
                </li>
                <li class="nav-item active">
                    <a class="btn btn-lg btn-light" href="../test/test.php">Թեստեր!!!</a>
                </li>
            </ul>
            <span class="navbar-text">
            </span>
        </div>
    </nav>
        <h3>Խաղերի տեսակները տես վերևի կոճակով </h3>
        <h1>օնլայն խաղեր</h1>
        <?php require_once ("sem.php")?>
        <?php foreach ($arajm as $post) {?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-4">
                    <h5><?echo $post['name']?></h5>
                    <img src="<?echo $post['img']?>">
                    <div>
                        <a class="btn btn-lg btn-danger" href="/game.php?xax_id=<?echo $post['link']?>&nkar=<?echo $post['img']?>">Play</a>
                    </div>
                </div>
            </div>
        </div>
        <? } ?>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
