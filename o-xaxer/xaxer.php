<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="yandex-verification" content="c11d7cd471c01c3e" />
    <meta name="google-site-verification" content="llvsj7qQm_lZ9apcHSGA4ll_EOOcDMVJBj04q2lvMSs" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="xaxer,online xaxer" />
    <meta name="description" content="օնլայն խաղեր,խաղացեք անվճար,kriv,sport,գոնկա,կրակոցի,flash,html5 խաղերը online-xaxer.xyz կայքում">
    <link rel="shortcut icon" href="/img/xax.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link href="/other/style1.css" rel="stylesheet">
    <title>online-xaxer օնլայն խաղերի կայք</title>
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
<nav class="navbar navbar-light" style="background-color:lightseagreen; height: 90px">
    <div class="container">
        <h1 style="color:white;" class="navbar-brand" href="#">online-xaxer.xyz լավագույն օնլայն խաղերը Ձեր համար!!!</h1>
        <a class="btn btn-danger" style="color:white;" href="index.php">online-xaxer.xyz </a>
    </div>
</nav>
    <div class="container">
        <div class="row">
            <?php require_once('SIUD/select_xaxer.php') ?>
            <?php foreach ($araj as $post) {?>
            <div class="col-lg-2">
            <div style="text-align: center; background-color: white; margin:8% " >
                <h6><?echo $post['name']?></h6>
                <a href="game.php?xax_id=<?echo $post['link']?>&nkar=<?echo $post['img']?>"><img src="<?echo $post['img']?>" style="width: 121px"></a>
                <p><?echo $post['preview']?></p>
            </div>
        </div>
        <? } ?>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
</body>
</html>

