<!DOCTYPE html>
<html lang="ja">
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

    <form action="form_post2.php" method="post">

    <h1>サンタさんに届け！<br>
    みんなのおねだりリスト</h1>
    <h3>あなたの情報を登録しよう！(^^)/</h3>

    
<body background= "img/mcm.png"></body>
    
    <table class="form">
        <tr>
            <dl>
                <td>
                    <dt class="form-title">あなたの名前: </dt>
                </td>
                <td>
                    <dd><input type="text" name="name" placeholder="あなたの名前を記入します" id="name" required></dd>
                </td>
            </dl>
        </tr>

        <tr>
            <dl>
                <td>
                    <dt class="form-title">あなたの欲しいもの: </dt>
                </td>
                <td>
                    <dd><input type="text" name="pname" placeholder="あなたの欲しいものを記入します" id="pname" required></dd>
                </td>
            </dl>
        </tr>

        <tr>
            <dl>
                <td>
                    <dt class="form-title">今年の良い子度(悪い＝１〜良い＝５): </dt>
                </td>
                <td>
                    <dd><input class="number" type="number" name="number" placeholder="半角数字で良い子度を入力"></dd>
                </td>
            </dl>
        </tr>



        <table class="button">
        <tr>
            <td><input class="submit" type="submit" value="サンタに届け！"></input></td>
            <td><input class="reset" type="reset" value="やりなおす"></input></td>
        </tr>
    </table>

</form>

</body>
</html>
