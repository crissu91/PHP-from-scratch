<?php

session_start();

$_SESSION['name'] = 'John';


if (isset($_SESSION['name'])) {
    echo 'NAMe: ' . $_SESSION['name'];
} else {
    echo 'Name is not set. <-- index.php';
}
