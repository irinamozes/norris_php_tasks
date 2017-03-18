<?php
//Шаблон для показа фрмы входа. Вставляется в generalHeader.php
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
                    <input type="text" name="password" required>
                </label>
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="action" value="Войти"/>
            </td>
        </tr>
    </table>
</form>
<?php
echo "<a href='index.php'><strong>На главную</strong></a>";
?>
