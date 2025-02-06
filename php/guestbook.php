<!DOCTYPE html>
<html>
<head>
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
<body style="text-align: center; background: linear-gradient(to right, #f7f7f7, #d5dbd8);">
<meta charset="utf-8"  />
<title>留言板</title>
<?php

$msg = ""; //用來儲存資訊

if (isset($_POST["Name"])) //確認是否有提交Name
{
    $file = "guestbook.txt"; //我們使用記事本來存檔

    $name = $_POST["Name"]; //收集姓名

    $messages = nl2br($_POST["Message"]);

    $fp = fopen($file,"a"); //開啟檔案 模式為a 意思是如果檔案不在 會創建一的新的

    date_default_timezone_set('Asia/Taipei'); //定義時區為台北
    $today = date ("Y年m月d日 h:i:s");

    //建立留言訊息
    $msg  = "<b> 發布時間：</b>".$today."<br/>";
    $msg .= "<b>姓名：</b>".$name."<br/>";
    $msg .= "<b>我的想法：</b>".$messages."<br/><hr>";

    fputs($fp, $msg); //寫入檔案
    fclose($fp);  //關閉檔案

    $msg = "<h3>新增留言成功！</h3>";
}
?>
</head>
<body>
    <h1 style="border: 2px solid black; background-color: white; font-style: italic;">留下你的留言吧！</h1>
    <br><br>
    <center>
<form action = "guestbook.php" method="post">
    <table border = "1" >
        <tr>
            <td><font size ="2">姓名</font></td>
            <td><input type="text" size="30" name="Name"/></td>
        </tr>

        <tr>
            <td><font size ="2">內容</font></td>
            <td>
                <textarea name="Message" rows="4" cols="30"></textarea></td>
        </tr>

        <tr>
            <td colspan="2" align="center">
            <input type="submit" name="Send" value="送出"/>
            <input type="reset" name="Reset" value="清除"/></td>
        </tr>

    </table>
    </form><?php echo $msg ?><br/>
    </center>
    <a href="main.php">回到抽卡介面</a>
    <a href="showmessage.php">看看其他人的想法！</a>