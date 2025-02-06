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
        <meta charset = "utf-8" />
        <title>顯示留言</title>
    </head>
    <body style = "background: linear-gradient(to right, #f7f7f7, #d5dbd8);">

        <?php
            $file = "guestbook.txt";
            if ( !file_exists($file) or filesize($file) == 0)
                echo "<h2>快來留言吧！！</h2><hr/>";
            else
                readfile($file);
        ?>

        <br/>
        <a href="guestbook.php">返回</a>
    </body>
</html>