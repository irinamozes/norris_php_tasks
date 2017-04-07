<?php
require_once   'vendor/autoload.php';
include "config.php";
?>

<script type="text/javascript"
  src="https://www.google.com/recaptcha/api.js?hl=<?php echo $lang; ?>">
</script>

<div class="g-recaptcha" data-sitekey="<?php echo $siteKey; ?>"></div>
