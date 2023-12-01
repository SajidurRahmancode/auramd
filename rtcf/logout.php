<?php

session_start();
session_destroy();

header('location: ./login-light-login.php');
exit;
