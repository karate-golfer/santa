<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>


<br>


<!-- <body background= "img/oodoori.png"></body> -->
<body background= "img/mcm.png"></body>

</body>
</html>


<?php

session_start();
$name = $_POST["name"];
$pname = $_POST["pname"];
$wish = $_POST["wish"];
$number = $_POST["number"];

// echo $name."<br>";
// echo $pname."<br>";
// echo $wish."<br>";
// // echo $number."<br>";

// $num = $number;
// if($num==5){
//     echo "サンタさんが何回も来るはず！";
// }elseif($num==4){
//     echo "サンタさんがちょいちょい来るよ";
// }elseif($num==3){
//     echo "サンタさんが１回だけきてくれると思う";
// }elseif($num==2){
//     echo "いまからでも頑張ればサンタさん一応は来てくれるかも";
// }else {
//     echo "サンタさんは来ません。。。自分で買ってください";
// }

?>

<html>
    <head>
        <meta charset="utf-8">
    </head>


    <body>
        <h2 style="color:white">メリークリスマス！！</h2>
        <div class="answer">
        <p style="color:white"><?php echo $name ?>さん</p>
        <p style="color:white"><?php echo $pname ?>が欲しいんですね？</p>
        <p style="color:white"><?php 
        $num = $number;
        if($num==5){
            echo "半端なく良い子だったからサンタさんが何回も来るはずよ！";
        }elseif($num==4){
            echo "とっても良い子だったから、サンタさんがちょいちょい来ると思うよ！";
        }elseif($num==3){
            echo "そこそこ良い子だったから１回はサンタさん来てくれると思うよ。";
        }elseif($num==2){
            echo "厳しいなぁ。。。でもいまからでも頑張ればサンタさん一応は来てくれるかも";
        }else {
            echo "でも、悪い子だからサンタさんは来ません。。。自分で買ってください";
        }
        ?></p>
        </div>


<div class="audio">        
<audio controls autoplay src="ckb.mp3" type="audio/mp3">クリスマスの歌</audio><br>
</div>


<!-- みんなのリクエストの一覧を入れたい -->


<!-- みんなのリクエストの一覧を入れたい -->


</body>




</html>


