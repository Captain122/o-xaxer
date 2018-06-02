<?php

?>
<!doctype html>
<html lang="ge">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="yandex-verification" content="c11d7cd471c01c3e" />
    <meta name="google-site-verification" content="llvsj7qQm_lZ9apcHSGA4ll_EOOcDMVJBj04q2lvMSs" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="tamashebi,ონლაინ თამაშები,არკადული,რბოლა,tanki online games,girls" />
    <meta name="description" content="tamashebi ,play free games,sport,shooter,flash,html5 games, in online-xaxer.xyz site">
    <link rel="shortcut icon" href="/img/xax.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link href="/other/style2.css" rel="stylesheet">
    <title>online-xaxer online games portal</title>
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
    <!-- /Yandex.Metrika counter -->
</head>
<body>
<nav class="navbar navbar-light" style="background-color:darkgreen; height: 90px">
    <div class="container">
        <h1 style="color:white;" class="navbar-brand" href="#">online-xaxer.xyz tamashebi, თამაშები</h1>
        <a class="btn btn-danger" style="color:white;" href="../index.php">back online-xaxer.xyz </a>
    </div>
</nav>
<div class="container">
    <h1>აქ შეგიძლიათ გაერთოთ მაქსიმალურად, ითამაშოთ ონლაინ თამაშები სროლებზე, გონკებზე, სპორტზე, სტრატეგიებზე </h1>
    <div class="row">
                    <?php require('../SIUD/select_g.php') ?>
                    <?php foreach ($arajt2 as $post) {?>
                        <div style="margin: 11px; text-align: center">
                            <h5><?echo $post['name']?></h5>
                            <div><a href="../game2.php/<?echo $post['sef']?>"><img src="<?echo $post['img']?>" style="width: 311px"></a></div>
                        </div>
                    <? } ?>
    </div>
</div>
<div style="text-align: center">
    <a class="btn btn-info btn-lg" style="color:white;" href="../index.php"><----     see second page games     ----></br>main page</a></button>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
</body>
</html>


