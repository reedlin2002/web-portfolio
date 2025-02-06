<!DOCTYPE html>
<html>
<head>
    <title>Menu</title>
    <style>
        a {
            color: blue; /* 綠色 */
            text-decoration: none; /* 移除底線 */
        }
        a:hover {
            color: gold; /* 黃金色 */
            font-weight: bold; /* 加粗字體 */
        }
    </style>
</head>
<body style="text-align: center; background: linear-gradient(to right, #f7f7f7, #d5dbd8);">
    <h1 style="color: #000080;">卡 片 目 錄</h1>
    <h2>以下是可能會抽出的卡片類型</h2>
    <p><h3>點擊卡片可觀看介紹</h3></p>

    <p></p>

    <?php
    $cardCount = 10; // 卡片數量
    $cardFolder = 'cards/'; // 放卡片的資料夾
    $imageWidth = '150px'; // 圖片寬度
    $imageHeight = '200px'; // 圖片高度

    // 迴圈生成卡片
    for ($i = 1; $i <= $cardCount; $i++) {
        $cardImage = $cardFolder . $i . '.png';
        $phpFile = 'desc/' . $i . '.php';;

        echo '<a href="' . $phpFile . '">
                <img src="' . $cardImage . '" alt="Card ' . $i . '" width="' . $imageWidth . '" height="' . $imageHeight . '">
            </a>';

        // 在每個圖片後面插入空白
        echo ' ';

        // 每行顯示5張圖片後換行
        if ($i % 5 === 0) {
            echo '<br>';
        }
    }
    ?>

    <p></p>
    <!-- 返回抽卡介面的按鈕 -->
    <a href="main.php" style="border: 2px solid black; padding: 10px; font-weight: bold;">返回抽卡介面</a>
</body>
</html>
