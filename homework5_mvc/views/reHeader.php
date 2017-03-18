<?php
//Шаблон для показа форм регистрации и редактирования. Вставляется в generalHeader.php
error_reporting (E_ALL);

?>

<img src= "<?php echo $dataAr[7] ?>" height = "<?php echo $dataAr[8] ?>" >


<form enctype="multipart/form-data" action="vreobrabotka" method="post">
    <table>
        <tr>
            <td> <?php echo  $dataAr[0] ?></td>
            <td>
                <label>
                    <input type="<?php echo $dataAr[1] ?>" name="login" value="<?php echo $dataAr[2] ?>"  required autofocus/>
                </label>
            </td>
        </tr>
        <tr>
            <td>Введите пароль:</td>
            <td>
                <label >
                    <input type="password" name="pass" value="<?php echo $dataAr[3] ?>" required autofocus/>
                </label>
            </td>
        </tr>
        <tr>
            <td>Введите имя:</td>
            <td>
                <label>
                    <input type="text" name="name" value="<?php echo $dataAr[4] ?>"/>
                </label>
            </td>
        </tr>
        <tr>
            <td>Введите возраст:</td>
            <td>
                <label>
                    <input type="number" name="age" size="10" name="age" pattern="\[0-9]{2}\" min="10" max="99" value="<?php echo $dataAr[5] ?>"/>
                </label>
            </td>
        </tr>
        <tr>
            <td>Добавьте фотографию:</td>
            <td>
                <input type="hidden" name="MAX_FILE_SIZE" value="3145728" />
                <input type="file" name="picture"/>
            </td>
        </tr>

        <tr>
            <td>Расскажите о себе:</td>
            <td>
                <label>
                    <textarea name="info" cols="40" rows="5" ><?php echo $dataAr[6] ?></textarea>
                </label>
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="action" value="Сохранить данные"/>
            </td>
        </tr>
    </table>
</form>
<a href="index.php">Вернуться на главную</a>
