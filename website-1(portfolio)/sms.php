<?php
$URL = 'http:'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
if (strpos($URL,'submit=successful') == true) {
echo '<p>submit successful</p><br>';
}
echo '<p>submit successful</p><br>';    
?>