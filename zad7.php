<?php
echo $_SERVER ['HTTP_USER_AGENT'] . "\n\n";
echo "<br>";
print_r ( get_browser ( null, true ) );

echo "<br>";
echo $_SERVER ['SERVER_PROTOCOL'];
echo "<br>";
echo $_SERVER ['HTTP_HOST'];


?>