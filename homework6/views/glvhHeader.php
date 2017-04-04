<?php
//Шаблон для показа формы входа. Вставляется в generalHeader.php

?>

<form method="post" action="vrvhodobrabotka">
    <table>
        <tr>
            <td>Логин:</td>
            <td>
                <label>
                    <input type="text" name="login" required>
                </label>
            </td>
        </tr>
        <tr>
            <td>Пароль:</td>
            <td>
                <label>
                    <input type="password" name="password" required>
                </label>
            </td>
        </tr>
    </table>
