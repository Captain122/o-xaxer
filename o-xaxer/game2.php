<?php

    //stananq hascen
    $url = $_ENV['SCRIPT_URI'];
    //ktrenq avelord masery
    $rest = substr($url, 39);
    //var_dump($rest);
    //echo $rest;
    //kpnenq db-in ev pntrenq et hasceov xaxy
    //require_once('db.php');
    //$db = new Database();
    //var_dump($db->query("SELECT * FROM onlinexax2  WHERE  sef = $rest  " ));
    //$ard = $db->query("SELECT * FROM onlinexax2  WHERE  sef = $rest  " );
    //echo var_dump($ard);
$ard = null;
$mysqli = new mysqli('localhost', 'wm65389_rafael', '123123', 'wm65389_xax');
if ($mysqli->connect_errno) {
    echo "Извините, возникла проблема на сайте";
    exit;
}
if ($result = $mysqli->query("SELECT * FROM onlinexax2 WHERE  sef = '$rest' ",MYSQLI_STORE_RESULT)) {
    //var_dump($result);
    if (!$mysqli->query("SET @a:='this will not work'")) {
        printf("Ошибка: %s\n", $mysqli->error);
    }
    while ($row = $result->fetch_assoc()) {
        $ard = ($row["code"]);
        $name = ($row["name"]);
        $text = ($row["text"]);
    }

    $result->close();
}


$mysqli->close();
?>

<!doctype html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="xaxer,online xaxer,gonka,krakoci, օնլայն խաղեր" />
    <link href="/other/gamepage.css" rel="stylesheet">
    <meta name="description" content="օնլայն խաղեր,գոնկա,կրակոցի,flash,html5 խաղերը online-xaxer.xyz կայքում">
    <title>online xaxer</title>
    <link rel="shortcut icon" href="/img/xax.ico" type="image/x-icon">
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
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.11';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<div id="main" style="text-align: center">
    <div class="row">
           <h2><?php echo $name ?></h2>
            <div>
                <?php echo $ard?>
            </div>
        <div><h3><?php echo $text?></h3></div>
    </div>
    <div style="margin-top: 20px;">ՍԵՂՄԵԿ ԿԻՍՎԵԼՈՒ ԿՈճԱԿԸ ՄԻՇՏ ԱՆՎճԱՐ ԽԱՂԱԼՈՒ ՀԱՄԱՐ!</div>
    <div class="fb-share-button" data-href="https://www.online-xaxer.xyz/" data-layout="box_count" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.online-xaxer.xyz%2F&amp;src=sdkpreparse">Поделиться</a></div>
</div>

</div>
</body>
</html>
