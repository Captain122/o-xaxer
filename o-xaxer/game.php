<?php
    //echo $_GET['xax_id'];
    $link = $_GET['xax_id'];
    $link2 = $_GET['nkar'];
    session_start();
    $_SESSION['gameid'] = $link;
?>
<!doctype html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="xaxer,online xaxer,gonka,krakoci, օնլայն խաղեր" />
    <link href="/other/gamepage.css" rel="stylesheet">
    <meta name="description" content="օնլայն խաղեր,գոնկա,կրակոցի,flash,html5 խաղերը online-xaxer.xyz կայքում">
    <title>online xaxer</title>
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
    <h3>Սեղմեկ խաղալու համար ներքև</h3>
    </br>
    <a target="_blank" href="<?echo $link?>">ԽԱՂԱԼ</a>
    </br>
    <a target="_blank" href="<?echo $link?>"><img src="<?echo $link2?>"></a>
    <div style="margin-top: 20px;">ՍԵՂՄԵԿ ԿԻՍՎԵԼՈՒ ԿՈճԱԿԸ ՄԻՇՏ ԱՆՎճԱՐ ԽԱՂԱԼՈՒ ՀԱՄԱՐ!</div>
    <div class="fb-share-button" data-href="https://www.online-xaxer.xyz/" data-layout="box_count" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.online-xaxer.xyz%2F&amp;src=sdkpreparse">Поделиться</a></div>
</div>
<div style="text-align: center; margin-top: 10px;">
    <h2>Մեկնաբանություններ</h2>
    <?php include('comments.php') ?>
    <?php foreach ($coment as $post) {?>
    <div id="uc">
        <h2><?echo $post['anun']?></h2>
        <p><?echo $post['comment']?></p>
    </div>
    <? } ?>
</div>
<div style="text-align: center; margin-top: 10px;">
    <h2>գրեք Ձեր կարծիքը</h2>
    <form action="comments.php" method="post">
        <p>Ձեր անունը</p>
        <input class="sirun" style="width:400px; height:30px"  name="a" type="text">
        </br>
        <p>Ձեր համարը(պարտադիր չէ)</p>
        <input class="sirun" name="h" style="width: 400px; height:30px" type="text" placeholder="karox eq chgrel">
        </br>
        <p>գրել քոմենթը</p>
        <input class="sirun" style="width:500px; height:60px" type="texarea" name="t">
        </br>
        <p>ուղարկել մեկնաբաությունը</p>
        <input id="send" type="submit" value="ուղարկել">
    </form>
</div>
</body>
</html>
