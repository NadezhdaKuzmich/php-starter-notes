<?php

/*
- mail() - вбудована функція надсилання повідомлень.
- action=mailto: - відкриє програму надсилання повідомлень.
*/

if (mail("test.email.php.od@gmail.com", "My Subject", "Example message")) {
    echo "messege acepted for delivery";
} else {
    echo "some error happen";
}

echo '<hr>';

?>

<form action="mailto:test.email.php.od@gmail.com" enctype="text/plain">
    <input type="submit" value="Написати листа">
</form>