<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="kriv xaxer,online krakel, օնլայն խախեր" />
    <meta name="description" content="fight,shuter,օնլայն խաղեր,խաղացեք անվճար,kriv խաղերը online-xaxer.xyz կայքում">
    <link rel="shortcut icon" href="/img/xax.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link href="/other/style.css" rel="stylesheet">
    <title>kriv xaxer,fight games</title>
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
<nav class="navbar navbar-light" style="background-color:firebrick;">
    <div class="container">
        <a class="navbar-brand" href="#">online-xaxer.xyz լավագույն HTML5 և Flash խաղերը Ձեր համար!!!</a>
        <a class="btn btn-danger" style="color:white;" href="../index.php">վերադառնալ online-xaxer.xyz </a>
    </div>
</nav>
<div class="container">
    <div class="row">
        <?php require_once('/home/wm65389/domains/online-xaxer.xyz/public_html/SIUD/select_kriv.php') ?>
        <?php foreach ($araj7 as $post7) {?>
            <?php $k = '../';
            $findme   = 'https';
            $pos = strpos($post7['img'], $findme);
            if($pos !== false){
                $k ='';
            }
            ?>
            <div class="col-md-3" >
                <div style="text-align: center; background-color: white; margin:8% " >
                    <h5><?echo $post7['name']?></h5>
                    <div><img src="<?echo $k?><?echo $post7['img']?>" style="width: 180px"></div>
                    <div><?echo $post7['preview']?></div>
                    <a href="../game.php?xax_id=<?echo $post7['link']?>&nkar=<?echo $post7['img']?>">ԽԱՂԱԼ ՀԻՄԱ --></a>
                </div>
            </div>
        <? } ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
</body>
</html>