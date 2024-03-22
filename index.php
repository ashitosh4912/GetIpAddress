

<?php

include('UserInformation.php');

echo "My Ip address:". UserInfo::get_ip();

echo "<br>";

echo "My OS :".UserInfo::get_os();

echo "<br>";

echo "My browser : ".UserInfo::get_browser();

echo "<br>";

echo "My Device:". UserInfo::get_device();

?>


