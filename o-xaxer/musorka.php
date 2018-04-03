<?php
    require_once ('Mobile_Detect.php');
    $detect = new Mobile_Detect;
    if ($detect->isMobile()){
        header('Location: mobile/');
    }
?>
<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="yandex-verification" content="c11d7cd471c01c3e" />
    <meta name='mysitecost.ru' content='addurl' />
    <meta name="google-site-verification" content="llvsj7qQm_lZ9apcHSGA4ll_EOOcDMVJBj04q2lvMSs" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="xaxer, online xaxer,avto,gonka,krakoci, օնլայն խաղեր" />
    <meta name="description" content="օնլայն խաղեր բոլորի համար,խաղացեք անվճար ու երկար,գոնկա,կրակոցի,flash,html5 խաղերը online-xaxer.xyz կայքում">
    <link rel="shortcut icon" href="/img/xax.ico" type="image/x-icon">
    <title>online-xaxer.xyz օնլայն խաղերի կայք</title>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function (d, w, c) {
            (w[c] = w[c] || []).push(function() {
                try {
                    w.yaCounter47311965 = new Ya.Metrika({
                        id:47311965,
                        clickmap:true,
                        trackLinks:true,
                        accurateTrackBounce:true
                    });
                } catch(e) { }
            });

            var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function () { n.parentNode.insertBefore(s, n); };
            s.type = "text/javascript";
            s.async = true;
            s.src = "https://mc.yandex.ru/metrika/watch.js";

            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else { f(); }
        })(document, window, "yandex_metrika_callbacks");
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/47311965" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-112758437-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-112758437-1');
    </script>
</head>
<body>
<nav class="navbar navbar-light" style="height: 90px; background-color: #17354f;">
    <div class="container-fluid">
        <a class="logo navbar-brand" href="xaxer.php"><img src="img/ex.png"><span>online-xaxer.xyz</span></a>
        <h1 class="first_heading"> Լավագույն HTML5 և Flash խաղերը Ձեր համար!!! </h1>
<div class="socialize">
        <a class="btn btn-info"  href="https://vk.com/onlinexaxer"><i class="fa fa-vk" aria-hidden="true"></i></a>
        <a class="btn btn-primary" style="color:white;" href="https://www.facebook.com/Online-xaxer-328663167631757/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
</div>
    </div>
</nav>
<div class="submenu">
        <marquee behavior="alternate" direction="right"><h1>օնլայն խաղերի մեծ հավաքածու</h1></marquee>
    <div class="submenu2">
        <a class="btn btn-primary" style="color:white;" href="pages/gonkaner.php">գոնկաներ</a>
        <a class="btn btn-secondary" style="color:white;" href="pages/zombiner.php">զոմբիներ</a>
        <a class="btn btn-success" style="color:white;" href="pages/krakoci.php">կրակոցիներ</a>
        <a class="btn btn-danger" style="color:white;" href="pages/sexani.php">սեղանի խաղեր</a>
        <a class="btn btn-warning" style="color:white;" href="pages/arkadaner.php">արկադաներ</a>
        <a class="btn btn-info" style="color:white;" href="pages/sport.php">սպորտ</a>
  
        <a class="btn btn-warning" style="color:white;" href="pages/axjikneri.php">աղջիկների</a>
        <a class="btn btn-secondary" style="color:white;" href="pages/casino.php">Casino</a>
        <a class="btn btn-success" style="color:white;" href="pages/kriv.php">ակտիվ կռիվներ</a>
        <a class="btn btn-primary" style="color:white;" href="pages/strategy.php">ստրատեգիաներ</a>
        <a  class="btn btn-danger" target="_blank" style="" href="flash.php">FLASH խաղերի բաժին</a>
    </div>
    <div class="submenu3">
        <a class="tests" href="test/index.php">
           <img src="img/new.gif">
           Թեստեր
        </a>
    </div>
    <div class="all_games">
      <a class="" style="" href="xaxer.php">Բոլորը<i class="fa fa-caret-right" aria-hidden="true"></i>
</a>
    </div>
</div>
<div class="container">
    <div class="row">
        <?php require_once('SIUD/select.php') ?>
        <?php foreach ($araj as $post) {?>
            <div class="col-md-3 col-sm-6 col-xs-2 game_item">
                <div class="item_content">
                    <div class="img_name_play">
                        <img src="<?echo $post['img']?>" alt="<?echo $post['text']?>">
                        <div class="for_opacity">
                            <p><?echo $post['preview']?></p>
                            <i class="fa fa-2x fa-hand-pointer-o" aria-hidden="true"></i>
                        </div>
                        <div class="play">
                            <a href="game.php?xax_id=<?echo $post['link']?>&nkar=<?echo $post['img']?>"><i class="fa fa-5x fa-play-circle-o" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="desc">
                        <h5><?echo $post['name']?></h5>
                        <a href="game.php?xax_id=<?echo $post['link']?>&nkar=<?echo $post['img']?>">ԽԱՂԱԼ ՀԻՄԱ --></a>
                    </div>
                </div>
            </div>
        <? } ?>
        <a class="btn btn-danger btn-lg btn-block see_all_bottom" style="color:white;" href="xaxer.php">----     ՏԵՍՆԵԼ ԱՎԵԼԻ ՇԱՏ ԽԱՂԵՐ     ----</a>
    </div>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="/other/style-musorka.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
</body>
</html>