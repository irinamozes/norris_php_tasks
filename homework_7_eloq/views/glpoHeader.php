<?php
//Шаблон для показа формы письма. Вставляется в generalHeader.php

?>
<h3>Отправить письмо:</h3>
<form action="vrpostobrabotka" method="post">
    <table>
        <tr>
            <td>Введите адрес получателя:</td>
            <td>
                <label>
                    <input type="email" name="address" autofocus/>
                </label>
            </td>
        </tr>
        <tr>
            <td>Тема письма:</td>
            <td>
                <label>
                    <input type="text" name="title"/>
                </label>
            </td>
        </tr>

        <tr>
            <td>Текст письма:</td>
            <td>
                <label>
                    <textarea name="email" cols="40" rows="10"></textarea>
                </label>
            </td>
        </tr>
    </table>
