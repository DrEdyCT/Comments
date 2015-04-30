<?php
mysql_connect('localhost', 'root', '') or die(mysql_error());
mysql_select_db("comments_db") or die(mysql_error());

if (isset ($_POST['comment_button1'])) {
    $text = $_POST['comment_text'];
    if (trim($text) != "") {
        $strSQL = "INSERT INTO comments (text) VALUES ('$text')";
        mysql_query($strSQL) or die(mysql_error());
        header ('location: http://localhost:800/');
    }
    else {
        header ('location: http://localhost:800/');
    }
}

$res = select("");
while ($row = mysql_fetch_array($res)) {
    if (isset ($_POST["b_delete$row[id]"])) {
        mysql_query("DELETE FROM comments WHERE id = $row[id]");
        del_comments($row['id']);
        header ('location: http://localhost:800/');
    }

    if (isset ($_POST["b_answer$row[id]"])) {
        $text = $_POST["comment_text$row[id]"];
        if (trim($text) != "") {
            $strSQL = "INSERT INTO comments (text, parent_id, level) VALUES ('$text', $row[id], $row[level] + 1)";
            mysql_query($strSQL) or die(mysql_error());
            header ('location: http://localhost:800/');
        }
        else {
            header ('location: http://localhost:800/');
        }
    }
}

function del_comments($id) {
    while ($row = mysql_fetch_array(select("WHERE parent_id = $id"))) {
        mysql_query("DELETE FROM comments WHERE parent_id = $id");
        del_comments($row['id']);
    }
}

function select($where) {
    $strSQL = "SELECT * FROM comments $where";
    $res = mysql_query($strSQL) or die(mysql_error());
    return $res;
}

?>