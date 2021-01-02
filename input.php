<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8">
    <title>じゃんけん</title>
</head>
<body>
    <h1>じゃんけんゲーム</h1>

    <form action="output.php" method="post">
        <label>
            <input type="radio" name="playerHand" value="グー"　checked>グー
        </label>
        <label>
            <input type="radio" name="playerHand" value="チョキ">チョキ
        </label>
        <label>
            <input type="radio" name="playerHand" value="パー">パー
        </label>
        <input type="submit" value="勝負する">
    </form>
</body>
</html>
