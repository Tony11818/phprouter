<?php
declare(strict_types=1);
if (basename($_SERVER['SCRIPT_NAME']) == basename(__FILE__))
{
    header('Location: /anthony1/phprouter');
}

if(!$_SESSION['loggedIn']){
    header('Location: /anthony1/phprouter/login');
} else if($_SESSION['level'] !== 'admin'){
    echo 'You are not an admin';
}
?>
