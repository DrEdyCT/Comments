<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css" type="text/css">
        <title>Страница с комментариями</title>
    </head>
    <body>
        <table id="main_table">
        <form method="post" action = 'database.php'>
            <tr valign="top">
                <td width="20%" style="border-right: 2px solid limegreen"; bgcolor="gainsboro"></td>
                <td>
                <div id="header">
                    <a id="main_link" href="http://localhost:800/">Заголовок страницы</a>
                 </div>
                <div>
                    <table id="post_table">
                        <tr>
                            <td width="20%"></td>
                            <td><img id="image" src="http://www.albert-einstein.ru/photo/VQe7que7qu.jpg"></td>
                            <td id="post_text">
                                <p>
                                    <br>Альберт Эйнштейн<br><br>
                                    Дата рождения: 14 марта 1879г.<br>
                                    Место рождения: Ульм, Королество Вюртемберг, германская империя.<br><br>
                                    Дата смерти: 18 апреля 1955г.<br>
                                    Место смерти: Принстон, Нью-Джерси, США.<br><br>
                                    Физик-теоретик, один из основателей современной теоретической физики, лауреат
                                    Нобелевской премии по физике 1921 года, общественный деятель-гуманист.
                                    Почётный доктор около 20 ведущих университетов мира, член многих Академий наук,
                                    в том числе иностранный почётный член АН СССР.
                                    Эйнштейн — автор более 300 научных работ по физике, а также около 150 книг и
                                    статей в области истории и философии науки, публицистики и др.
                                </p>
                            </td>
                            <td width="20%"></td>
                        </tr>
                    </table>
                </div>
                <div id="comments">
                    <?php include "input_comments.php"; ?>
                </div>
                <div id="input">
                    <div><textarea class="text_area1" name="comment_text" placeholder="Введите текст сообщения..."></textarea></div><br>
                    <input type="submit" name="comment_button1" value="Отправить">
                </div>
                </td>
                <td width="20%" style="border-left: 2px solid limegreen"; bgcolor="gainsboro"></td>
            </tr>
        </form>
        </table>
    </body>
</html>