<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>フォーム:POST</title>
</head>
<body>


<img src="img/mcm.png" alt="ミュンヘンクリスマス市">

<form action="form_post2.php" method="post">
    <p>お名前:<input type="text" name="name" size="20"></p>
    <p>Mail:<input type="text" name="mail" size="40"></p>
    <p>サンタにお願いしたいもの:<input type="text" name="wish" size="50"></p>
    <p>今年の良い子度（半角で1〜5を入力）:<input type="text" name="good" size="20"></p>
    
    <p><input type="submit" value="送信"></p>

    <!-- <audio controls autoplay src="~"></audio> -->


<!--     
<audio src="ckb.mp3" autoplay loop></audio> -->

</form>
</body>
</html>