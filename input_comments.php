<?php
mysql_connect('localhost', 'root', '') or die(mysql_error());
mysql_query("CREATE DATABASE IF NOT EXISTS comments_db") or die(mysql_error());
mysql_select_db("comments_db") or dey(mysql_error());
mysql_query("CREATE TABLE IF NOT EXISTS comments (id INTEGER AUTO_INCREMENT PRIMARY KEY,
    text LONGTEXT, parent_id INTEGER, level INTEGER)") or die(mysql_error());

add("WHERE parent_id is NULL");

function add($where) {
    $strSQL = "SELECT * FROM comments $where";
    $res = mysql_query($strSQL) or die(mysql_error());
    while ($row = mysql_fetch_array($res)) {

        $func_area = "<textarea class='text_area2' name='comment_text$row[id]' placeholder='Введите текст сообщения...'></textarea><br>";
        $button1 = "<button class='b_comment' name='b_answer$row[id]'>ответить</button>";
        $button2 = "<button class='b_comment' name='b_delete$row[id]'>удалить</button>";

        if ($row['level'] == 5) {
            echo "<div class='comment'>", "<p>", $row['text'], "</p>",
            $button2,
            add("WHERE parent_id = $row[id]"), "</div>";
        }
        else {
            echo "<div class='comment'>", "<p>", $row['text'], "</p>",
            $func_area, $button1, $button2, "<br>",
            add("WHERE parent_id = $row[id]"), "</div>";
        }
    }
}

?>