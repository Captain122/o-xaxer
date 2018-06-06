<?php
    require_once('db.php');
    $con = new Database();
    //stanal tvyalnery POST ic
     $coment2 = $_POST['t'];
     $h = $_POST['h'];
     $a = $_POST['a'];

//sksum enq inserti,mtcnelu pahy
    session_start();
    $gameid2 = $_SESSION['gameid'];
    if( $a !== null){
        $ins =  $con->execute("INSERT INTO comentxax  VALUES (NULL , '$a','$h','$coment2','$gameid2');");
        //comentnery vercnelu pahy
    };

    $coment = $con->query("SELECT * FROM comentxax WHERE game_id = '$gameid2' " );
    //var_dump($coment);

 echo('<h2><a class="" style="color:red;" href="https://www.online-xaxer.xyz/">վերադառնալ </br>online-xaxer.xyz </a></h2>');
?>

