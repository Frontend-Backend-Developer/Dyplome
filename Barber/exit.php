<?php
     setcookie('user', $Usr['name'], time() - 3600, "/");
     header('Location: index.php');

?>