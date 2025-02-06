<!DOCTYPE html>
<html>
<head>
    <title>Gacha</title>
    <style>
        a {
            color: blue;
            text-decoration: none;
            border: 2px solid black;
            padding: 10px;
            font-weight: bold;
        }
        a:hover {
            color: gold;
        }
    </style>
</head>
<body style="text-align: center; background: #FFFFDE">
    <h1 style="border: 2px solid black; background-color: gold; padding: 10px; font-style: italic; display: inline-block;">抽卡結果 </h1>
    <p></p>
    <?php
    // 隨機抽卡
    $cardFolder = 'cards/';
    $randomCardIndex = rand(1, 10);
    $randomCardImage = $cardFolder . $randomCardIndex . '.png';

    // 顯示隨機抽到的卡片圖片
    echo '<img src="' . $randomCardImage . '" alt="Random Card" width="520" height="650">';
    
    // 根據圖片檔案名稱顯示文字敘述
    $cardName = basename($randomCardImage);
    if ($cardName === '1.png') {
        echo '<p style="color: orange; font-size: 24px; font-weight: bold;">今天運氣真好，得到了大吉</p>'; //大吉
    }
    if ($cardName === '2.png') {
        echo '<p style="color: sandybrown; font-size: 24px; font-weight: bold;">遇到瓜哥，今天是個不錯的日子</p>'; //上吉
    }
    if ($cardName === '3.png') {
        echo '<p style="color: orange; font-size: 24px; font-weight: bold;">😁👍</p>'; //中吉
    }
    if ($cardName === '4.png') {
        echo '<p style="color: orange; font-size: 24px; font-weight: bold;">小吉祝福你今天一切順心</p>'; //小吉
    }
    if ($cardName === '5.png') {
        echo '<p style="color: red; font-size: 24px; font-weight: bold;">雖然是末吉 但小吉會陪你一起努力</p>'; //末吉
    }
    if ($cardName === '6.png') {
        echo '<p style="color: olivedrab; font-size: 24px; font-weight: bold;">中平籤 不好也不壞</p>'; //中平
    }
    if ($cardName === '7.png') {
        echo '<p style="color: maroon; font-size: 24px; font-weight: bold;">中下籤 THIS IS FINE</p>'; //中下
    }
    if ($cardName === '8.png') {
        echo '<p style="color: brown; font-size: 24px; font-weight: bold;">下下籤 sad violin🎻🎻</p>'; //下下
    }
    if ($cardName === '9.png') {
        echo '<p style="color: saddlebrown; font-size: 24px; font-weight: bold;">看起來今天有點不適合抽卡哦 :(</p>'; //非洲
    }
    if ($cardName === '10.png') {
        echo '<p style="color: gold; font-size: 24px; font-weight: bold;">看起來今天是好運滿滿的一天喔</p>'; //歐皇
    }
    
    ?>

    <!-- 回到抽卡介面的按鈕 -->
    <a href="main.php">回到抽卡介面</a>
    <a href="guestbook.php">分享心情/意見</a>
</body>
</html>
