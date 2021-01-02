<?php
$hands = ['グー','チョキ','パー'];

if(isset($_POST['playerHand'])) {

    $playerHand = $_POST['playerHand'];
    $key =array_rand($hands);
    $pcHand = $hands[$key];

    if($playerHand == $pcHand){
        $result = 'あいこ';
    } else if($playerHand == 'グー' && $pcHand == 'チョキ') {
        $result ='勝ち';
    } else if($playerHand == 'チョキ' && $pcHand == 'パー') {
        $result ='勝ち';
    } else if($playerHand == 'パー' && $pcHand == 'グー') {
        $result ='勝ち';
    } else {
        $result ='負け';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8">
    <title>じゃんけん</title>
</head>
<body>
    <h2>結果</h2>
    <h1><?= $result; ?></h1>

    あなた:<?= $playerHand; ?><br>
    コンピューター:<?= $pcHand; ?><br>
<p><a href="input.php">もう一回勝負する</a></p>

</body>
</html>