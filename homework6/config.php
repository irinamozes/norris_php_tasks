<?php
//$posBegin = 3;
//$siteKey = '';
//$secret = '';

//Ключи, которые давал Илья
$siteKey = '6LcRmRgUAAAAACUsa5CmoGkL1ilhdR98on6Mmo11';
$secret  = '6LcRmRgUAAAAAJc3a_Lw_lCFcsW3QxyJyBce_KkB';

//Ключи, которые давал Игорь
//$siteKey = "6LcMqhoTAAAAANkoVYs2ovAOissaMYGr4a3PjzQj"
//$secret  = "6LcMqhoTAAAAAJ9nssS4b2Rh-0ggo3cYyJjCXSbZ"

$lang    = 'ru';
?>

<?php if ($siteKey === '' || $secret === ''): ?>
    <h2>Add your keys</h2>
    <p>If you do not have keys already then visit <kbd>
    <a href = "https://www.google.com/recaptcha/admin">
      https://www.google.com/recaptcha/admin</a></kbd> to generate them.
    Edit this file and set the respective keys in <kbd>$siteKey</kbd> and
    <kbd>$secret</kbd>. Reload the page after this.</p>
<?php
echo "<br>"."<a href='glavnaya'><strong>На главную</strong></a>"."<br>";
exit();
?>
<?php endif ?>
